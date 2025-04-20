@extends('pidana.layouts.layout')

@section('title', 'Landing Page - Layanan Hukum')

@section('content')
<!-- Hero Section dengan Bootstrap Carousel -->
<div id="heroCarousel" class="carousel slide hero-section mb-3 pb-0" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#heroCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#heroCarousel" data-bs-slide-to="2"></li>
        <li data-bs-target="#heroCarousel" data-bs-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active" style="position: relative;">
            <img src="{{ asset('storage/photos/background 1.jpg') }}" class="d-block w-100" alt="Slide 1" style="height: 650px; object-fit: cover;">
            <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center" style="z-index: 2;">
                <h1 class="display-3 font-weight-bold mb-4">Selamat Datang di Pembelajaran</h1>
                <p class="lead mb-4">Solusi hukum terpercaya untuk kebutuhan Anda.</p>
                <a href="{{ route('ruang-konsultasi') }}" class="btn btn-outline-light custom-btn px-5">KONSULTASI &raquo;</a>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="position: relative;">
            <img src="{{ asset('storage/photos/01JPCSEH5ANVF8QNEPPXZCTXVK.jpg') }}" class="d-block w-100" alt="Slide 2" style="height: 650px; object-fit: cover;">
            <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center" style="z-index: 2;">
                <h1 class="display-3 font-weight-bold mb-4">NEWS</h1>
                <p class="lead mb-4">Kami hadir untuk memberikan solusi terbaik bagi Anda.</p>
                <a href="{{ route('news') }}" class="btn btn-outline-light custom-btn px-5">Baca Selengkapnya &raquo;</a>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="position: relative;">
            <img src="{{ asset('storage/photos/POSTER WEB.png') }}" class="d-block w-100" alt="Slide 3" style="height: 650px; object-fit: cover;">
            <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center" style="z-index: 2;">
                <h1 class="display-3 font-weight-bold mb-4">Katalog</h1>
                <p class="lead mb-4">Hubungi pengacara kami kapanpun Anda butuh bantuan.</p>
                <a href="{{ route('library.index') }}" class="btn btn-outline-light custom-btn px-5">Kunjungi &raquo;</a>
            </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item" style="position: relative;">
            <img src="{{ asset('storage/photos/gambar.jpeg') }}" class="d-block w-100" alt="Slide 4" style="height: 650px; object-fit: cover;">
            <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.6); z-index: 1;"></div>
            <div class="carousel-caption d-flex flex-column justify-content-center" style="z-index: 2;">
                <h1 class="display-3 font-weight-bold mb-4">Tentang Kami</h1>
                <p class="lead mb-4">Kami menyediakan buku dengan kualitas terbaik dan terpercaya.</p>
                <a href="{{ route('about') }}" class="btn btn-outline-light custom-btn px-5">Lihat &raquo;</a>
            </div>
        </div>
    </div>
    <hr style="border: 1px solid #ccc; width: 90%; margin: 20px auto;">

        <!-- Controls (prev/next arrows) -->
    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </a>
    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </a>
</div>
<!-- CSS Custom -->
<style>
    .news-title {
        color: rgba(128, 128, 128, 0.8);
        font-size: 1.2rem;
        margin-bottom: 10px; /* Kurangi margin agar lebih dekat */
        margin-top: -250px; /* Naikkan judul agar lebih dekat */

    }

    .news-title h1 {
        display: inline-block;
        margin-right: 10px;    
    }

    .news-description {
        margin-left: 15px;
        margin-top: -5px; /* Kurangi jarak antara judul dan deskripsi */
        color: rgba(128, 128, 128, 0.8);
        font-size: 1rem;
        text-align: justify;
    }
</style>

<!-- Section Judul Berita Hukum di Bawah Carousel -->
<div class="news-title text-start mt-n1 ps-5">
    <h1 class="display-6 font-weight-bold">| Berita Hukum ></h1>
    <p class="news-description">
        Berita terkini seputar perkembangan hukum di Indonesia yang dapat Anda ikuti untuk mendapatkan informasi terbaru. 
    </p>
