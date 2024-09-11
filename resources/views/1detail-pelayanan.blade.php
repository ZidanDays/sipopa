@extends('layouts.main')

@section('container')

<!-- Page Header Start -->
<header class="page-header py-5 mb-5 text-center">
    <h1 class="display-3 text-white mb-4">Pelayanan</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pelayanan</li>
        </ol>
    </nav>
</header>
<!-- Page Header End -->

<!-- Service Start -->
<main class="service-details py-5">
    <section class="container text-center">
        <h2 class="display-5 mb-4">{{ $post['perkara'] }}</h2>
        <p class="lead mb-4">{{ $post['deskripsi'] }}</p>
    </section>

    <section class="container">
        @if (!empty($post['syarat']))
            <h3 class="mb-4">Persyaratan:</h3>
            <ul>
                @foreach ($post['syarat'] as $syarat)
                    <li>{{ $syarat }}</li>
                @endforeach
            </ul>
        @endif
        <p><strong>NOTE : PERSYARATAN INI MERUPAKAN PERSYARATAN AWAL, UNTUK SELANJUTNYA MENGIKUTI PETUNJUK DAN PERINTAH DARI MAJELIS HAKIM DI DALAM SIDANG</strong></p>
    </section>

    <section class="container text-center mt-5">
        <a class="btn btn-primary" href="/pelayanan">
            <i class="fa fa-arrow-left me-2"></i>Kembali
        </a>
    </section>
</main>
<!-- Service End -->

@endsection
