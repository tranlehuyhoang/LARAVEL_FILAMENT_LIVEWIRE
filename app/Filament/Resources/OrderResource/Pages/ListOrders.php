<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Filament\Resources\OrderResource\Widgets\OrderStats;
use App\Models\Order;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Illuminate\Database\Eloquent\Builder;

class ListOrders extends ListRecords
{
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [
            OrderStats::class
        ];
    }
    public function getTabs(): array
    {
        return [
            'all' => Tab::make('Tất cả'),
            'new' => Tab::make('Mới')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'new')),
            'processing' => Tab::make('Đang xử lý')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'processing')),
            'shipped' => Tab::make('Đã giao')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'shipped')),
            'delivered' => Tab::make('Đã nhận')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'delivered')),
            'canceled' => Tab::make('Đã hủy')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', 'canceled')),
        ];
    }
}
