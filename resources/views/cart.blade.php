@extends('layout.app')

@section('content')

<div class="container text-light">

    <h2 class="text-warning mb-4">Keranjang Belanja</h2>

    @php
        $cart = session('cart', []);
        $total = 0;
    @endphp

    @if(count($cart) > 0)

    <div class="table-responsive">
        <table class="table table-dark table-hover align-middle">

            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($cart as $id => $item)

                @php
                    $subtotal = $item['harga'] * $item['qty'];
                    $total += $subtotal;
                @endphp

                <tr>
                    <td>{{ $item['nama'] }}</td>
                    <td>Rp {{ number_format($item['harga']) }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td>Rp {{ number_format($subtotal) }}</td>

                    <td>
                        <a href="/cart/remove/{{ $id }}" 
                           class="btn btn-danger btn-sm">
                            Hapus
                        </a>
                    </td>
                </tr>

                @endforeach
            </tbody>

        </table>
    </div>

    <!-- TOTAL -->
    <div class="mt-4 text-end">
        <div class="bg-dark p-3 rounded shadow d-inline-block">
            <h4 class="text-warning mb-0">
                Total: Rp {{ number_format($total) }}
            </h4>
        </div>
    </div>

    <!-- BUTTON ACTION -->
    <div class="mt-3 d-flex justify-content-between">

        <a href="/produk" class="btn btn-outline-light">
            ← Lanjut Belanja
        </a>

        <form action="/checkout" method="POST">
            <input type="text" name="nama" 
                class="form-control mb-2" 
                placeholder="Nama Anda">
            @csrf
            <button class="btn btn-success">
                Checkout via WhatsApp
            </button>
        </form>

    </div>

    @else

        <div class="text-center mt-5">
            <h5 class="text-secondary">Keranjang masih kosong 😢</h5>
            <a href="/produk" class="btn btn-warning mt-3">
                Belanja Sekarang
            </a>
        </div>

    @endif

</div>

@endsection