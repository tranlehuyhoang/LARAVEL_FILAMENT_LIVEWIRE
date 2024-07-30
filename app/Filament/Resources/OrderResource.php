<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make("Order Infomation")->schema([
                        Select::make('user_id')
                            ->label("Customer")
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('payment_method')
                            ->options([
                                'stripe' => "Strip",
                                'cod' => "Cash on Delivery",
                            ])->required()
                            ->preload()
                            ->searchable(),

                        Select::make('payment_status')
                            ->options([
                                'pending' => "Pending",
                                'paid' => "Paid",
                                'failed' => "Failed",
                            ])
                            ->default('pending')
                            ->required(),
                        ToggleButtons::make('status')
                            ->inline()
                            ->default('new')
                            ->required()
                            ->options([
                                'new' => "New",
                                'processing' => "Processing",
                                'shipped' => "Shipped",
                                'delivered' => "Delivered",
                                'cancelled' => "Cancelled",
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
                            ->options([
                                'vnd' => "VND",
                                'usd' => "USD",
                            ])
                            ->default('vnd')
                            ->required(),

                        Select::make('shipping_method')
                            ->options([
                                'ghn' => "Giao Hang Nhanh",
                                "express" => "Express"
                            ])
                            ->default('ghn')
                            ->required(),
                        MarkdownEditor::make('notes')
                            ->fileAttachmentsDirectory('notes')
                    ])->columns(2),

                    Section::make("Order Items")->schema([
                        Repeater::make('orderItems') // tên trường cho repeater + relationship
                            ->relationship() //relationship() giúp Filament hiểu rằng các mục trong Repeater là các bản ghi con của mô hình chính và cần được xử lý theo cách đó.
                            ->schema([
                                Select::make('product_id')
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
                                    ->numeric()
                                    ->required()
                                    ->default(1)
                                    ->minValue(1)
                                    ->reactive()
                                    ->afterStateUpdated(fn ($state, Set $set, Get $get) => $set('total_amount', $state * $get('unit_amount')))
                                    ->columnSpan(2),
                                TextInput::make('unit_amount')
                                    ->numeric()
                                    ->required()
                                    ->disabled()
                                    ->dehydrated()
                                    ->columnSpan(3),
                                TextInput::make('total_amount')
                                    ->numeric()
                                    ->required()
                                    ->columnSpan(3),
                            ])->columns(12),
                        Placeholder::make('grand_total_placecholder')
                            ->label('Grand Total')
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
                    ->label('Customer')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('grand_total')
                    ->numeric()
                    ->sortable()
                    ->money('VND'),
                TextColumn::make('payment_method')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('payment_status')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('currency')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('shipping_method')
                    ->searchable()
                    ->sortable(),
                SelectColumn::make('status')
                    ->options([
                        'new' => "New",
                        'processing' => "Processing",
                        'shipped' => "Shipped",
                        'delivered' => "Delivered",
                        'cancelled' => "Cancelled",
                    ]),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated-at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),


            ])
            ->filters([])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
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
