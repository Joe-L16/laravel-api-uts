<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        Customer::create(['name' => 'Customer 1', 'birthdate' => '1980-01-01']);
        Customer::create(['name' => 'Customer 2', 'birthdate' => '1985-02-02']);
        Customer::create(['name' => 'Customer 3', 'birthdate' => '1990-03-03']);
        Customer::create(['name' => 'Customer 4', 'birthdate' => '1975-04-04']);
        Customer::create(['name' => 'Customer 5', 'birthdate' => '1982-05-05']);
    }
}
