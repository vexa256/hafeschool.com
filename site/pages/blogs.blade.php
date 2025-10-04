<section class="vs-section space space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                @foreach ($Blogs as $data)
                <div class="vs-blog">
                    <img src="assets/img/elements/vs-blog-ele1.svg" alt="blog elements" class="vs-blog__ele1">
                    <div class="vs-blog__img--figure">
                        <a class="vs-blog__img--link" href="{{ route('BlogDetails', ['slug'=> $data->slug]) }}">
                            <img src="{{ asset($data->Image) }}" alt="{{ $data->Name }} - {{ $generalSettings->CompanyName }}" class="vs-blog__img">
                        </a>
                    </div>
                    <div class="vs-blog__content">
                        <div class="vs-blog__meta">
                            <a class="vs-blog__meta--link" href="#">
                                <i class="fa-regular fa-user"></i>Admin
                            </a>
                            <a class="vs-blog__meta--link" href="#">
                                <i class="fa-regular fa-calendar-days"></i>26. September 2025
                            </a>
                            <a class="vs-blog__meta--link" href="#">
                                <i class="fa-regular fa-tag"></i>kindergarten
                            </a>
                        </div>
                        <a class="vs-blog__heading--link" href="{{ route('BlogDetails', ['slug'=> $data->slug]) }}">
                            <h3 class="vs-blog__heading">{{ $data->Name }}</h3>
                        </a>
                        <p class="vs-blog__desc">
                           {{ $data->Details }}
                        </p>
                        <a href="{{ route('BlogDetails', ['slug'=> $data->slug]) }}" class="vs-blog__link">
                            Read more<i class="fa-solid fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach


                {{-- <div class="vs-pagination">
                    <a href="#" class="pagi-btn"><i class="fa-solid fa-angles-left"></i></a>
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">...</a></li>
                        <li><a href="#">5</a></li>
                    </ul>
                    <a href="#" class="pagi-btn pagi-btn--next">
                        <i class="fa-solid fa-angles-right"></i>
                    </a>
                </div> --}}
            </div>


            @include('pages.asideBlog')
        </div>
    </div>
</section>
