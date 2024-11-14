<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'birthdate'];

    // Relasi One-to-Many dengan model Product
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
