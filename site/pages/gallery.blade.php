

<section class="vs-class--area bg-color6 space space-bottom">
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

        @foreach ($GalleryAll as $data)

        <div class="vs-gallery {{-- vs-gallery--col1 --}} wow animate__fadeInUp" data-wow-delay="0.25s">
          <div class="vs-gallery__figure">
            <a class="vs-gallery__image--link" href="#">
              <img class="vs-gallery__image" src="{{ asset($data->Image) }}" alt="Gallery" loading="lazy" />
            </a>
          </div>
          <div class="vs-gallery__hover">
            <a href="{{ asset($data->Image) }}" class="vs-gallery__icon popup-image">
              <i class="fa-solid fa-eye"></i>
            </a>
            <a class="vs-gallery__heading--link" href="#">
            </a>
          </div>
        </div>

        @endforeach


      </div>

    </div>
  </section>

