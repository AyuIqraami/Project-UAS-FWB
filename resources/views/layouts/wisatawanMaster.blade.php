
<!DOCTYPE html>
<html lang="en">

@include('partials.Wisatawan.head')

<body class="index-page">

@include('partials.Wisatawan.navbar')

  <main class="main">

    <!-- Hero Section -->
    {{-- @include('partials.Wisatawan.home') --}}
    @yield("content")
   <!-- /Hero Section -->

    {{-- <!-- About Section -->
    @include('partials.Wisatawan.about')
    <!-- /About Section --> --}}

    <!-- Menu Section -->
    @include('partials.Wisatawan.daftarWisata')
    <!-- /Menu Section -->

    {{-- <!-- Testimonials Section --> 
     @include('partials.Wisatawan.testimonials')
    <!-- /Testimonials Section --> --}}

    <!-- Chefs Section -->
    {{-- @include('partials.Wisatawan.daftarGuide') --}}
    <!-- /Chefs Section -->

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

  @include("partials.Wisatawan.sripts")

</body>

</html>