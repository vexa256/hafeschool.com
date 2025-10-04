<div class="col-lg-4">
    <div class="sidebar-area">

        <div class="widget">
            <div class="widget_categories">
                <h2 class="wp-block-heading">
                    categories
                </h2>
                <ul>

                    @foreach ($Categories as $cat)
                    <li>
                        <a href="#">{{ $cat->CategoryName }}</a>
                        <span>{{ str_pad($cat->blogs_count, 1, '0', STR_PAD_LEFT) }}</span>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="widget">
            <h2 class="wp-block-heading">
                Recent Post
            </h2>
            <div class="recent-post-wrap">
                @isset($blogsAll)
                @foreach ($blogsAll as $data)
                <div class="recent-post">
                    <div class="media-img">
                        <a href="{{ route('BlogDetails',['slug'=>$data->slug]) }}">
                            <img src="{{ asset($data->Image) }}" style="width:100%; height:100px;object-fit:cover" alt="{{ $data->Name }} - {{ $generalSettings->CompanyName }}">
                        </a>
                    </div>
                    <div class="media-body">
                        <div class="recent-post-meta">
                            <a href="{{ route('BlogDetails',['slug'=>$data->slug]) }}">
                                <i class="far fa-calendar-alt "></i>
                                {{ date('M d, Y', strtotime($data->created_at)) }}
                            </a>
                        </div>
                        <h4 class="post-title">
                            <a href="{{ route('BlogDetails',['slug'=>$data->slug]) }}">{{ $data->Name }}</a>
                        </h4>
                    </div>
                </div>
                @endforeach
                @endisset

            </div>
        </div>
        <div class="widget d-none">
            <h2 class="wp-block-heading">
                <img src="assets/img/icons/widget-icon-2.svg" alt="icons">
                tag Post
            </h2>
            <div class="tagcloud">
                <a href="#" class="tag-cloud-link">game</a>
                <a href="#" class="tag-cloud-link">earning</a>
                <a href="#" class="tag-cloud-link">who</a>
                <a href="#" class="tag-cloud-link">play to earn</a>
                <a href="#" class="tag-cloud-link">free</a>
            </div>
        </div>
        <div class="sidebar-banner" data-bg-src="assets/img/blog/blog-sidebar-bg.png">
            <span class="sidebar-banner__icon">
                <i class="fa-solid fa-envelope-open-text"></i>
            </span>
            <span class="sidebar-banner__title--sub">Subscribe</span>
            <h4 class="sidebar-banner__title--main">our newsletter</h4>
            <input class="sidebar-banner__field" type="text" placeholder="Enter your email">
            <div class="d-flex">
                <a href="/contact-us" class="vs-btn sidebar-banner__btn w-100">
                    <span class="vs-btn__border"></span>
                    admission
                </a>
            </div>
        </div>
    </div>
</div>
