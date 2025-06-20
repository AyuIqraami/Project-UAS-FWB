<header id="header" class="header d-flex align-items-center sticky-top">
  <div class="container position-relative d-flex align-items-center justify-content-between">

    <a href="{{ route('dashboard.wisatawan') }}" class="logo d-flex align-items-center me-auto me-xl-0">
      <h1 class="sitename">Explore SulBar</h1>
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="{{ route('dashboard.wisatawan') }}">Dashboard</a></li>
        <li><a href="#destinations">Destinations</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    {{-- Dropdown User --}}
    @auth
      <div class="dropdown ms-3">
        <button class="btn dropdown-toggle d-flex align-items-center text-white" type="button" id="dropdownUser"
                data-bs-toggle="dropdown" aria-expanded="false">
          
          @if (Auth::user()->profile?->photo)
            <img src="{{ asset('storage/' . Auth::user()->profile->photo) }}"
                 alt="Profile Photo"
                 class="rounded-circle me-2"
                 style="width: 32px; height: 32px; object-fit: cover;">
          @else
            <i class="bi bi-person-circle fs-4 me-2"></i>
          @endif

          <span>{{ Auth::user()->name }}</span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end border-0" style="background-color: #ffffff;" aria-labelledby="dropdownUser">
          <li>
            <a class="dropdown-item" href="{{ route('profile.edit') }}">
              <i class="bi bi-person me-2"></i> Profile
            </a>
          </li>
          <li>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="dropdown-item">
                <i class="bi bi-box-arrow-right me-2"></i> Log Out
              </button>
            </form>
          </li>
        </ul>
      </div>
    @endauth

  </div>
</header>
