<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'TINA-SARL ADMINISTRATION') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

        <!-- Scripts -->
        {{--@vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    </head>
    <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
            <div class="brand-logo">
                <img src="{{asset('assets/images/logo-dark.svg')}}">
            </div>
            <h4>Hello! let's get started</h4>
            <h6 class="font-weight-light">Sign in to continue.</h6>
            {{ $slot }}
            </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
        <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{asset('assets/js/off-canvas.js')}}"></script>
        <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('assets/js/misc.js')}}"></script>
        <!-- endinject -->
    </body>
</html>
