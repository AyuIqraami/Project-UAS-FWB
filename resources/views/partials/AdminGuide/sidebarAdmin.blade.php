<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #2f2f2f;">
    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon">
            <i class="fas fa-map-marked-alt text-light"></i>
        </div>
        <div class="sidebar-brand-text mx-2 text-light">Explore SulBar</div>
    </a>

    <hr class="sidebar-divider my-0 border-secondary">

    <!-- Dashboard -->
    <li class="nav-item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <a class="nav-link px-4 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-light' }}" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider border-secondary">

    <!-- Heading -->
    <div class="sidebar-heading text-muted px-3">Manajemen</div>

    <!-- Kelola Destinasi -->
    <li class="nav-item {{ request()->routeIs('admin.destinasi.*') ? 'active' : '' }}">
        <a class="nav-link px-4 {{ request()->routeIs('admin.destinasi.*') ? 'text-white' : 'text-light' }}" href="{{ route('admin.destinasi.index') }}">
            <i class="fas fa-map"></i>
            <span>Kelola Destinasi</span>
        </a>
    </li>

    <!-- Kelola Guide -->
    <li class="nav-item {{ request()->routeIs('admin.guide.*') ? 'active' : '' }}">
        <a class="nav-link px-4 {{ request()->routeIs('admin.guide.*') ? 'text-white' : 'text-light' }}" href="{{ route('admin.guide.index') }}">
            <i class="fas fa-user-tie"></i>
            <span>Kelola Guide</span>
        </a>
    </li>

    <!-- Kelola User -->
    <li class="nav-item {{ request()->routeIs('admin.user.*') ? 'active' : '' }}">
        <a class="nav-link px-4 {{ request()->routeIs('admin.user.*') ? 'text-white' : 'text-light' }}" href="{{ route('admin.user.index') }}">
            <i class="fas fa-users"></i>
            <span>Kelola User</span>
        </a>
    </li>

    <!-- Kelola Review -->
    <li class="nav-item {{ request()->routeIs('admin.review.*') ? 'active' : '' }}">
        <a class="nav-link px-4 {{ request()->routeIs('admin.review.*') ? 'text-white' : 'text-light' }}" href="{{ route('admin.review.index') }}">
            <i class="fas fa-star"></i>
            <span>Kelola Review</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block border-secondary">
</ul>
