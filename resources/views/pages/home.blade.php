@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="hero" data-aos="fade">

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1>Solusi Packaging Profesional untuk Brand Anda</h1>

        <p>
            Packaging premium untuk meningkatkan nilai brand bisnis Anda
        </p>
    </div>

</section>

<!-- CLIENT LOGO -->
<section class="clients" data-aos="fade-up">

    <div class="client-title">
        <p>Trusted by Brands & Companies</p>
    </div>

    <div class="logo-slider">

        <div class="logo-track">

            <img src="{{ asset('images/logo1.jpg') }}">
            <img src="{{ asset('images/logo2.jpg') }}">
            <img src="{{ asset('images/logo3.jpg') }}">
            <img src="{{ asset('images/logo4.jpg') }}">
            <img src="{{ asset('images/logo5.jpg') }}">

            <img src="{{ asset('images/logo1.jpg') }}">
            <img src="{{ asset('images/logo2.jpg') }}">
            <img src="{{ asset('images/logo3.jpg') }}">
            <img src="{{ asset('images/logo4.jpg') }}">
            <img src="{{ asset('images/logo5.jpg') }}">

        </div>

    </div>

</section>

<!-- TRUST -->
<section class="trust" data-aos="fade-up">

    <div class="trust-grid">

        <div>
            <h2 class="counter" data-target="500">0</h2>
            <p>Clients</p>
        </div>

        <div>
            <h2 class="counter" data-target="10">0</h2>
            <p>Years Experience</p>
        </div>

        <div>
            <h2 class="counter" data-target="20">0</h2>
            <p>Countries Export</p>
        </div>

    </div>

</section>

<!-- SERVICES -->
<section class="services" data-aos="fade-up">

    <div class="section-title">
        <h2>Layanan Kami</h2>
    </div>

    <div class="service-grid">

    <div class="service-card">

        <div class="service-icon">
            <i class="fa-solid fa-box"></i>
        </div>

        <h3>Custom Packaging</h3>

        <p>
            Desain packaging eksklusif sesuai identitas brand Anda.
        </p>

    </div>

    <div class="service-card">

        <div class="service-icon">
            <i class="fa-solid fa-burger"></i>
        </div>

        <h3>Food Packaging</h3>

        <p>
            Packaging aman makanan dengan kualitas premium.
        </p>

    </div>

    <div class="service-card">

        <div class="service-icon">
            <i class="fa-solid fa-industry"></i>
        </div>

        <h3>Industrial Packaging</h3>

        <p>
            Solusi packaging kuat untuk kebutuhan industri besar.
        </p>

    </div>

</div>

</section>

<!-- PORTFOLIO -->
<section class="portfolio" data-aos="zoom-in">

    <div class="section-title">
        <h2>Portfolio Kami</h2>
    </div>

    <div class="portfolio-grid">

        <div class="portfolio-card">
           <img src="{{ asset('images/portfolio1.jpg') }}"
onclick="openModal(this.src)">
        </div>

        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio2.jpg') }}"
onclick="openModal(this.src)">
        </div>

        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio3.jpg') }}"
onclick="openModal(this.src)">
        </div>

        <div class="portfolio-card">
            <img src="{{ asset('images/portfolio4.jpg') }}"
onclick="openModal(this.src)">
        </div>

    </div>

</section>

<!-- CTA -->
<section class="cta" data-aos="fade-up">

    <h2>Siap meningkatkan brand Anda?</h2>

    <a href="/quotation" class="btn-primary">
        Request Sekarang
    </a>

</section>

<!-- PROCESS -->
<section class="process" data-aos="fade-up">

    <div class="section-title">
        <h2>Proses Kerja Kami</h2>

        <p>
            Proses cepat, profesional, dan berkualitas tinggi
        </p>
    </div>

    <div class="timeline">

        <div class="timeline-item">

            <div class="timeline-icon">
                <i class="fa-solid fa-comments"></i>
            </div>

            <h3>Consultation</h3>

            <p>
                Diskusi kebutuhan packaging sesuai brand Anda
            </p>

        </div>

        <div class="timeline-item">

            <div class="timeline-icon">
                <i class="fa-solid fa-pen-ruler"></i>
            </div>

            <h3>Design</h3>

            <p>
                Tim desain membuat mockup packaging premium
            </p>

        </div>

        <div class="timeline-item">

            <div class="timeline-icon">
                <i class="fa-solid fa-gears"></i>
            </div>

            <h3>Production</h3>

            <p>
                Produksi menggunakan material berkualitas tinggi
            </p>

        </div>

        <div class="timeline-item">

            <div class="timeline-icon">
                <i class="fa-solid fa-truck"></i>
            </div>

            <h3>Delivery</h3>

            <p>
                Packaging dikirim aman dan tepat waktu
            </p>

        </div>

    </div>

