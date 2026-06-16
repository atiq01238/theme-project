<!DOCTYPE html>
<html lang="en">

<head>
  {{-- @@include("partials/head/head-meta.html") --}}
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Codescandy" name="author">
  <title>Dasher Free - Responsive Bootstrap 5 Admin Dashboard</title>
  <link rel="stylesheet" href="@@webRoot/node_modules/swiper/swiper-bundle.min.css" />
  {{-- @@include("partials/head/head-links.html") --}}
  @include('layout.head-links')
</head>

<body>
  <!-- Vertical Sidebar -->
  <div>
    {{-- @@include("partials/sidebar-collapse.html") --}}
    @include('layout.sidebar')

    <!-- Main Content -->
    <div id="content" class="position-relative h-100">
      {{-- @@include("partials/topbar-second.html") --}}
      @include('layout.navbar')
      <!-- container -->
      <div class="custom-container">
        <!-- row -->
        <div class="row mb-6 g-6">
          <div class="col-xl-8 col-lg-6">
            <div class="bg-gradient-mixed p-8 py-10 rounded-3 p-lg-7">
              <!--heading-->
              <h1 class="fs-3">👋 Hello {{ Auth::user()->name }}</h1>
              <p class="mb-0">Welcome to your E-commerce Dashboard! Monitor your sales,</p>
              <p>track your progress, and gain valuable insights.</p>
              <a href="#!" class="btn btn-dark">Start AI</a>
            </div>
          </div>

        </div>
        <!-- row -->

        <!-- row -->

        <!-- row -->


      </div>
    </div>
  </div>

  {{-- @@include("partials/scripts.html") --}}
  <!-- jsvectormap -->
  <script src="{{ asset('/assets/js/vendors/sidebarnav.js')}}"></script>
  <script src="@@webRoot/node_modules/jsvectormap/dist/js/jsvectormap.min.js"></script>
  <script src="@@webRoot/node_modules/jsvectormap/dist/maps/world.js"></script>
  <script src="@@webRoot/node_modules/jsvectormap/dist/maps/world-merc.js"></script>
  <script src="@@webRoot/node_modules/apexcharts/dist/apexcharts.min.js"></script>
  <script src="{{ asset('/assets/js/vendors/chart.js')}}"></script>
  <script src="@@webRoot/node_modules/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="@@webRoot/assets/js/vendors/choice.js"></script>
  <script src="@@webRoot/node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="{{ asset('/assets/js/vendors/swiper.js')}}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
