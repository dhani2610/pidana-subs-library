<!-- resources/views/subscription.blade.php -->
@extends('pidana.layouts.layout')

@section('content')
<div class="container my-5">
    <h2>Langganan untuk Akses Semua Buku</h2>
    <p>Harga: Rp. {{ number_format($price, 0, ',', '.') }}</p>

    <!-- Form untuk memulai pembayaran -->
    <form action="{{ route('subscription.process') }}" method="POST">
        @csrf
        <input type="hidden" name="amount" value="{{ $price }}">

        <button type="submit" class="btn btn-primary">Bayar dengan QRIS</button>
    </form>
</div>
@endsection
