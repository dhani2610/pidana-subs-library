@extends('pidana.layouts.layout')

@section('title', 'Ruang Konsultasi - Layanan Hukum')

@section('content')
<div class="container-sm mt-5">
    <h2 class="forum-header">Forum Konsultasi Hukum</h2>

    <!-- Tombol WhatsApp -->
    <div class="whatsapp-button mt-4 text-center">
        <a href="https://wa.me/6282113897385" target="_blank" class="btn-whatsapp">
            <i class="fab fa-whatsapp fa-lg"></i> Hubungi Kami via WhatsApp
        </a>
    </div>

    <!-- Konten Tambahan di Bawah WhatsApp -->
    <div class="additional-info mt-5">
        <h5>Cara Kerja Konsultasi</h5>
        <p>Konsultasi hukum online kami sangat mudah digunakan. Cukup ajukan pertanyaan Anda melalui formulir di atas, dan tim ahli hukum kami akan merespons secepat mungkin. Anda juga dapat menghubungi kami langsung via WhatsApp untuk respons lebih cepat.</p>

        <h5>Keamanan Data</h5>
        <p>Kami menjaga kerahasiaan dan keamanan data Anda dengan sangat serius. Semua komunikasi Anda dengan kami dilindungi dan tidak akan dibagikan kepada pihak ketiga tanpa izin Anda.</p>

        <h5>Jam Operasional</h5>
        <p>Tim kami tersedia untuk konsultasi hukum dari Senin hingga Jumat, pukul 09:00 - 18:00. Silakan kirim pertanyaan kapan saja, dan kami akan menghubungi Anda selama jam operasional.</p>
    </div>
</div>
@endsection

<!-- CSS -->
<style>
    .forum-header {
        text-align: center;
        margin-top: 50px;
        margin-bottom: 40px;
        font-size: 2.5rem;
        color: #2c3e50;
        font-weight: 400;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        background: linear-gradient(90deg, #3498db, #4e504f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
    }

    .card {
        border: none;
    }

    .form-input {
        border: 2px solid #e3e3e3;
        border-radius: 6px;
        padding: 10px;
        transition: border-color 0.3s ease;
    }

    .form-input:focus {
        border-color: #3498db;
        outline: none;
        box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
    }

    .whatsapp-button a {
        display: inline-block;
        background-color: #25D366;
        color: white;
        padding: 10px 20px;
        border-radius: 50px;
        font-size: 18px;
        text-decoration: none;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .whatsapp-button a i {
        margin-right: 10px;
        transition: transform 0.3s ease;
    }

    .whatsapp-button a:hover {
        background-color: #1ebe5b;
        transform: translateY(-3px);
    }

    .whatsapp-button a:hover i {
        transform: rotate(20deg);
    }

    .btn-whatsapp {
        display: inline-flex;
        align-items: center;
        font-weight: bold;
    }

    .user-message, .ai-message {
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .user-message {
        background-color: #e7f3fe;
        text-align: right;
    }

    .ai-message {
        background-color: #f1f0f0;
        text-align: left;
    }

    /* Additional Info */
    .additional-info h5 {
        margin-top: 20px;
        font-weight: bold;
        color: #2c3e50;
    }

    .additional-info p {
        font-size: 16px;
        line-height: 1.6;
        color: #555;
    }
</style>
