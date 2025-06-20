{{-- <section id="guides" class="chefs section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Chefs</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-5">
            <div class="chef-highlight" data-aos="fade-right" data-aos-delay="200">
              <figure class="chef-image">
                <img src="{{ asset('User') }}/assets/img/restaurant/chef-1.webp" class="img-fluid" alt="Executive Chef">
              </figure>
              <div class="chef-details">
                <h3>Executive Chef</h3>
                <h2>Gabriel Turner</h2>
                <div class="chef-awards">
                  <span><i class="bi bi-star-fill"></i> James Beard Award</span>
                  <span><i class="bi bi-star-fill"></i> Two Michelin Stars</span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor nisi elit.</p>
                <div class="chef-signature">
                  <img src="{{ asset('User') }}/assets/img/misc/signature-1.webp" alt="Chef Signature">
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="team-container" data-aos="fade-left" data-aos-delay="300">
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="chef-img">
                      <img src="{{ asset('User') }}/assets/img/restaurant/chef-2.webp" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Sophia Martinez</h4>
                      <p class="role">Pastry Chef</p>
                      <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim purus a ipsum faucibus, et porttitor.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="250">
                    <div class="chef-img">
                      <img src="{{ asset('User') }}/assets/img/restaurant/chef-3.webp" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Marcus Chen</h4>
                      <p class="role">Sous Chef</p>
                      <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim purus a ipsum faucibus, et porttitor.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="chef-img">
                      <img src="{{ asset('User') }}/assets/img/restaurant/chef-4.webp" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Jonathan Williams</h4>
                      <p class="role">Head of Bar</p>
                      <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim purus a ipsum faucibus, et porttitor.</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="chef-card" data-aos="zoom-in" data-aos-delay="350">
                    <div class="chef-img">
                      <img src="{{ asset('User') }}/assets/img/restaurant/chef-5.webp" class="img-fluid" alt="Chef Portrait">
                      <div class="social-links">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                      </div>
                    </div>
                    <div class="chef-info">
                      <h4>Isabella Romano</h4>
                      <p class="role">Grill Master</p>
                      <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim purus a ipsum faucibus, et porttitor.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section> --}}

    <section id="guides" class="chefs section">
  <div class="container section-title" data-aos="fade-up">
    <h2>Guide Terdaftar</h2>
    <p>Berikut adalah beberapa guide berpengalaman yang siap memandu wisata Anda di Sulawesi Barat.</p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row">
      @forelse ($guides as $guide)
        <div class="col-md-6 col-lg-4 mb-4">
          <div class="chef-card h-100" data-aos="zoom-in" data-aos-delay="200">
            <div class="chef-img position-relative">
              <img src="{{ asset('User/assets/img/default-user.png') }}" class="img-fluid rounded" alt="Guide Profile">
              <div class="social-links">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
              </div>
            </div>
            <div class="chef-info p-3">
              <h4>{{ $guide->user->name }}</h4>
              <p class="role">Guide Wisata</p>
              <p class="details">{{ Str::limit($guide->bio, 100, '...') }}</p>
              @if ($guide->price)
                <p class="text-primary fw-semibold">Rp {{ number_format($guide->price, 0, ',', '.') }} / hari</p>
              @endif
            </div>
          </div>
        </div>
      @empty
        <div class="col-12 text-center">
          <p>Belum ada guide yang terdaftar saat ini.</p>
        </div>
      @endforelse
    </div>
  </div>
</section>
