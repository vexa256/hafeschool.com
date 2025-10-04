<div class="breadcrumb-wrapper z-index-common overflow-hidden">
    <div class="breadcrumb-wrapper__bg wow animate__fadeInUp" data-wow-delay="0.15s" data-vs-gsap-parallax-speed="2" data-vs-gsap-parallax-zoom>
      <img src="{{ asset($generalSettings->Crumb) }}" alt="{{ $generalSettings->CompanyName }}">
    </div>
    <div class="container">
      <div class="breadcrumb-wrapper__content wow animate__fadeInUp" data-wow-delay="0.45s">
        <h1 class="breadcrumb-wrapper__title">
            @isset($Title)
            {{ $Title }}
            @endisset
        </h1>
        <div class="breadcrumb-wrapper__menu--wrap">
          <ul class="breadcrumb-wrapper__menu">
            <li class="breadcrumb-wrapper__menu--item"><a href="/">Home</a></li>
            <li class="breadcrumb-wrapper__menu--item">@isset($Desc)
                {{ $Desc }}
                @endisset</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="vs-balls vs-balls--screen" data-balls-bottom="-6px" data-balls-color="#ffffff"></div>
  </div>