</div>

<!-- Section Berita Hukum -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card berita-utama" style="margin-bottom: 20px; position: relative;">
                <img src="{{ asset('storage/photos/Hasto.jpg') }}" class="card-img-top" alt="Berita Utama" style="object-fit: cover; height: 400px; width: 100%;">
                <div class="overlay">
                    <h3>HASTO TERJADI TERSANGKA KORUPSI</h3>
                    <p>Tim Hukum Hasto Protes Keras Terhadap KPK Limpahkan Berkas Perkara Besok</p>
                    <a href="{{ route('berita-utama.hotline1') }}" class="btn btn-outline-light custom-btn px-5">Baca Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>

        <!-- Berita Kecil-Kecil di Bawah (2, 3, 4, 5) -->
        <div class="col-md-3">
            <div class="card berita-kecil" style="margin-bottom: 20px; position: relative;">
                <img src="{{ asset('storage/photos/POSTER WEB.png') }}" class="card-img-top" alt="Berita 2" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="overlay">
                    <h3>Berita 2</h3>
                    <p>Deskripsi singkat tentang Berita 2.</p>
                    <a href="{{ route('berita-utama.hotline2') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card berita-kecil" style="margin-bottom: 20px; position: relative;">
                <img src="{{ asset('storage/photos/01JPCSEH5ANVF8QNEPPXZCTXVK.jpg') }}" class="card-img-top" alt="Berita 3" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="overlay">
                    <h3>Berita 3</h3>
                    <p>Deskripsi singkat tentang Berita 3.</p>
                    <a href="{{ route('berita-utama.hotline3') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card berita-kecil" style="margin-bottom: 20px; position: relative;">
                <img src="{{ asset('storage/photos/IMG_3084.JPG') }}" class="card-img-top" alt="Berita 4" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="overlay">
                    <h3>Berita 4</h3>
                    <p>Deskripsi singkat tentang Berita 4.</p>
                    <a href="{{ route('berita-utama.hotline4') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card berita-kecil" style="margin-bottom: 20px; position: relative;">
                <img src="{{ asset('storage/photos/IMG_3084.JPG') }}" class="card-img-top" alt="Berita 5" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="overlay">
                    <h3>Berita 5</h3>
                    <p>Deskripsi singkat tentang Berita 5.</p>
                    <a href="{{ route('berita-utama.hotline5') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr style="border: 1px solid #ccc; width: 90%; margin: 20px auto;">

<!-- Section Judul Artikel di Bawah Carousel -->
<div class="news-title text-start my-0 ps-5">
    <h1 class="display-6 font-weight-bold">| Artikel ></h1>
    <p class="news-description">
        Artikel menarik mengenai perkembangan hukum di Indonesia, memberikan wawasan dan analisis terbaru yang relevan dengan kondisi sosial, politik, dan ekonomi saat ini. 
    </p>
</div>

