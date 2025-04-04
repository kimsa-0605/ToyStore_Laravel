@extends ('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/videoSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/ecommerceSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/subscribeSection.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/instagramSection.css') }}">
<title>Home</title>
@endsection
@section('content')
    <!-- Banner -->
    <div class="banner-container">
        <div class="banner-content">
            <div class="banner-blog">
                <div class="banner-blog-content">
                    <div class="banner-title">Say Hello to
                        ToyStore!</div>
                    @if (session('user'))
                        <h1 class="banner-h1-title">Hi {{ session('user')['fullname'] }} !
                                <br>Welcome to ToyStore.
                        </h1>
                    @else
                        <h1 class="banner-h1-title">Free Ecommerce <br>Template for Webflow</h1>
                    @endif
                    <a href="/catalog" class="button w-button">Open
                        Catalog</a>
                </div>
            </div>
            <a href="#toy-category-container"
                class="banner-case-mouse">
                <div class="banner-mouse-button">
                    <div class="point-in-mouse"></div>
                </div>
            </a>
        </div>
    </div>
    <!-- End banner -->
    <!-- Call to action -->
    <div id="toy-category-container" class="toy-category-container">
        <div class="toy-category-content">
            <div class="category-stuffed-animals">
                <img src="/images/ui/stuffed.png" alt>
                <div class="category-blog">
                    <h3 class="category-title">Stuffed Animals</h3>
                    <span class="category-shop-now-btn" data-category-id="1">Shop
                        now</span>
                </div>
            </div>
            <div class="category-wooden-toys">
                <div class="category-blog">
                    <h3 class="category-title">Wooden Toys</h3>
                    <span class="category-shop-now-btn" data-category-id="2">Shop
                        now</span>
                </div>
                <img src="/images/ui/wooden.png" alt>
            </div>
        </div>
    </div>
    <!-- End call to action -->
    <!-- Product section -->
    <div class="product-section-container">
        <div class="product-section-content">
            <div class="stuffed-animal-toys">
                <div class="stuffed-animal-toys-header">
                    <div class="stuffed-animal-toys-header-content">
                        <span class="section-title">Stuffed
                            Animals</span>
                        <span class="see-all-toys category-shop-now-btn" data-category-id="1" >
                            <span class="see-all-toys-title">See All
                                Toys</span>
                            <i class="fa-solid fa-right-long"></i>
                        </span>
                    </div>
                    <div class="toys-line-header">
                        <div class="toys-line-header-color"></div>
                    </div>
                </div>
                <div class="product-list">
                    @foreach ($stuffedAnimals as $product)
                        @if($product)
                            <div class="product-card">
                                <a href="/product/detail/{{ $product->id }}" class="product-card-content">
                                    <img src="{{ $product->image_link }}" alt="{{ $product->product_name }}" class="product-photo">
                                    <h3 class="product-title">{{ $product->product_name }}</h3>
                                    <span class="product-cost">${{ $product->price }} USD</span>
                                </a>
                            </div>
                        @else
                            <p>No product found.</p>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="wood-crafted-toys">
                <div class="wood-crafted-toys-header">
                    <div class="wood-crafted-toys-header-content">
                        <span class="section-title">Wooden
                            Toys</span>
                        <span data-category-id="2" class="see-all-toys category-shop-now-btn">
                            <span class="see-all-toys-title">See All
                                Toys</span>
                            <i class="fa-solid fa-right-long"></i>
                        </span>
                    </div>
                    <div class="toys-line-header">
                        <div class="toys-line-header-color"></div>
                    </div>
                </div>
                <div class="product-list">
                    @foreach ($woodenToys as $product)
                        @if($product)
                            <div class="product-card">
                                <a href="/product/detail/{{ $product->id }}" class="product-card-content">
                                    <img src="{{ $product->image_link }}" alt="{{ $product->product_name }}" class="product-photo">
                                    <h3 class="product-title">{{ $product->product_name }}</h3>
                                    <span class="product-cost">${{ $product->price }} USD</span>
                                </a>
                            </div>
                        @else
                            <p>No product found.</p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- End product section -->
    @include('components.videoSection')
    @include('components.ecommerceSection', ['title' => 'Available for FREE!', 'textBtn' => 'GET IT NOW!'])
    @include('components.subscribeSection')
    @include('components.instagramSection')
    <script type="module" src="/js/pages/home.js"></script>
@endsection