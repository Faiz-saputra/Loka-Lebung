@extends('layout.app')

@section('content')

<section class="container text-light">

    <!-- Judul -->
    <div class="text-center mb-5" data-aos="fade-up">
        <h1 class="text-warning fw-bold">Hubungi Kami</h1>
        <p class="text-secondary">Kami siap melayani Anda</p>
    </div>

    <div class="row g-5">

        <!-- INFO KONTAK -->
        <div class="col-md-5" data-aos="fade-right">

            <h4 class="text-warning mb-3">Informasi</h4>

            <p><strong>📍 Alamat:</strong><br>
                Desa Sungai Lebung
            </p>

            <p><strong>📞 WhatsApp:</strong><br>
                0812-7132-8213
            </p>

            <p><strong>🕒 Jam Buka:</strong><br>
                08.00 - 22.00 WIB
            </p>

            <!-- Tombol WA -->
            <a href="https://wa.me/6281271328213" 
               target="_blank"
               class="btn btn-success mt-3">
                Chat via WhatsApp
            </a>

        </div>

        <!-- FORM -->
        <div class="col-md-7" data-aos="fade-left">

            <div class="card bg-dark border-0 shadow p-4">

                <h4 class="text-warning mb-3">Kirim Pesan</h4>

                <form>

                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Nama">
                    </div>

                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="mb-3">
                        <textarea class="form-control" rows="4" placeholder="Pesan"></textarea>
                    </div>

                    <button class="btn btn-warning w-100">
                        Kirim Pesan
                    </button>

                </form>

            </div>

        </div>

    </div>

    <!-- MAP -->
    <div class="mt-5" data-aos="fade-up">

        <h4 class="text-warning text-center mb-3">Lokasi Kami</h4>

        <div class="rounded shadow overflow-hidden">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1600.6698516441957!2d102.0718416217326!3d-1.8640314639309563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sid!2sid!4v1776199150182!5m2!1sid!2sid"
                width="100%" 
                height="350" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
        <div class="text-center mt-3">
            <a href="https://maps.app.goo.gl/vSmLUVBwwnzk3ocC6" 
            target="_blank"
            class="btn btn-outline-warning">
                📍 Buka di Google Maps
            </a>
        </div>

    </div>

</section>

@endsection