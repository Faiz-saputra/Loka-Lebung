<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function orders()
    {
        $orders = Order::latest()->get();
        return view('admin.orders', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::with('items')->findOrFail($id);

        return view('admin.detail', compact('order'));
    }
}
