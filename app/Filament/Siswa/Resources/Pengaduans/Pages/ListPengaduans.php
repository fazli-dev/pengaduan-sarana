<?php

namespace App\Filament\Siswa\Resources\Pengaduans\Pages;

use App\Filament\Siswa\Resources\Pengaduans\PengaduanResource;
use Filament\Resources\Pages\ListRecords;

class ListPengaduans extends ListRecords
{
    protected static string $resource = PengaduanResource::class;

    public function mount(): void
    {
        $this->redirect(PengaduanResource::getUrl('create'));
    }
}
