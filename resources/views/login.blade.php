<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">

<div class="card shadow-lg p-4 border-0" style="width: 380px; border-radius: 12px;">

    <h3 class="text-center mb-4 fw-bold">Login Admin</h3>

    @if(session('error'))
        <div class="alert alert-danger py-2">{{ session('error') }}</div>
    @endif

    <form method="POST" action="/login">
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>

        <!-- Password -->
        <div class="mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <!-- Buttons -->
        <div class="d-grid gap-2 mt-3">

            <button class="btn btn-warning fw-semibold">
                Login
            </button>

            <a href="/" class="btn btn-outline-secondary">
                Batal
            </a>

        </div>

    </form>
</div>

</body>
</html>