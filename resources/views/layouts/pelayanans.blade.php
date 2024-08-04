
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>SIPOPA - {{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/16735993830.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap22.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style2.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        role="status"
        style="width: 3rem; height: 3rem"
      ></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-darkpa text-light px-0 py-2">
      <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
          <div class="h-100 d-inline-flex align-items-center me-4">
            <img src="img/logo/pasti.png" style="width: 15vh" alt="">
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <img src="img/logo/Logo_BerAKHLAK.png" style="width: 15vh" alt="">
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <img src="img/logo/Logo_EVP.png" style="width: 15vh" alt="">
          </div>
          {{-- <div class="h-100 d-inline-flex align-items-center me-4">
            <span class="fa fa-phone-alt me-2"></span>
            <span>+012 345 6789</span>
          </div>
          <div class="h-100 d-inline-flex align-items-center">
            <span class="far fa-envelope me-2"></span>
            <span>info@example.com</span>
          </div> --}}
        </div>
        <div class="col-lg-5 px-5 text-end">
          <div class="h-100 d-inline-flex align-items-center mx-n2">
            <span>Follow Us:</span>
            <a class="btn btn-link text-light" href=""
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a class="btn btn-link text-light" href=""
              ><i class="fab fa-twitter"></i
            ></a>
            <a class="btn btn-link text-light" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a>
            <a class="btn btn-link text-light" href=""
              ><i class="fab fa-instagram"></i
            ></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

{{-- navbar start --}}
@include('partials.navbar')
{{-- navbar end --}}


{{-- body start --}}
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
                <img class="img-fluid" src="img/service-1.jpg" alt="" />
              </div>
              <div class="service-text rounded p-5">
                <div class="btn-square rounded-circle mx-auto mb-3">
                  <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon" />
                </div>
                <h4 class="mb-3">{{ $post['perkara'] }}</h4>
                <p class="mb-4">
                  {{ Str::limit($post['deskripsi'], 150) }}
                </p>
                <a class="btn btn-sm" href="/pelayanan/{{ $post['id'] }}">
                  <i class="fa fa-plus text-primary me-2"></i>Lebih lanjut..
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->
{{-- body end --}}

    <!-- Footer Start -->
@include('partials.footer')
    <!-- Footer End -->

    <!-- Copyright Start -->
@include('partials.copyright')
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>

