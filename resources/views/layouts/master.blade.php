<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>iPortfolio Bootstrap Template - Index</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('backend_template/assets/img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('backend_template/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files --> 
    <link href="{{ asset('backend_template/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend_template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend_template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend_template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend_template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend_template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('backend_template/assets/css/style.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: iPortfolio - v3.10.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    {{-- header --}}
    @include('layouts.header')
    @include('layouts.hero')
    <main id="main" class="main">
      @include('layouts.about')
      @include('layouts.portfolio')
      @include('layouts.contact')
    @yield('content')
  </main>
  @include('layouts.footer')

    <!-- Vendor JS Files -->
    <script src="{{ asset('backend_template/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('backend_template/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('backend_template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend_template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('backend_template/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('backend_template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('backend_template/assets/vendor/typed.js/typed.min.js') }}"></script>
    <script src="{{ asset('backend_template/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('backend_template/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('backend_template/assets/js/main.js') }}"></script>
  </body>
</html>