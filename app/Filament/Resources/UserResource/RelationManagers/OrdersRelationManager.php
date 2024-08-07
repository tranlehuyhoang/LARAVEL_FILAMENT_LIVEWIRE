<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrdersRelationManager extends RelationManager
{
    protected static string $relationship = 'orders';

    public function form(Form $form): Form
    {
        return $form
            ->schema([]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('Mã đơn hàng') // Order ID
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Trạng thái') // Status
                    ->badge(),
                Tables\Columns\TextColumn::make('payment_method')
                    ->label('Phương thức thanh toán') // Payment Method
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('payment_status')
                    ->label('Trạng thái thanh toán') // Payment Status
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('shipping_method')
                    ->label('Phương thức giao hàng') // Shipping Method
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo') // Created At
                    ->dateTime()
                    ->sortable()
            ])
            ->filters([
                // Add filters if needed
            ])
            ->headerActions([])
            ->actions([
                Tables\Actions\Action::make('Xem đơn hàng') // View Order
                    ->url(fn (Order $record): string => OrderResource::getUrl('view', ['record' => $record]))
                    ->color('info')
                    ->icon('heroicon-o-eye'),
                Tables\Actions\DeleteAction::make()
                    ->label('Xóa') // Delete
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Xóa') // Delete
                ]),
            ]);
    }
}