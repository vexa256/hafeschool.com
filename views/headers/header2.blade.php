

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
        {{ $Title }} | {{ $generalSettings->CompanyName }}
        @endisset
    </title>

      <!-- ===== BEGIN: STATIC, NON-DESTRUCTIVE, WORLD-CLASS SEO FOR HAFE SCHOOL ===== -->
<link rel="canonical" href="https://www.hafeschool.com/" />
<link rel="alternate" href="https://www.hafeschool.com/" hreflang="en" />
<link rel="alternate" href="https://www.hafeschool.com/" hreflang="sw" />
<link rel="alternate" href="https://www.hafeschool.com/" hreflang="x-default" />

<meta name="description" content="HAFE Pre & Primary School in Arusha, Tanzania: affordable, holistic English-medium education. Qualified teachers, ICT-integrated learning, small classes, and community-centered values." />
<meta name="keywords" content="HAFE School, HAFE Pre and Primary, Arusha primary school, English medium school Tanzania, best primary school Arusha, affordable private school, holistic education, ICT in education, Tanzania education, Nduruma Marurani school, Moshono Ward school" />
<meta name="robots" content="index,follow,max-snippet:-1,max-image-preview:large,max-video-preview:-1" />
<meta name="googlebot" content="index,follow" />
<meta name="bingbot" content="index,follow" />
<meta name="author" content="HAFE Pre and Primary School" />
<meta name="publisher" content="HAFE Pre and Primary School" />
<meta name="theme-color" content="#ffffff" />
<meta name="format-detection" content="telephone=yes,address=yes,email=yes" />
<meta http-equiv="x-ua-compatible" content="IE=edge" />

<!-- Open Graph -->
<meta property="og:title" content="HAFE Pre & Primary School — Arusha, Tanzania" />
<meta property="og:description" content="Affordable, holistic English-medium education with qualified teachers, modern learning, and community-centered values in Arusha, Tanzania." />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.hafeschool.com/" />
<meta property="og:site_name" content="HAFE Pre and Primary School" />
<meta property="og:locale" content="en_US" />
<meta property="og:locale:alternate" content="sw_TZ" />
<meta property="og:image" content="https://www.hafeschool.com/uploads/og-default.jpg" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta property="og:image:alt" content="HAFE Pre and Primary School — Arusha, Tanzania" />
<meta property="og:updated_time" content="2025-10-04T00:00:00+03:00" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="HAFE Pre & Primary School — Arusha, Tanzania" />
<meta name="twitter:description" content="Holistic, English-medium education with ICT-integrated learning and qualified teachers. Enroll at HAFE in Arusha, Tanzania." />
<meta name="twitter:image" content="https://www.hafeschool.com/uploads/og-default.jpg" />

<!-- Performance Hints aligned to your exact assets/CDNs (safe, additive) -->
<link rel="dns-prefetch" href="//www.hafeschool.com" />
<link rel="dns-prefetch" href="//fonts.googleapis.com" />
<link rel="dns-prefetch" href="//fonts.gstatic.com" />
<link rel="dns-prefetch" href="//cdn.jsdelivr.net" />
<link rel="preconnect" href="https://www.hafeschool.com" crossorigin />
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin />

<!-- PWA/Icon (non-breaking; keeps your existing favicon) -->
<link rel="apple-touch-icon" href="https://www.hafeschool.com/uploads/apple-touch-icon.png" />
<link rel="manifest" href="https://www.hafeschool.com/site.webmanifest" />

<!-- JSON-LD: WebSite + SearchAction -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "@id": "https://www.hafeschool.com/#website",
  "url": "https://www.hafeschool.com/",
  "name": "HAFE Pre and Primary School",
  "inLanguage": "en",
  "potentialAction": {
    "@type": "SearchAction",
    "target": "https://www.hafeschool.com/search?q={query}",
    "query-input": "required name=query"
  }
}
</script>

<!-- JSON-LD: School (Local/Brand SEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "School",
  "@id": "https://www.hafeschool.com/#organization",
  "name": "HAFE Pre and Primary School",
  "url": "https://www.hafeschool.com/",
  "logo": "https://www.hafeschool.com/uploads/favicon.png",
  "image": "https://www.hafeschool.com/uploads/og-default.jpg",
  "description": "HAFE Pre & Primary School in Arusha, Tanzania provides affordable, holistic English-medium education with qualified teachers, ICT-integrated learning, and small class sizes.",
  "telephone": "+255777876775",
  "email": "info@hafeschool.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Nduruma-Marurani, Tank la Maji, Moshono Ward",
    "addressLocality": "Arusha",
    "addressRegion": "Arusha",
    "postalCode": "23100",
    "addressCountry": "TZ"
  },
  "areaServed": ["TZ"],
  "sameAs": ["https://www.hafeschool.com/"]
}
</script>
<!-- ===== END: STATIC, NON-DESTRUCTIVE, WORLD-CLASS SEO FOR HAFE SCHOOL ===== -->


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


  </head>

  <body>
