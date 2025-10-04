@isset($Blogs)
@foreach ($Blogs as $blog)
<div class="modal modal-blur fade" id="ViewBlog{{ $blog->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{ $blog->Name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"
          aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <h3>Category: {{ $blog->CategoryName }}</h3>
            <p>{{ $blog->Details }}</p>
            <hr>

            {{-- Blog Paragraphs --}}
            @foreach ($blog->paragraphs as $para)
                <h5>{{ $para->Title }}</h5>
                <p>{{ $para->Paragraph }}</p>

                <div class="mt-2">
                    <a class="btn btn-info btn-sm" href="#UpdateBlogParagraph{{ $para->id }}" data-bs-toggle="modal">
                        <i class="bx bx-edit"></i>
                    </a>
                    <a class="btn btn-danger btn-sm"
                       href="#deleteModal" data-bs-toggle="modal"
                       data-route="{{ route('MassDelete', ['id' => $para->id, 'TableName' => 'blog_paragraphs']) }}"
                       data-msg="Are you sure you want to delete this paragraph? This action is not reversible">
                        <i class="bx bx-trash" aria-hidden="true"></i>
                    </a>
                </div>
                <hr>
            @endforeach



        </div>
      </div>
    </div>
</div>
@endforeach
@endisset
