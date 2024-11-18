<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['name','product_id','birthdate',];

     // Relasi Many-to-One dengan model Customer
     public function customer()
     {
         return $this->belongsTo(Customer::class);
     }

}