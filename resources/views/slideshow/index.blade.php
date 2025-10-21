@extends('layouts.main')

@section('container')
<style>
    /* Gaya untuk tampilan slide */
    .slide {
        display: none;
        text-align: center;
        font-size: 2em;
    }
    .active {
        display: block;
    }
    .next-button {
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 1em;
        cursor: pointer;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
    }
</style>

<div class="slide active">
    {{-- <h1>Selamat Datang di Pengadilan Agama Amurang</h1> --}}
    <video id="welcomeVideo" width="900" controls autoplay muted>
        <source src="{{ asset('video/Pengadilan agama amurang.mp4') }}" type="video/mp4">
        Browser Anda tidak mendukung video.
    </video>
</div>
<div class="slide">
    <h1>Hari Sumpah Pemuda</h1>
    <img src="{{ asset('img/event/sumpah pemuda.png') }}" alt="" width="70%">
</div>
<div class="slide">
    <h1>Visi dan Misi</h1>
</div>

<audio id="slideshow-audio" autoplay loop>
    <source src="{{ asset('audio/background.mp3') }}" type="audio/mpeg">
    Browser Anda tidak mendukung audio.
</audio>

{{-- <button class="next-button" onclick="nextSlide()">Next</button> <!-- Tombol Next --> --}}

<script>
    document.addEventListener('DOMContentLoaded', function() {
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');
        const video = document.getElementById('welcomeVideo');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        // Ketika video selesai, lanjutkan ke slide berikutnya
        video.addEventListener('ended', nextSlide);

        // Setelah video, lanjutkan ke slide berikutnya setiap 5 detik
        setInterval(() => {
            if (currentSlide > 0) { // Lanjutkan timer hanya setelah video diputar
                nextSlide();
            }
        }, 100000); // Ganti slide setiap 5 detik setelah video selesai
    });
</script>
@endsection
