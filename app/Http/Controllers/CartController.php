<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Sparepart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'service_id' => 'required',
        'sparepart_id' => 'required',
        'quantity' => 'required',
    ]);

    $serviceId = $request->input('service_id');
    $sparepartIds = $request->input('sparepart_id');
    $quantities = $request->input('quantity');

    $total = 0;

    foreach ($sparepartIds as $index => $sparepartId) {
        $sparepart = Sparepart::find($sparepartId);
        $subtotal = $sparepart->price * $quantities[$index];

        if ($sparepart->quantity_left >= $quantities[$index]) {
            $cart = Cart::where('service_id', $serviceId)
                ->where('sparepart_id', $sparepartId)
                ->first();

            if ($cart) {
                $cart->quantity += $quantities[$index];
                $cart->subtotal += $subtotal;
                $cart->save();
            } else {
                $cart = new Cart;
                $cart->service_id = $serviceId;
                $cart->sparepart_id = $sparepartId;
                $cart->quantity = $quantities[$index];
                $cart->subtotal = $subtotal;
                $cart->save();
            }

            $sparepart->quantity_left -= $quantities[$index];
            $sparepart->save();

            $total += $subtotal;
        } else {
            // Jika stok habis atau tidak mencukupi
            return redirect()->back()->with('error', 'Stok ' . $sparepart->name . ' habis atau tidak mencukupi');
        }
    }

    $serviceCart = Cart::where('service_id', $serviceId)->get();
    $serviceCartTotal = $serviceCart->sum('subtotal');

    $lastCart = Cart::latest()->first();
    $lastCart->total = $serviceCartTotal;
    $lastCart->save();

    return redirect()->back()->with('success', 'Sparepart berhasil ditambahkan');
}


    public function removeItem($id)
    {
        $cart = Cart::findOrFail($id);
    
        $quantity = $cart->quantity;
    
        $sparepart = Sparepart::find($cart->sparepart_id);
        $sparepart->quantity_left += $quantity;
        $sparepart->save();
    
        $cart->delete();
    
        return redirect()->back()->with('success', 'Item berhasil dihapus dari cart.');
    }
    
    public function clearCart($serviceId)
    {
        $carts = Cart::where('service_id', $serviceId)->get();
    
        foreach ($carts as $cart) {
            $quantity = $cart->quantity;
    
            $sparepart = Sparepart::find($cart->sparepart_id);
            $sparepart->quantity_left += $quantity;
            $sparepart->save();
        }
    
        Cart::where('service_id', $serviceId)->delete();
    
        return redirect()->back()->with('success', 'Cart berhasil dikosongkan.');
    }

    public function updateQuantity(Request $request, $id)
    {
        $quantity = $request->input('quantity');
    
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);
    
        $cart = Cart::find($id);
    
        if ($cart) {
            $sparepart = Sparepart::find($cart->sparepart_id);
    
            if ($sparepart) {
                if ($quantity > $sparepart->quantity_left) {
                    return redirect()->back()->with('error', 'Gagal memperbarui quantity. Stok tidak mencukupi.');
                }
    
                $quantityDiff = $quantity - $cart->quantity;
    
                $sparepart->quantity_left -= $quantityDiff;
                $sparepart->save();
    
                $cart->quantity = $quantity;
                $cart->save();
    
                $subtotal = $sparepart->price * $quantity;
                $cart->subtotal = $subtotal;
                $cart->save();
    
                return redirect()->back()->with('success', 'Quantity berhasil diperbarui.');
            } else {
                return redirect()->back()->with('error', 'Gagal memperbarui quantity. Sparepart tidak ditemukan.');
            }
        } else {
            return redirect()->back()->with('error', 'Gagal memperbarui quantity. Cart tidak ditemukan.');
        }
    }

}
