<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars text-gray-800"></i>
    </button>

    <!-- Spacer supaya konten ke kanan -->
    <div class="ml-auto d-flex align-items-center">

        <!-- User Dropdown -->
        <ul class="navbar-nav">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDropdown" role="button"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-800 small">
                        {{ Auth::user()->name }}
                    </span>

                    @php
                        $user = Auth::user();
                        $photoPath = $user->profile?->photo 
                            ? asset('storage/' . $user->profile->photo) 
                            : asset('Admin/img/undraw_profile.svg');
                    @endphp

                    <img class="img-profile rounded-circle"
                         src="{{ $photoPath }}" style="width: 32px; height: 32px;">
                </a>

                <!-- Dropdown - User Info -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                     aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('profile.edit') }}">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profil
                    </a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="dropdown-item">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </li>
        </ul>

    </div>
</nav>
<!-- End of Topbar -->
