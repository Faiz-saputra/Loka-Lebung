<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    // tampilkan cart
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    // tambah ke cart
    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $id = $request->id;

        if (isset($cart[$id])) {
            $cart[$id]['qty'] += 1;
        } else {
            $cart[$id] = [
                "nama" => $request->nama,
                "harga" => $request->harga,
                "gambar" => $request->gambar,
                "qty" => 1
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produk ditambahkan ke keranjang!');
    }

    // hapus item
    public function remove($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back();
    }

    // checkout WA
    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->back()->with('error', 'Keranjang kosong!');
        }

        $nama = $request->nama ?? 'Customer';

        $total = 0;

        foreach ($cart as $item) {
            $total += $item['harga'] * $item['qty'];
        }

        // ✅ SIMPAN ORDER
        $order = Order::create([
            'nama' => $nama,
            'total' => $total,
            'status' => 'pending'
        ]);

        // ✅ SIMPAN ITEM
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'nama_produk' => $item['nama'],
                'harga' => $item['harga'],
                'qty' => $item['qty']
            ]);
        }

        // WA MESSAGE
        $pesan = "*Pesanan Baru - Loka Lebung*%0A%0A";
        $pesan .= "Nama: *$nama*%0A%0A";
        $pesan .= "*Daftar Pesanan:*%0A";

        foreach ($cart as $item) {
            $pesan .= "• {$item['nama']} (x{$item['qty']})%0A";
        }

        $pesan .= "%0A*Total: Rp " . number_format($total) . "*";

        session()->forget('cart');

        return redirect("https://wa.me/6281271328213?text=".$pesan);
    }
}