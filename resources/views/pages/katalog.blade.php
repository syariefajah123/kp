@extends('layouts.app')

@section('content')

<!-- HERO KATALOG -->

<section class="catalog-hero">

    <div class="catalog-overlay"></div>

    <div class="catalog-content">

        <span>KATALOG PRODUK</span>

        <h1>
            Solusi Packaging <br>
            Untuk Semua Industri
        </h1>

        <p>
            Temukan berbagai pilihan kemasan premium
            untuk UMKM, cafe, restoran, corporate,
            hingga kebutuhan custom branding.
        </p>

    </div>

</section>

<!-- SECTION KATALOG -->

<section class="catalog-section">

    <!-- FILTER -->
    <div class="filter">

        <button class="active" onclick="filterProduk('all')">
            Semua
        </button>

        <button onclick="filterProduk('cup')">
            Paper Cup
        </button>

        <button onclick="filterProduk('bag')">
            Paper Bag
        </button>

        <button onclick="filterProduk('container')">
            Container
        </button>

        <button onclick="filterProduk('bowl')">
            Paper Bowl
        </button>

        <button onclick="filterProduk('custom')">
            Custom
        </button>

        <button onclick="filterProduk('accessories')">
            Accessories
        </button>

    </div>

    <!-- GRID -->
    <div class="grid" id="produkList">

        <!-- CARD -->
        <div class="card cup">

            <img src="/images/cup.jpeg" alt="Paper Cup">

            <h3>Gelas Plastik atau Gelas Kertas</h3>

            <p>
                Gelas kertas berkualitas tinggi untuk minuman panas dan dingin.
            </p>

            <div class="tags">

                <span>Panas & Dingin</span>
                <span>Food Grade</span>
                <span>Custom</span>

            </div>

        </div>

        <!-- CARD -->
        <div class="card bag">

            <img src="/images/bag.jpg" alt="Paper Bag">

            <h3>Paper Bag</h3>

            <p>
                Tas kertas ramah lingkungan untuk retail dan takeaway.
            </p>

            <div class="tags">

                <span>Eco Friendly</span>
                <span>Kuat</span>
                <span>Custom Logo</span>

            </div>

        </div>

        <!-- CARD -->
        <div class="card container">

            <img src="/images/container.jpg" alt="Food Container">

            <h3>Food Container</h3>

            <p>
                Wadah makanan anti bocor untuk berbagai kebutuhan.
            </p>

            <div class="tags">

                <span>Anti Bocor</span>
                <span>Food Grade</span>
                <span>Stackable</span>

            </div>

        </div>

        <!-- CARD -->
        <div class="card bowl">

            <img src="/images/bowl.jpg" alt="Paper Bowl">

            <h3>Paper Bowl</h3>

            <p>
                Mangkuk tahan panas untuk sup dan mie.
            </p>

            <div class="tags">

                <span>Tahan Panas</span>
                <span>Dengan Tutup</span>
                <span>Eco</span>

            </div>

        </div>

        <!-- CARD -->
        <div class="card custom">

            <img src="/images/custom.jpg" alt="Custom Packaging">

            <h3>Custom Packaging</h3>

            <p>
                Solusi kemasan full custom sesuai brand Anda.
            </p>

            <div class="tags">

                <span>Premium</span>
                <span>Design Service</span>
                <span>Branding</span>

            </div>

        </div>

        <!-- CARD -->
        <div class="card accessories">

            <img src="/images/Sleeve & Holder.jpg" alt="Sleeve Holder">

            <h3>Sleeve & Holder</h3>

            <p>
                Sleeve & holder untuk minuman panas.
            </p>

            <div class="tags">

                <span>Insulated</span>
                <span>Eco</span>
                <span>Custom</span>

            </div>

        </div>

    </div>

</section>

<!-- KATEGORI INDUSTRI -->

<section class="industry-section">

    <div class="section-title">

        <h2>Kategori Industri</h2>

        <p>
            Solusi packaging untuk berbagai kebutuhan bisnis
        </p>

    </div>

    <div class="industry-grid">

        <!-- CARD -->
        <div class="industry-card">

            <div class="industry-icon">
                <i class="fa-solid fa-mug-hot"></i>
            </div>

            <h3>Packaging Makanan & Minuman</h3>

            <p>
                Solusi F&B Packaging, Food Grade anti-bocor:
                Paper Bowl, Lunch Box, Food Pail,
                dan Paper Cup untuk bisnis kuliner.
            </p>

            <div class="industry-tags">

                <span>Paper Cup</span>
                <span>Paper Bowl</span>
                <span>Food Container</span>
                <span>Lunch Box</span>

            </div>

        </div>

        <!-- CARD -->
        <div class="industry-card">

            <div class="industry-icon">
                <i class="fa-solid fa-bag-shopping"></i>
            </div>

            <h3>Paper Bag & Shopping Bag</h3>

            <p>
                Tas kertas premium dan ramah lingkungan
                untuk meningkatkan branding bisnis retail.
            </p>

            <div class="industry-tags">

                <span>Paper Bag</span>
                <span>Shopping Bag</span>
                <span>Gift Bag</span>
                <span>Kraft Bag</span>

            </div>

        </div>

        <!-- CARD -->
        <div class="industry-card">

            <div class="industry-icon">
                <i class="fa-solid fa-box"></i>
            </div>

            <h3>Kardus Packaging</h3>

            <p>
                Kardus packaging corrugated box
                untuk pengiriman dan kebutuhan ekspedisi.
            </p>

            <div class="industry-tags">

                <span>Corrugated Box</span>
                <span>Custom Box</span>
                <span>Display Box</span>

            </div>

        </div>

        <!-- CARD -->
        <div class="industry-card">

            <div class="industry-icon">
                <i class="fa-solid fa-gift"></i>
            </div>

            <h3>Hardbox & Custom Packaging</h3>

            <p>
                Kemasan eksklusif rigid box
                untuk hampers, gift set,
                dan produk premium.
            </p>

            <div class="industry-tags">

                <span>Gift Box</span>
                <span>Luxury Box</span>
                <span>Ribbon Box</span>

            </div>

        </div>

    </div>

</section>

<!-- CTA SECTION -->

<section class="cta-section">

    <div class="cta-box">

        <h2>
            Siap Memulai Kemitraan dengan Kami?
        </h2>

        <p>
            Hubungi kami sekarang untuk konsultasi gratis dan penawaran terbaik.
        </p>

        <div class="cta-buttons">

            <a href="{{ url('/hubungi-kami') }}" class="btn-primary">
                Hubungi Kami →
            </a>

            <a href="{{ url('/katalog') }}" class="btn-secondary">
                Lihat Produk
            </a>

        </div>

    </div>

</section>

<!-- SCRIPT FILTER -->

<script>

function filterProduk(kategori) {

    let items = document.querySelectorAll(".card");

    items.forEach(item => {

        if (kategori === "all") {

            item.style.display = "flex";

        } else {

            if (item.classList.contains(kategori)) {

                item.style.display = "flex";

            } else {

                item.style.display = "none";

            }

        }

    });

}

// ACTIVE BUTTON

const buttons = document.querySelectorAll('.filter button');

buttons.forEach(button => {

    button.addEventListener('click', () => {

        buttons.forEach(btn => {

            btn.classList.remove('active');

        });

        button.classList.add('active');

    });

});

</script>

@endsection