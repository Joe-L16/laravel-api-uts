<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $products = Product::all();

        for ($i = 1; $i <= 10; $i++) {
            Customer::create([
                'name' => 'Product Title ' . $i,
                'product_id' => $products->random()->id, // Menghubungkan customer dengan produk secara acak
                'birthdate' => rand(1, 31), // Tanggal lahir secara acak
            ]);
        }
    }
}
