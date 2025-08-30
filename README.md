# CoreHR

Sistem berbasis web untuk menangani data karyawan. Dibangun dengan Laravel dan Filament Admin Panel.

## Fitur

-   Autentikasi Pengguna
-   CRUD Departemen, Grade, Jabatan, Status, & Employee
-   Soft Delete dan Riwayat
-   Dashboard Statistik (on development)

## Tech Stack

-   Laravel 12
-   PHP 8.3+
-   MySQL
-   Filament v4

## Plugins Filament

-   [Resized Column by Asmit Nepali](https://filamentphp.com/plugins/asmit-nepali-resized-column)
-   [Excel Import by Eighty Nine](https://filamentphp.com/plugins/eightynine-excel-import)

## Installation

### 1. Clone repository

```bash
git clone https://github.com/Aryyadi72/CoreHR.git
cd coreHR
```

### 2. Install dependensi

```bash
composer install
```

### 3. Salin file .env

```bash
cp .env.example .env
```

### 4. Generate key aplikasi

```bash
php artisan key:generate
```

### 5. Konfigurasi database

```bash
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 6. Jalankan migrasi & seeder (opsional)

```bash
php artisan migrate --seed
```

### 7. Jalankan server lokal

```bash
php artisan serve
```

## Akun Demo

```bash
Role      = Admin
Email     = admin@employee.com
Password  = admin
```

## License

[MIT](https://choosealicense.com/licenses/mit/)
