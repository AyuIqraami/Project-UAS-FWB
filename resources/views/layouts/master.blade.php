<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        @include('partials.sidebarGuide')

       {{-- @if(Auth::check() && Auth::user()->role === 'Admin')
            @include('partials.sidebarAdmin')
       @elseif(Auth::check() && Auth::user()->role === 'Guide')
            @include('partials.sidebarGuide')
       @endif --}}

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('partials.topbar')
                <!-- End of Topbar -->
              
                <!-- Begin Page Content -->
                @yield('content')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           @include('partials.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('partials.logout')
    @include('partials.scripts')

</body>

</html>