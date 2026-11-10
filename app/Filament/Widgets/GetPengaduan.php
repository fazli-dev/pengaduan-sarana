<?php

namespace App\Filament\Widgets;

use App\Models\Pengaduan;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GetPengaduan extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Pengaduan', Pengaduan::count())
                ->description('Semua pengaduan dari seluruh siswa'),
        ];
    }
}
