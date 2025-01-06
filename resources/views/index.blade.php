@extends('layouts.minimal')

@section('title', 'PLN BELAWAN NUSANTARA')

@section('content')
<div class="background1">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="background-image">
            <div class="form-card">
                <h2>Form Laporan</h2>
                <p>Tekan tombol di bawah untuk membuat laporan.</p>
                <a href="/tambahlaporan" class="btn">+Buat Laporan</a>
            </div>
        </div>
    </div>
</div>
@endsection