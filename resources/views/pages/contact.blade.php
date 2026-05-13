@extends('layouts.app')

@section('content')

<!-- HERO -->
<section class="contact-hero">

    <div class="contact-hero-content">

        <span>KAMI SIAP MEMBANTU ANDA</span> 

        <h1>Hubungi Kami</h1>

        <p>
            Konsultasikan kebutuhan packaging bisnis Anda bersama tim profesional kami.
        </p>

    </div>

</section>

<section class="contact-section">

    <div class="contact-wrapper">

        <!-- LEFT -->
        <div class="contact-left">

            <h2>Informasi Kontak</h2>

            <p class="contact-subtitle">
                Pilih cara terbaik untuk menghubungi kami
            </p>

           <!-- EMAIL -->
<a href="mailto:ptluckpackagingindonesia@gmail.com" class="contact-card">

    <div class="contact-icon blue">
        <i class="fa-regular fa-envelope"></i>
    </div>

    <div>
        <span>Email</span>
        <h3>ptluckpackagingindonesia@gmail.com</h3>
    </div>

</a>

<!-- PHONE -->
<a href="tel:+6282151177722" class="contact-card">

    <div class="contact-icon green">
        <i class="fa-solid fa-phone"></i>
    </div>

    <div>
        <span>Telepon</span>
        <h3>+62-821-5117-7722</h3>
    </div>

</a>

<!-- ADDRESS -->
<a 
href="https://maps.google.com/?q=Rins+Residence+Cinangka+Sawangan+Depok"
target="_blank"
class="contact-card">

    <div class="contact-icon orange">
        <i class="fa-solid fa-location-dot"></i>
    </div>

    <div>
        <span>Alamat</span>

        <h3>
            Rins Residence, Cinangka, Sawangan, Depok
        </h3>
    </div>

</a>
            <!-- WA BUTTON -->
            <a
            href="https://wa.me/6282151177722"
            target="_blank"
            class="wa-contact-btn">

                <i class="fa-brands fa-whatsapp"></i>
                Chat via WhatsApp

            </a>

            <!-- INFO -->
            <div class="contact-bottom-info">

                <span>
                    <i class="fa-solid fa-shield"></i>
                    Data aman
                </span>

                <span>
                    <i class="fa-regular fa-clock"></i>
                    Respon cepat
                </span>

            </div>

        </div>

        <!-- RIGHT -->
        <div class="contact-right">

            <h2>Kirim Pesan</h2>

            <p class="contact-subtitle">
                Isi formulir di bawah ini dan kami akan segera menghubungi Anda.
            </p>

            <form action="{{ route('contact.send') }}" method="POST">

    @csrf

    <div class="form-grid">

        <div class="form-group">
            <input type="text" name="nama" placeholder="Nama Lengkap *" required>
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Alamat Email *" required>
        </div>

        <div class="form-group">
            <input type="text" name="telepon" placeholder="Nomor Telepon">
        </div>

        <div class="form-group">
            <input type="text" name="perusahaan" placeholder="Nama Perusahaan">
        </div>

    </div>

    <div class="form-group">
        <textarea 
            name="pesan"
            placeholder="Jelaskan kebutuhan packaging Anda"
            required></textarea>
    </div>

    <button type="submit" class="send-btn">

        <i class="fa-regular fa-paper-plane"></i>
        Kirim Pesan

    </button>

    <p class="privacy-text">
        Dengan mengirim formulir ini, Anda menyetujui kebijakan privasi kami.
    </p>

</form>

        </div>

    </div>

</section>


@endsection