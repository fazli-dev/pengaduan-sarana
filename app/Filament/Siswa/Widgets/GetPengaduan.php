<?php

namespace App\Filament\Siswa\Widgets;

use App\Models\Pengaduan;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class GetPengaduan extends StatsOverviewWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {
        $siswaId = $this->pageFilters['siswa_id'] ?? null;

        return [
            Stat::make(
                'Pengaduan Siswa',
                $siswaId ? Pengaduan::where('siswa_id', $siswaId)->count() : 0
            )->description($siswaId ? 'Total pengaduan siswa terpilih' : 'Pilih siswa terlebih dahulu'),
        ];
    }
}
