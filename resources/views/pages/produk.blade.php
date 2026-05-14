@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="produk-hero">
    <div class="container">
        <h1>Solusi Packaging untuk Bisnis Anda</h1>
        <p>Kami menyediakan berbagai jenis kemasan berkualitas tinggi</p>
    </div>
</section>

<!-- CATEGORY CARD -->
<section class="produk-section">
    <div class="container">
        <div class="produk-grid">

            <a href="/katalog/food" class="produk-card">
                <div class="card-content">
                    <h3>Packaging Food</h3>
                    <p>Kemasan untuk makanan & minuman</p>
                </div>
            </a>

            <a href="/katalog/retail" class="produk-card">
                <div class="card-content">
                    <h3>Packaging Retail</h3>
                    <p>Tas & box untuk brand retail</p>
                </div>
            </a>

            <a href="/katalog/custom" class="produk-card">
                <div class="card-content">
                    <h3>Packaging Custom</h3>
                    <p>Desain sesuai kebutuhan brand</p>
                </div>
            </a>

            <a href="/katalog/industri" class="produk-card">
                <div class="card-content">
                    <h3>Packaging Industri</h3>
                    <p>Kemasan skala besar & produksi</p>
                </div>
            </a>

        </div>
    </div>
</section>

@endsection