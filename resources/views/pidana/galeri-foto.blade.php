@extends('pidana.layouts.layout')

@section('title', 'Galeri Foto')

@section('content')
<!-- Konten galeri dengan background full height sampai footer -->
<div class="container-fluid py-5" style="background: url('{{ asset('storage/photos/IMG_3084.JPG') }}') no-repeat center center fixed; background-size: cover; min-height: 100vh; display: flex; flex-direction: column; justify-content: space-between;">

    <!-- Overlay transparan yang mengikuti halaman -->
    <div class="container-fluid py-5" style="position: relative; background: url('{{ asset('storage/photos/IMG_3084.JPG') }}') no-repeat center center fixed; background-size: cover; min-height: 100vh; display: flex; flex-direction: column; justify-content: space-between;">

    <!-- Konten utama -->
    <div class="container mt-8" style="position: relative; z-index: 2;">
        <h1 class="text-center mb-5" style="color: white; font-size: 3.5rem; font-weight: 800; font-family: 'Playfair Display', serif; letter-spacing: 1px; text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);">
            Galeri Foto Kami
        </h1>

        <!-- Foto galeri dengan jarak antar foto lebih dekat -->
        <div class="row justify-content-center mt-5">
            <!-- Foto Galeri 1 -->
            <div class="col-md-2 mb-2"> <!-- Mengurangi margin-bottom -->
                <img src="{{ asset('storage/photos/HAPPY.jpg') }}" class="img-fluid rounded-circle shadow-lg hover-shadow opal-img" style="max-width: 150px;" alt="Galeri Foto 1" data-bs-toggle="modal" data-bs-target="#photoModal1">
            </div>
            <!-- Foto Galeri 2 -->
            <div class="col-md-2 mb-2">
                <img src="{{ asset('storage/photos/HAPPY.jpg') }}" class="img-fluid rounded-circle shadow-lg hover-shadow opal-img" style="max-width: 150px;" alt="Galeri Foto 2" data-bs-toggle="modal" data-bs-target="#photoModal2">
            </div>
            <!-- Foto Galeri 3 -->
            <div class="col-md-2 mb-2">
                <img src="{{ asset('storage/photos/HAPPY.jpg') }}" class="img-fluid rounded-circle shadow-lg hover-shadow opal-img" style="max-width: 150px;" alt="Galeri Foto 3" data-bs-toggle="modal" data-bs-target="#photoModal3">
            </div>
            <!-- Foto Galeri 4 -->
            <div class="col-md-2 mb-2">
                <img src="{{ asset('storage/photos/HAPPY.jpg') }}" class="img-fluid rounded-circle shadow-lg hover-shadow opal-img" style="max-width: 150px;" alt="Galeri Foto 4" data-bs-toggle="modal" data-bs-target="#photoModal4">
            </div>
        </div>
    </div>

    <!-- Tombol Kembali ke Halaman Tentang Kami -->
    <div class="row mt-5">
        <div class="col text-center">
            <a href="{{ url('/about') }}" class="btn btn-primary btn-lg px-5 py-3 shadow-lg hover-shadow btn-hover">Kembali ke Tentang Kami</a>
        </div>
    </div>
</div>

<!-- Modal untuk Foto -->
@foreach (range(1, 4) as $i)
<div class="modal fade" id="photoModal{{ $i }}" tabindex="-1" aria-labelledby="photoModalLabel{{ $i }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <img src="{{ asset('storage/photos/HAPPY.jpg') }}" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

<style>
    .opal-img {
        opacity: 0.85;
        transition: opacity 0.3s ease-in-out, transform 0.3s;
    }
    .opal-img:hover {
        opacity: 1;
        transform: scale(1.1);
    }

    .rounded-circle:hover {
        transform: scale(1.05);
    }

    .modal-content {
        background-color: rgba(255, 255, 255, 0.95);
        border-radius: 15px;
    }

    .btn-hover:hover {
        background-color: #0056b3;
        color: #fff;
    }
</style>
