<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index()
    {
        // Mengambil semua produk beserta penulisnya
        $customers = Customer::with('customer')->get();

        // Mengembalikan data dalam format JSON
        return response()->json($customers);
    }

    public function store(Request $request)
    {
        // Validasi input menggunakan aturan dari model
        $validator = Validator::make($request->all(), Customer::rules('insert'));

        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()], 400);
        }

        try {
            // Membuat produk baru jika validasi berhasil
            $customers = Customer::create($request->all());

            return response()->json(['message' => 'Data berhasil disimpan', 'data' => $customers], 200);
        } catch (\Throwable $customers) {
            return response()->json(['message' => $customers->getMessage()], 500);
        }
    }
}
