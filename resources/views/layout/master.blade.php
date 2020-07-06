<!DOCTYPE html>
<html lang="en">

<!-- Header -->
@include('layout.partials._header')

<body>

  <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      @section('sidebar')
        @include('layout.partials._sidenav')
      @show

      <div id="page-content-wrapper">
      <!-- Navbar -->
      @section('navbar')
        @include('layout.partials._navbar')
      @show

      @yield('content')
    </div>
  </div>

  <!-- Footer -->
  @include('layout.partials._footer')

</body>

</html>
