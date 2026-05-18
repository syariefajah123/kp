<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <title> PT Luck Packaging Indonesia</title>
    
     <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

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

        <!-- MENU -->
        <ul class="nav-links" id="navLinks">

            <li>
                <a href="/">Beranda</a>
            </li>

            <!-- SOLUSI -->
            <li class="dropdown" id="SolusiDropdown">

                <a href="#" id="solusiToggle">
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

            <!-- PRODUK -->
            <li class="dropdown" id="produkDropdown">

                <a href="#" id="produkToggle">
                    Produk
                    <i class="fa-solid fa-chevron-down"></i>
                </a>

                <ul class="dropdown-menu">

                    <li>
                        <a href="/katalog">
                            Katalog Produk
                        </a>
                    </li>

                    <li>
                        <a href="/packaging">
                            Packaging Industri
                        </a>
                    </li>

                </ul>

            </li>

            <li>
                <a href="/tentang-kami">
                    Tentang Kami
                </a>
            </li>

        </ul>

        <!-- RIGHT -->
        <div class="nav-right">

            <div class="lang-switch">
                <i class="fa-solid fa-globe"></i>

                <select>
                    <option>ID</option>
                    <option>EN</option>
                </select>
            </div>

            <a href="/hubungi-kami" class="contact-btn">
                Hubungi Kami
            </a>

            <!-- HAMBURGER -->
<div class="menu-toggle" id="menu-toggle">
    <i class="fa-solid fa-bars"></i>
</div>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">

    <!-- HEADER -->
    <div class="mobile-top">

        <img src="{{ asset('images/logo.png') }}" alt="Logo">

        <div class="close-menu" id="closeMenu">
            <i class="fa-solid fa-xmark"></i>
        </div>

    </div>

    <!-- MENU -->
    <ul class="mobile-links">

        <li><a href="/" class="lang-text" data-id="Beranda" data-en="Home">Beranda</a></li>

        <li class="mobile-title lang-text"
            data-id="Solusi"
            data-en="Solutions">
            Solusi
        </li>

        <li>
            <a href="/corporate"
               class="sub-link lang-text"
               data-id="Layanan Korporat (Industrial)"
               data-en="Corporate Services (Industrial)">
               Layanan Korporat (Industrial)
            </a>
        </li>

        <li class="mobile-title lang-text"
            data-id="Produk"
            data-en="Products">
            Produk
        </li>

        <li>
            <a href="/katalog"
               class="sub-link lang-text"
               data-id="Katalog Produk"
               data-en="Product Catalog">
               Katalog Produk
            </a>
        </li>

        <li>
            <a href="/packaging"
               class="sub-link lang-text"
               data-id="Packaging Industri"
               data-en="Industrial Packaging">
               Packaging Industri
            </a>
        </li>

        <li>
            <a href="/tentang-kami"
               class="lang-text"
               data-id="Tentang Kami"
               data-en="About Us">
               Tentang Kami
            </a>
        </li>

    </ul>

    <!-- BOTTOM -->
    <div class="mobile-bottom">

        <div class="mobile-lang">

            <i class="fa-solid fa-globe"></i>

            <span id="langSwitch">
                English
            </span>

        </div>

        <a href="/hubungi-kami" class="mobile-contact lang-text"
           data-id="Hubungi Kami"
           data-en="Contact Us">
            Hubungi Kami
        </a>

    </div>

</div>
        </div>

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
const mobileMenu = document.getElementById('mobileMenu');
const closeMenu = document.getElementById('closeMenu');

if(menuToggle && mobileMenu){

    menuToggle.addEventListener('click', () => {

        mobileMenu.classList.add('active');

    });

}

if(closeMenu && mobileMenu){

    closeMenu.addEventListener('click', () => {

        mobileMenu.classList.remove('active');

    });

}

// =================================
// TRANSLATE ID / EN
// =================================

const langSwitch = document.getElementById('langSwitch');

let currentLang = 'id';

if(langSwitch){

    langSwitch.addEventListener('click', () => {

        const texts = document.querySelectorAll('.lang-text');

        if(currentLang === 'id'){

            texts.forEach(text => {

                text.innerHTML = text.dataset.en;

            });

            langSwitch.innerHTML = 'Indonesia';

            currentLang = 'en';

        }else{

            texts.forEach(text => {

                text.innerHTML = text.dataset.id;

            });

            langSwitch.innerHTML = 'English';

            currentLang = 'id';

        }

    });

}

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

// =================================
// DROPDOWN PRODUK
// =================================

const produkToggle = document.getElementById('produkToggle');
const produkDropdown = document.getElementById('produkDropdown');

// =================================
// DROPDOWN SOLUSI
// =================================

const solusiToggle = document.getElementById('solusiToggle');
const solusiDropdown = document.getElementById('SolusiDropdown');

// =================================
// PRODUK
// =================================

if(produkToggle && produkDropdown){

    produkToggle.addEventListener('click', (e) => {

        e.preventDefault();
        e.stopPropagation();

        solusiDropdown?.classList.remove('active');

        produkDropdown.classList.toggle('active');

    });

}

// =================================
// SOLUSI
// =================================

if(solusiToggle && solusiDropdown){

    solusiToggle.addEventListener('click', (e) => {

        e.preventDefault();
        e.stopPropagation();

        produkDropdown?.classList.remove('active');

        solusiDropdown.classList.toggle('active');

    });

}

// =================================
// KLIK LUAR
// =================================

document.addEventListener('click', () => {

    produkDropdown?.classList.remove('active');

    solusiDropdown?.classList.remove('active');

});

</script>

</body>
</html>