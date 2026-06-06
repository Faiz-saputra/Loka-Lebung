@extends('layout.app')

@section('content')

<!-- HERO -->
<section class="text-center text-light py-5" data-aos="fade-up">
    <div class="container">

        <h1 class="display-3 fw-bold text-warning mb-3" style="font-family: ui-rounded;">
            Loka Lebung
        </h1>

        <p class="lead mb-3">
            Tempat Singgah, Cerita, dan Kebutuhan Harian
        </p>

        <p class="col-md-6 mx-auto text-secondary">
            Lebih dari sekadar warung, kami hadir untuk memenuhi kebutuhan dan menciptakan kebersamaan.
        </p>

        <a href="/produk" class="btn btn-warning mt-4 px-5 py-2 fw-bold shadow">
            Jelajahi Produk
        </a>

    </div>
</section>

<!-- TENTANG -->
<section class="py-5">
    <div class="container text-center text-light">

        <h2 class="text-warning mb-3">Tentang Kami</h2>

        <p class="col-md-7 mx-auto text-secondary">
            Loka Lebung bukan sekadar warung sembako. Kami adalah tempat bertemu, berbagi cerita,
            dan memenuhi kebutuhan harian dengan harga terjangkau di Desa Sungai Lebung.
        </p>

    </div>
</section>

<!-- VISUAL -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center text-light g-5">

<div class="col-md-6" data-aos="fade-right">

                <div id="carouselWarung" class="carousel slide" data-bs-ride="carousel">
                    
                    <div class="carousel-inner rounded shadow-lg">

                        <div class="carousel-item active">
                            <img src="/suasana warung1.png" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="/suasana warung2.jpg" class="d-block w-100">
                        </div>

                        <div class="carousel-item">
                            <img src="/suasana warung3.jpg" class="d-block w-100">
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselWarung" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselWarung" data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

                </div>

            </div>

            <div class="col-md-6" data-aos="fade-left">
                <h2 class="text-warning mb-3">Suasana Hangat & Nyaman</h2>
                <p class="text-secondary">
                    Loka Lebung bukan hanya tempat belanja, tapi tempat berkumpul, berbagi cerita,
                    dan menikmati suasana desa yang hangat dan nyaman.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- KEUNGGULAN -->
<section class="py-5">
    <div class="container">
        <div class="row text-center text-light">

            <div class="col-md-4 mb-4" data-aos="zoom-in">
                <div class="card bg-dark border-0 shadow h-100 p-4 feature-card">
                    <div class="fs-1 mb-3">🛒</div>
                    <h5 class="text-warning">Produk Lengkap</h5>
                    <p class="text-secondary">Kebutuhan harian tersedia lengkap dan berkualitas</p>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                <div class="card bg-dark border-0 shadow h-100 p-4 feature-card">
                    <div class="fs-1 mb-3">💰</div>
                    <h5 class="text-warning">Harga Terjangkau</h5>
                    <p class="text-secondary">Harga ramah untuk semua kalangan masyarakat</p>
                </div>
            </div>

            <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="400">
                <div class="card bg-dark border-0 shadow h-100 p-4 feature-card">
                    <div class="fs-1 mb-3">☕</div>
                    <h5 class="text-warning">Tempat Nongkrong</h5>
                    <p class="text-secondary">Suasana nyaman untuk santai dan berbagi cerita</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- TESTIMONI -->
<section class="py-5 bg-dark bg-opacity-50">
    <div class="container text-center text-light">

        <h2 class="text-warning mb-5" data-aos="fade-up">Apa Kata Mereka?</h2>

        <div class="row g-4">

            <div class="col-md-4" data-aos="fade-up">
                <div class="card bg-dark border-0 shadow p-4 h-100">
                    <p class="text-secondary">"Tempatnya nyaman banget buat nongkrong!"</p>
                    <small class="text-warning">- Warga Lebung</small>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card bg-dark border-0 shadow p-4 h-100">
                    <p class="text-secondary">"Harga murah dan lengkap!"</p>
                    <small class="text-warning">- Pelanggan</small>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card bg-dark border-0 shadow p-4 h-100">
                    <p class="text-secondary">"Pelayanannya ramah banget."</p>
                    <small class="text-warning">- Pengunjung</small>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="text-center py-5 text-light" data-aos="zoom-in">
    <div class="container">

        <h2 class="text-warning fw-bold mb-3">Yuk Belanja Sekarang!</h2>
        <p class="text-secondary mb-4">Kebutuhan harian lengkap hanya di Loka Lebung</p>

        <a href="/produk" class="btn btn-warning px-5 py-3 fw-bold shadow-lg">
            Mulai Belanja
        </a>

    </div>
</section>

@endsection