</section>

<!-- TESTIMONIAL -->
<section class="testimonial" data-aos="fade-up">

    <div class="section-title">
        <h2>Apa Kata Klien Kami?</h2>

        <p>
            Kepuasan klien adalah prioritas utama kami.
        </p>
    </div>

    <div class="testimonial-grid">

        <!-- CARD 1 -->
        <div class="testimonial-card">

            <div class="quote-icon">
                ❞
            </div>

            <p>
                "Bungkus Indonesia telah menjadi mitra kemasan kami selama 5 tahun.
                Kualitas produk dan layanan mereka sangat konsisten."
            </p>

            <div class="testimonial-user">

                <div class="user-avatar">
                    B
                </div>

                <div>
                    <h4>Budi Santoso</h4>
                    <span>
                        Procurement Manager, PT Makanan Nusantara
                    </span>
                </div>

            </div>

        </div>

        <!-- CARD 2 -->
        <div class="testimonial-card">

            <div class="quote-icon">
                ❞
            </div>

            <p>
                "Sebagai UMKM, kami sangat terbantu dengan MOQ yang fleksibel
                dan harga yang kompetitif dari Luck Packaging."
            </p>

            <div class="testimonial-user">

                <div class="user-avatar">
                    S
                </div>

                <div>
                    <h4>Siti Rahayu</h4>
                    <span>
                        Owner, Dapur Mama Siti
                    </span>
                </div>

            </div>

        </div>

        <!-- CARD 3 -->
        <div class="testimonial-card">

            <div class="quote-icon">
                ❞
            </div>

            <p>
                "Proses custom branding sangat mudah dan hasilnya memuaskan.
                Tim mereka sangat responsif dan profesional."
            </p>

            <div class="testimonial-user">

                <div class="user-avatar">
                    A
                </div>

                <div>
                    <h4>Ahmad Wijaya</h4>
                    <span>
                        Marketing Director, CV Berkah Snacks
                    </span>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- FAQ -->
<section class="faq" data-aos="fade-up">

    <div class="section-title">
        <h2>Pertanyaan Umum</h2>

        <p>
            Beberapa pertanyaan yang sering ditanyakan client kami.
        </p>
    </div>

    <div class="faq-container">

        <!-- ITEM -->
        <div class="faq-item">

            <div class="faq-question">

                <h3>Berapa minimal order packaging?</h3>

                <span>+</span>

            </div>

            <div class="faq-answer">

                <p>
                    Minimal order menyesuaikan jenis packaging.
                    Untuk UMKM kami menyediakan MOQ yang fleksibel.
                </p>

            </div>

        </div>

        <!-- ITEM -->
        <div class="faq-item">

            <div class="faq-question">

                <h3>Apakah bisa custom desain?</h3>

                <span>+</span>

            </div>

            <div class="faq-answer">

                <p>
                    Ya, kami menyediakan layanan custom desain sesuai kebutuhan branding bisnis Anda.
                </p>

            </div>

        </div>

        <!-- ITEM -->
        <div class="faq-item">

            <div class="faq-question">

                <h3>Berapa lama proses produksi?</h3>

                <span>+</span>

            </div>

            <div class="faq-answer">

                <p>
                    Estimasi produksi sekitar 7–14 hari kerja tergantung quantity dan jenis packaging.
                </p>

            </div>

        </div>

        <!-- ITEM -->
        <div class="faq-item">

            <div class="faq-question">

                <h3>Apakah melayani seluruh Indonesia?</h3>

                <span>+</span>

            </div>

            <div class="faq-answer">

                <p>
                    Ya, kami melayani pengiriman ke seluruh Indonesia dan export ke beberapa negara.
                </p>

            </div>

        </div>

    </div>
    
</section>

<!-- PORTFOLIO MODAL -->

<div id="portfolioModal" class="portfolio-modal">

    <span class="close-modal" onclick="closeModal()">
        &times;
    </span>

    <img id="modalImage">

</div>

@endsection