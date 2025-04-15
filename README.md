# User API - Laravel

Project ini adalah RESTful API sederhana menggunakan Laravel untuk melakukan operasi CRUD pada entitas **User**. API ini dilengkapi dengan validasi, logging request, UUID sebagai ID, serta dokumentasi menggunakan Swagger.

## Tech Stack

- ✅ Laravel 10
- ✅ MySQL / PostgreSQL
- ✅ Form Request Validation
- ✅ Logging via Middleware
- ✅ UUID as User ID
- ✅ Swagger (L5-Swagger)
- ✅ Mocha (via frontend test)

## Struktur Fitur

- 🔹 CRUD untuk User
- 🔹 Validasi input (name, email unik, dan age)
- 🔹 UUID untuk `id` user
- 🔹 Middleware logging setiap request ke file log
- 🔹 Swagger untuk dokumentasi API
- 🔹 Unit test API (diakses via frontend)

## API Endpoints

| Method | Endpoint        | Deskripsi                       |
|--------|------------------|----------------------------------|
| GET    | /api/users       | Ambil semua user                |
| GET    | /api/users/{id}  | Ambil detail user berdasarkan ID |
| POST   | /api/users       | Tambah user baru                |
| PUT    | /api/users/{id}  | Update user berdasarkan ID      |
| DELETE | /api/users/{id}  | Hapus user berdasarkan ID       |

## Instalasi & Setup

1. Clone repository:
   ```bash
   git clone https://github.com/umarfaruqsyafar/user-api-laravel.git
   cd user-api-laravel

2. Install dependency:
    composer install

3. Copy file .env:
    cp .env.example .env

4. Generate key:
    php artisan key:generate

5. Konfigurasi database di file .env:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_db
    DB_USERNAME=your_user
    DB_PASSWORD=your_pass

6. Jalankan migrasi:
    php artisan migrate

7. Jalankan server:
    php artisan serve

Dokumentasi Swagger
Untuk melihat dokumentasi API:
Jalankan perintah:

1. Jalankan perintah:
    php artisan l5-swagger:generate
2. Buka di browser:
    http://localhost:8000/api/documentation

Middleware Logging
Semua request dicatat ke storage/logs/laravel.log secara otomatis melalui custom middleware.
