@extends('pidana.layouts.layout')

@section('content')
<div class="container my-5">
    <h2>Pembayaran Berhasil!</h2>

    @if(session('qris'))
        <p>Silakan bayar dengan memindai kode QRIS di bawah ini:</p>
        <img src="{{ asset('storage/qris/QRIS.jpeg') }}" alt="QRIS Code" style="max-width: 300px;">
    @endif

    <p>Terima kasih telah berlangganan akses untuk semua buku.</p>
</div>
@endsection
