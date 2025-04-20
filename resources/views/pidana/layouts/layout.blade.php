<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css" rel="stylesheet">
<!-- Bootstrap Bundle JS (Termasuk Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        /* Global styles */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa; /* Light grey background */
        }

        /* Flex container for content and footer */
        .content {
            flex: 1;
        }

        /* Navbar styles */
        .navbar {
            background-color: #2c3e50; /* Dark blue background */
        }
        
        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            margin-right: 15px; /* Beri jarak antara logo dan teks */
            max-height: 50px;   /* Atur tinggi maksimal logo */
            width: auto;        /* Pastikan logo menjaga proporsi */
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 1.1rem;
            margin-right: 15px;
        }

        .navbar-nav .nav-link:hover {
            color: #f39c12; /* Orange on hover */
        }

        /* Hero section background */
        .hero-section {
            background-image: url('https://example.com/elegant-background.jpg');
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        /* Button styles */
        .btn-primary {
            background-color: #f39c12;
            border: none;
            padding: 10px 20px;
            font-size: 1.1rem;
        }

        .btn-primary:hover {
            background-color: #e67e22; /* Darker orange on hover */
        }

        /* Footer styles */
        footer {
            background-color: #2c3e50;
            color: white;
            padding: 20px 0;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            color: #f39c12;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
            <!-- Logo dan teks dalam satu elemen -->
            <img src="{{ asset('storage/photos/logo.png') }}" alt="Logo" width="50" height="50">
            BELAJAR ISENG
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ruang-konsultasi">Ruang Konsultasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/library">Library</a>
                </li>
                <li class="nav-item">
                    @if (Auth::guard('admin')->check() != null)
                        <a class="nav-link" href="{{ route('admin.dashboard') }}">Hi,
                            {{ Auth::guard('admin')->user()->name }}</a>
                    @else
                        <a class="nav-link" href="{{ url('admin/login') }}">Login</a>
                    @endif

                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="content">
    @yield('content')
</div>

<!-- Footer -->
<footer class="text-center mt-auto">
    <div class="container">
        <p>© 2025 Layanan Hukum. All Rights Reserved.</p>
        <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-of-service">Terms of Service</a>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
