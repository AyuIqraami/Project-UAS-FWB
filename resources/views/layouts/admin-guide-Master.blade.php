<!DOCTYPE html>
<html lang="en">

@include('partials.AdminGuide.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @php
    $role = Auth::user()->role;
        @endphp

        @if ($role === 'Admin')
            @include('partials.AdminGuide.sidebarAdmin')
        @elseif ($role === 'Guide')
            @include('partials.AdminGuide.sidebarGuide')
        @endif

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('partials.AdminGuide.topbar')
                <!-- End of Topbar -->
              
                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           @include('partials.AdminGuide.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    {{-- @include('partials.AdminGuide.logout') --}}
    @include('partials.AdminGuide.scripts')

</body>

</html>