<section class="vs-gallery--area space space-extra-bottom overflow-hidden">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="vs-title text-center title-anime animation-style2">
            <div class="title-anime__wrap">
              <span class="vs-title__sub">School Gallery</span>
              <h2 class="vs-title__main">Our Gallery</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="vs-gallery--row">
            @foreach ($Gallery as $index => $data)
                @php
                    // This will repeat col1 → col2 → col3 → col4 → col1 ...
                    $colClass = 'vs-gallery--col' . (($index % 4) + 1);

                    // Optional animation delay cycling
                    $delay = (0.25 + ($index % 4) * 0.1) . 's';
                @endphp

                <div class="vs-gallery {{ $colClass }} wow animate__fadeInUp" data-wow-delay="{{ $delay }}">
                    <div class="vs-gallery__figure">
                        <a class="vs-gallery__image--link" href="#">
                            <img class="vs-gallery__image" src="{{ asset($data->Image) }}" alt="Gallery" loading="lazy" />
                        </a>
                    </div>
                    <div class="vs-gallery__hover">
                        <a href="{{ asset($data->Image) }}" class="vs-gallery__icon popup-image">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        {{-- Example: if your model has Title/Category, show them --}}
                        @if(!empty($data->Category))
                            <a href="#" class="vs-gallery__cate">{{ $data->Category }}</a>
                        @endif
                        @if(!empty($data->Title))
                            <a class="vs-gallery__heading--link" href="#">
                                <h4 class="vs-gallery__heading">{{ $data->Title }}</h4>
                            </a>
                        @endif
                    </div>
                </div>
            @endforeach


      </div>
      <div class="d-flex justify-content-center pt-50">
        <a href="/gallery" class="vs-btn"><span class="vs-btn__border"></span>view more</a>
      </div>
    </div>
  </section>
