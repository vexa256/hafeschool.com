<header class="vs-header">
    <!-- Header Element -->
    <div class="vs-balls"></div>
    <!-- Header Top -->
    <div class="vs-header__top">
      <div class="container container--custom">
        <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
          <div class="col-lg-auto d-none d-lg-block">
            <div class="d-flex align-items-center flex-wrap gap-4">
              <div class="vs-header__info">
                <i class="fa-solid fa-phone-volume"></i>
                <span> Phone : <a href="tel:{{ $generalSettings->Code }}{{ $generalSettings->Phone }}">{{ $generalSettings->Code }} {{ $generalSettings->Phone }}</a></span>
              </div>
              <div class="vs-header__info">
                <i class="fa-solid fa-clock-rotate-left"></i>
                <span class="text-theme-color5">
                Opening Time :
                <a href="tel:9:30am-5:30pm">9:30am-5:30pm</a></span>
              </div>
            </div>
          </div>
          <div class="col-lg-auto">
            <div class="social-style">
              <span class="social-style__label">follow us :</span>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky-wrapper">
      <div class="sticky-active">
        <div class="container container--custom">
          <div class="row justify-content-between align-items-center">
            <div class="col">
              <div class="vs-header__logo">
                <a href="/"><img src="{{ asset('uploads/logo.png') }}" style="width: 100px" alt="{{ $generalSettings->CompanyName }}" class="logo"></a>
              </div>
            </div>
            <div class="col-auto">
                <nav class="main-menu d-none d-lg-block">

                @include('head.menu')

                </nav>

            </div>
            <div class="col-auto">
              <div class="vs-header__action">
                <div class="d-none d-md-inline-flex align-items-center">
                  <button class="searchBoxTggler">
                    <i class="far fa-search"></i>
                  </button>
                </div>
                <div class="d-none d-xxl-inline-flex">
                  <a href="/contact-us" class="vs-btn"><span class="vs-btn__border"></span>admission</a>
                </div>
                <div class="d-none d-lg-inline-flex align-items-center">
                  <button class="sideMenuToggler">
                    <svg width="31" height="23" viewBox="0 0 31 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2.9165 4.5H28.4165C29.6594 4.5 30.6665 3.49292 30.6665 2.25C30.6665 1.00708 29.6594 0 28.4165 0H2.9165C1.67358 0 0.666504 1.00708 0.666504 2.25C0.666504 3.49292 1.67358 4.5 2.9165 4.5Z" fill="currentColor" />
                      <path d="M28.4165 9H2.9165C1.67358 9 0.666504 10.0071 0.666504 11.25C0.666504 12.4929 1.67358 13.5 2.9165 13.5H28.4165C29.6594 13.5 30.6665 12.4929 30.6665 11.25C30.6665 10.0071 29.6594 9 28.4165 9Z" fill="currentColor" />
                      <path d="M28.4165 18H2.9165C1.67358 18 0.666504 19.0071 0.666504 20.25C0.666504 21.4929 1.67358 22.5 2.9165 22.5H28.4165C29.6594 22.5 30.6665 21.4929 30.6665 20.25C30.6665 19.0071 29.6594 18 28.4165 18Z" fill="currentColor" />
                    </svg>
                  </button>
                </div>
                <button class="vs-menu-toggle style2 d-inline-block d-lg-none">
                  <i class="fal fa-bars"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
