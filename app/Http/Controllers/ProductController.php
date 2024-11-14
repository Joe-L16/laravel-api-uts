<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Mengambil semua buku beserta penulisnya
        $products = Product::with('author')->get();

        // Mengembalikan data dalam format JSON
        return response()->json($products);
    }

    public function store(Request $request)
    {
            // Validasi input menggunakan aturan dari model
             $validatedData = $request->validate(Product::rules());

            // Membuat buku baru jika validasi berhasil
            $products = Product::create($validatedData);

        return response()->json($products, 201); // Mengembalikan response JSON dengan status 201
    }
}
