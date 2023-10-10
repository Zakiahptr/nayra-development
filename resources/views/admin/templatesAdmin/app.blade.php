<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    <title>{{ $title ?? '' }} | Admin Amany Residence</title>
    @include('admin.templatesAdmin.head')
</head>


<body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        @include('admin.templatesAdmin.topbar')
        @include('admin.templatesAdmin.sidebar')

        <!-- Main Content -->
        <div class="main-content">
            @yield('content')
        </div>
        @include('admin.templatesAdmin.footer')
      </div>
    </div>

    @include('admin.templatesAdmin.vendor-scripts')
    @stack('script')
</body>
</html>
