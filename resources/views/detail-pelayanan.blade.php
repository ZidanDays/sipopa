@extends('layouts.main')

@section('container')

<!-- Page Header Start -->
<header class="page-header py-5 mb-5 text-center" style="position: relative; background-image: asset{{('img/cover-pages.jpg') }}; background-size: cover; background-position: center;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #348e380f;"></div> <!-- Overlay -->
    <div class="container position-relative z-index-1">
        <h1 class="display-3 text-white mb-4">Pelayanan</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Pages</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Pelayanan</li>
            </ol>
        </nav>
    </div>
</header>
<!-- Page Header End -->

<!-- Service Start -->
<main class="service-details py-5" style="background-color: #f4f4f4;">
    <section class="container text-center">
        <h2 class="display-5 mb-4" style="color: #333;">{{ $post['perkara'] }}</h2>
        <p class="lead mb-4" style="color: #666;">{{ $post['deskripsi'] }}</p>
    </section>

    <section class="container">
        @if (!empty($post['syarat']))
            <h3 class="mb-4" style="color: #333;">Persyaratan:</h3>
            <ul style="padding-left: 0;">
                @foreach ($post['syarat'] as $syarat)
                    <li style="background-color: #fff; padding: 15px; margin-bottom: 10px; border-radius: 8px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); list-style: none;">
                        <i class="fa fa-check-circle text-success"></i> {{ $syarat }}
                    </li>
                @endforeach
            </ul>
        @endif
        <p class="text-danger mt-5"><strong>NOTE: PERSYARATAN INI MERUPAKAN PERSYARATAN AWAL, UNTUK SELANJUTNYA MENGIKUTI PETUNJUK DAN PERINTAH DARI MAJELIS HAKIM DI DALAM SIDANG</strong></p>
    </section>

    <section class="container text-center mt-5">
        <a class="btn btn-primary" href="/pelayanan" style="padding: 10px 20px; font-size: 18px;">
            <i class="fa fa-arrow-left me-2"></i>Kembali
        </a>
    </section>
</main>
<!-- Service End -->

@endsection
