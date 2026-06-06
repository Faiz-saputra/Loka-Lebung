<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $products = Product::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                        ->orWhere('deskripsi', 'like', '%' . $search . '%');
        })->get();

        return view('produk', compact('products', 'search'));
    }

    public function create()
    {
        return view('tambah_produk');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $file = $request->file('gambar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $namaFile);

        Product::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'gambar' => $namaFile,
        ]);

        return redirect('/produk');
    }
    public function destroy($id)
    {
    $product = Product::findOrFail($id);

    // hapus gambar dari folder
    $path = public_path('images/' . $product->gambar);
    if (file_exists($path)) {
        unlink($path);
    }

    $product->delete();

    return redirect('/produk')->with('success', 'Produk berhasil dihapus');
    }   
}