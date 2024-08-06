<?php

namespace App\Filament\Resources;

use Illuminate\Database\Eloquent\Collection;
use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Filament\Resources\OrderResource\RelationManagers\AddressRelationManager;
use App\Models\Order;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Number;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
    public static function getPluralModelLabel(): string
    {
        return 'Đơn hàng';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make("Thông tin đơn hàng")->schema([
                        Select::make('user_id')
                            ->label("Khách hàng")
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('payment_method')
                            ->label("Phương thức thanh toán")
                            ->options([
                                'stripe' => "Stripe",
                                'cod' => "Thanh toán khi nhận hàng",
                            ])
                            ->required()
                            ->preload()
                            ->searchable(),

                        Select::make('payment_status')
                            ->label("Trạng thái thanh toán")
                            ->options([
                                'pending' => "Đang chờ",
                                'paid' => "Đã thanh toán",
                                'failed' => "Thất bại",
                            ])
                            ->default('pending')
                            ->required(),

                        ToggleButtons::make('status')
                            ->label('Trạng thái đơn hàng')
                            ->inline()
                            ->default('new')
                            ->required()
                            ->options([
                                'new' => "Mới",
                                'processing' => "Đang xử lý",
                                'shipped' => "Đã giao",
                                'delivered' => "Đã nhận",
                                'cancelled' => "Đã hủy",
                            ])
                            ->colors([
                                'new' => "info",
                                'processing' => "warning",
                                'shipped' => "success",
                                'delivered' => "success",
                                'cancelled' => "danger",
                            ])
                            ->icons([
                                'new' => "heroicon-o-rectangle-stack",
                                'processing' => "heroicon-o-rectangle-stack",
                                'shipped' => "heroicon-o-rectangle-stack",
                                'delivered' => "heroicon-o-rectangle-stack",
                                'cancelled' => "heroicon-o-rectangle-stack",
                            ]),

                        Select::make('currency')
                            ->label("Tiền tệ")
                            ->options([
                                'vnd' => "VND",
                                'usd' => "USD",
                            ])
                            ->default('vnd')
                            ->required(),

                        Select::make('shipping_method')
                            ->label("Phương thức vận chuyển")
                            ->options([
                                'ghn' => "Giao Hàng Nhanh",
                                "express" => "Chuyển phát nhanh"
                            ])
                            ->default('ghn')
                            ->required(),

                        MarkdownEditor::make('notes')
                            ->label("Ghi chú")
                            ->fileAttachmentsDirectory('notes')
                    ])->columns(2),

                    Section::make("Sản phẩm trong đơn hàng")->schema([
                        Repeater::make('orderItems') // tên trường cho repeater + relationship
                            ->relationship() //relationship() giúp Filament hiểu rằng các mục trong Repeater là các bản ghi con của mô hình chính và cần được xử lý theo cách đó.
                            ->schema([
                                Select::make('product_id')
                                    ->label('Sản phẩm')
                                    ->relationship('product', 'name')
                                    ->searchable()
                                    ->required()
                                    ->preload()
                                    ->distinct()
                                    ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                    ->afterStateUpdated(fn ($state, Set $set) => $set('unit_amount', Product::find($state)?->price ?? 0))
                                    ->afterStateUpdated(fn ($state, Set $set, Get $get) => $set('total_amount', Product::find($state)?->price * $get('quantity') ?? 0))
                                    ->columnSpan(4),

                                TextInput::make('quantity')
                                    ->label('Số lượng')
                                    ->numeric()
                                    ->required()
                                    ->default(1)
                                    ->minValue(1)
                                    ->reactive()
                                    ->afterStateUpdated(fn ($state, Set $set, Get $get) => $set('total_amount', $state * $get('unit_amount')))
                                    ->columnSpan(2),

                                TextInput::make('unit_amount')
                                    ->label('Đơn giá')
                                    ->numeric()
                                    ->required()
                                    ->disabled()
                                    ->dehydrated()
                                    ->columnSpan(3),

                                TextInput::make('total_amount')
                                    ->label('Tổng giá')
                                    ->numeric()
                                    ->required()
                                    ->columnSpan(3),
                            ])->columns(12),

                        Placeholder::make('grand_total_placecholder')
                            ->label('Tổng cộng')
                            ->content(function (Get $get, Set $set) {
                                $total = 0;
                                if ($repeaters = $get('orderItems')) {
                                    foreach ($repeaters as $key => $repeater) {
                                        $total += $get("orderItems.{$key}.total_amount");
                                    }
                                }
                                $set('grand_total', $total);
                                return Number::currency($total, 'VND');
                            }),

                        Hidden::make('grand_total')
                            ->default(0),
                    ]),
                ])->columnSpanFull()
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name') //user relationship
                    ->label('Khách hàng')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('grand_total')
                    ->numeric()
                    ->sortable()
                    ->money('VND')
                    ->label('Tổng cộng'),
                TextColumn::make('payment_method')
                    ->sortable()
                    ->searchable()
                    ->label('Phương thức thanh toán'),
                TextColumn::make('payment_status')
                    ->sortable()
                    ->searchable()
                    ->label('Trạng thái thanh toán'),
                TextColumn::make('currency')
                    ->searchable()
                    ->sortable()
                    ->label('Tiền tệ'),
                TextColumn::make('shipping_method')
                    ->searchable()
                    ->sortable()
                    ->label('Phương thức vận chuyển'),
                SelectColumn::make('status')
                    ->label('Trạng thái')
                    ->options([
                        'new' => "Mới",
                        'processing' => "Đang xử lý",
                        'shipped' => "Đã giao",
                        'delivered' => "Đã nhận",
                        'canceled' => "Đã hủy",
                    ]),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Ngày tạo'),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Ngày cập nhật'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()->label('Xem'),
                    Tables\Actions\EditAction::make()->label('Sửa'),
                    Tables\Actions\DeleteAction::make()->label('Xóa'),
                ])
            ])
            ->groupedBulkActions([
                BulkAction::make('delete')
                    ->label('Xóa')
                    ->action(fn (Collection $records) => $records->each->delete())
                    ->deselectRecordsAfterCompletion()
            ]);
    }


    public static function getRelations(): array
    {
        return [
            AddressRelationManager::class,
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return  static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): string|array|null
    {
        return  static::getModel()::count() > 10 ? 'danger' : 'success';
    }
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
