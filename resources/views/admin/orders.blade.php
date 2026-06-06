@extends('layout.app')

@section('content')

<div class="container text-light">

    <h2 class="text-warning mb-4">Dashboard Order</h2>

    <table class="table table-dark table-hover">

        <thead>
            <tr>
                <th>Nama</th>
                <th>Total</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Aksi</th> <!-- 🔥 kolom baru -->
            </tr>
        </thead>

        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->nama }}</td>

                <td>
                    Rp {{ number_format($order->total) }}
                </td>

                <td>
                    <span class="badge bg-warning text-dark">
                        {{ $order->status }}
                    </span>
                </td>

                <td>
                    {{ $order->created_at->format('d M Y H:i') }}
                </td>

                <!-- 🔥 TOMBOL DETAIL -->
                <td>
                    <a href="/admin/orders/{{ $order->id }}" 
                       class="btn btn-info btn-sm">
                        Detail
                    </a>
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>

</div>

@endsection