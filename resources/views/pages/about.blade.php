@extends ('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/about.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/videoSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/subscribeSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/ecommerceSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/instagramSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/breadcrumbNav.css') }}">
<title>Catalog</title>
@endsection
@section('content')
    @php
    $pages = [
        ['name' => 'Home', 'url' => "/"],
        ['name' => 'About', 'url' => "/about"]
    ];
    @endphp
    @include('components.breadcrumbSection', ['pages' => $pages])
    <!-- Introducing toy section -->
    <div class="introducing-toy-container">
        <div class="introducing-toy-content">
            <div class="introducing-main-content">
                <div class="title-text">
                    <p class="all-you-need-fun">All You Need is
                        Fun!</p>
                    <p class="introducing-toy-text">Introducing
                        ToyStore</p>
                    <p class="text">A successful marketing plan
                        relies
                        heavily on the pulling-power of advertising
                        copy.<br>
                        Writing result-oriented ad copy is
                        difficult, as it
                        must appeal to, entice, and convince
                        <br>consumers totake action.
                    </p>
                    <a class="about-link"
                        href="#free-marketing-container">More About
                        Us</a>
                </div>
                <img
                    src="https://assets.website-files.com/5badda2935e11303a89a461e/5bb5c77fe7ca6c69b821cffc_about-image-p-2000.jpeg"
                    alt>
            </div>
        </div>
    </div>
    <!-- End introducing toy section -->
    @include('components.ecommerceSection', ['title' => 'Beautifully Designed', 'textBtn' => 'Get It for FREE!'])
    <div class="position-design-container">
        <div class="position-design-content">
            <div class="available-for-free">
                <img class="position-design-photo"
                    src="https://assets.website-files.com/5badda2935e11303a89a461e/5bb5c77f0b5b7843138dc3c3_side-image-02-p-1080.jpeg"
                    alt>
                <div class="available-for-free-content">
                    <p class="available-for-free-title">100%
                        Responsive</p>
                    <div class="line-position-design"></div>
                    <p class="position-design-text">
                        A successful marketing plan relies heavily
                        on the pulling-power of advertising copy.
                        Writing result-oriented ad copy is
                        difficult, as it must appeal to, entice, and
                        convince consumers to take action.
                        There is no magic formula to write perfect
                        ad copy
                    </p>
                    <a class="catelog-link" href="/pages/catalog.html">
                        <span>Explore Our Toys</span>
                        <i class="fa-solid fa-right-long"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @include('components.videoSection')
    @include('components.subscribeSection')
    @include('components.instagramSection')
@endsection