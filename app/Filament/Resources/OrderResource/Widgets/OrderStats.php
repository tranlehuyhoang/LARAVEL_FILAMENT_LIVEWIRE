<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        // Count orders with specific statuses
        $newOrdersCount = Order::where('status', 'new')->count();
        $processingOrdersCount = Order::where('status', 'processing')->count();
        $shippedOrdersCount = Order::where('status', 'shipped')->count();

        // Calculate total amount
        $totalAmount = Order::sum('grand_total'); // Assuming the column name is 'total_amount'

        return [
            Stat::make('Đơn hàng mới', $newOrdersCount)
                ->icon('heroicon-o-truck')
                ->color('success'),

            Stat::make('Đơn hàng đang xử lý', $processingOrdersCount)
                ->icon('heroicon-o-cog') // Choose an appropriate icon
                ->color('warning'),

            Stat::make('Đơn hàng đã vận chuyển', $shippedOrdersCount)
                ->icon('heroicon-o-check-circle') // Choose an appropriate icon
                ->color('primary'),

            Stat::make('Tổng tiền', 'đ' . number_format($totalAmount, 2)) // Format amount as currency
                ->icon('heroicon-o-credit-card') // Choose an appropriate icon
                ->color('info'),
        ];
    }
}