<!-- Section Hotline Artikel di bawah judul NEWS -->
<div class="container">
    <div class="row">
        <!-- Kotak Hotline 1 -->
        <div class="col-md-6">
            <div class="card hotline-1" style="margin-bottom: 20px;">
                <div class="image-container">
                    <img src="{{ asset('storage/photos/breaking.jpeg') }}" class="card-img-top" alt="Hotline 1 Image" style="object-fit: cover; height: 400px; width: 100%;">
                    <div class="overlay">
                        <h3>Hotline 1</h3>
                        <p>Deskripsi singkat tentang Hotline 1, memberikan layanan terbaik untuk Anda.</p>
                        <a href="{{ route('artikel.artikel1') }}" class="btn btn-outline-light custom-btn px-5">Baca Selengkapnya &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kotak Hotline 2, 3, 4, 5 -->
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card hotline-2" style="margin-bottom: 20px;">
                        <div class="image-container">
                            <img src="{{ asset('storage/photos/IMG_3084.JPG') }}" class="card-img-top" alt="Hotline 2 Image" style="object-fit: cover; height: 190px; width: 100%;">
                            <div class="overlay">
                                <h3>Hotline 2</h3>
                                <p>Layanan Hotline 2 siap membantu Anda.</p>
                                <a href="{{ route('artikel.artikel2') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card hotline-3" style="margin-bottom: 60px;">
                        <div class="image-container">
                            <img src="{{ asset('storage/photos/konsultasi.png') }}" class="card-img-top" alt="Hotline 3 Image" style="object-fit: cover; height: 190px; width: 100%;">
                            <div class="overlay">
                                <h3>Hotline 3</h3>
                                <p>Konsultasi dengan Hotline 3 kapan saja.</p>
                                <a href="{{ route('artikel.artikel3') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card hotline-4" style="margin-bottom: 20px;">
                        <div class="image-container">
                            <img src="{{ asset('storage/photos/background 1.jpg') }}" class="card-img-top" alt="Hotline 4 Image" style="object-fit: cover; height: 200px; width: 100%;">
                            <div class="overlay">
                                <h3>Hotline 4</h3>
                                <p>Layanan Hotline 4, tersedia 24/7 untuk Anda.</p>
                                <a href="{{ route('artikel.artikel4') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card hotline-5" style="margin-bottom: 100px;">
                        <div class="image-container">
                            <img src="{{ asset('storage/photos/IMG_3084.JPG') }}" class="card-img-top" alt="Hotline 5 Image" style="object-fit: cover; height: 200px; width: 100%;">
                            <div class="overlay">
                                <h3>Hotline 5</h3>
                                <p>Bergabunglah dengan Hotline 5 untuk layanan eksklusif.</p>
                                <a href="{{ route('artikel.artikel5') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr style="border: 1px solid #ccc; width: 90%; margin: 20px auto;">

<!-- Section Judul NEWS di Bawah Carousel -->
<div class="news-title text-start my-0 ps-5">
    <h1 class="display-6 font-weight-bold">| News ></h1>
    <p class="news-description">
        Kami menghadirkan informasi terkini yang relevan, mulai dari kasus-kasus hukum, peraturan baru, hingga perubahan kebijakan yang berdampak luas. 
    </p>
    </div>

