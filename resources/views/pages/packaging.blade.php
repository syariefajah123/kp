@extends('layouts.app')

@section('content')

<!-- PACKAGING INDUSTRI -->

<section class="industry-section">

    <div class="section-title">

        <span>KATEGORI INDUSTRI</span>

        <h2>Packaging Industri</h2>

        <p>
            Solusi packaging modern untuk berbagai kebutuhan bisnis dan industri.
        </p>

    </div>

    <div class="industry-grid">

        <!-- CARD 1 -->
        <div class="industry-card">

            <div class="industry-icon">
                <i class="fa-solid fa-mug-hot"></i>
            </div>

            <h3>Packaging Makanan & Minuman</h3>

            <p>
                Solusi F&B Packaging premium untuk cafe,
                restoran, franchise, dan bisnis kuliner.
            </p>

            <div class="industry-tags">

                <span>Paper Cup</span>
                <span>Food Box</span>
                <span>Lunch Box</span>
                <span>Bowl</span>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="industry-card">

            <div class="industry-icon">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>

            <h3>Paper Bag & Shopping Bag</h3>

            <p>
                Tas kertas premium dan eco-friendly
                untuk retail dan kebutuhan branding.
            </p>

            <div class="industry-tags">

                <span>Kraft Bag</span>
                <span>Shopping Bag</span>
                <span>Gift Bag</span>
                <span>Carry Bag</span>

            </div>

        </div>

    </div>

</section>

<!-- MATERIAL SECTION -->

<section class="material-section">

    <div class="section-title">

        <h2>Material Berkualitas Tinggi</h2>

        <p>
            Semua produk kami menggunakan material pilihan yang aman dan ramah lingkungan.
        </p>

    </div>

    <div class="material-grid">

        <div class="material-card">

            <div class="material-icon">
                <i class="fa-solid fa-shield-halved"></i>
            </div>

            <h3>Food-Grade Certified</h3>

            <p>
                Aman untuk kontak langsung dengan makanan
            </p>

        </div>

        <div class="material-card">

            <div class="material-icon">
                <i class="fa-solid fa-leaf"></i>
            </div>

            <h3>Eco-Friendly</h3>

            <p>
                Dapat didaur ulang dan ramah lingkungan
            </p>

        </div>

        <div class="material-card">

            <div class="material-icon">
                <i class="fa-solid fa-award"></i>
            </div>

            <h3>Bersertifikat SNI</h3>

            <p>
                Memenuhi standar nasional Indonesia
            </p>

        </div>

    </div>

</section>
<!-- CTA SECTION -->
<section class="cta-section">
    <div class="cta-box">
        <h2>Siap Memulai Kemitraan dengan Kami?</h2>

        <p>
            Hubungi kami sekarang untuk konsultasi gratis dan penawaran terbaik.
        </p>

        <div class="cta-buttons">

            <!-- BUTTON HUBUNGI -->
            <a href="{{ url('/hubungi-kami') }}" class="btn-primary">
                Hubungi Kami →
            </a>

            <!-- BUTTON PRODUK -->
            <a href="{{ url('/katalog') }}" class="btn-secondary">
                Lihat Produk
            </a>

        </div>
    </div>
</section>

@endsection