<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>PT Luck Packaging Indonesia</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- FONT AWESOME -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

<!-- ================================= -->
<!-- CURSOR GLOW -->
<!-- ================================= -->

<div class="cursor-glow"></div>

<!-- ================================= -->
<!-- LOADING SCREEN -->
<!-- ================================= -->

<div class="loader-wrapper">

    <div class="loader">

        <div class="loader-circle"></div>

        <h2>Luck Packaging</h2>

    </div>

</div>

<!-- ================================= -->
<!-- NAVBAR -->
<!-- ================================= -->

<nav class="navbar" id="navbar">

    <div class="nav-container">

        <!-- LOGO -->
        <a href="/" class="logo">

            <img src="{{ asset('images/logo.png') }}" alt="Luck Packaging">

        </a>

        <!-- HAMBURGER -->
        <div class="menu-toggle" id="menu-toggle">

            <i class="fa-solid fa-bars"></i>

        </div>

        <!-- MENU -->
        <ul class="nav-links">

            <li>
                <a href="/">Beranda</a>
            </li>

            <!-- DROPDOWN -->
            <li class="dropdown">

                <a href="#">
                    Solusi
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <ul class="dropdown-menu">

                    <li>
                        <a href="/corporate">
                            Solusi Korporat
                        </a>
                    </li>

                    <li>
                        <a href="/solusi-umkm">
                            Solusi UMKM
                        </a>
                    </li>

                </ul>

            </li>

            <li>
                <a href="/products">Produk</a>
            </li>

            <li>
                <a href="/about">Tentang Kami</a>
            </li>

            <li>
                <a href="/hubungi-kami">Hubungi Kami</a>
            </li>

        </ul>

    </div>

</nav>

<!-- ================================= -->
<!-- CONTENT -->
<!-- ================================= -->

@yield('content')

<!-- ================================= -->
<!-- FOOTER -->
<!-- ================================= -->

<footer class="footer">

    <div class="footer-container">

        <!-- COMPANY -->
        <div class="footer-col">

            <h2>Luck Packaging</h2>

            <p>
                Solusi packaging premium untuk membantu bisnis tampil lebih profesional dan modern.
            </p>

            <div class="footer-social">

                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="#">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

            </div>

        </div>

        <!-- MENU -->
        <div class="footer-col">

            <h3>Quick Links</h3>

            <ul>

                <li><a href="/">Beranda</a></li>

                <li><a href="/products">Produk</a></li>

                <li><a href="/portfolio">Portfolio</a></li>

                <li><a href="/about">Tentang Kami</a></li>

                <li><a href="/hubungi-kami">Hubungi Kami</a></li>

            </ul>

        </div>

        <!-- SERVICES -->
        <div class="footer-col">

            <h3>Layanan</h3>

            <ul>

                <li>Custom Packaging</li>

                <li>Food Packaging</li>

                <li>Industrial Packaging</li>

                <li>Branding Design</li>

            </ul>

        </div>

        <!-- CONTACT -->
        <div class="footer-col">

            <h3>Kontak</h3>

            <p>
                📍 Depok, Indonesia
            </p>

            <p>
                📞 +62 821-5117-7722
            </p>

            <p>
                ✉ ptluckpackagingindonesia@gmail.com
            </p>

        </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="footer-bottom">

        © 2026 PT Luck Packaging Indonesia — All Rights Reserved

    </div>

</footer>

<!-- ================================= -->
<!-- WHATSAPP -->
<!-- ================================= -->

<a href="https://wa.me/6282115117722"
class="wa-float"
target="_blank">

    <i class="fa-brands fa-whatsapp"></i>

    <span>Chat Dengan Kami</span>

</a>

<!-- ================================= -->
<!-- AOS -->
<!-- ================================= -->

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>

AOS.init({
    duration:1200,
    once:true
});

</script>

<!-- ================================= -->
<!-- SCRIPT -->
<!-- ================================= -->

<script>

// =================================
// MOBILE MENU
// =================================

const menuToggle = document.getElementById('menu-toggle');

const navLinks = document.querySelector('.nav-links');

menuToggle.addEventListener('click', () => {

    navLinks.classList.toggle('active');

});

// =================================
// NAVBAR SCROLL
// =================================

const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {

    if(window.scrollY > 50){

        navbar.classList.add('scrolled');

    }else{

        navbar.classList.remove('scrolled');

    }

});

// =================================
// FAQ
// =================================

const faqItems = document.querySelectorAll('.faq-item');

faqItems.forEach(item => {

    const question = item.querySelector('.faq-question');

    if(question){

        question.addEventListener('click', () => {

            item.classList.toggle('active');

        });

    }

});

// =================================
// LOADER
// =================================

window.addEventListener('load', () => {

    const loader = document.querySelector('.loader-wrapper');

    setTimeout(() => {

        loader.classList.add('loader-hidden');

    }, 800);

});

// =================================
// COUNTER
// =================================

const counters = document.querySelectorAll('.counter');

const speed = 200;

counters.forEach(counter => {

    const animate = () => {

        const value = +counter.getAttribute('data-target');

        const data = +counter.innerText;

        const time = value / speed;

        if(data < value){

            counter.innerText = Math.ceil(data + time);

            setTimeout(animate, 20);

        }else{

            counter.innerText = value + "+";

        }

    };

    animate();

});

// =================================
// PORTFOLIO MODAL
// =================================

function openModal(src){

    document.getElementById('portfolioModal').style.display = "flex";

    document.getElementById('modalImage').src = src;

}

function closeModal(){

    document.getElementById('portfolioModal').style.display = "none";

}

// =================================
// CURSOR GLOW
// =================================

const glow = document.querySelector('.cursor-glow');

document.addEventListener('mousemove', (e) => {

    if(glow){

        glow.style.left = e.clientX + 'px';

        glow.style.top = e.clientY + 'px';

    }

});

</script>

</body>
</html>