<!-- Section Hotline News di bawah judul NEWS -->
<div class="container">
    <div class="row">
        <!-- Kotak Hotline 1 -->
        <div class="col-md-6">
            <div class="card hotline-1" style="margin-bottom: 50px;">
                <div class="image-container">
                    <img src="{{ asset('storage/photos/gambar.jpeg') }}" class="card-img-top" alt="Hotline 1 Image" style="object-fit: cover; height: 400px; width: 100%;">
                    <div class="overlay">
                        <h3>Hotline 1</h3>
                        <p>Deskripsi singkat tentang Hotline 1, memberikan layanan terbaik untuk Anda.</p>
                        <a href="{{ route('newss.news1') }}" class="btn btn-outline-light custom-btn px-5">Baca Selengkapnya &raquo;</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Kotak Hotline 2, 3, 4, 5 -->
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-6">
                    <div class="card hotline-2" style="margin-bottom: 20px;">
                        <div class="image-container">
                            <img src="{{ asset('storage/photos/IMG_3084.JPG') }}" class="card-img-top" alt="Hotline 2 Image" style="object-fit: cover; height: 190px; width: 100%;">
                            <div class="overlay">
                                <h3>Hotline 2</h3>
                                <p>Layanan Hotline 2 siap membantu Anda.</p>
                                <a href="{{ route('newss.news2') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card hotline-3" style="margin-bottom: 60px;">
                        <div class="image-container">
                            <img src="{{ asset('storage/photos/konsultasi.png') }}" class="card-img-top" alt="Hotline 3 Image" style="object-fit: cover; height: 190px; width: 100%;">
                            <div class="overlay">
                                <h3>Hotline 3</h3>
                                <p>Konsultasi dengan Hotline 3 kapan saja.</p>
                                <a href="{{ route('newss.news3') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card hotline-4" style="margin-bottom: 20px;">
                        <div class="image-container">
                            <img src="{{ asset('storage/photos/background 1.jpg') }}" class="card-img-top" alt="Hotline 4 Image" style="object-fit: cover; height: 200px; width: 100%;">
                            <div class="overlay">
                                <h3>Hotline 4</h3>
                                <p>Layanan Hotline 4, tersedia 24/7 untuk Anda.</p>
                                <a href="{{ route('newss.news4') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card hotline-5" style="margin-bottom: 100px;">
                        <div class="image-container">
                            <img src="{{ asset('storage/photos/IMG_3084.JPG') }}" class="card-img-top" alt="Hotline 5 Image" style="object-fit: cover; height: 200px; width: 100%;">
                            <div class="overlay">
                                <h3>Hotline 5</h3>
                                <p>Bergabunglah dengan Hotline 5 untuk layanan eksklusif.</p>
                                <a href="{{ route('newss.news5') }}" class="btn btn-outline-light custom-btn px-2 py-1" style="font-size: 12px;">Baca Selengkapnya &raquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr style="border: 1px solid #ccc; width: 90%; margin: 20px auto;">
<section id="katalog" class="py-5 katalog">
    <div class="container">
        <!-- Judul Section -->
        <h2 class="text-center section-title mb-5" style="font-size: 2.0rem; font-weight: bold; color: #333;">Katalog Kami</h2>
        <div class="row">
            <!-- Katalog Item 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-img-container" style="overflow: hidden; border-radius: 10px;">
                        <img src="{{ asset('storage/images/buku1.jpeg') }}" class="card-img-top katalog-img" alt="Katalog 1" style="transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Katalog Item 1</h5>
                        <p class="card-text">Deskripsi singkat tentang item 1 di katalog.</p>
                        <a href="#" class="btn btn-primary" style="opacity: 0.85; font-size: 0.875rem; padding: 8px 20px;">Kunjungi</a>
                    </div>
                </div>
            </div>
            <!-- Katalog Item 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-img-container" style="overflow: hidden; border-radius: 10px;">
                        <img src="{{ asset('storage/images/buku2.jpeg') }}" class="card-img-top katalog-img" alt="Katalog 2" style="transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Katalog Item 2</h5>
                        <p class="card-text">Deskripsi singkat tentang item 2 di katalog.</p>
                        <a href="#" class="btn btn-primary" style="opacity: 0.85; font-size: 0.875rem; padding: 8px 20px;">Kunjungi</a>
                    </div>
                </div>
            </div>
            <!-- Katalog Item 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-img-container" style="overflow: hidden; border-radius: 10px;">
                        <img src="{{ asset('storage/images/buku3.jpeg') }}" class="card-img-top katalog-img" alt="Katalog 3" style="transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Katalog Item 3</h5>
                        <p class="card-text">Deskripsi singkat tentang item 3 di katalog.</p>
                        <a href="#" class="btn btn-primary" style="opacity: 0.85; font-size: 0.875rem; padding: 8px 20px;">Kunjungi</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Katalog Item 4 -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-img-container" style="overflow: hidden; border-radius: 10px;">
                        <img src="{{ asset('storage/images/buku4.jpeg') }}" class="card-img-top katalog-img" alt="Katalog 4" style="transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Katalog Item 4</h5>
                        <p class="card-text">Deskripsi singkat tentang item 4 di katalog.</p>
                        <a href="#" class="btn btn-primary" style="opacity: 0.85; font-size: 0.875rem; padding: 8px20px;">Kunjungi</a>
                    </div>
                </div>
            </div>
            <!-- Katalog Item 5 -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-img-container" style="overflow: hidden; border-radius: 10px;">
                        <img src="{{ asset('storage/images/buku5.jpeg') }}" class="card-img-top katalog-img" alt="Katalog 5" style="transition: transform 0.3s ease;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Katalog Item 5</h5>
                        <p class="card-text">Deskripsi singkat tentang item 5 di katalog.</p>
                        <a href="#" class="btn btn-primary" style="opacity: 0.85; font-size: 0.875rem; padding: 8px 20px;">Kunjungi</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS untuk memperbagus tampilan -->
