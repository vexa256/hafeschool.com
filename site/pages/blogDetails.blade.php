<style>
    .Catname {
        display: inline-block;
        border-radius: 50px;
        background: #FF0000;
        padding: 8px 13px;
        text-shadow: 0px 4px 4px rgba(20, 20, 20, 0.1);
        font-size: 12px;
        font-weight: 800;
        line-height: 1;
        letter-spacing: 0.36px;
        text-transform: capitalize;
        width: max-content;
        height: max-content;
    }

</style>


@foreach ($Blogs as $data)

<section class="vs-section space space-extra-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="vs-blog vs-blog--single">
            <div class="vs-blog__img--figure">
              <a class="vs-blog__img--link" href="blog-details.html">
                <img src="{{ asset($data->Image) }}" alt="{{ $data->Name }} - {{ $generalSettings->CompanyName }}" class="vs-blog__img">
              </a>
            </div>
            <div class="vs-blog__content">



              <div class="vs-blog__meta">

                <a class="vs-blog__meta--link" href="#">
                  <i class="fa-regular fa-calendar-days"></i>{{ date('M d, Y', strtotime($data->created_at)) }}
                </a>
                <a class="vs-blog__meta--link" href="#">
                  <i class="fa-regular fa-tag"></i>{{ $catName }}
                </a>
              </div>
              <h3 class="vs-blog__heading">{{ $data->Name }}</h3>
              <p>
               {{ $data->Details }}
              </p>

              @foreach($data->paragraphs as $para)
              <h4 class="blog-title mt-20">{{ $para->title }}</h4>
              <p>
                {{ $para->paragraph }}
              </p>
              @endforeach
              {{-- <blockquote class="vs-quote">
                <p>
                  “ Derek Ramsay and Ellen Adna knwn thrg home secrets is
                  can be nearly impossible “
                </p>
                <cite>Written by: frenk</cite>
              </blockquote> --}}



              <div class="vs-blog__footer d-none">
                <img src="assets/img/elements/vs-blog-ele1.svg" alt="blog elements" class="vs-blog__footer--ele1" />
                <div class="vs-blog__footer--cloud">
                  <span class="vs-blog__footer--title"><i class="fa-solid fa-tags"></i>Tags :</span>
                  <div class="vs-blog__footer--list">
                    <a class="vs-blog__footer--links" href="blog-details.html">kids</a>
                    <a class="vs-blog__footer--links" href="blog-details.html">academy</a>
                    <a class="vs-blog__footer--links" href="blog-details.html">business</a>
                    <a class="vs-blog__footer--links" href="blog-details.html">class</a>
                  </div>
                </div>
                <div class="vs-blog__footer--share">
                  <span class="vs-blog__footer--title">share :
                                    <i class="fa-solid fa-share-nodes"></i>
                                </span>
                  <ul class="vs-blog__footer--share__list">
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
                </div>
              </div>
            </div>
          </div>


        </div>
        @include('pages.asideBlog')
      </div>
    </div>
  </section>
  @endforeach
