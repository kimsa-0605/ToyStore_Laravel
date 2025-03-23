@if (!empty($pages))
    <div id="breadcrumb-nav" class="breadcrumb-nav">
        <div class="breadcrumb-nav-content">
            <div class="breadcrumb-nav-blog">
                @foreach ($pages as $index => $page)
                    @if ($index > 0)
                        <i class="fa-solid fa-right-long"></i>
                    @endif
                    <a href="{{ $page['url'] }}" class="breadcrumb-nav-link">{{ $page['name'] }}</a>
                @endforeach
            </div>
        </div>
    </div>
@endif