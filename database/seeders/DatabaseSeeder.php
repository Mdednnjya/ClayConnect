<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\ProductsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Menjalankan seeder untuk tabel produk
        $this->call(ProductsTableSeeder::class);

        // Buat user baru
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
