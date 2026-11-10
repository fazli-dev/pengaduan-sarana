<?php

namespace App\Filament\Siswa\Resources\Pengaduans\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PengaduanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('ruangan')
                    ->required(),
                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
                Select::make('siswa_id')
                    ->relationship('siswa', 'name')
                    ->required(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
                Select::make('status')
                    ->options(['proses' => 'Proses', 'menunggu' => 'Menunggu', 'selesai' => 'Selesai'])
                    ->default('menunggu')
                    ->required(),
            ]);
    }
}
