<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat user admin default
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Buat user buyer default
        User::create([
            'name' => 'Pengguna Biasa',
            'email' => 'buyer@example.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'role' => 'buyer',
        ]);

        // Buat beberapa produk contoh
        \App\Models\Product::create([
            'name' => 'Laptop Gaming ROG',
            'description' => 'Laptop gaming premium dengan performa tinggi untuk kebutuhan gaming dan produktivitas.',
            'price' => 15999000,
            'stock' => 10,
            'image_url' => 'https://via.placeholder.com/300x300/4F46E5/ffffff?text=Laptop+Gaming',
        ]);

        \App\Models\Product::create([
            'name' => 'Smartphone Flagship',
            'description' => 'Smartphone terbaru dengan kamera canggih dan performa maksimal.',
            'price' => 8999000,
            'stock' => 25,
            'image_url' => 'https://via.placeholder.com/300x300/059669/ffffff?text=Smartphone',
        ]);

        \App\Models\Product::create([
            'name' => 'Headset Wireless',
            'description' => 'Headset wireless dengan kualitas suara premium dan noise cancelling.',
            'price' => 1299000,
            'stock' => 50,
            'image_url' => 'https://via.placeholder.com/300x300/DC2626/ffffff?text=Headset',
        ]);

        \App\Models\Product::create([
            'name' => 'Keyboard Mechanical',
            'description' => 'Keyboard mechanical RGB dengan switch premium untuk gaming dan typing.',
            'price' => 899000,
            'stock' => 30,
            'image_url' => 'https://via.placeholder.com/300x300/7C3AED/ffffff?text=Keyboard',
        ]);
    }
}
