@extends ('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/catalog.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/subscribeSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/instagramSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/breadcrumbNav.css') }}">
<title>Catalog</title>
@endsection
@section('content')
    @php
    $pages = [
        ['name' => 'Home', 'url' => "/"],
        ['name' => 'Catalog', 'url' => "/catalog"]
    ];
    @endphp
    @include('components.breadcrumbSection', ['pages' => $pages])
    <!-- Product section -->
    <div class="product-section-container">
        <div class="product-section-content">
            <div class="all-toys">
                <div class="all-toys-header">
                    <div class="all-toys-header-content">
                        <span class="section-title">All Toys</span>
                        <span class="categories-toys">
                        <span class="categories-toys-all-toys active-category" data-category-id="all">All Toys</span>
                        <span class="categories-toys-wooden-toys" data-category-id="1">Stuffed Animals</span>
                        <span class="categories-toys-stuffed-toys" data-category-id="2">Wooden Toys</span>
                        </span>
                    </div>
                    <div class="toys-line-header">
                        <div class="toys-line-header-color"></div>
                    </div>
                </div>
                <div id="product-list" class="product-list"></div>
                <div id="pagination"></div>
            </div>
        </div>
    </div>
    <!-- End product section -->
    @include('components.subscribeSection')
    @include('components.instagramSection')
    <script type="module" src="/js/pages/catalog.js"></script>
@endsection