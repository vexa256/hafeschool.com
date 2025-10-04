<!doctype html>

<html
  lang="en"
  class="layout-menu-fixed layout-wide"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>
        @isset($Title)
        {{ $Title }} | Admin | {{ $generalSettings->CompanyName }}
        @endisset
    </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('uploads/favicon.png') }}" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/fonts/iconify-icons.css')}}" />

    <link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/css/core.css')}}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/assets/css/demo.css')}}" />

    <link rel="stylesheet" href="{{ asset('bootstrap/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />

    <link rel="stylesheet" href="{{ asset('bootstrap/assets/css/custom.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sceditor@3/minified/themes/default.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/sceditor.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sceditor@3/minified/formats/xhtml.min.js"></script>


    <script src="{{ asset('bootstrap/assets/vendor/js/helpers.js')}}"></script>

    <script src="{{ asset('bootstrap/assets/js/config.js')}}"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
