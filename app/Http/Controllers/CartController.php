<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'sparepart_id' => 'required',
            'quantity' => 'required|integer|min:1',
        ]);

        // Ambil data dari input
        $sparepartId = $request->input('sparepart_id');
        $quantity = $request->input('quantity');
        $serviceId = $request->input('service_id');

        // Lakukan logika untuk menambahkan data ke dalam tabel cart
        // Misalnya, membuat instance model Cart dan menyimpannya ke dalam database
        $cartItem = new Cart();
        $cartItem->service_id = $serviceId;
        $cartItem->sparepart_id = $sparepartId;
        $cartItem->quantity = $quantity;
        // Lakukan perhitungan subtotal dan total sesuai kebutuhan Anda
        // ...

        // Simpan data ke dalam database
        $cartItem->save();

        // Redirect atau berikan respon sesuai dengan kebutuhan Anda
        // ...
    }

    public function update(Request $request, Cart $cartItem)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Ambil data dari input
        $quantity = $request->input('quantity');
        $serviceId = $request->input('service_id');

        // Lakukan logika untuk memperbarui data dalam tabel cart
        $cartItem->service_id = $serviceId;
        $cartItem->quantity = $quantity;
        // Lakukan perhitungan subtotal dan total sesuai kebutuhan Anda
        // ...

        // Simpan perubahan ke dalam database
        $cartItem->save();

        // Redirect atau berikan respon sesuai dengan kebutuhan Anda
        // ...
    }
}
