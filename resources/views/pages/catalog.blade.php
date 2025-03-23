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
                            <a href="#"
                                class="categories-toys-all-toys">All
                                Toys</a>
                            <a href="#"
                                class="categories-toys-wooden-toys">Wooden
                                Toys</a>
                            <a href="#"
                                class="categories-toys-stuffed-toys">Stuffed
                                Animals</a>
                        </span>
                    </div>
                    <div class="toys-line-header">
                        <div class="toys-line-header-color"></div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae12942ca03553bf0d536c_33903-2-plush-toy-transparent-image-min-p-500.png"
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
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf529c7a16ad5b5fd9fdf3_33727-9-wooden-toy-transparent-image-min-p-500.png"
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
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf525bbf02340f30398cb3_33505-6-wooden-toy-clipart-min-p-500.png"
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
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf522457091399591a83fe_33631-9-wooden-toy-photo-min-p-500.png"
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
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf51fc570913c1d31a83f6_33504-4-wooden-toy-transparent-min-p-800.png"
                                class="product-photo">
                            <h3 class="product-title">Little
                                Rabbit</h3>
                            <span class="product-cost">$16.00
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
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0ede56ac5481f54e12e9_33610-4-plush-toy-hd-min-p-500.png"
                                alt="Teddy Bear"
                                class="product-photo">
                            <h3 class="product-title">Christmas
                                Deer</h3>
                            <span class="product-cost">$19.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf51b7c8d851a73cc4544c_33649-6-toy-transparent-image-min-p-500.png"
                                class="product-photo">
                            <h3 class="product-title">Rainbow
                                Truck</h3>
                            <span class="product-cost">$28.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0e6335e113da999a7976_33568-4-toy-image-min-p-500.png"
                                class="product-photo">
                            <h3 class="product-title">Pluto Yellow
                                Dog</h3>
                            <span class="product-cost">$28.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf5171ace69cb064b33d42_33388-1-wooden-toy-photos-min-p-500.png"
                                class="product-photo">
                            <h3 class="product-title">Happy Dog</h3>
                            <span class="product-cost">$30.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf50843a685ea7dfd6e4fd_33371-3-wooden-toy-min-p-500.png"
                                alt="Teddy Bear"
                                class="product-photo">
                            <h3
                                class="product-title">Caterpillar</h3>
                            <span class="product-cost">$18.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0db61f2da2a4ef173617_cute-plush-toy-stuffed-animal-47335-min-p-500.png"
                                class="product-photo">
                            <h3 class="product-title">Grey
                                Elephant</h3>
                            <span class="product-cost">$45.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5baf5100ace69c1b26b33d2d_33476-9-wooden-toy-hd-min-p-800.png"
                                class="product-photo">
                            <h3 class="product-title">Wooden
                                Tractor</h3>
                            <span class="product-cost">$22.00
                                USD</span>
                        </div>
                    </div>
                    <div class="product-card">
                        <div class="product-card-content">
                            <img
                                src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae0d07939555eac3b8a91c_33910-6-toy-clipart-min-p-500.png"
                                class="product-photo">
                            <h3 class="product-title">Funny
                                Clown</h3>
                            <span class="product-cost">$36.00
                                USD</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End product section -->
    @include('components.subscribeSection')
    @include('components.instagramSection')
@endsection