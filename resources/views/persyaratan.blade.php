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
            @php
            $services = [
                ['img' => 'img/service-1.jpg', 'icon' => 'img/icon/icon-3.png', 'title' => 'Pengangkatan Anak', 'description' => 'Perubahan yang terjadi adalah pemindahan tanggung jawab pemeliharaan dan pengawasan dari orang tua asli kepada orang tua angkat, tetapi status anak angkat tetap sebagai anak kandung'],
                ['img' => 'img/service-2.jpg', 'icon' => 'img/icon/icon-6.png', 'title' => 'Hak Asuh Anak', 'description' => 'Hak asuh anak menurut pengadilan agama adalah hak dan kewajiban yang diberikan kepada salah satu atau kedua orang tua untuk merawat, mendidik, dan menjaga anak-anak setelah terjadi perceraian atau perpisahan.'],
                ['img' => 'img/service-3.jpg', 'icon' => 'img/icon/icon-5.png', 'title' => 'Wali \'Adhal', 'description' => 'Merujuk kepada wali yang enggan atau menolak memberikan izin pernikahan bagi seorang wanita yang berada di bawah perwaliannya tanpa alasan yang sah atau dibenarkan oleh syariat Islam.'],
                ['img' => 'img/service-4.jpg', 'icon' => 'img/icon/icon-4.png', 'title' => 'Harta Bersama/Harta Gono Gini', 'description' => 'Harta yang diperoleh oleh pasangan suami istri selama pernikahan berlangsung.'],
                ['img' => 'img/service-5.jpg', 'icon' => 'img/icon/icon-8.png', 'title' => 'Poligami', 'description' => 'Praktik di mana seorang pria menikahi lebih dari satu wanita pada waktu yang sama, sesuai dengan hukum Islam dan peraturan yang berlaku di Indonesia.'],
                ['img' => 'img/service-6.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Pengesahan Nikah (Istibat Nikah)', 'description' => 'Proses hukum untuk mengesahkan pernikahan yang telah dilaksanakan secara agama tetapi belum tercatat atau diakui secara resmi oleh negara.'],
                ['img' => 'img/service-7.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Cerai Gugat/Talak', 'description' => 'Cerai gugat adalah perceraian yang diajukan oleh pihak istri terhadap suami. Proses ini disebut "gugatan cerai" dan dilakukan melalui pengadilan agama.'],
                ['img' => 'img/service-8.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Marfuq', 'description' => 'Istilah yang digunakan dalam hukum Islam untuk merujuk pada seseorang yang telah meninggal dunia.'],
                ['img' => 'img/service-9.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Pembatalan Nikah', 'description' => 'Pembatalan perkawinan, yang juga dikenal sebagai fasakh, adalah tindakan pengadilan agama untuk membatalkan ikatan pernikahan.'],
                ['img' => 'img/service-10.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Dispensasi Nikah', 'description' => 'Dispensasi nikah adalah kelonggaran hukum yang diberikan kepada mereka yang ingin menikah, tetapi belum mencapai batas usia pernikahan yang telah ditetapkan oleh pemerintah.'],
                ['img' => 'img/service-11.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Harta Waris', 'description' => 'Harta peninggalan seseorang setelah meninggal dunia.'],
                ['img' => 'img/service-12.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Surat Kuasa Isidentil', 'description' => 'Surat yang memberikan wewenang kepada seseorang untuk bertindak atas nama pemberi kuasa dalam suatu kegiatan atau urusan tertentu yang bersifat insidental.'],
                ['img' => 'img/service-13.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Duplikat Akta Cerai', 'description' => 'Duplikat akta cerai adalah salinan atau penggantian akta perceraian yang hilang atau rusak diterbitkan sebagai bukti resmi bahwa pihak yang bersangkutan telah bercerai secara hukum.'],
                ['img' => 'img/service-14.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Perubahan Nama', 'description' => 'Proses hukum yang memungkinkan seseorang untuk secara resmi mengubah namanya dengan mendapatkan persetujuan dari pengadilan agama.'],
                ['img' => 'img/service-15.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Perwalian', 'description' => 'Proses hukum di mana pengadilan agama menetapkan seorang wali untuk anak yang belum dewasa atau seseorang yang dianggap tidak mampu mengurus dirinya sendiri dan/atau hartanya.'],
                ['img' => 'img/service-16.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Penetapan Ahli Waris', 'description' => 'Proses hukum di mana pengadilan agama menetapkan siapa saja yang berhak menjadi ahli waris dari seseorang yang telah meninggal dunia, serta menentukan bagian masing-masing ahli waris sesuai dengan ketentuan hukum Islam.'],
                ['img' => 'img/service-17.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Permohonan Asal-Usul Anak', 'description' => 'Proses hukum di mana seseorang mengajukan permohonan ke pengadilan agama untuk mendapatkan penetapan hukum mengenai asal usul seorang anak.'],
                ['img' => 'img/service-18.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Izin Cerai', 'description' => 'Izin yang diberikan oleh pengadilan agama kepada seorang Pegawai Negeri Sipil (PNS) untuk bercerai.'],
                ['img' => 'img/service-19.jpg', 'icon' => 'img/icon/icon-2.png', 'title' => 'Izin Poligami', 'description' => 'Izin yang diberikan oleh pengadilan agama kepada seorang Pegawai Negeri Sipil (PNS) untuk berpoligami.']
            ];
            @endphp

            @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded d-flex h-100">
                    <div class="service-img rounded">
                        <img class="img-fluid" src="{{ $service['img'] }}" alt="" />
                    </div>
                    <div class="service-text rounded p-5">
                        <div class="btn-square rounded-circle mx-auto mb-3">
                            <img class="img-fluid" src="{{ $service['icon'] }}" alt="Icon" />
                        </div>
                        <h4 class="mb-3">{{ $service['title'] }}</h4>
                        <p class="mb-4">{{ $service['description'] }}</p>
                        <a class="btn btn-sm" href=""><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Service End -->
@endsection
