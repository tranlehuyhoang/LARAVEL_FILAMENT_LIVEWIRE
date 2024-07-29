<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use App\Models\Product;
use Faker\Core\Number;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Hidden;
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
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Number as SupportNumber;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Order Information')->schema([
                        Select::make('user_id')
                            ->label('Customer')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('payment_method')
                            ->options([
                                'stripe' => 'Stripe',
                                'cod' => 'Cash on Delivery',
                            ])
                            ->required(),

                        Select::make('payment_status')
                            ->options([
                                'pending' => 'Pending',
                                'paid' => 'Paid',
                                'failed' => 'Failed',
                            ])
                            ->default('pending')
                            ->required(),

                        ToggleButtons::make('status')
                            ->inline()
                            ->options([
                                'new' => 'New',
                                'processing' => 'Processing',
                                'shipped' => 'Shipped',
                                'delivered' => 'Delivered',
                                'canceled' => 'Canceled',
                            ])
                            ->icons([
                                'new' => 'heroicon-s-plus-circle',
                                'processing' => 'heroicon-s-plus-circle',
                                'shipped' => 'heroicon-s-truck',
                                'delivered' => 'heroicon-s-check-circle',
                                'canceled' => 'heroicon-s-x-circle',
                            ])
                            ->colors([
                                'new' => 'primary',
                                'processing' => 'warning',
                                'shipped' => 'info',
                                'delivered' => 'success',
                                'canceled' => 'danger',
                            ])
                            ->default('new')
                            ->required(),

                        // Currency Selection
                        Select::make('currency')
                            ->options([
                                'usd' => 'USD - US Dollar',
                                'eur' => 'EUR - Euro',
                                'gbp' => 'GBP - British Pound',
                                'jpy' => 'JPY - Japanese Yen',
                                'aud' => 'AUD - Australian Dollar',
                            ])
                            ->required(),

                        // Shipping Method Selection
                        Select::make('shipping_method')
                            ->options([
                                'standard' => 'Standard Shipping',
                                'express' => 'Express Shipping',
                                'overnight' => 'Overnight Shipping',
                            ])
                            ->required(),

                        // Notes Textarea
                        Textarea::make('notes')
                            ->placeholder('Enter any additional notes here...')
                            ->rows(5),


                    ])->columns(2),

                    Section::make('Order Items')->schema([
                        Repeater::make('items')
                            ->relationship()
                            ->schema([
                                Select::make('product_id')
                                    ->relationship('product', 'name')
                                    ->searchable()
                                    ->preload()
                                    ->required()
                                    ->distinct()
                                    ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                                    ->columnSpan(4)
                                    ->reactive()
                                    ->afterStateUpdated(function ($state, $get, $set) {
                                        // Update `unit_amount` and `total_amount` when `product_id` changes
                                        $product = Product::find($state);
                                        if ($product) {
                                            $set('unit_amount', $product->price); // Assuming `price` is the column name for product price
                                            $quantity = $get('quantity');
                                            $set('total_amount', $product->price * $quantity);
                                        }
                                    }),

                                TextInput::make('quantity')
                                    ->numeric()
                                    ->required()
                                    ->default(1)
                                    ->minValue(1)
                                    ->reactive()
                                    ->columnSpan(2)
                                    ->afterStateUpdated(function ($state, $get, $set) {
                                        $unitAmount = $get('unit_amount');
                                        $set('total_amount', $unitAmount * $state);
                                    }),

                                TextInput::make('unit_amount')
                                    ->numeric()
                                    ->required()
                                    ->disabled()
                                    ->columnSpan(3),
                                TextInput::make('total_amount')
                                    ->numeric()
                                    ->disabled()
                                    ->required()
                                    ->columnSpan(3)
                            ])->columns(12),
                        Placeholder::make('grand_total_placeholder')
                            ->label('Grand Total')
                            ->content(function (Get $get, Set $set) {
                                $total = 0;

                                // Retrieve the items repeater data
                                $repeaters = $get('items');

                                // Check if there are items
                                if ($repeaters) {
                                    foreach ($repeaters as $key => $repeater) {
                                        // Sum the total_amount of each item
                                        $total += $get("items.{$key}.total_amount");
                                    }
                                }
                                $set('grand_total', $total);
                                // Return the formatted total amount with currency
                                return SupportNumber::currency($total, 'INR');
                            }),
                    ]),
                    Hidden::make('grand_total')->default(0),


                ])->columnSpanFull(),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Customer')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('grand_total')
                    ->numeric()
                    ->sortable()
                    ->money('INR'),
                TextColumn::make('payment_method')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('payment_status')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
