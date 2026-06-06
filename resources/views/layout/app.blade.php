<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loka Lebung</title>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        /* GLOBAL */
        html, body {
            height: 100%;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb') no-repeat center center fixed;
            background-size: cover;
            padding-top: 70px;

            display: flex;
            flex-direction: column;
        }

        /* OVERLAY */
        .overlay {
            background: linear-gradient(
                to bottom,
                rgba(0,0,0,0.7),
                rgba(0,0,0,0.95)
            );
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* NAVBAR */
        .navbar {
            backdrop-filter: blur(12px);
            background: rgba(0, 0, 0, 0.6) !important;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .navbar-brand img {
            height: 45px;
        }

        .navbar-brand span {
            font-size: 1.3rem;
            letter-spacing: 1px;
        }

        /* MENU */
        .nav-link {
            color: rgba(255,255,255,0.7);
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #ffc107;
        }

        .nav-link.text-warning {
            font-weight: 600;
        }

        /* BUTTON */
        .btn-warning {
            background: #ffc107;
            border: none;
            border-radius: 10px;
            transition: 0.3s;
        }

        .btn-warning:hover {
            background: #e0a800;
            transform: translateY(-2px);
        }

        .btn-outline-light,
        .btn-danger {
            border-radius: 8px;
        }

        /* BADGE */
        .badge {
            font-size: 0.6rem;
        }

        /* TYPOGRAPHY */
        h1, h2 {
            letter-spacing: 1px;
        }

        p {
            line-height: 1.6;
        }

        /* PRODUCT CARD */
        .product-card {
            background: rgba(255,255,255,0.05);
            border-radius: 15px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            transition: 0.3s;
            height: 100%;
        }

        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.6);
        }

        .product-img {
            height: 220px;
            overflow: hidden;
        }

        .product-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.4s;
        }

        .product-card:hover img {
            transform: scale(1.05);
        }

        .text-muted {
            color: rgba(255,255,255,0.6) !important;
        }

        /* FOOTER MINIMAL */
        .footer-minimal {
            text-align: center;
            color: rgba(255,255,255,0.7);
            font-size: 0.85rem;
            padding: 20px 0;
            margin-top: auto;
        }

        .footer-minimal small {
            letter-spacing: 0.5px;
        }
    </style>
</head>

<body>

<div class="overlay">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('images/logo.png') }}" class="me-2">
                <span class="text-warning fw-bold">Loka Lebung</span>
            </a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">

                <ul class="navbar-nav ms-auto align-items-center gap-3">

                    <li class="nav-item">
                        <a href="/" class="nav-link {{ request()->is('/') ? 'text-warning' : '' }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="/produk" class="nav-link {{ request()->is('produk') ? 'text-warning' : '' }}">Produk</a>
                    </li>

                    <li class="nav-item">
                        <a href="/kontak" class="nav-link {{ request()->is('kontak') ? 'text-warning' : '' }}">Kontak</a>
                    </li>

                    <!-- CART -->
                    <li class="nav-item">
                        <a href="/cart" class="nav-link position-relative">
                            🛒
                            @if(session('cart'))
                            <span class="position-absolute top-0 start-100 translate-middle badge bg-danger">
                                {{ count(session('cart')) }}
                            </span>
                            @endif
                        </a>
                    </li>

                    @auth
                        @if(auth()->user()->is_admin == 1)
                        <li class="nav-item">
                            <a href="/admin/orders" class="btn btn-sm btn-outline-light">Dashboard</a>
                        </li>
                        @endif

                        <li class="nav-item text-light small">
                            Halo, {{ auth()->user()->name }}
                        </li>

                        <li class="nav-item">
                            <a href="/logout" class="btn btn-danger btn-sm">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="/login" class="btn btn-warning btn-sm">Login</a>
                        </li>
                    @endauth

                </ul>

            </div>
        </div>
    </nav>

    <!-- CONTENT -->
    <div class="container pt-4 pb-2">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="footer-minimal">
        <small>© {{ date('Y') }} Loka Lebung - All Rights Reserved</small>
    </footer>

</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>

</body>
</html>