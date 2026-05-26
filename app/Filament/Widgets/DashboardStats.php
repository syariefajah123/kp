<?php

namespace App\Filament\Widgets;

use App\Models\Inquiry;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class DashboardStats extends BaseWidget
{
    protected function getCards(): array
    {
        return [

            Card::make(
                'Total Pesanan',
                Inquiry::count()
            )
            ->description('Semua pesanan')
            ->color('primary'),

            Card::make(
                'Pesanan Baru',
                Inquiry::where('status', 'baru')->count()
            )
            ->description('Belum dibaca')
            ->color('danger'),

            Card::make(
                'Diproses',
                Inquiry::where('status', 'diproses')->count()
            )
            ->description('Sedang diproses')
            ->color('warning'),

            Card::make(
                'Selesai',
                Inquiry::where('status', 'selesai')->count()
            )
            ->description('Pesanan selesai')
            ->color('success'),

        ];
    }
}