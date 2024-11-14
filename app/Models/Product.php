<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'customer_id', 'price'];

    // Relasi Many-to-One dengan model Customer
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
