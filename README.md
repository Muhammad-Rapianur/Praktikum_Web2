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
