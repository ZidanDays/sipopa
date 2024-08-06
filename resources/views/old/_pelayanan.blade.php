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
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <p class="fs-5 fw-bold text-primary">Persyaratan Pengajuan Perkara</p>
          <h1 class="display-5 mb-5">Menurut Jenis Perkara Gugatan/Permohonan</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-1.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Pengangkatan Anak</h4>
                <p class="mb-4">
                  Perubahan yang terjadi adalah pemindahan tanggung jawab pemeliharaan dan pengawasan dari orang tua asli kepada orang tua angkat, tetapi status anak angkat tetap sebagai anak kandung
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-2.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-6.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Hak Asu Anak</h4>
                <p class="mb-4">
                  Hak asuh anak menurut pengadilan agama adalah hak dan kewajiban yang diberikan kepada salah satu atau kedua orang tua untuk merawat, mendidik, dan menjaga anak-anak setelah terjadi perceraian atau perpisahan.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-3.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-5.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Wali 'Adhal</h4>
                <p class="mb-4">
                  merujuk kepada wali yang enggan atau menolak memberikan izin pernikahan bagi seorang wanita yang berada di bawah perwaliannya tanpa alasan yang sah atau dibenarkan oleh syariat Islam.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-4.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-4.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Harta Bersama/Harta Gono Gini</h4>
                <p class="mb-4">
                  harta yang diperoleh oleh pasangan suami istri selama pernikahan berlangsung. Harta ini mencakup semua jenis aset dan properti yang didapatkan oleh kedua belah pihak setelah pernikahan, tanpa memperhitungkan siapa yang secara langsung membeli atau mendapatkan aset tersebut.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-5.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-8.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Poligami</h4>
                <p class="mb-4">
                  praktik di mana seorang pria menikahi lebih dari satu wanita pada waktu yang sama, sesuai dengan hukum Islam dan peraturan yang berlaku di Indonesia.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Pengesahan Nikah (Istibat Nikah)</h4>
                <p class="mb-4">
                  proses hukum untuk mengesahkan pernikahan yang telah dilaksanakan secara agama tetapi belum tercatat atau diakui secara resmi oleh negara.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Cerai Gugat/Talak</h4>
                <p class="mb-4">
                  Cerai gugat adalah perceraian yang diajukan oleh pihak istri terhadap suami. Proses ini disebut "gugatan cerai" dan dilakukan melalui pengadilan agama. 
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Marfuq</h4>
                <p class="mb-4">
                  Marfuq adalah istilah yang digunakan dalam hukum Islam untuk merujuk pada seseorang yang telah meninggal dunia. Dalam konteks Pengadilan Agama, terdapat berbagai jenis permohonan yang berkaitan dengan hukum Islam dan perkara di tingkat pertama antara orang-orang yang beragama Islam
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Pembatalan Nikah</h4>
                <p class="mb-4">
                  Pembatalan perkawinan, yang juga dikenal sebagai fasakh, adalah tindakan pengadilan agama untuk membatalkan ikatan pernikahan. Ini terjadi ketika salah satu pihak atau keduanya tidak memenuhi syarat-syarat yang ditetapkan oleh hukum atau peraturan perundang-undangan. Berdasarkan Pasal 22 UU Perkawinan, perkawinan dapat dibatalkan jika para pihak tidak memenuhi syarat-syarat untuk melangsungkan perkawinan.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>P
                <h4 class="mb-3">Dispensasi Nikah</h4>
                <p class="mb-4">
                  Dispensasi nikah adalah kelonggaran hukum yang diberikan kepada mereka yang ingin menikah, tetapi belum mencapai batas usia pernikahan yang telah ditetapkan oleh pemerintah. Orang tua atau wali anak yang belum cukup umur dapat mengajukan dispensasi nikah ke Pengadilan Agama melalui proses persidangan untuk mendapatkan izin perkawinan
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Harta Waris</h4>
                <p class="mb-4">
                  harta peninggalan seseorang setelah meninggal dunia. Dalam hukum peradilan agama di Indonesia, terutama dalam Islam, aturan-aturan waris diatur oleh hukum Islam atau hukum syariah. Proses waris mengikuti prinsip Faraid, yang menentukan bagaimana harta pusaka harus didistribusikan kepada ahli waris sesuai dengan ketentuan agama
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Surat Kuasa Isidentil</h4>
                <p class="mb-4">
                  surat yang memberikan wewenang kepada seseorang untuk bertindak atas nama pemberi kuasa dalam suatu kegiatan atau urusan tertentu yang bersifat insidental. Surat ini biasanya digunakan dalam situasi di mana pemberi kuasa tidak dapat hadir atau tidak mampu melaksanakan tugas-tugas tertentu sendiri</p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Duplikat Akta cerai</h4>
                <p class="mb-4">
                  Duplikat akta cerai adalah salinan atau penggantian akta perceraian yang hilang atau rusak diterbitkan sebagai bukti resmi bahwa pihak yang bersangkutan telah bercerai secara hukum.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Perubahan Nama</h4>
                <p class="mb-4">
                  proses hukum yang memungkinkan seseorang untuk secara resmi mengubah namanya dengan mendapatkan persetujuan dari pengadilan agama.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Perwalian</h4>
                <p class="mb-4">
                  proses hukum di mana pengadilan agama menetapkan seorang wali untuk anak yang belum dewasa atau seseorang yang dianggap tidak mampu mengurus dirinya sendiri dan/atau hartanya.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Penetapan Ahli Waris</h4>
                <p class="mb-4">
                  proses hukum di mana pengadilan agama menetapkan siapa saja yang berhak menjadi ahli waris dari seseorang yang telah meninggal dunia, serta menentukan bagian masing-masing ahli waris sesuai dengan ketentuan hukum Islam.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded d-flex h-100">
              <div class="service-img rounded">
                <img class="img-fluid" src="img/service-6.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-2.png" alt="Icon" />
                </div>
                <h4 class="mb-3">Permohonan Asal-Usul Anak</h4>
                <p class="mb-4">
                  proses hukum di mana seseorang mengajukan permohonan ke pengadilan agama untuk mendapatkan penetapan hukum mengenai asal usul seorang anak.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

@endsection