<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Tables\Actions\Action;
use Filament\Tables;
use Filament\Tables\Columns\SelectColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestOrders extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 2;
    public function table(Table $table): Table
    {
        return $table
            ->query(OrderResource::getEloquentQuery())
            ->defaultPaginationPageOption(5)
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('id') // user relationship
                    ->label('Mã đơn hàng')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('user.name') // user relationship
                    ->label('Khách hàng')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('grand_total')
                    ->label('Tổng cộng')
                    ->numeric()
                    ->sortable()
                    ->money('VND'),
                TextColumn::make('payment_method')
                    ->label('Phương thức thanh toán')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('payment_status')
                    ->label('Trạng thái thanh toán')
                    ->badge()
                    ->sortable()
                    ->searchable(),
                SelectColumn::make('status')
                    ->label('Trạng thái đơn hàng')
                    ->options([
                        'new' => "Mới",
                        'processing' => "Đang xử lý",
                        'shipped' => "Đã giao",
                        'delivered' => "Đã nhận",
                        'cancelled' => "Đã hủy",
                    ]),
                TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime()
                    ->sortable(),
            ])

            ->actions([
                Tables\Actions\ActionGroup::make([
                    Action::make('View Order')
                        ->label('Xem đơn hàng')
                        ->url(fn (Order $record): string => OrderResource::getUrl('view', ['record' => $record]))
                        ->color('info')
                        ->icon('heroicon-o-eye'),
                ])
            ]);
    }
}
