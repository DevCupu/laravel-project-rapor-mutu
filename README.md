## 🚀 Laravel Project Setup Guide

Selamat datang di **Rapor Mutu Pendidikan**!  
Website ini hadir untuk membantu sekolah memantau dan meningkatkan mutu pendidikan dengan lebih mudah dan cepat. Pantau perkembangan rapor mutu sekolah secara real-time dengan fitur dashboard dan insight otomatis kemudahan pengelolaan data!

---

![Rapor Mutu Pendidikan](./public/ss-rapor.png)

---

### 🛠️ Cara Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/repo-name.git
   cd repo-name
   ```

2. **Install Dependency**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Siapkan Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Buat Storage Link**
   ```bash
   php artisan storage:link
   ```

5. **Konfigurasi Database**
   - Edit file `.env` sesuai database kamu.
   - Jalankan migrasi:
     ```bash
     php artisan migrate
     ```
6. **Jalankan db seeder**
   ```bash
   php artisan db:seed
   ```   

7. **Jalankan Server Development**
   ```bash
   php artisan serve
   ```

---
### 🛠️ Jika Mengalami Error Saat Cloning atau Setup

#### 1. Atur `.env` Jika Menggunakan Built-in Server
Tambahkan atau pastikan baris berikut di file `.env`:
```env
PHP_CLI_SERVER_WORKERS=1
```

#### 2. Update Composer
Jalankan perintah berikut di terminal:
```bash
composer update laravel/framework
```

#### 3. Bersihkan Cache
Agar perubahan konfigurasi terbaca, jalankan:
```bash
php artisan config:clear
php artisan view:clear
```

#### 4. Jika Error Tabel `sessions`
Jika muncul error terkait tabel `sessions`, buat tabelnya dengan:
```bash
php artisan session:table
php artisan migrate
```

### 👑 Akun Super Admin

```super_admin
username: admin@web.com
pass: superpassword
```
Happy Coding 😁

---

## 🐞 Fix Production

### Bug
1. Vite tidak mau load
2. Masalah Symlink di Hostinger

### Solusi

1. **Vite Build di Hosting**
   - Sebelum upload file ke hosting, jalankan perintah:
     ```bash
     npm run build
     ```
   - Pastikan menambahkan pada file `.env`:
     ```
     ASSET_URL=namadomain.com/public
     ```
     (Tempat build package Vite)

2. **Symlink Storage di Hostinger**
   - Konfigurasi storage pada file `config/filesystems.php`:

     **Contoh di lokal:**
     ```php
     'public' => [
         'driver' => 'local',
         'root' => storage_path('app/public'),
         'url' => env('APP_URL').'/storage',
         'visibility' => 'public',
         'throw' => false,
     ],
     ```

     **Contoh di production:**
     ```php
     'public' => [
         'driver' => 'local',
         'root' => public_path('storage'),
         'url' => env('APP_URL').'/storage',
         'visibility' => 'public',
         'throw' => false,
     ],
     ```