<!-- Sidebar untuk Admin -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Admin Panel</div>
    </a>

    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

    <!-- Users -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>
        </a>
    </li>

    <!-- Reports -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.reports') }}">
            <i class="fas fa-fw fa-file-alt"></i>
            <span>Reports</span>
        </a>
    </li>

    <!-- Settings -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.settings') }}">
            <i class="fas fa-fw fa-cogs"></i>
            <span>Settings</span>
        </a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
