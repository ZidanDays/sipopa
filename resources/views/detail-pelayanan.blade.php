<!-- detail-pelayanan.blade.php -->
@extends('layouts.main')

@section('container')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Pelayanan</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pelayanan</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
            <p class="fs-5 fw-bold text-primary">Persyaratan Pengajuan Perkara</p>
            <h1 class="display-5 mb-5">Menurut Jenis Perkara Gugatan/Permohonan</h1>
        </div>

        <div class="row g-4">   
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ asset('img/service-1.jpg') }}" alt="" />
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ asset('img/icon/icon-3.png') }}" alt="Icon" />
                        </div>
                        <h4 class="mb-3">{{ $post['perkara'] }}</h4>
                        <p class="mb-4">
                            {{ $post['deskripsi'] }}
                        </p>
                        <a class="btn btn-sm" href="/pelayanan">
                            <i class="fa fa-plus text-primary me-2"></i>Kembali
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

@endsection
