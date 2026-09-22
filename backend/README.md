<<<<<<< HEAD
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
=======
# Proyek Praktikum Web 2 
## Diagram Arsitektur 
[Browser] <---> [Vue.js Frontend] <--- API/JSON ---> [Laravel Backend] <--- SQL ---> [MariaDB Database] 


# Praktikum Pemrograman Web 2

## Deskripsi
Aplikasi ini merupakan proyek full-stack sederhana yang mengimplementasikan arsitektur decoupled (terpisah). Proyek ini menggunakan framework Laravel sebagai Backend API untuk mengelola data dan logika bisnis, serta Vue.js yang dibangun di atas Vite sebagai Frontend (Presentation Layer) untuk menyajikan antarmuka pengguna yang interaktif.

## Teknologi
- PHP dan Laravel (Backend Framework)
- Composer (Dependency Manager untuk PHP)
- Vue.js dan Vite (Frontend Framework & Build Tool)
- Node.js dan NPM (Dependency Manager untuk JavaScript)
- MariaDB / MySQL (Database Management System)
- Git (Version Control System)

## Prasyarat Sistem
Sebelum menjalankan aplikasi, pastikan komputer Anda telah terinstal:
- PHP >= 8.2
- Composer >= 2.x
- Node.js >= 18.x & NPM
- XAMPP / Laragon (untuk MySQL/MariaDB server)

## Konfigurasi Database
1. Pastikan server MySQL/MariaDB pada XAMPP Control Panel sudah dalam status **Start** (aktif).
2. Buat database baru bernama **`praktikum_web2`** melalui phpMyAdmin atau terminal.
3. Sesuaikan pengaturan koneksi database pada file `.env` di dalam folder `backend`:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=praktikum_web2
   DB_USERNAME=root
   DB_PASSWORD=
   ```

## Instalasi Backend
Buka terminal baru, masuk ke direktori backend, lalu jalankan perintah instalasi berikut secara berurutan:
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

## Instalasi Frontend
Buka terminal terpisah, masuk ke direktori frontend, lalu jalankan perintah instalasi berikut:
```bash
cd frontend
npm install
```

## Endpoint API
Backend Laravel menyediakan endpoint API terverifikasi yang digunakan untuk memeriksa status koneksi aplikasi:
- **URL Endpoint:** `http://127.0.0`
- **Method:** `GET`
- **Format Response (JSON):**
  ```json
  {
    "status": "success",
    "message": "Laravel API berjalan",
    "framework": "Laravel"
  }
  ```

## Cara Menjalankan Aplikasi
Untuk menjalankan seluruh sistem, Anda harus mengaktifkan kedua server (backend dan frontend) secara bersamaan pada jendela terminal yang berbeda:

1. **Menjalankan Server Backend Laravel:**
   ```bash
   cd backend
   php artisan serve
   ```
   *Aplikasi backend dapat diakses melalui: http://127.0.0.1:8000*

2. **Menjalankan Server Frontend Vue dengan Vite:**
   ```bash
   cd frontend
   npm run dev
   ```
   *Aplikasi frontend dapat diakses melalui: http://localhost:5173*

## Arsitektur
Aplikasi ini berjalan dengan alur komunikasi data horizontal sebagai berikut:
```text
[ Browser / Client ] <---> [ Vue.js Frontend ] <--- HTTP Request / JSON ---> [ Laravel Backend API ] <--- SQL Query ---> [ MariaDB Database ]
```
- **Browser (Client):** Menampilkan antarmuka web (UI) dan menangkap interaksi user.
- **Vue.js:** Mengirimkan HTTP Request (menggunakan Fetch/Axios) menuju endpoint API Laravel dan merender data JSON menjadi komponen UI.
- **Laravel API:** Menerima *request*, memproses logika backend, berkomunikasi dengan database melalui Eloquent ORM, dan mengembalikan *response* terstruktur berformat JSON.
- **MariaDB Database:** Menyimpan data terstruktur aplikasi di dalam tabel-tabel hasil proses *migration*.
>>>>>>> 95a8d37152737d51dab72c2ed2324733e6ee63d1