<style>
    .katalog-img:hover {
        transform: scale(1.05);
    }

    .btn-primary {
        background-color: #dd1212;
        border: none;
        border-radius: 30px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #dd1212;
    }

    .section-title {
        font-size: 2.5rem;
        color: #333;
        margin-bottom: 30px;
    }
</style>

<hr style="border: 1px solid #ccc; width: 90%; margin: 20px auto;">

<!-- Custom CSS -->
<style>
    .image-container {
        position: relative;
        width: 100%;
    }

    .image-container img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.5);
        color: white;
        padding: 15px;
        text-align: center;
    }

    .btn-selengkapnya {
        background-color: #007bff;
        border: none;
    }

    .news-title h1 {
        color: #333;
        font-weight: bold;
        font-size: 2.5rem;
    }

    .btn-selengkapnya {
    background-color: transparent;
    border: 2px solid white;
    padding: 8px 12px; /* Ukuran padding lebih kecil */
    color: white;
    font-size: 10px; /* Ukuran font lebih kecil */
    font-weight: normal; /* Menghilangkan bold */
    text-transform: uppercase;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.btn-selengkapnya:hover {
    background-color: white;
    color: black;
}

    .berita-kecil .overlay,
    .berita-utama .overlay,
    .hotline-1 .overlay,
    .hotline-2 .overlay,
    .hotline-3 .overlay,
    .hotline-4 .overlay,
    .hotline-5 .overlay {
        background: rgba(0, 0, 0, 0.6);
        padding: 10px;
        text-align: center;
    }

    .berita-kecil .overlay h3,
    .berita-utama .overlay h3,
    .hotline-1 .overlay h3,
    .hotline-2 .overlay h3,
    .hotline-3 .overlay h3,
    .hotline-4 .overlay h3,
    .hotline-5 .overlay h3 {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .berita-kecil .overlay p,
    .berita-utama .overlay p,
    .hotline-1 .overlay p,
    .hotline-2 .overlay p,
    .hotline-3 .overlay p,
    .hotline-4 .overlay p,
    .hotline-5 .overlay p {
        font-size: 1rem;
    }
</style>

<div class="container mt-5" style="max-width: 80%;">
    <h2 class="text-center mb-9">Video Terbaru</h2>
    <div class="row justify-content-center">

        <div class="container mt-5">
            <div class="row justify-content-center">
                <!-- Video 1 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <h5 class="card-title text-center">Video 1</h5>
                        <!-- Thumbnail gambar dari YouTube -->
                        <a href="https://youtu.be/TQJnxFFYYik" target="_blank">
                            <img class="img-fluid" src="https://img.youtube.com/vi/TQJnxFFYYik/0.jpg" alt="Thumbnail Video 1">
                        </a>
                        <div class="card-body text-center">
                            <p class="card-text">Pentingnya memiliki pengacara yang terpercaya.</p>
                            <!-- Tombol Tonton Sekarang mengarah ke YouTube -->
                            <a href="https://youtu.be/TQJnxFFYYik" target="_blank" class="btn btn-primary btn-sm" 
                            style="opacity: 0.95; font-size: 0.75rem; padding: 7px 50px; border-radius: 0.25rem;">Tonton Sekarang</a>
                        </div>
                    </div>
                </div>
        
                <!-- Video 2 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <h5 class="card-title text-center">Video 2</h5>
                        <!-- Thumbnail gambar dari YouTube -->
                        <a href="https://youtu.be/73EnzEWg_8k" target="_blank">
                            <img class="img-fluid" src="https://img.youtube.com/vi/73EnzEWg_8k/0.jpg" alt="Thumbnail Video 2">
                        </a>
                        <div class="card-body text-center">
                            <p class="card-text">Penjelasan hak dan kewajiban Anda di bawah hukum.</p>
                            <!-- Tombol Tonton Sekarang mengarah ke YouTube -->
                            <a href="https://youtu.be/73EnzEWg_8k" target="_blank" class="btn btn-primary btn-sm" 
                            style="opacity: 0.95; font-size: 0.75rem; padding: 7px 50px; border-radius: 0.25rem;">Tonton Sekarang</a>
                        </div>
                    </div>
                </div>
        
                <!-- Video 3 -->
                <div class="col-md-4">
                    <div class="card mb-4">
                        <h5 class="card-title text-center">Video 3</h5>
                        <!-- Thumbnail gambar dari YouTube -->
                        <a href="https://youtu.be/LDmMoRS_AJE" target="_blank">
                            <img class="img-fluid" src="https://img.youtube.com/vi/LDmMoRS_AJE/0.jpg" alt="Thumbnail Video 3">
                        </a>
                        <div class="card-body text-center">
                            <p class="card-text">Penjelasan hak dan kewajiban Anda di bawah hukum.</p>
                            <!-- Tombol Tonton Sekarang mengarah ke YouTube -->
                            <a href="https://youtu.be/LDmMoRS_AJE" target="_blank" class="btn btn-primary btn-sm" 
                            style="opacity: 0.95; font-size: 0.75rem; padding: 7px 50px; border-radius: 0.25rem;">Tonton Sekarang</a>
                         </div>
                    </div>
                </div>

                <!-- Row kedua untuk video tambahan -->
                <div class="row justify-content-center">
                    <!-- Kolom Video 4 -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <h5 class="card-title text-center">Video 4</h5>
                            <a href="https://youtu.be/ETxTAptIzNI?si=4u45q3bvDLmzY6B9" target="_blank">
                                <img class="img-fluid" src="https://img.youtube.com/vi/ETxTAptIzNI/0.jpg" alt="Thumbnail Video 4">
                            </a>
                            <div class="card-body text-center">
                                <p class="card-text">Mengetahui hak hukum Anda secara lengkap.</p>
                                <a href="https://youtu.be/ETxTAptIzNI?si=4u45q3bvDLmzY6B9" target="_blank" class="btn btn-primary btn-sm" 
                                style="opacity: 0.95; font-size: 0.75rem; padding: 7px 50px; border-radius: 0.25rem;">Tonton Sekarang</a>
                             </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card mb-4">
                            <h5 class="card-title text-center">Video 5</h5>
                            <!-- Thumbnail gambar dari YouTube -->
                            <a href="https://www.youtube.com/live/nPnZhLOE4jA?si=_7cyXPD_ct4GakQQ" target="_blank">
                                <img class="img-fluid" src="https://img.youtube.com/vi/nPnZhLOE4jA/0.jpg" alt="Thumbnail Video 3">
                            </a>
                            <div class="card-body text-center">
                                <p class="card-text">Penjelasan hak dan kewajiban Anda di bawah hukum.</p>
                                <!-- Tombol Tonton Sekarang mengarah ke YouTube -->
                                <a href="https://www.youtube.com/live/nPnZhLOE4jA?si=_7cyXPD_ct4GakQQ" target="_blank" class="btn btn-primary btn-sm" 
                                style="opacity: 0.95; font-size: 0.75rem; padding: 7px 50px; border-radius: 0.25rem;">Tonton Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <!-- Kolom Video 6 -->
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <h5 class="card-title text-center">Video 5</h5>
                            <!-- Thumbnail gambar dari YouTube -->
                            <a href="https://www.youtube.com/live/SdXSKBFmM5Q?si=6YTNZMg7vZX8wHcM" target="_blank">
                                <img class="img-fluid" src="https://img.youtube.com/vi/SdXSKBFmM5Q/0.jpg" alt="Thumbnail Video 3">
                            </a>
                            <div class="card-body text-center">
                                <p class="card-text">Penjelasan hak dan kewajiban Anda di bawah hukum.</p>
                                <!-- Tombol Tonton Sekarang mengarah ke YouTube -->
                                <a href="https://www.youtube.com/live/SdXSKBFmM5Q?si=6YTNZMg7vZX8wHcM" target="_blank" class="btn btn-primary btn-sm" 
                                style="opacity: 0.95; font-size: 0.75rem; padding: 7px 50px; border-radius: 0.25rem;">Tonton Sekarang</a>
                            </div>
                        </div>
                    </div>
              </div>
         </div>
     </div>
</div>
<hr style="border: 1px solid #ccc; width: 90%; margin: 20px auto;">

<!-- Tombol Mulai Konsultasi & Tentang Kami di Bawah Carousel -->
<div class="text-center mt-3">
    <p style="margin-top: 100px;">
    <a href="{{ route('ruang-konsultasi') }}" class="btn btn-primary btn-lg mx-2">Mulai Konsultasi</a>
    <a href="{{ route('about') }}" class="btn btn-secondary btn-lg mx-2">Tentang Kami</a>
</div>

<!-- Section "Kenapa Memilih Kami?" -->
<div class="container py-5">
    <h2 class="text-center mb-4">Kenapa Memilih Kami?</h2>
    <div class="row text-center">
        <div class="col-md-4">
            <div class="icon-box mb-4">
                <i class="bi bi-shield-check display-4 text-primary"></i>
            </div>
            <h4>Keamanan Data</h4>
            <p>Data pribadi Anda aman dengan perlindungan enkripsi tingkat tinggi.</p>
        </div>
        <div class="col-md-4">
            <div class="icon-box mb-4">
                <i class="bi bi-lightbulb display-4 text-primary"></i>
            </div>
            <h4>Solusi Terbaik</h4>
            <p>Kami menyediakan solusi hukum yang praktis dan efektif untuk setiap kebutuhan Anda.</p>
        </div>
        <div class="col-md-4">
            <div class="icon-box mb-4">
                <i class="bi bi-people display-4 text-primary"></i>
            </div>
            <h4>Tim Profesional</h4>
            <p>Tim kami terdiri dari pengacara profesional dan berpengalaman.</p>
        </div>
    </div>
</div>

<!-- Section Ikon Alamat, Email, dan Sosial Media -->
<div class="container py-5">
    <!-- Heading "Sosial Media" di sebelah kanan tanpa bold dan dengan ukuran lebih kecil -->
    <h4 class="text-end mb-3" style="font-weight: normal; font-size: 18px;">Sosial Media</h4>
    
    <div class="row">
        <!-- Kolom Sosial Media -->
        <div class="col-md-6 offset-md-6 text-end">
            <!-- Sosial Media (Instagram, YouTube, Facebook) dalam satu baris -->
            <div class="d-flex justify-content-end align-items-center mb-3">
                <!-- Instagram -->
                <div class="icon-contact mx-2">
                    <a href="https://instagram.com" target="_blank" style="color: #E1306C;">
                        <i class="bi bi-instagram display-6"></i>
                    </a>
                </div>
                <!-- YouTube -->
                <div class="icon-contact mx-2">
                    <a href="https://youtube.com" target="_blank" style="color: #FF0000;">
                        <i class="bi bi-youtube display-6"></i>
                    </a>
                </div>
                <!-- Facebook -->
                <div class="icon-contact mx-2">
                    <a href="https://facebook.com" target="_blank" style="color: #1877F2;">
                        <i class="bi bi-facebook display-6"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS tambahan -->
<style>
    .carousel-indicators {
        display: none; /* Menghilangkan titik-titik indikator di bawah carousel */
    }

    .custom-btn {
        font-size: 14px; /* Memperkecil ukuran teks tombol */
        padding: 10px 20px; /* Ukuran padding tombol lebih ramping */
    }

    .icon-box i {
        transition: transform 0.3s ease; /* Efek animasi zoom */
    }

    .icon-box:hover i {
        transform: scale(1.2); /* Perbesar ikon saat hover */
    }
/* Styling untuk Judul NEWS */
.news-title h1{
    color: #333; /* Warna teks */
    letter-spacing: 2px; /* Jarak antar huruf */
    font-size: 24px; /* Ukuran font lebih kecil */
}

/* Posisikan NEWS lebih ke kanan */
.news-title {
    text-align: left;
    margin-left: 150px; /* Gunakan margin-left untuk menggeser ke kanan */
}
/* Kotak besar untuk Hotline 1 */
.hotline-1 {
    height: 300px; /* Tinggi kotak besar */
    background-color: #f8f9fa;
    margin-bottom: 20px;
}

/* Kotak kecil untuk Hotline 2, 3, 4, 5 */
.hotline-2, .hotline-3, .hotline-4, .hotline-5 {
    height: 140px; /* Tinggi kotak kecil */
    background-color: #f1f1f1;
    margin-bottom: 20px;
}

/* Styling umum untuk semua kotak */
.card {
    border: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.card-body h3 {
    font-size: 18px;
    font-weight: bold;
}

.card-body p {
    font-size: 14px;
}

/* style yt */
    .embed-responsive-16by9 {
        padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
        position: relative;
        height: 0;
        overflow: hidden;
        max-width: 100%;
        background: #000;
    }

    .embed-responsive-item {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .card-title {
        font-size: 16px;
        font-weight: bold;
    }

    .card-text {
        font-size: 14px;
    }

    h2 {
        font-size: 28px;
        font-weight: bold;
        text-transform: uppercase;
    }

    .card-body {
  text-align: center; /* Agar tombol berada di tengah */
}
/* Styling untuk Judul Teknologi */
.tech-title h1 {
    color: #333;
    letter-spacing: 2px;
    font-size: 18px;
    writing-mode: vertical-lr; /* Menyusun teks vertikal */
    text-align: right;
    margin-top: 100px;
    margin-left: 50px;
}

/* Styling Card Teknologi */
.card {
    transition: transform 0.3s ease;
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card:hover {
    transform: scale(1.05); /* Efek zoom saat hover */
}

.card-title {
    font-size: 16px; /* Ukuran font lebih kecil */
    font-weight: bold;
}

.card-text {
    font-size: 14px; /* Ukuran font lebih kecil */
}

.card-img-top {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    height: 200px;
    object-fit: cover; /* Gambar menyesuaikan dengan ukuran card */
}

.custom-btn {
    font-size: 14px;
    padding: 10px 20px; /* Ukuran padding tombol lebih ramping */
}
/* icon BOX  */
/* Untuk ikon di bagian "Hubungi Kami" */
.icon-contact {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 40px; /* Ukuran lebih kecil untuk kontak */
    width: 40px;  /* Ukuran lebih kecil untuk kontak */
    margin: 0 auto;
    border-radius: 70%;
    background-color: rgba(0, 123, 255, 0.1); /* Background soft biru default */
}

.icon-contact i {
    font-size: 2rem; /* Ukuran ikon lebih kecil hanya di bagian kontak */
}

/* Untuk ikon di bagian "Kenapa Memilih Kami?" tetap besar */
.icon-box i {
    font-size: 4rem; /* Ukuran ikon besar */
}

</style>
@endsection