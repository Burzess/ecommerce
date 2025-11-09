# Saya menggunakan docker sail untuk develop

# Rencana Sprint Pengembangan E-Commerce Laravel (MVP)

Berikut adalah rencana pengembangan yang dipecah menjadi beberapa sprint fungsional, dirancang untuk membangun proyek E-Commerce MVP Anda secara bertahap menggunakan Laravel.

---

## 🏁 Sprint 0: Persiapan Proyek & Otentikasi

**Tujuan:** Menyiapkan fondasi proyek Laravel dan sistem login/registrasi.

### Tugas:
* Instalasi proyek Laravel baru (`laravel new nama_proyek`).
* Konfigurasi file `.env`, terutama koneksi database.
* Instalasi Laravel Breeze atau Jetstream untuk otentikasi (Contoh: `composer require laravel/breeze --dev` dan `php artisan breeze:install`).
* Jalankan migrasi awal (`php artisan migrate`) untuk membuat tabel `users`, `password_resets`, dll.

### Hasil:
Proyek Laravel baru dengan fungsionalitas **Login** dan **Registrasi** yang berfungsi.

---

## 🏃 Sprint 1: Peran Pengguna (Roles) & Manajemen Produk (Admin)

**Tujuan:** Membuat peran Admin dan memberi Admin kemampuan untuk mengelola produk (CRUD).

### Tugas:
* **Database:**
    * Modifikasi migrasi `users`: tambahkan kolom `role` (Enum: 'admin', 'buyer', default 'buyer').
    * Buat Model + Migrasi `Product` (sesuai skema: `name`, `description`, `price`, `stock`, `image_url`).
    * Jalankan migrasi (`php artisan migrate`).
* **Backend (Logika):**
    * Buat `AdminMiddleware` untuk memeriksa `auth()->user()->role == 'admin'`.
    * Daftarkan middleware di `app/Http/Kernel.php`.
    * Buat `Admin/ProductController` (Resource Controller) untuk mengelola CRUD produk.
    * Terapkan *validation* di dalam `ProductController`.
* **Routing (`routes/web.php`):**
    * Buat grup rute untuk admin yang dilindungi oleh `auth` dan `AdminMiddleware`:
        ```php
        Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
            Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
        });
        ```
* **Frontend (Views):**
    * Buat file Blade untuk Admin:
        * `admin/products/index.blade.php` (Menampilkan semua produk).
        * `admin/products/create.blade.php` (Formulir tambah produk).
        * `admin/products/edit.blade.php` (Formulir edit produk).

### Hasil:
Pengguna 'admin' dapat login, mengakses dashboard `/admin/products`, dan **Membuat, Membaca, Mengedit (harga, stok, dll), dan Menghapus** produk.

---

## 🛒 Sprint 2: Katalog Publik & Keranjang Belanja (Buyer)

**Tujuan:** Memungkinkan 'buyer' untuk melihat produk dan menambahkannya ke keranjang belanja.

### Tugas:
* **Database:**
    * Buat Model + Migrasi `CartItem` (`user_id`, `product_id`, `quantity`).
    * Jalankan migrasi.
* **Relasi Model (Eloquent):**
    * `User` -> `hasMany(CartItem::class)`
    * `Product` -> `hasMany(CartItem::class)`
    * `CartItem` -> `belongsTo(User::class)` dan `belongsTo(Product::class)`
* **Backend (Logika):**
    * Buat `ProductController` (publik) untuk menampilkan produk.
    * Buat `CartController` untuk mengelola keranjang (CRUD: add, update, delete, view).
* **Routing (`routes/web.php`):**
    * Rute publik: `Route::get('/', [ProductController::class, 'index'])` (Home) dan `Route::get('/products/{product}', [ProductController::class, 'show'])`.
    * Rute keranjang (perlu `auth`): `Route::resource('cart', CartController::class)`.
* **Frontend (Views):**
    * `home.blade.php` (Galeri produk).
    * `products/show.blade.php` (Detail produk, tombol "Tambah ke Keranjang").
    * `cart/index.blade.php` (Halaman keranjang belanja, tombol "Checkout").

### Hasil:
Pengguna (publik) dapat melihat produk. Pengguna 'buyer' yang login dapat mengelola keranjang belanja mereka.

---

## 💳 Sprint 3: Proses Checkout & Pembuatan Pesanan

