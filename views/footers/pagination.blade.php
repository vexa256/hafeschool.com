@if ($Page == 'packages.MgtPackages')
@if ($Packages->hasPages())
<nav aria-label="Page navigation">
<ul class="pagination ms-3">
    {{-- First Page Link --}}
    <li class="page-item {{ $Packages->onFirstPage() ? 'disabled' : '' }}">
    <a class="page-link" href="{{ $Packages->url(1) }}">
        <i class="icon-base bx bx-chevrons-left icon-sm"></i>
    </a>

    </li>

    {{-- Previous Page Link --}}
    <li class="page-item {{ $Packages->onFirstPage() ? 'disabled' : '' }}">
    <a class="page-link" href="{{ $Packages->previousPageUrl() ?? 'javascript:void(0);' }}">
        <i class="icon-base bx bx-chevron-left icon-sm"></i>
    </a>
    </li>

    {{-- Pagination Elements --}}
    @foreach ($Packages->getUrlRange(1, $Packages->lastPage()) as $page => $url)
    <li class="page-item {{ $page == $Packages->currentPage() ? 'active' : '' }}">
        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
    </li>
    @endforeach

    {{-- Next Page Link --}}
    <li class="page-item {{ $Packages->currentPage() == $Packages->lastPage() ? 'disabled' : '' }}">
    <a class="page-link" href="{{ $Packages->nextPageUrl() ?? 'javascript:void(0);' }}">
        <i class="icon-base bx bx-chevron-right icon-sm"></i>
    </a>
    </li>

    {{-- Last Page Link --}}
    <li class="page-item {{ $Packages->currentPage() == $Packages->lastPage() ? 'disabled' : '' }}">
    <a class="page-link" href="{{ $Packages->url($Packages->lastPage()) }}">
        <i class="icon-base bx bx-chevrons-right icon-sm"></i>
    </a>
    </li>
</ul>
</nav>
@endif

@endif
