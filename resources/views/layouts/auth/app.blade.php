<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
  <title>Masuk Akun | Admin Amany Residence</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/admin/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('assets/admin/modules/bootstrap-social/bootstrap-social.css')}}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/admin/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA -->

</head>

<body>
    @yield('content')

  <!-- General JS Scripts -->
  <script src="{{ asset('assets/admin/modules/jquery.min.js')}}"></script>
  <script src="{{ asset('assets/admin/modules/popper.js')}}"></script>
  <script src="{{ asset('assets/admin/modules/tooltip.js')}}"></script>
  <script src="{{ asset('assets/admin/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('assets/admin/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{ asset('assets/admin/modules/moment.min.js')}}"></script>
  <script src="{{ asset('assets/admin/js/stisla.js')}}"></script>

  <!-- JS Libraies -->

  <!-- Page Specific JS File -->

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js')}}"></script>
  <script src="{{ asset('assets/js/custom.js')}}"></script>
</body>
</html>
