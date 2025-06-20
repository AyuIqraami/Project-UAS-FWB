<!DOCTYPE html>
<html lang="en">

@include('partials.Wisatawan.head')

<body class="index-page">
 <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.webp" alt=""> -->
        <h1 class="sitename">Explore SulBar</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#destinations">Destinations</a></li>
          {{-- <li><a href="#book-a-table">Book a Table</a></li> --}}
          <li><a href="#guides">Guides</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#contact">Contact</a></li>
           @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>                        
                    @else
                    <li><a href="{{ route('login') }}">Login</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      {{-- <a class="btn-getstarted d-none d-sm-block" href="#book-a-table">Book a Table</a> --}}

    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
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
   <!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="about-content">
          <h3>Tentang Explore SulBar</h3>
          <p class="fst-italic">
            Website ini hadir untuk memudahkan wisatawan menjelajahi keindahan Sulawesi Barat dengan bantuan para pemandu wisata..
          </p>
          <p>
            Explore SulBar adalah platform yang menyajikan informasi lengkap seputar destinasi wisata terbaik di Sulawesi Barat. Melalui website ini, wisatawan dapat menjelajahi berbagai tempat menarik sekaligus memesan guide lokal yang siap mendampingi perjalanan mereka. Proses pemesanan dilakukan secara online, namun pembayaran dilakukan secara langsung setelah wisatawan dan guide bertemu, sehingga lebih fleksibel dan nyaman bagi kedua belah pihak.
          </p>
        </div>
      </div>

      <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="100">
        <div class="about-image-wrapper">
          <img src="{{ asset('User') }}/assets/img/ES.png" class="img-fluid main-image shadow" alt="Explore SulBar">
          {{-- <img src="{{ asset('User') }}/assets/img/restaurant/showcase-2.webp" class="img-fluid accent-image shadow" alt="Pemandu Wisata"> --}}
          <span class="establishment-year d-flex align-items-center justify-content-center text-center">Est. 2025</span>
        </div>
      </div>
    </div>

    <div class="row mt-5 pt-4 features-section">
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="bi bi-map"></i>
          </div>
          <h4>Destinasi</h4>
          <p>Sajian informasi berbagai tempat wisata di Sulawesi Barat yang menarik dan layak dikunjungi.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="bi bi-person-badge"></i>
          </div>
          <h4>Guide Lokal</h4>
          <p>Guide lokal yang bisa mendaftar ke destinasi wisata tertentu untuk menawarkan jasanya kepada wisatawan.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="bi bi-hand-thumbs-up"></i>
          </div>
          <h4>Booking Mudah</h4>
          <p>Wisatawan bisa memilih destinasi, lalu booking guide dengan proses yang cepat dan tanpa ribet.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="bi bi-cash"></i>
          </div>
          <h4>Transaksi Mandiri</h4>
          <p>Pembayaran dilakukan langsung antara wisatawan dan guide tanpa keterlibatan sistem.</p>
        </div>
      </div>
    </div>
