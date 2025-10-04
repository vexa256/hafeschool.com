<section class="vs-service--area animation-active z-index-common space overflow-hidden" data-bg-src="{{ asset('assets/img/service/service-bg.png') }}" id="whyUs">
    <img src="{{ asset('assets/img/elements/service-ele-1.svg') }}" alt="elements1" class="vs-service--ele1 wow animate__fadeInLeft" data-wow-delay="0.25s">
    <img src="{{ asset('assets/img/elements/service-ele-2.svg') }}" alt="elements1" class="vs-service--ele2 wow animate__fadeInRight" data-wow-delay="0.45s">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="vs-title text-center title-anime animation-style2">
            <div class="title-anime__wrap">
              <span class="vs-title__sub">Choose Us</span>
              <h2 class="vs-title__main">Why <span>Choose HAFE?</span></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="z-index-common">
        <div class="row justify-content-center swiper vs-carousel vs-carousel--service z-index-common pl-0" data-xl="3" data-loop="true" data-autoplay-delay="6000" data-nav-next=".nav-next-2" data-nav-prev=".nav-prev-1">
          <div class="swiper-wrapper">

            <!-- Community-Centered -->
            @foreach ($WhyUs as $why)

            <div class="col-lg-4 col-md-6 swiper-slide">
              <div class="vs-service wow animate__fadeInUp" data-wow-delay="0.25s">
                <div class="vs-service__figure">
                  <img class="vs-service__image" src="{{ asset($why->Image) }}" alt="{{ $why->Title }}">
                </div>
                <div class="vs-service__content">
                  <h3 class="vs-service__heading">{{ $why->Title }}</h3>
                  <p>{{ $why->Phrase }}</p>
                </div>
              </div>
            </div>

            @endforeach

          </div>
        </div>
        <div class="nav-prev-1"> ... </div>
        <div class="nav-next-2"> ... </div>
      </div>
    </div>
</section>
