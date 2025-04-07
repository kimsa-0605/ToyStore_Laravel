@extends ('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/components/breadcrumbNav.css') }}">
<link rel="stylesheet" href="{{ asset('css/pages/productDetail.css') }}">
<link rel="stylesheet" href="{{ asset('css/components/subscribeSection.css') }}">
<title>Product Detail</title>
@endsection
@section('content')
    @php
    $pages = [
        ['name' => 'Home', 'url' => "/"],
        ['name' => 'Catalog', 'url' => "/catalog"],
        ['name' => $product->product_name, 'url' => "/product/detail/" . $product->id]
    ];
    @endphp
    @include('components.breadcrumbSection', ['pages' => $pages])
    <div class="container-product-detail">
        <div class="product-detail-content">
            <div class="card-product-detail">
                <div class="card-product-detail-content">
                    <div class="product-info">
                        <h2>{{ $product->product_name }}</h2>
                        <p class="stock">Quantity: {{ $product->quantity }}</p>
                        <p class="price">${{ $product->price }} USD</p>
                        <div class="quantity-selector">
                            <div class="quantity-group">
                                <button class="btn btn-decrease" id="decrease">-</button>
                                <input type="text" id="quantity-input" class="form-control" value="1">
                                <button class="btn btn-increase" id="increase">+</button>
                            </div>
                            <button class="add-to-cart">Add to cart</button>
                        </div>
                    </div>
                    <div class="image-product">
                        <img src="{{ $product->image_link }}" alt="{{ $product->product_name }}" class="product-img">
                    </div>
                </div>
                <div class="detail-content">
                    <h3>Product description</h3>
                    <div class="toys-line-header">
                        <div class="toys-line-header-color"></div>
                    </div>
                    <p>{{ $product->description }}</p>
                </div>
            </div>
        </div>
        
        <div class="product-section-container">
            <div class="product-section-content">
                <div class="related-products">
                    <div class="related-products-header">
                        <div class="related-products-header-content">
                            <span class="section-title">Related products</span>
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
                        @foreach ($relatedProducts as $product)
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
    </div>
   <!-- End product section -->
   @include('components.subscribeSection')
@endsection