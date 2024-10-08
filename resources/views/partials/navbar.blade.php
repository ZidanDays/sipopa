
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
            <a
              href="/"
              class="navbar-brand d-flex align-items-center px-4 px-lg-5"
            >
              <!-- <h1 class="m-0">Pengadilan Agama Amurang</h1> -->
              <img src="img/icon/PA AMURANG copy.png" style="width: 50vh" alt="" />
            </a>
            <button
              type="button"
              class="navbar-toggler me-4"
              data-bs-toggle="collapse"
              data-bs-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a
                  href="/"
                  class="nav-item nav-link {{ ($title == "Beranda") ? 'active' : '' }}"
                  style="text-align: center"
                  >Beranda</a
                >
                <a
                  href="/prestasi"
                  class="nav-item nav-link {{ ($title == "Prestasi") ? 'active' : '' }}"
                  style="text-align: center"
                  >Prestasi</a
                >
                {{-- <a
                  href="about.html"
                  class="nav-item nav-link {{ ($title == "Tentang Kita") ? 'active' : '' }}"
                  style="text-align: center"
                  >Tentang Kita</a
                > --}}
                <a href="/pelayanan" class="nav-item nav-link {{ ($title=="Pelayanan") ? "active" : "" }}" style="text-align: center">Pelayanan</a>
                <a href="/laporan-tahunan" class="navl-item nav-link {{ ($title=="laporan-tahunan") ? "active" : "" }}" style="text-align: center">Laporan Tahunan</a>
                {{-- <a href="/struktur-organisasi" class="nav-item nav-link {{ ($title=="struktur-organisasi") ? "active" : "" }}" style="text-align: center">Struktur Organisasi</a> --}}
                {{-- <a
                  href="/persyaratan"
                  class="nav-item nav-link {{ ("title"=="Persyaratan") ? "active" : "" }}"
                  style="text-align: center"
                  >Persyaratan</a
                > --}}
                {{-- <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle" style="text-align: center"
                    data-bs-toggle="dropdown"
                    >Pages</a
                  >
                  <div class="dropdown-menu bg-light m-0">
                    <a href="feature.html" class="dropdown-item">Features</a>
                    <a href="quote.html" class="dropdown-item">Free Quote</a>
                    <a href="team.html" class="dropdown-item">Our Team</a>
                    <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                    <a href="404.html" class="dropdown-item">404 Page</a>
                  </div>
                </div> --}}
                <a href="/kontak" class="nav-item nav-link {{ ($title == "Kontak") ? "active" : "" }}" style="text-align: center">Kontak</a>
              </div>
              <!-- <a
                href=""
                class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block"
                >Get A Quote<i class="fa fa-arrow-right ms-3"></i
              ></a> -->
            </div>
          </nav>
          <!-- Navbar End -->