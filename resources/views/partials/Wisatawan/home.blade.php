<section id="hero" class="hero section">
  <div class="container-fluid hero-container" data-aos="fade-up">
    <div class="row g-0 align-items-center">

      <!-- Kolom Konten Kiri -->
      <div class="col-lg-6 content-col">
        <div class="content-wrapper">
          {{-- <div class="status-badge">Destinations Open</div> --}}
          <h2>Explore the Beauty of Sulawesi Barat</h2>
          <p>
            Temukan keindahan alam yang menakjubkan, budaya yang kaya, dan pengalaman tak terlupakan di berbagai destinasi memukau Sulawesi Barat. Mari mulai petualanganmu di sini.
          </p>

          <div class="btn-group mb-4">
            <a href="#guides" class="btn btn-book">Book a Guide</a>
            <a href="#destinations" class="btn btn-menu">View Destinations</a>
          </div>
        </div>
      </div>

      <!-- Kolom Gambar Kanan -->
      <div class="col-lg-5 swiper-col">
        <div class="swiper hero-swiper init-swiper" data-aos="zoom-out" data-aos-delay="100">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "effect": "fade",
              "slidesPerView": 1,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="img-container">
                <img src="{{ asset('User') }}/assets/img/sigitung.jpg" alt="Gunung Sigitung">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="img-container">
                <img src="{{ asset('User') }}/assets/img/kunyi.jpg" alt="Puncak Kunyi">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="img-container">
                <img src="{{ asset('User') }}/assets/img/dato.jpg" alt="Pantai Dato">
              </div>
            </div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>

    </div>
  </div>
</section>


@extends('layouts.wisatawanMaster')

<section id="hero" class="hero section">
  <div class="container-fluid hero-container" data-aos="fade-up">
    <div class="row g-0 align-items-center">
    <h2 class="mb-4">Selamat datang, {{ Auth::user()->name }}!</h2>
    <p>Explore SulBar siap menemani perjalananmu menjelajahi Sulawesi Barat 🌴</p>

    <div class="row mt-4">
      <div class="col-md-4">
        <div class="card shadow border-0 rounded-4 text-white" style="background-color: #8B5E3C;">
          <div class="card-body text-center py-4">
            <h5 class="card-title fs-5">Total Wisata</h5>
            <p class="card-text fs-4 fw-semibold">{{ $jumlahDestinasi }} tempat</p>
            <i class="bi bi-map-fill fs-1"></i>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card shadow border-0 rounded-4 text-white" style="background-color: #A47148;">
          <div class="card-body text-center py-4">
            <h5 class="card-title fs-5">Booking Saya</h5>
            <p class="card-text fs-4 fw-semibold">{{ $jumlahBooking }} pesanan</p>
            <i class="bi bi-calendar-check-fill fs-1"></i>
          </div>
        </div>
      </div>
      
      <div class="col-md-4">
        <div class="card shadow border-0 rounded-4 text-white" style="background-color: #C69C6D;">
          <div class="card-body text-center py-4">
            <h5 class="card-title fs-5">Guide Tersedia</h5>
            <p class="card-text fs-4 fw-semibold">{{ $jumlahGuide }} guide</p>
            <i class="bi bi-person-lines-fill fs-1"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
