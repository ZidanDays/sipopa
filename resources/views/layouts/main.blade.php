<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>SIPOPA - {{ $title }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('img/16735993830.png') }}" rel="icon" />

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
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/style2.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/iconwa.css') }}"  rel="stylesheet" />
      
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
            <img src="{{ asset('img/logo/pasti.png') }}" style="width: 15vh" alt="">
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <img src="{{ asset('img/logo/Logo_BerAKHLAK.png') }}" style="width: 15vh" alt="">
          </div>
          <div class="h-100 d-inline-flex align-items-center me-4">
            <img src="{{ asset('img/logo/Logo_EVP.png') }}" style="width: 15vh" alt="">
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
            <a class="btn btn-link text-light" href="https://www.facebook.com/profile.php?id=61553731929131" target="_blank"
              ><i class="fab fa-facebook-f"></i
            ></a>
            {{-- <a class="btn btn-link text-light" href=""
              ><i class="fab fa-twitter"></i
            ></a> --}}
            {{-- <a class="btn btn-link text-light" href=""
              ><i class="fab fa-linkedin-in"></i
            ></a> --}}
            <a class="btn btn-link text-light" href="https://www.instagram.com/pa.amurang/" target="_blank"
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
    @yield('container')
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

    <!-- WhatsApp Floating Button -->
<a href="https://wa.me/6285174121224" class="wa-float" target="_blank">
        <i class="fab fa-whatsapp wa-icon"></i>WhatsApp
  </a>

{{-- highchart --}}
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $('.card-img-top').on('click', function() {
            var targetModal = $(this).data('target');
            $(targetModal).modal('show');
        });
    });
</script>

<script>
  Highcharts.chart('containerlaporantahunan', {
    title: {
        text: 'Laporan Tahunan Perusahaan XYZ',
        align: 'left'
    },

    subtitle: {
        text: 'Pendapatan per Kategori. Sumber: Laporan Keuangan 2023',
        align: 'left'
    },

    yAxis: {
        title: {
            text: 'Pendapatan (dalam juta IDR)'
        }
    },

    xAxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        accessibility: {
            rangeDescription: 'Rentang: Januari hingga Desember 2023'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 0
        }
    },

    series: [{
        name: 'Produk A',
        data: [450, 470, 520, 540, 600, 640, 700, 720, 710, 750, 800, 850]
    }, {
        name: 'Produk B',
        data: [380, 400, 410, 420, 450, 480, 510, 530, 520, 540, 570, 600]
    }, {
        name: 'Produk C',
        data: [300, 310, 320, 330, 350, 370, 390, 410, 400, 420, 440, 460]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }
});
</script>

<script>
  Highcharts.chart('containerlaporantahunan2023', {
    title: {
        text: 'Laporan Tahunan Perkara Diterima',
        align: 'left'
    },

    subtitle: {
        text: 'Jumlah Perkara Diterima per Bulan. Sumber: Data Pengadilan 2023',
        align: 'left'
    },

    yAxis: {
        title: {
            text: 'Jumlah Perkara'
        }
    },

    xAxis: {
        categories: ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Nopember', 'Desember'],
        accessibility: {
            rangeDescription: 'Rentang: Januari hingga Desember 2023'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 1
        }
    },

    series: [{
        name: 'Jumlah Perkara',
        data: [4, 32, 40, 1, 5, 12, 8, 14, 5, 9, 2, 3]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }
});
</script>


  </body>
</html>


<script>
  Highcharts.chart('containerjenislaporantiperkara', {
    title: {
        text: 'Perkara Berdasarkan Jenisnya',
        align: 'left'
    },

    subtitle: {
        text: 'Jumlah Perkara per Jenis. Sumber: Data Pengadilan 2023',
        align: 'left'
    },

    yAxis: {
        title: {
            text: 'Jumlah Perkara'
        }
    },

    xAxis: {
        categories: ['', 'Cerai Talak', 'Cerai Gugat', 'Dispensasi Kawin', 'Isbat Nikah', 'Isbat Nikah Contentius', 'Perwalian', 'Penguasaan Anak'],
        accessibility: {
            rangeDescription: 'Rentang: Jenis Perkara 2023'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 1
        }
    },

    series: [{
        name: 'Jumlah Perkara',
        data: [15, 54, 18, 42, 4, 1, 1]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }
});
</script>

<script>
Highcharts.chart('containerlaporankecamatan', {
  title: {
      text: 'Perkara Berdasarkan Kecamatan',
      align: 'left'
  },

  subtitle: {
      text: 'Jumlah Perkara per Kecamatan. Sumber: Data Pengadilan 2023',
      align: 'left'
  },

  yAxis: {
      title: {
          text: 'Jumlah Perkara'
      }
  },

  xAxis: {
      categories: ['', 'Motoling', 'Motoling Barat', 'Kumelembuay', 'Motoling Timur', 'Tompaso Baru', 'Maesaan', 'Modoinding', 'Tenga', 'Tatapaan', 'Ranoyapo', 'Sinonsayang', 'Tareran', 'Suluun Tareran', 'Amurang', 'Amurang Barat', 'Amurang Timur', 'Tumpaan'],
      accessibility: {
          rangeDescription: 'Kecamatan'
      }
  },

  legend: {
      layout: 'vertical',
      align: 'right',
      verticalAlign: 'middle'
  },

  plotOptions: {
      series: {
          label: {
              connectorAllowed: false
          },
          pointStart: 1
      }
  },

  series: [{
      name: 'Jumlah Perkara',
      data: [0, 0, 0, 0, 6, 1, 0, 39, 7, 0, 53, 0, 0, 15, 4, 2, 8]
  }],

  responsive: {
      rules: [{
          condition: {
              maxWidth: 500
          },
          chartOptions: {
              legend: {
                  layout: 'horizontal',
                  align: 'center',
                  verticalAlign: 'bottom'
              }
          }
      }]
  }
});
</script>

<script>
    Highcharts.chart('containerlaporanpendidikanxx', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Perkara Diterima Berdasarkan Tingkat Pendidikan',
            align: 'left'
        },

        subtitle: {
            text: 'Pengadilan Agama Amurang Tahun 2023',
            align: 'left'
        },

        xAxis: {
            categories: [
                'Tidak Sekolah',
                'SD Sederajat',
                'SLTP Sederajat',
                'SLTA Sederajat',
                'Diploma',
                'Sarjana',
                'Magister'
            ],
            title: {
                text: 'Tingkat Pendidikan'
            }
        },

        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Perkara Masuk'
            }
        },

        tooltip: {
            valueSuffix: ' Perkara'
        },

        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },

        series: [{
            name: 'Jumlah Perkara Masuk',
            data: [1, 39, 36, 52, 1, 5, 1]

        }]
    });
    </script>