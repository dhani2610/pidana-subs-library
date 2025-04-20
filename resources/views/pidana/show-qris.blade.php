@extends('pidana.layouts.layout')

@section('content')
<div class="container my-5">
    <h2>Pembayaran QRIS</h2>
    <p>Silakan scan QR Code di bawah ini untuk melakukan pembayaran.</p>
    
    <div class="text-center">
        <img src="{{ asset('storage/qris/QRIS.jpeg') }}" alt="QRIS Barcode" style="width: 300px; height: 300px;">
    </div>
    
    <p>Harga: Rp. 100.000</p>
</div>
@endsection
