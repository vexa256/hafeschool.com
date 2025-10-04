<!DOCTYPE html>
<html class="no-js" lang="zxx">


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @isset($Title)
    {{ $Title }} | {{ $generalSettings->CompanyName }}
    @endisset

  </title>
  <meta name="author" content="vecuro">
  <meta name="description" content="{{ $generalSettings->CompanyName }}">
  <meta name="keywords" content="{{ $generalSettings->CompanyName }}">
  <meta name="robots" content="INDEX,FOLLOW">
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons - Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('uploads/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('uploads/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('uploads/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('uploads/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('uploads/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('uploads/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('uploads/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('uploads/favicon.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('uploads/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('uploads/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('uploads/favicon.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('uploads/favicon.png') }}">
  <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('uploads/favicon.png') }}">
  <meta name="theme-color" content="#ffffff">
  <!--==============================
	  Google Fonts
	============================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;family=Baloo+2:wght@400..800&amp;family=Roboto:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
  <!--==============================
	    All CSS File
	============================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  <!-- Fontawesome Icon -->
  <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
  <!-- animate css -->
  <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('bootstrap/assets/css/custom.css') }}">
</head>

<body>
  <!--********************************
   		Code Start From Here
	******************************** -->
  <!--==============================
	Preloader
	==============================-->
  <div class="preloader">
    {{-- <button class="vs-btn preloaderCls">Cancel Preloader </button> --}}
    <div class="preloader-inner">
      <img src="{{ asset('uploads/logo.png') }}" style="width: 30%" alt="{{ $generalSettings->CompanyName }}">
      <span class="loader"></span>
    </div>
  </div>
