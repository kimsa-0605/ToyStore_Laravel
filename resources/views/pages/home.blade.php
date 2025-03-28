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
                    <h1 class="banner-h1-title">Free Ecommerce
                        <br>Template for Webflow</h1>
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
                    <a href="#" class="category-shop-now-btn">Shop
                        now</a>
                </div>
            </div>
            <div class="category-wooden-toys">
                <div class="category-blog">
                    <h3 class="category-title">Wooden Toys</h3>
                    <a href="#" class="category-shop-now-btn">Shop
                        now</a>
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
                        <a href="/catalog" class="see-all-toys">
                            <span class="see-all-toys-title">See All
                                Toys</span>
                            <i class="fa-solid fa-right-long"></i>
                        </a>
                    </div>
                    <div class="toys-line-header">
                        <div class="toys-line-header-color"></div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae12942ca03553bf0d536c_33903-2-plush-toy-transparent-image-min.png"
                                alt="Teddy Bear"
                                class="product-photo">
                            <h3 class="product-title">Teddy
                                Bear</h3>
                            <span class="product-cost">$30.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae124e03ef144f2b4a9bef_33837-2-plush-toy-transparent-background-min.png"
                                class="product-photo">
                            <h3 class="product-title">Mega Plush
                                Toy</h3>
                            <span class="product-cost">$38.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0f7a1f2da258291736c4_33908-7-plush-toy-file-min.png"
                                class="product-photo">
                            <h3 class="product-title">Cute Dog</h3>
                            <span class="product-cost">$24.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0f1835e11376299a8089_33878-5-plush-toy-transparent-min-p-500.png"
                                class="product-photo">
                            <h3 class="product-title">Little
                                Friend</h3>
                            <span class="product-cost">$27.00
                                USD</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wood-crafted-toys">
                <div class="wood-crafted-toys-header">
                    <div class="wood-crafted-toys-header-content">
                        <span class="section-title">Wooden
                            Toys</span>
                        <a href="/catalog" class="see-all-toys">
                            <span class="see-all-toys-title">See All
                                Toys</span>
                            <i class="fa-solid fa-right-long"></i>
                        </a>
                    </div>
                    <div class="toys-line-header">
                        <div class="toys-line-header-color"></div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf529c7a16ad5b5fd9fdf3_33727-9-wooden-toy-transparent-image-min.png"
                                class="product-photo">
                            <h3 class="product-title">Happy
                                Flower</h3>
                            <span class="product-cost">$38.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf525bbf02340f30398cb3_33505-6-wooden-toy-clipart-min.png"
                                class="product-photo">
                            <h3 class="product-title">Lift
                                Machine</h3>
                            <span class="product-cost">$24.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf522457091399591a83fe_33631-9-wooden-toy-photo-min.png"
                                class="product-photo">
                            <h3 class="product-title">Wooden
                                Camera</h3>
                            <span class="product-cost">$32.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf51fc570913c1d31a83f6_33504-4-wooden-toy-transparent-min.png"
                                class="product-photo">
                            <h3 class="product-title">Little
                                Rabbit</h3>
                            <span class="product-cost">$16.00
                                USD</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End product section -->
    @include('components.videoSection')
    @include('components.ecommerceSection', ['title' => 'Available for FREE!', 'textBtn' => 'GET IT NOW!'])
    @include('components.subscribeSection')
    @include('components.instagramSection')
@endsection