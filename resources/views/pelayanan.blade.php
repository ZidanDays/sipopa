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
    <div
    class="text-center mx-auto wow fadeInUp"
    data-wow-delay="0.1s"
    style="max-width: 500px"
  >
    <p class="fs-5 fw-bold text-primary">Persyaratan Pengajuan Perkara</p>
    <h1 class="display-5 mb-5">Menurut Jenis Perkara Gugatan/Permohonan</h1>
  </div>
    <!-- Search Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px">
                <h1 class="display-5 mb-5">Cari Jenis Perkara</h1>
                <form action="{{ url('/pelayanan') }}" method="GET" class="mb-4">
                    <input type="text" name="search" class="form-control" placeholder="Cari perkara..." value="{{ request()->get('search') }}">
                    <button type="submit" class="btn btn-primary mt-2">Cari</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Search Form End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @forelse ($posts as $post)    
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/service-1.jpg" alt="" />
                            {{-- <img class="img-fluid" src="img/perkara/{{ $post['image'] }}" alt="" /> --}}
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon" />
                            </div>
                            <h4 class="mb-3">{{ $post['perkara'] }}</h4>
                            <p class="mb-4">
                                {{ Str::limit($post['deskripsi'], 150) }}
                            </p>
                            <a class="btn btn-sm" href="/pelayanan/{{ $post['slug'] }}">
                                <i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <p class="text-center">Tidak ada hasil ditemukan untuk "{{ request()->get('search') }}"</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <!-- Service End -->

@endsection
