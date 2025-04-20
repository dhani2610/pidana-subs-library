@extends('pidana.layouts.layout')

@section('content')
<div class="container my-5">
    <!-- Section Heading -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">{{ $book->judul }}</h2>
        <!-- Button to Download PDF -->
        <a href="{{ $filePath }}" class="btn btn-primary btn-lg" target="_blank" style="transition: background-color 0.3s ease;">Download PDF</a>
    </div>

    <!-- PDF Viewer -->
    <div class="pdf-viewer shadow-lg" style="border-radius: 10px; overflow: hidden;">
        <iframe src="{{ $filePath }}" style="width: 100%; height: 80vh; border: none;">
            Browser Anda tidak mendukung tampilan PDF. 
            <a href="{{ $filePath }}" class="text-decoration-underline">Klik di sini untuk mendownload file</a>.
        </iframe>
    </div>
</div>
@endsection