</section>
    <!-- /About Section -->

    <!-- Menu Section -->
    {{-- @include('partials.Wisatawan.daftarWisata') --}}
    <section id="destinations" class="menu section">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Destinasi Wisata</h2>
    <p>Temukan keindahan destinasi di Sulawesi Barat yang telah dikurasi khusus oleh Admin.</p>
  </div>

  <div class="container" data-aos="fade-up">
    <div class="row gy-4">
      @forelse ($destinations as $destination)
        <div class="col-lg-6">
          <article class="d-flex menu-item align-items-center gap-4">
            <img src="{{ asset('storage/' . $destination->image) }}"
                 alt="{{ $destination->name }}"
                 class="menu-img img-fluid rounded-3"
                 style="width: 160px; height: 175px; object-fit: cover;">
                 
            <div class="menu-content">
              <h5>
                {{ $destination->name }}
                <span class="menu-tag">{{ $destination->location }}</span>
              </h5>

              @guest
                <p>{{ \Illuminate\Support\Str::limit($destination->description, 80, '...') }}</p>
                <div class="d-flex gap-2">
                  <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">Login</a>
                  <a href="{{ route('register') }}" class="btn btn-sm btn-outline-secondary">Daftar</a>
                </div>
              @else
                <p>{{ $destination->description }}</p>
                <div class="d-flex gap-2">
                  <a href="{{ route('destinations.show', $destination->id) }}" class="btn btn-sm btn-primary">Lihat Detail</a>
                  <a href="{{ route('wisatawan.booking.create', ['destination' => $destination->id]) }}"class="btn btn-sm btn-primary">Booking Guide</a>
                </div>
              @endguest
            </div>
          </article>
        </div>
      @empty
        <div class="text-center mt-5">
          <p class="text-muted">Belum ada destinasi yang tersedia saat ini.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>

    <!-- /Menu Section -->

     <!-- Chefs Section -->
    @include('partials.Wisatawan.daftarGuide')
    <!-- /Chefs Section -->

    <!-- Testimonials Section --> 
     @include('partials.Wisatawan.testimonials')
    <!-- /Testimonials Section -->

    {{-- <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-5 mb-5">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="reservation-info">
              <div class="text-content">
                <h3>Book Your Table</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Aliquam erat volutpat.</p>

                <div class="reservation-details mt-4">
                  <div class="detail-item">
                    <i class="bi bi-clock"></i>
                    <div>
                      <h5>Opening Hours</h5>
                      <p>Monday - Friday: 11:00 AM - 11:00 PM<br>
                        Saturday - Sunday: 10:00 AM - 12:00 AM</p>
                    </div>
                  </div>

                  <div class="detail-item">
                    <i class="bi bi-geo-alt"></i>
                    <div>
                      <h5>Location</h5>
                      <p>1234 Main Street, Suite 100<br>
                        Boston, MA 02110</p>
                    </div>
                  </div>

                  <div class="detail-item">
                    <i class="bi bi-telephone"></i>
                    <div>
                      <h5>Call Us</h5>
                      <p>+1 (617) 555-1234</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="reservation-image">
              <img src="{{ asset('User') }}/assets/img/restaurant/showcase-7.webp" alt="Restaurant interior" class="img-fluid rounded">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12" data-aos="fade-up" data-aos-delay="400">
            <div class="reservation-form-wrapper">
              <div class="form-header">
                <h3>Book A Table</h3>
                <p>Please fill the form below to make a reservation</p>
              </div>

              <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form mt-4">
                <div class="row gy-4">
                  <div class="col-lg-4 form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Your Phone" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <select name="people" class="form-select" required="">
                      <option value="">Number of guests</option>
                      <option value="1">1 Person</option>
                      <option value="2">2 People</option>
                      <option value="3">3 People</option>
                      <option value="4">4 People</option>
                      <option value="5">5 People</option>
                      <option value="6">6+ People</option>
                    </select>
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="date" name="date" class="form-control" placeholder="Date" required="">
                  </div>
                  <div class="col-lg-4 form-group">
                    <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
                  </div>

                  <div class="form-group mt-4">
                    <textarea class="form-control" name="message" rows="3" placeholder="Special Requests (Optional)"></textarea>
                  </div>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div>

                <div class="text-center mt-4">
                  <button type="submit" class="btn-book-table">Book Now</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Book A Table Section --> --}}

    {{-- <!-- Location Section -->
    <section id="location" class="location section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Location</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.684949335945!2d-73.98658242357565!3d40.75853057126168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDDCsDQ1JzMwLjciTiA3M8KwNTknMDcuNyJX!5e0!3m2!1sen!2sus!4v1654321234567!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="info-container">
              <div class="section-header">
                <h2>Find Us</h2>
                <p>Visit Us Today</p>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="300">
                <div class="info-icon">
                  <i class="bi bi-geo-alt"></i>
                </div>
                <div class="info-content">
                  <h3>Our Location</h3>
                  <p>123 Culinary Avenue, Manhattan, NY 10001</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="400">
                <div class="info-icon">
                  <i class="bi bi-telephone"></i>
                </div>
                <div class="info-content">
                  <h3>Reservations</h3>
                  <p>+1 (212) 555-7890</p>
                  <p class="small-text">We recommend making reservations at least 48 hours in advance</p>
                </div>
              </div>

              <div class="info-card" data-aos="fade-up" data-aos-delay="500">
                <div class="info-icon">
                  <i class="bi bi-clock"></i>
                </div>
                <div class="info-content">
                  <h3>Hours</h3>
                  <div class="hours-grid">
                    <div class="day">Monday - Thursday</div>
                    <div class="time">11:00 AM - 10:00 PM</div>

                    <div class="day">Friday - Saturday</div>
                    <div class="time">11:00 AM - 11:30 PM</div>

                    <div class="day">Sunday</div>
                    <div class="time">10:00 AM - 9:00 PM</div>

                    <div class="day">Brunch Hours</div>
                    <div class="time">Sat &amp; Sun, 10:00 AM - 2:00 PM</div>
                  </div>
                </div>
              </div>

              <div class="cta-wrapper" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="btn-book">Make a Reservation</a>
                <a href="#" class="btn-contact">Contact Us</a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Location Section --> --}}

    {{-- <!-- Events Section -->
    <section id="events" class="events section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="intro-text text-center mb-5" data-aos="fade-up" data-aos-delay="150">
          <h2>Create Unforgettable Moments</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum.</p>
        </div>

        <div class="event-types">
          <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="event-type-card">
                <div class="icon-wrapper">
                  <i class="bi bi-calendar-heart"></i>
                </div>
                <h3>Weddings &amp; Celebrations</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                <span class="capacity">Up to 150 guests</span>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
              <div class="event-type-card">
                <div class="icon-wrapper">
                  <i class="bi bi-building"></i>
                </div>
                <h3>Corporate Events</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                <span class="capacity">Up to 100 guests</span>
              </div>
            </div>

            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="event-type-card">
                <div class="icon-wrapper">
                  <i class="bi bi-people"></i>
                </div>
                <h3>Private Gatherings</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.</p>
                <span class="capacity">Up to 50 guests</span>
              </div>
            </div>
          </div>
        </div>

        <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="150">
          <div class="row g-3">
            <div class="col-lg-8">
              <div class="main-image" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset('User') }}/assets/img/restaurant/event-1.webp" alt="Event Space" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="row g-3">
                <div class="col-lg-12 col-md-6">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                    <img src="{{ asset('User') }}/assets/img/restaurant/event-5.webp" alt="Event" class="img-fluid">
                  </div>
                </div>
                <div class="col-lg-12 col-md-6">
                  <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('User') }}/assets/img/restaurant/event-7.webp" alt="Event" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="event-cta" data-aos="fade-up" data-aos-delay="200">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3>Ready to plan your special event?</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo magna. Contact us today to discuss your requirements.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
              <a href="#" class="btn-reserve">Reserve Venue</a>
            </div>
          </div>
        </div>

        <div class="featured-events" data-aos="fade-up" data-aos-delay="200">
          <h3>Upcoming Featured Events</h3>

          <div class="row g-4">
            <div class="col-lg-6 col-md-6">
              <div class="featured-event-card" data-aos="fade-up" data-aos-delay="250">
                <div class="event-date">
                  <span class="month">Jun</span>
                  <span class="day">18</span>
                </div>
                <div class="event-content">
                  <div class="event-image">
                    <img src="{{ asset('User') }}/assets/img/restaurant/event-3.webp" alt="Summer Wine Festival" class="img-fluid">
                  </div>
                  <div class="event-info">
                    <h4>Summer Wine Festival</h4>
                    <ul class="event-meta">
                      <li><i class="bi bi-clock"></i> 6:00 PM - 10:00 PM</li>
                      <li><i class="bi bi-geo-alt"></i> Garden Terrace</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo magna dolor sit amet.</p>
                    <a href="#" class="btn-details">View Details</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-6">
              <div class="featured-event-card" data-aos="fade-up" data-aos-delay="300">
                <div class="event-date">
                  <span class="month">Jul</span>
                  <span class="day">05</span>
                </div>
                <div class="event-content">
                  <div class="event-image">
                    <img src="{{ asset('User') }}/assets/img/restaurant/event-8.webp" alt="Gourmet Tasting Night" class="img-fluid">
                  </div>
                  <div class="event-info">
                    <h4>Gourmet Tasting Night</h4>
                    <ul class="event-meta">
                      <li><i class="bi bi-clock"></i> 7:30 PM - 11:00 PM</li>
                      <li><i class="bi bi-geo-alt"></i> Main Dining Hall</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed justo magna dolor sit amet.</p>
                    <a href="#" class="btn-details">View Details</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Events Section --> --}}

   <!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Kontak</h2>
    <p>Hubungi kami jika kamu memiliki pertanyaan atau ingin bekerja sama dalam mempromosikan pariwisata Sulawesi Barat.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Contact Info Boxes -->
    <div class="row gy-4 mb-5">

      <!-- Alamat -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-info-box">
          <div class="icon-box">
            <i class="bi bi-geo-alt"></i>
          </div>
          <div class="info-content">
            <h4>Alamat</h4>
            <p>Majene, Sulawesi Barat</p>
          </div>
        </div>
      </div>

      <!-- Email -->
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="contact-info-box">
          <div class="icon-box">
            <i class="bi bi-envelope"></i>
          </div>
          <div class="info-content">
            <h4>Email</h4>
            <p>exploresulbar@gmail.com</p>
          </div>
        </div>
      </div>

    </div>

  </div> 

</section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">NiceRestaurant</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  @include('partials.Wisatawan.sripts')

</body>

</html>