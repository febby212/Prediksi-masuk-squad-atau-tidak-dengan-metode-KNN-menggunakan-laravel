<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{$title}} | Admin Squad Predict</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo-icon.png" rel="icon">
    <link href="assets/img/logo-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href={{ asset('assets/vendor/animate.css/animate.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
    <link href="assetsAdmin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assetsAdmin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href={{ asset('assets/vendor/remixicon/remixicon.css') }} rel="stylesheet">
    <link href="assetsAdmin/vendor/simple-datatables/style.css" rel="stylesheet">



    <!-- Template Main CSS File -->
    <link href="assetsAdmin/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    @include('partial.admin.header')

    @include('partial.admin.sidebar')


    @yield('konten')

    @include('partial.admin.footer')


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assetsAdmin/vendor/apexcharts/apexcharts.min.js"></script>
    <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src="assetsAdmin/vendor/quill/quill.min.js"></script>
    <script src="assetsAdmin/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assetsAdmin/vendor/tinymce/tinymce.min.js"></script>
    <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>

    <!-- Template Main JS File -->
    <script src="assetsAdmin/js/main.js"></script>

</body>

</html>