**Tujuan:** Memungkinkan 'buyer' untuk "checkout" keranjang mereka, membuat `Order` baru.

### Tugas:
* **Database:**
    * Buat Model + Migrasi `Order` (`user_id`, `total_amount`, `shipping_address`, `status`).
    * Buat Model + Migrasi `OrderItem` (`order_id`, `product_id`, `quantity`, `price`).
    * Jalankan migrasi.
* **Relasi Model (Eloquent):**
    * `User` -> `hasMany(Order::class)`
    * `Order` -> `belongsTo(User::class)` dan `hasMany(OrderItem::class)`
    * `OrderItem` -> `belongsTo(Order::class)`
* **Backend (Logika):**
    * Buat `CheckoutController` dengan metode `store(Request $request)`.
    * Logika `store`:
        1.  Validasi alamat.
        2.  Ambil semua `CartItem` user.
        3.  Buat `Order` baru (status: 'pending_payment').
        4.  Pindahkan `CartItem` menjadi `OrderItem` (simpan harga saat itu).
        5.  Hapus `CartItem`.
        6.  Redirect ke halaman instruksi pembayaran.
* **Routing (`routes/web.php`):**
    * `Route::get('/checkout', [CheckoutController::class, 'index'])->middleware('auth');`
    * `Route::post('/checkout', [CheckoutController::class, 'store'])->middleware('auth');`
* **Frontend (Views):**
    * `checkout/index.blade.php` (Form alamat & ringkasan).
    * `checkout/success.blade.php` (Instruksi pembayaran).

### Hasil:
Buyer dapat checkout. Item keranjang berubah menjadi data `Order` dan `OrderItem` yang permanen.

---

## ✅ Sprint 4: Alur Konfirmasi Pembayaran (Manual)

**Tujuan:** Buyer mengunggah bukti bayar, Admin mengonfirmasinya.

### Tugas:
* **Database:**
    * Buat Model + Migrasi `PaymentConfirmation` (`order_id`, `proof_image_url`, `notes`).
    * Jalankan migrasi.
* **Relasi Model (Eloquent):**
    * `Order` -> `hasOne(PaymentConfirmation::class)`
    * `PaymentConfirmation` -> `belongsTo(Order::class)`
* **Sisi Buyer:**
    * Buat halaman "Pesanan Saya" (`OrderController` untuk buyer).
    * Tambahkan tombol "Konfirmasi Pembayaran" (jika status 'pending_payment').
    * Buat form upload (`PaymentConfirmationController@create`).
    * Buat logika `store` untuk menyimpan file (gunakan `Storage`) & ubah status `Order` ke 'pending_confirmation'.
* **Sisi Admin:**
    * Buat `Admin/OrderController` (index, show).
    * Tampilkan semua pesanan.
    * Di halaman detail, tampilkan gambar bukti bayar (dari relasi).
    * Tambahkan tombol "Konfirmasi Pesanan" dan "Tolak Pesanan".
    * Buat logika untuk tombol "Konfirmasi":
        1.  Ubah status `Order` ke 'processing'.
        2.  **PENTING:** Kurangi `stock` di tabel `products` berdasarkan `OrderItem`.

### Hasil:
Alur transaksi penuh selesai. Admin bisa memvalidasi bukti bayar dan memproses pesanan, yang akan mengurangi stok produk.

---

## 📞 Sprint 5: Halaman "Contact Us" & Penyelesaian

**Tujuan:** Menambahkan fitur pendukung "Contact Us" dan merapikan aplikasi.

### Tugas:
* **Database:**
    * Buat Model + Migrasi `ContactMessage` (`name`, `email`, `message`).
    * Jalankan migrasi.
* **Sisi Publik:**
    * Buat `ContactController` (publik) dengan form di `contact.blade.php`.
    * Buat logika `store` untuk menyimpan pesan ke database.
* **Sisi Admin:**
    * Buat `Admin/ContactMessageController` untuk menampilkan pesan yang masuk.
* **Perapian:**
    * Pastikan semua link navigasi sudah benar.
    * Tampilkan status pesanan di halaman "Pesanan Saya" (Buyer).

### Hasil:
Aplikasi memiliki fitur "Contact Us" yang fungsional dan alur navigasi pengguna (Buyer & Admin) terasa lengkap.