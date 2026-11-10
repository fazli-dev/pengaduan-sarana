<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@sekolah.test'],
            ['name' => 'Admin', 'password' => 'admin123', 'role' => 'admin']
        );

        $userSiswa = User::firstOrCreate(
            ['email' => 'siswa@sekolah.test'],
            ['name' => 'Dimas', 'password' => '123456', 'role' => 'siswa']
        );

        Siswa::firstOrCreate(
            ['user_id' => $userSiswa->id],
            ['name' => 'Dimas', 'kelas' => 'XII RPL 1', 'nis' => '12345']
        );

        foreach (['Ruang Kelas', 'Toilet', 'Laboratorium', 'Lapangan'] as $nama) {
            Category::firstOrCreate(['name' => $nama]);
        }
    }
}