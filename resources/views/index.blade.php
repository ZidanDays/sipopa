@extends('layouts.main')

@section('container')
   
    <!-- Carousel Start -->
    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="img/DSC070721.JPG" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-8">
                    <h1 class=" text-white mb-1 animated slideInDown">
                      Selamat Datang di  <span style="color: #f1ca3f">SIPOPA AMURANG</span>
                    </h1>
                    <h2 style="color: antiquewhite">
                      Sistem <span style="color: #f1ca3f">Pelayanan Online</span> Pengadilan Agama Amurang
                    </h2>
                    <a href="/pelayanan" class="btn btn-primary py-sm-3 px-sm-4 mt-5 p-5">Cek Perkara</a>
                    <!-- <a href="" class="btn btn-primary py-sm-3 px-sm-4"
                      >Explore More</a
                    > -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="img/apel.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-lg-7">
                    <h1 class="text-white mb-5 animated slideInDown">
                      Pengajuan Izin Online Lebih Mudah di Pengadilan Agama Amurang!
                    </h1>
                    <p>"Tak perlu lagi repot datang ke kantor! Sekarang, semua urusan izin Anda bisa diurus secara online. Dengan sistem kami yang cepat dan efisien, Anda bisa mengajukan izin kapan saja dan di mana saja. Nikmati layanan modern dari Pengadilan Agama Amurang yang siap membantu Anda dengan proses yang lebih praktis dan transparan. Coba sekarang dan rasakan kemudahannya!"</p>
                    <a href="/persyaratan" class="btn btn-primary py-sm-3 px-sm-4"
                      >Lebih Lanjut</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Top Feature Start -->
    {{-- <div class="container-fluid top-feature py-5 pt-lg-0">
      <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <div
              class="bg-white shadow d-flex align-items-center h-100 px-5"
              style="min-height: 160px"
            >
              <div class="d-flex">
                <div
                  class="flex-shrink-0 btn-lg-square rounded-circle bg-light"
                >
                  <i class="fa fa-times text-primary"></i>
                </div>
                <div class="ps-3">
                  <h4>No Hidden Cost</h4>
                  <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <div
              class="bg-white shadow d-flex align-items-center h-100 px-5"
              style="min-height: 160px"
            >
              <div class="d-flex">
                <div
                  class="flex-shrink-0 btn-lg-square rounded-circle bg-light"
                >
                  <i class="fa fa-users text-primary"></i>
                </div>
                <div class="ps-3">
                  <h4>Dedicated Team</h4>
                  <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <div
              class="bg-white shadow d-flex align-items-center h-100 px-5"
              style="min-height: 160px"
            >
              <div class="d-flex">
                <div
                  class="flex-shrink-0 btn-lg-square rounded-circle bg-light"
                >
                  <i class="fa fa-phone text-primary"></i>
                </div>
                <div class="ps-3">
                  <h4>24/7 Available</h4>
                  <span>Clita erat ipsum lorem sit sed stet duo justo</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Top Feature End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-end">
          <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
            <img
              class="img-fluid rounded"
              data-wow-delay="0.1s"
              src="img/about.jpg"
            />
          </div>
          <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
            <h1 class="display-1 text-primary mb-0">7</h1>
            <p class="text-primary mb-4">Rekam Jejak Prestasi</p>
            <h1 class="display-5 mb-4">Melayani dengan Sepenuh Hati untuk Mewujudkan Keadilan yang Sejati</h1>
            <p class="mb-4" style="text-align: justify">
              Kami berkomitmen untuk memberikan layanan yang tidak hanya profesional, tetapi juga berempati. Setiap langkah yang kami ambil, mulai dari penyambutan hingga penyelesaian perkara, dilakukan dengan ketulusan hati dan integritas yang tinggi. Kami memahami bahwa proses hukum bisa menjadi pengalaman yang menegangkan dan membingungkan, oleh karena itu, kami hadir untuk memberikan dukungan penuh dengan sikap ramah dan transparan.
            </p>
            <a class="btn btn-primary py-3 px-4" href="">Prestasi</a>
          </div>
          <div class="col-lg-3 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
            <div class="row g-5">
              <div class="col-12 col-sm-6 col-lg-12">
                <div class="border-start ps-4">
                  <i class="fa fa-award fa-3x text-primary mb-3"></i>
                  <h4 class="mb-3">Penghargaan</h4>
                  <span
                    >Prestasi ini mencerminkan kerja keras seluruh tim yang selalu mengutamakan profesionalisme dan integritas dalam setiap proses hukum.</span
                  >
                </div>
              </div>
              <div class="col-12 col-sm-6 col-lg-12">
                <div class="border-start ps-4">
                  <i class="fa fa-users fa-3x text-primary mb-3"></i>
                  <h4 class="mb-3">Tim Berdedikasi</h4>
                  <span
                    >Di balik setiap keputusan yang adil dan setiap layanan yang memuaskan di Pengadilan Agama Amurang, terdapat tim berdedikasi yang bekerja dengan sepenuh hati. Tim kami terdiri dari individu-individu profesional yang memiliki komitmen tinggi terhadap prinsip-prinsip keadilan, integritas, dan pelayanan terbaik.</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Facts Start -->
    {{-- <div
      class="container-fluid facts my-5 py-5"
      data-parallax="scroll"
      data-image-src="img/carousel-1.jpg"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div
            class="col-sm-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
            <span class="fs-5 fw-semi-bold text-light">Happy Clients</span>
          </div>
          <div
            class="col-sm-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
            <span class="fs-5 fw-semi-bold text-light">Garden Complated</span>
          </div>
          <div
            class="col-sm-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
            <span class="fs-5 fw-semi-bold text-light">Dedicated Staff</span>
          </div>
          <div
            class="col-sm-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <h1 class="display-4 text-white" data-toggle="counter-up">1234</h1>
            <span class="fs-5 fw-semi-bold text-light">Awards Achieved</span>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Facts End -->

    <!-- Features Start -->
    {{-- <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 align-items-center">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p class="fs-5 fw-bold text-primary">Why Choosing Us!</p>
            <h1 class="display-5 mb-4">Few Reasons Why People Choosing Us!</h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
            <a class="btn btn-primary py-3 px-4" href="">Explore More</a>
          </div>
          <div class="col-lg-6">
            <div class="row g-4 align-items-center">
              <div class="col-md-6">
                <div class="row g-4">
                  <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                    <div
                      class="text-center rounded py-5 px-4"
                      style="box-shadow: 0 0 45px rgba(0, 0, 0, 0.08)"
                    >
                      <div
                        class="btn-square bg-light rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px"
                      >
                        <i class="fa fa-check fa-3x text-primary"></i>
                      </div>
                      <h4 class="mb-0">100% Satisfaction</h4>
                    </div>
                  </div>
                  <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                    <div
                      class="text-center rounded py-5 px-4"
                      style="box-shadow: 0 0 45px rgba(0, 0, 0, 0.08)"
                    >
                      <div
                        class="btn-square bg-light rounded-circle mx-auto mb-4"
                        style="width: 90px; height: 90px"
                      >
                        <i class="fa fa-users fa-3x text-primary"></i>
                      </div>
                      <h4 class="mb-0">Dedicated Team</h4>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 wow fadeIn" data-wow-delay="0.7s">
                <div
                  class="text-center rounded py-5 px-4"
                  style="box-shadow: 0 0 45px rgba(0, 0, 0, 0.08)"
                >
                  <div
                    class="btn-square bg-light rounded-circle mx-auto mb-4"
                    style="width: 90px; height: 90px"
                  >
                    <i class="fa fa-tools fa-3x text-primary"></i>
                  </div>
                  <h4 class="mb-0">Modern Equipment</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Features End -->

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
                  ><i class="fa fa-plus text-primary me-2"></i>Lihat Izin Persyaratan</a
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
                <h4 class="mb-3">Hak Asuh Anak</h4>
                <p class="mb-4">
                  Hak asuh anak menurut pengadilan agama adalah hak dan kewajiban yang diberikan kepada salah satu atau kedua orang tua untuk merawat, mendidik, dan menjaga anak-anak setelah terjadi perceraian atau perpisahan.
                </p>
                <a class="btn btn-sm" href=""
                  ><i class="fa fa-plus text-primary me-2"></i>Lihat Izin Persyaratan</a
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
                  ><i class="fa fa-plus text-primary me-2"></i>Lihat Izin Persyaratan</a
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
                  ><i class="fa fa-plus text-primary me-2"></i>Lihat Izin Persyaratan</a
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
                  ><i class="fa fa-plus text-primary me-2"></i>Lihat Izin Persyaratan</a
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
                  ><i class="fa fa-plus text-primary me-2"></i>Lihat Izin Persyaratan</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center">
      <a href="/pelayanan" class="btn btn-primary py-sm-3 px-sm-4">Lebih Lanjut</a>
  </div>
  
    <!-- Service End -->

    <!-- Quote Start -->
    {{-- <div
      class="container-fluid quote my-5 py-5"
      data-parallax="scroll"
      data-image-src="img/carousel-2.jpg"
    >
      <div class="container py-5">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div
              class="bg-white rounded p-4 p-sm-5 wow fadeIn"
              data-wow-delay="0.5s"
            >
              <h1 class="display-5 text-center mb-5">Get A Free Quote</h1>
              <div class="row g-3">
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="gname"
                      placeholder="Gurdian Name"
                    />
                    <label for="gname">Your Name</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control bg-light border-0"
                      id="gmail"
                      placeholder="Gurdian Email"
                    />
                    <label for="gmail">Your Email</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="cname"
                      placeholder="Child Name"
                    />
                    <label for="cname">Your Mobile</label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control bg-light border-0"
                      id="cage"
                      placeholder="Child Age"
                    />
                    <label for="cage">Service Type</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control bg-light border-0"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12 text-center">
                  <button class="btn btn-primary py-3 px-4" type="submit">
                    Submit Now
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Quote End -->

    <!-- Projects Start -->
    {{-- <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <p class="fs-5 fw-bold text-primary">Our Projects</p>
          <h1 class="display-5 mb-5">Some Of Our Wonderful Projects</h1>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="0.3s">
          <div class="col-12 text-center">
            <ul class="list-inline rounded mb-5" id="portfolio-flters">
              <li class="mx-2 active" data-filter="*">All</li>
              <li class="mx-2" data-filter=".first">Complete Projects</li>
              <li class="mx-2" data-filter=".second">Ongoing Projects</li>
            </ul>
          </div>
        </div>
        <div class="row g-4 portfolio-container">
          <div
            class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="portfolio-inner rounded">
              <img class="img-fluid" src="img/service-1.jpg" alt="" />
              <div class="portfolio-text">
                <h4 class="text-white mb-4">Landscaping</h4>
                <div class="d-flex">
                  <a
                    class="btn btn-lg-square rounded-circle mx-2"
                    href="img/service-1.jpg"
                    data-lightbox="portfolio"
                    ><i class="fa fa-eye"></i
                  ></a>
                  <a class="btn btn-lg-square rounded-circle mx-2" href=""
                    ><i class="fa fa-link"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="portfolio-inner rounded">
              <img class="img-fluid" src="img/service-2.jpg" alt="" />
              <div class="portfolio-text">
                <h4 class="text-white mb-4">Pruning plants</h4>
                <div class="d-flex">
                  <a
                    class="btn btn-lg-square rounded-circle mx-2"
                    href="img/service-2.jpg"
                    data-lightbox="portfolio"
                    ><i class="fa fa-eye"></i
                  ></a>
                  <a class="btn btn-lg-square rounded-circle mx-2" href=""
                    ><i class="fa fa-link"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <div class="portfolio-inner rounded">
              <img class="img-fluid" src="img/service-3.jpg" alt="" />
              <div class="portfolio-text">
                <h4 class="text-white mb-4">Irrigation & Drainage</h4>
                <div class="d-flex">
                  <a
                    class="btn btn-lg-square rounded-circle mx-2"
                    href="img/service-3.jpg"
                    data-lightbox="portfolio"
                    ><i class="fa fa-eye"></i
                  ></a>
                  <a class="btn btn-lg-square rounded-circle mx-2" href=""
                    ><i class="fa fa-link"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp"
            data-wow-delay="0.1s"
          >
            <div class="portfolio-inner rounded">
              <img class="img-fluid" src="img/service-4.jpg" alt="" />
              <div class="portfolio-text">
                <h4 class="text-white mb-4">Garden Maintenance</h4>
                <div class="d-flex">
                  <a
                    class="btn btn-lg-square rounded-circle mx-2"
                    href="img/service-4.jpg"
                    data-lightbox="portfolio"
                    ><i class="fa fa-eye"></i
                  ></a>
                  <a class="btn btn-lg-square rounded-circle mx-2" href=""
                    ><i class="fa fa-link"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp"
            data-wow-delay="0.3s"
          >
            <div class="portfolio-inner rounded">
              <img class="img-fluid" src="img/service-5.jpg" alt="" />
              <div class="portfolio-text">
                <h4 class="text-white mb-4">Green Technology</h4>
                <div class="d-flex">
                  <a
                    class="btn btn-lg-square rounded-circle mx-2"
                    href="img/service-5.jpg"
                    data-lightbox="portfolio"
                    ><i class="fa fa-eye"></i
                  ></a>
                  <a class="btn btn-lg-square rounded-circle mx-2" href=""
                    ><i class="fa fa-link"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div
            class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp"
            data-wow-delay="0.5s"
          >
            <div class="portfolio-inner rounded">
              <img class="img-fluid" src="img/service-6.jpg" alt="" />
              <div class="portfolio-text">
                <h4 class="text-white mb-4">Urban Gardening</h4>
                <div class="d-flex">
                  <a
                    class="btn btn-lg-square rounded-circle mx-2"
                    href="img/service-6.jpg"
                    data-lightbox="portfolio"
                    ><i class="fa fa-eye"></i
                  ></a>
                  <a class="btn btn-lg-square rounded-circle mx-2" href=""
                    ><i class="fa fa-link"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Projects End -->

    <!-- Team Start -->
    {{-- <div class="container-xxl py-5">
      <div class="container">
        <div
          class="text-center mx-auto wow fadeInUp"
          data-wow-delay="0.1s"
          style="max-width: 500px"
        >
          <p class="fs-5 fw-bold text-primary">Our Team</p>
          <h1 class="display-5 mb-5">Dedicated & Experienced Team Members</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-1.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Doris Jordan</h4>
                <p class="text-primary">Landscape Designer</p>
                <div class="team-social d-flex">
                  <a class="btn btn-square rounded-circle me-2" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square rounded-circle me-2" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square rounded-circle me-2" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/DSC07072.JPG" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Johnny Ramirez</h4>
                <p class="text-primary">Garden Designer</p>
                <div class="team-social d-flex">
                  <a class="btn btn-square rounded-circle me-2" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square rounded-circle me-2" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square rounded-circle me-2" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-3.jpg" alt="" />
              <div class="team-text">
                <h4 class="mb-0">Diana Wagner</h4>
                <p class="text-primary">Senior Gardener</p>
                <div class="team-social d-flex">
                  <a class="btn btn-square rounded-circle me-2" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square rounded-circle me-2" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square rounded-circle me-2" href=""
                    ><i class="fab fa-instagram"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Team End -->

    <!-- Testimonial Start -->
    {{-- <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
            <p class="fs-5 fw-bold text-primary">Testimonial</p>
            <h1 class="display-5 mb-5">What Our Clients Say About Us!</h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet
              lorem sit clita duo justo.
            </p>
            <a class="btn btn-primary py-3 px-4" href="">See More</a>
          </div>
          <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
            <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item">
                <img
                  class="img-fluid rounded mb-3"
                  src="img/testimonial-1.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h4>Client Name</h4>
                <span>Profession</span>
              </div>
              <div class="testimonial-item">
                <img
                  class="img-fluid rounded mb-3"
                  src="img/testimonial-2.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h4>Client Name</h4>
                <span>Profession</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- Testimonial End --> 
@endsection