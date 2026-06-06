@extends('layout.app')

@section('content')

<div class="container text-light">

    <h2 class="text-warning mb-4">Detail Order</h2>

    <!-- INFO ORDER -->
    <div class="card bg-dark p-3 mb-4 shadow">
        <h5>Nama: {{ $order->nama }}</h5>
        <h6>Total: Rp {{ number_format($order->total) }}</h6>
        <h6>Status: {{ $order->status }}</h6>
        <small>{{ $order->created_at }}</small>
    </div>

    <!-- LIST PRODUK -->
    <table class="table table-dark">

        <thead>
            <tr>
                <th>Produk</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Subtotal</th>
            </tr>
        </thead>

        <tbody>
            @foreach($order->items as $item)
            <tr>
                <td>{{ $item->nama_produk }}</td>
                <td>Rp {{ number_format($item->harga) }}</td>
                <td>{{ $item->qty }}</td>
                <td>
                    Rp {{ number_format($item->harga * $item->qty) }}
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <!-- BACK -->
    <a href="/admin/orders" class="btn btn-secondary mt-3">
        Kembali
    </a>

</div>

@endsection