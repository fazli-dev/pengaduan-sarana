<?php

namespace App\Filament\Siswa\Pages;

use App\Models\Siswa;
use Filament\Forms\Components\Select;
use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Pages\Dashboard\Concerns\HasFiltersForm;
use Filament\Schemas\Schema;

class Dashboard extends BaseDashboard
{
    use HasFiltersForm;

    public function filtersForm(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('siswa_id')
                ->label('Pilih Siswa')
                ->options(fn () => Siswa::pluck('name', 'id'))
                ->searchable()
                ->live(),
        ]);
    }
}
