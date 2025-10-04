@isset($About)
@foreach ($About as $data)


<section class="vs-about--section space space-extra-bottom z-index-common parallax-wrap overflow-hidden" data-bg-src="{{ asset('assets/img/about/vs-about-h1-bg.png') }}">
    <img src="{{ asset('assets/img/about/vs-about-h1-ele-4.png') }}" alt="elements" class="vs-about--ele1 wow animate__fadeInUp" data-wow-delay="0.35s">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.25s">
          <div class="vs-about--image">
            {{-- <div class="vs-about--image__figure1 wow animate__fadeInUp" data-wow-delay="0.25s">
              <img src="{{ asset('assets/img/about/vs-about-h1-1.jpg') }}" alt="about image" width="198" height="214" loading="lazy">
            </div> --}}
            <div class="vs-about--image__figure2 wow animate__fadeInUp" data-wow-delay="0.35s">
              <img src="{{ asset($data->Image) }}" alt="about image" style="width: 100%;height:461;object-fit:cover" {{-- width="400" height="461" --}} loading="lazy">
            </div>
            <div class="vs-about--image__ele1 parallax-element" data-move="80">
              <img src="{{ asset('assets/img/about/vs-about-h1-ele-1.svg') }}" alt="elements">
            </div>
            <div class="vs-about--image__ele2 parallax-element" data-move="50">
              <img src="{{ asset('assets/img/about/vs-about-h1-ele-2.svg') }}" alt="elements">
            </div>
            <div class="vs-about--image__ele3 wow animate__zoomIn" data-wow-delay="0.55s"></div>
            <div class="vs-about--yoe">
              <span class="vs-about--yoe__number">
              3
            </span>
              <span class="vs-about--yoe__text">years of experience</span>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.45s">
          <div class="vs-about--right">
            <div class="vs-title title-anime animation-style2">
              <div class="title-anime__wrap">
                <span class="vs-title__sub">School Facilities</span>
                <h2 class="vs-title__main">
                  {{ $data->Title }}
                </h2>
              </div>
            </div>
            <div class="vs-about--story">

              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="history-tab-pane" role="tabpanel" aria-labelledby="history-tab" tabindex="0">
                  <p class="vs-about__text vs-text">
                    {{ $data->Details }}
                  </p>

                  <ul class="vs-list pt-15 mb-35">
                    @foreach ($Points as $dataP)
                    <li>{{ $dataP->Point }}</li>
                    @endforeach
                  </ul>
                  <a href="contact.html" class="vs-btn"><span class="vs-btn__border"></span>contact us</a>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
  @endisset
