<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/DataTables-1.13.3/css/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            width: 240px;
            background: linear-gradient(180deg, #dc3545, #a71d2a);
            color: #fff;
        }
        .sidebar .nav-link {
            color: #fff;
            transition: background-color 0.2s;
        }
        .sidebar .nav-link:hover {
            background-color: rgba(255,255,255,0.2);
        }
        .navbar-brand {
            font-weight: bold;
            color: #dc3545;
        }
        .card {
            background: #fff;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>
    <div class="d-flex" style="min-height: 100vh;">
        <div class="sidebar p-3">
            <div class="mb-4 text-center">
                <img src="{{ asset('assets/image/logo.png') }}" style="max-width: 150px; height: auto;" alt="Logo">
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/"  class="nav-link"><i class="fas fa-home me-2"></i> Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('mahasiswa') }}" class="nav-link"><i class="fas fa-users me-2"></i> Data Mahasiswa</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link"><i class="fas fa-users me-2"></i> Logout</a>
                </li>
            </ul>
        </div>
        <div class="flex-fill">
            <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 shadow-sm">
                <span class="navbar-brand">Sistem Akademik</span>
                <div class="ms-auto">
                    <span class="navbar-text">Selamat Datang, {{ Auth::user()->name }}</span>
                </div>
            </nav>
            <div class="p-4">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/jquery-3.6.1.js') }}"></script>
    <script src="{{ asset('assets/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/DataTables-1.13.3/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/DataTables-1.13.3/js/dataTables.bootstrap5.js') }}"></script>
    @yield('scripts')
</body>
</html>
