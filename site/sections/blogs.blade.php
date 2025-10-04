<section class="space space-extra-bottom z-index-common overflow-hidden" data-bg-src="{{ asset('assets/img/blog/h1-bg-blog.png') }}">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto">
          <div class="vs-title text-center title-anime animation-style2">
            <div class="title-anime__wrap">
              <span class="vs-title__sub">
              our Blog
            </span>
              <h2 class="vs-title__main">
                our Blog Posts
              </h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row vs-carousel swiper" data-xl="3">
        <div class="swiper-wrapper">
            @foreach ($Blogs as $data)


          <div class="col-lg-4 swiper-slide wow animate__fadeInUp" data-wow-delay="0.25s">
            <div class="vs-blog vs-blog--style2">
              <div class="vs-blog__inner">
                <div class="vs-blog__img">
                  <a href="{{ route('BlogDetails', ['slug'=> $data->slug]) }}">
                    <img src="{{ asset($data->Image) }}" alt="{{ $data->Name }}" loading="lazy">
                  </a>
                </div>
                <div class="vs-blog__content">
                  <div class="vs-blog__meta">
                    <a class="vs-blog__meta--link" href="{{ route('BlogDetails', ['slug'=> $data->slug]) }}">
                      <i class="fa-regular fa-calendar-days"></i>26. September
                      2025
                    </a>
                  </div>
                  <a class="vs-blog__heading--link" href="{{ route('BlogDetails', ['slug'=> $data->slug]) }}">
                    <h3 class="vs-blog__heading">{{ $data->Name }}</h3>
                  </a>
                  <p class="vs-blog__desc textCut">
                    {{ $data->Details }}
                  </p>
                  <div class="vs-blog__bottom">
                    <a href="{{ route('BlogDetails', ['slug'=> $data->slug]) }}" class="vs-blog__link">
                      Read more<i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <div class="vs-blog__share">
                      <ul>
                        <li>
                          <a href="javascript:void(0)"><i class="fa-solid fa-share-nodes"></i></a>
                          <ul>
                            <li>
                              <a href="#" target="_blank">
                                <i class="fa-brands fa-facebook-f"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#" target="_blank">
                                <i class="fa-brands fa-x-twitter"></i>
                              </a>
                            </li>
                            <li>
                              <a href="ht.html#" target="_blank">
                                <i class="fa-brands fa-instagram"></i>
                              </a>
                            </li>
                            <li>
                              <a href="#" target="_blank">
                                <i class="fa-brands fa-linkedin-in"></i>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </section>
