<section class="vs-hero overflow-hidden z-index-common parallax-wrap">
    <div class="vs-hero__ele1">
      {{-- <img class="parallax-element" src="{{ asset('assets/img/hero/h1-ele-1-1.svg') }}" alt="ele"> --}}
    </div>
    <div class="swiper vs-hero__active--zoom">
      <div class="swiper-wrapper">
        @foreach ($Slider as $data)


        <div class="swiper-slide">
          <div class="vs-hero__bg vs-hero__bg--zoom" data-bg-src="{{ asset($data->Image) }}"></div>
          <div class="container container--custom">
            <div class="vs-hero__content">
              <div class="vs-hero__shape">
                <div class="vs-hero__shape--bg vs-hero__anim" data-bg-src="{{ asset('assets/img/hero/hero-shape-1.svg') }}"></div>
                <span class="vs-hero__title--sub vs-hero__anim">
                {{-- <img src="{{ asset($data->Image) }}" alt=""> --}}
                Unlock your child’s full potential
              </span>
                <h1 class="vs-hero__title--main vs-hero__anim">
                  {{ $data->Phrase }} <span>{{ $data->Span }}</span>
                </h1>
                <p class="vs-hero__desc vs-hero__anim">
                    {{ $data->Text }}
                </p>
                <a href="#" class="vs-btn vs-hero__btn vs-hero__anim"><span
                  class="vs-btn__border"></span>know more</a>
                {{-- <img class="vs-hero__character vs-hero__anim" src="{{ asset('assets/img/hero/hero-character-1.png') }}" alt="Hero Character"> --}}
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
      <div class="vs-hero__direction">
        <div class="vs-swiper-button-next">
          <i class="fa-solid fa-arrow-right"></i>
        </div>
        <div class="vs-swiper-button-prev">
          <i class="fa-solid fa-arrow-left"></i>
        </div>
      </div>
    </div>
    <div class="vs-balls vs-balls--screen" data-balls-bottom="-6px" data-balls-color="#f6f1e4"></div>
  </section>
