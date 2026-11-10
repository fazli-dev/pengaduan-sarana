# Sistem Pengaduan Sarana Sekolah (UKK Paket 2)

Aplikasi pengaduan sarana sekolah dengan Laravel 12 dan Filament 4.
Ada dua panel: Admin (/admin) dan Siswa (/siswa).

## Akun Uji Coba

| Panel | URL | Email | Password |
|---|---|---|---|
| Admin | /admin | admin@sekolah.test | admin123 |
| Siswa | /siswa | siswa@sekolah.test | 123456 |

Catatan: login admin dan siswa memakai sesi browser yang sama.
Gunakan jendela incognito untuk menguji dua panel sekaligus.

## Fitur

- Admin: kelola Category, Siswa, Pengaduan, ubah status (menunggu, proses, selesai)
- Siswa: hanya membuat Pengaduan dan Siswa, status tidak ditampilkan
- Widget GetPengaduan: admin melihat total semua pengaduan,
  siswa memilih siswa lalu jumlah pengaduannya muncul

## Cara Menjalankan (XAMPP / Laragon)

Syarat: PHP 8.2+, Composer, MySQL.

1. Buat database kosong bernama pengaduan_sarana di phpMyAdmin
2. Jalankan perintah berikut di folder proyek:

        composer install
        cp .env.example .env
        php artisan key:generate
        php artisan migrate --seed
        php artisan serve

3. Buka http://127.0.0.1:8000/admin atau http://127.0.0.1:8000/siswa

Pengaturan database di .env.example sudah MySQL
(host 127.0.0.1, database pengaduan_sarana, user root, tanpa password).
Ubah di file .env jika berbeda.

## Cara Menjalankan (Docker / Sail)

        cp .env.example .env
        docker run --rm -v "$(pwd)":/opt -w /opt laravelsail/php83-composer:latest composer install
        ./vendor/bin/sail up -d
        ./vendor/bin/sail artisan key:generate
        ./vendor/bin/sail artisan migrate --seed

Sebelum menjalankan sail, ubah di .env: DB_HOST=mysql, DB_USERNAME=sail, DB_PASSWORD=password.
Buka http://localhost/admin atau http://localhost/siswa

## Alternatif: Import SQL

File database/pengaduan_sarana.sql dapat diimpor lewat phpMyAdmin
sebagai pengganti perintah migrate.
