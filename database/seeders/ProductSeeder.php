<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $customers = Customer::all();

        $categorys = ['Electronics', 'Entertainment', 'Wearable', 'Accessories', 'Game', 'Smartphone'];

        for ($i = 1; $i <= 10; $i++) {
            Product::create([
                'name' => 'Customer Title ' . $i,
                'customer_id' => $customers->random()->id, // Menghubungkan produk dengan customer secara acak
                'price' => rand(100, 2000), // Harga secara acak
                'category' => $categorys[array_rand($categorys)], // Mengambil category secara acak
            ]);
        }
    }
}
