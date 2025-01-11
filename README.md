# Event.in

Event.in adalah sebuah platform berbasis web untuk memudahkan pengguna dalam mencari, membuat, dan mengelola acara. Dibangun menggunakan **Laravel** sebagai framework backend dan **Tailwind CSS** untuk desain antarmuka.

## Fitur Utama

- **Pengelolaan Acara**: Membuat, mengedit, dan menghapus acara.
- **Pencarian Acara**: Menemukan acara berdasarkan kategori, lokasi, atau tanggal.
- **Registrasi Pengguna**: Sistem autentikasi untuk pengguna (admin dan user biasa).
- **Desain Responsif**: Tampilan optimal di berbagai perangkat.
- **Dashboard Admin**: Kelola data acara dan pengguna.

## Teknologi yang Digunakan

- **Laravel**: Framework PHP untuk backend.
- **Tailwind CSS**: Framework CSS untuk desain responsif dan modern.
- **MySQL**: Database untuk menyimpan data acara dan pengguna.
- **Blade**: Template engine bawaan Laravel untuk pembuatan halaman.
- **npm**: Untuk mengelola dependensi frontend.

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek di lokal Anda:

### Persyaratan

- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL/MariaDB
- Git

### Langkah Instalasi

1. Clone repository ini:

   ```bash
   git clone https://github.com/username/event-in.git
   cd event-in
   ```

2. Install dependensi Laravel:

   ```bash
   composer install
   ```

3. Install dependensi frontend:

   ```bash
   npm install
   ```

4. Copy file `.env` dan konfigurasi:

   ```bash
   cp .env.example .env
   ```

5. Atur konfigurasi database di file `.env`:

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nama_database
   DB_USERNAME=username_database
   DB_PASSWORD=password_database
   ```

6. Generate key aplikasi:

   ```bash
   php artisan key:generate
   ```

7. Migrasi dan seed database:

   ```bash
   php artisan migrate --seed
   ```

8. Compile aset frontend:

   ```bash
   npm run dev
   ```

9. Jalankan server lokal:

   ```bash
   php artisan serve
   ```
