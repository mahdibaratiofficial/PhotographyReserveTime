<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>Skydash Admin</title>

  <!-- plugins:css -->
  <x-admin.styles />
  <livewire:styles />
  <!-- endinject -->

  <link rel="shortcut icon" href="images/favicon.png" />

</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <x-admin.nav />

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      
      <x-admin.setting />

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->

      <x-admin.sidebar />

      <!-- partial -->
      @yield('content')

      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->


  {{-- scripts --}}

  <x-admin.scripts />
  <livewire:scripts />
</body>

</html>