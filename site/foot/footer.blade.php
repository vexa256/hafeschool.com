<div class="vs-footer bg-title">
    <div class="vs-footer__top z-index-common space-extra-top space-extra-bottom">
      <img src="{{ asset('assets/img/footer/footer-element-1.png') }}" alt="Footer Element" class="vs-footer__ele1 wow animate__fadeInLeft" data-wow-delay="0.25s">
      <img src="{{ asset('assets/img/footer/footer-element-2.png') }}" alt="Footer Element" class="vs-footer__ele2">
      <img src="{{ asset('assets/img/footer/footer-element-3.png') }}" alt="Footer Element" class="vs-footer__ele3 wow animate__fadeInRight" data-wow-delay="0.35s">
      <div class="vs-balls vs-balls--screen" data-balls-top="-6px" data-balls-color="#ffffff"></div>
      <div class="container">
        <div class="row gy-4 gx-xxl-5">
          <div class="col-lg-4 col-md-6 wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="vs-footer__widget">
              <div class="vs-footer__logo text-center text-md-start mb-25">
                <a href="index.html" class="vs-footer__logo-link">
                  <img src="{{ asset($generalSettings->Logo) }}" style="width: 30%" alt="{{ $generalSettings->CompanyName }} Logo">
                </a>
              </div>
              <p class="vs-footer__desc text-center text-md-start">
                We cater to children from pre and primary levels, providing quality education.
              </p>
              <div class="icon-call justify-content-center justify-content-md-start pt-10 mb-10">
                <span class="icon-call__icon"><i class="fa-solid fa-phone-rotary"></i></span>
                <div class="icon-call__content">
                  <span class="icon-call__title">call support</span>
                  <a href="tel:{{ $generalSettings->Code }}{{ $generalSettings->Phone }}" class="icon-call__number">{{ $generalSettings->Code }} {{ $generalSettings->Phone }}</a>
                </div>
              </div>
              <div class="social-style social-style--version2 w-100 justify-content-center justify-content-md-start pt-25">
                <span class="social-style__label">follow us :</span>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow animate__fadeInUp" data-wow-delay="0.35s">
            <div class="vs-footer__widget">
              <h3 class="vs-footer__title">Explore</h3>
              <div class="vs-footer__menu">
                <ul class="vs-footer__menu--list">
                  <li><a href="/blogs">Blog</a></li>
                  <li><a href="/about-us">About Us</a></li>
                  <li><a href="/contact-us">Contact Us</a></li>

                </ul>
                <ul class="vs-footer__menu--list">
                    <li><a href="/contact-us">Donate</a></li>
                  <li><a href="/about-us">Options</a></li>
                  <li><a href="/about-us">Help center</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow animate__fadeInUp" data-wow-delay="0.45s">
            <div class="vs-footer__widget">
              <h3 class="vs-footer__title">Gallery</h3>
              <div class="sidebar-gallery">
                @foreach ($Gallery as $data)

                <div class="gallery-thumb">
                  <img src="{{ asset($data->Image) }}" alt="Gallery - {{ $generalSettings->CompanyName }}" class="w-100">
                  <a href="{{ asset($data->Image) }}" class="popup-image gal-btn"><i
                                        class="fal fa-plus"></i></a>
                </div>
                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="vs-footer__bottom bg-theme-color-1">
      <div class="container">
        <div class="row gy-3 gx-5 align-items-center justify-content-center justify-content-lg-between flex-column-reverse flex-lg-row">
          <div class="col-md-auto">
            <p class="vs-footer__copyright mb-0">
              Copyright © <span id="currentYear"></span>
              <a href="/">{{ $generalSettings->CompanyName }}</a>. All rights reserved
              By <a href="devimpressions.com">Dev Impressions</a>.
            </p>
          </div>
          <div class="col-md-auto">
            <ul class="vs-footer__bottom--menu">
              <li><a href="/about-us">Terms & Conditions</a></li>
              <li><a href="/about-us">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--********************************
			Back To Top
	******************************** -->
  <button class="back-to-top" id="backToTop" aria-label="Back to Top">
    <span class="progress-circle">
      <svg viewBox="0 0 100 100">
        <circle class="bg" cx="50" cy="50" r="40"></circle>
        <circle class="progress" cx="50" cy="50" r="40"></circle>
      </svg>
      <span class="progress-percentage" id="progressPercentage">0%</span>
    </span>
  </button>


  @include('foot.scripts')
