<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Galeri Alam</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <style>
        body {
            background: url("{{ asset('pemanje.jpg') }}") no-repeat center center fixed;
            background-size: cover;
        }

        .login-card {
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(6px);
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 420px;
        }

        .form-label {
            font-weight: 600;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13, 110, 253, .25);
        }

        .btn-primary {
            transition: 0.3s ease-in-out;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }

        .demo-info {
            margin-top: 20px;
            font-size: 0.9rem;
            color: #6c757d;
            text-align: center;
        }
    </style>
</head>
<body class="d-flex align-items-center justify-content-center vh-100">

    <div class="login-card">
        <div class="text-center mb-4">
            <h4>Login<strong>Mahasiswa</strong></h4>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="email" name="email" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Masuk</button>
        </form>

        <div class="demo-info">
            <p><strong>Demo Login:</strong></p>
            <p>Email: <code>test@example.com</code></p>
            <p>Password: <code>12345678</code></p>
        </div>
    </div>

    <script src="{{ asset('assets/jquery-3.6.1.js') }}"></script>
    <script src="{{ asset('assets/bootstrap.min.js') }}"></script>
</body>
</html>
