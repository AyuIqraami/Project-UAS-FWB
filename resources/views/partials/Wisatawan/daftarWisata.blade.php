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
                <p>{{ \Illuminate\Support\Str::limit($destination->description) }}</p>
                <div class="d-flex gap-2">
                  <a href="{{ route('login') }}" class="btn btn-sm btn-outline-primary">Login</a>
                  <a href="{{ route('register') }}" class="btn btn-sm btn-outline-secondary">Register</a>
                </div>
              @else
                <p>{{ $destination->description }}</p>
                <div class="d-flex gap-2">
                  <a href="{{ route('destinations.show', $destination->id) }}" class="btn btn-sm btn-primary">Lihat Detail</a>
                  <a href="{{ route('wisatawan.booking.create', $destination->id) }}" class="btn btn-sm btn-success">Booking Guide</a>
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
