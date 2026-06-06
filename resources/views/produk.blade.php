@extends('layout.app')

@section('content')

<div class="container pt-5 pb-2">

    <div class="text-center mb-5">
        <h1 class="text-warning fw-bold display-5">
            Produk Loka Lebung
        </h1>
        <p class="text-light opacity-75">
            Temukan kebutuhan harian terbaik untuk Anda
        </p>
    </div>

    <!-- Search + Button -->

    <form method="GET" action="/produk" class="d-flex justify-content-center mb-5">
        <div class="input-group w-50 shadow">
            <input type="text" name="search" 
                value="{{ $search ?? '' }}"
                class="form-control"
                placeholder="Cari produk...">

            <button class="btn btn-warning px-4">
                Cari
            </button>
        </div>
    </form>

        <!-- Tombol Tambah -->
        @auth
        <button onclick="openModal()" class="btn btn-warning">
            + Tambah Produk
        </button>
        @endauth

</div>

    <!-- Grid Produk -->
<div class="row g-4">

@foreach($products as $item)
<div class="col-md-4">

    <div class="product-card h-100">

        <!-- IMAGE -->
        <div class="product-img">
            <img src="{{ asset('images/' . $item->gambar) }}">
        </div>

        <!-- CONTENT -->
        <div class="p-3">

            <h5 class="text-warning fw-semibold">
                {{ $item->nama }}
            </h5>

            <p class="text-muted small">
                {{ $item->deskripsi }}
            </p>

            <div class="d-flex justify-content-between align-items-center mt-3">

                <span class="fw-bold text-light">
                    Rp {{ number_format($item->harga) }}
                </span>

                <a href="https://wa.me/6283155961934?text=Halo, saya ingin membeli {{ urlencode($item->nama) }}" 
                   target="_blank"
                   class="btn btn-success btn-sm">
                    Beli
                </a>

            </div>

        </div>

    </div>

</div>
@endforeach

</div>

    @if($products->isEmpty())
        <p class="text-center text-light mt-5 opacity-75">
            Produk tidak ditemukan 😢
        </p>
    @endif

</div>

<!-- MODAL -->
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <form method="POST" action="/tambah-produk" enctype="multipart/form-data">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title">Tambah Produk</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <input type="text" name="nama" placeholder="Nama Produk" class="form-control mb-2">
                    <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control mb-2">
                    <input type="number" name="harga" placeholder="Harga" class="form-control mb-2">
                    <input type="file" name="gambar" class="form-control">

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Batal
                    </button>
                    <button class="btn btn-warning">
                        Simpan
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>

<script>
function openModal() {
    var modal = new bootstrap.Modal(document.getElementById('modalTambah'));
    modal.show();
}
</script>

@endsection