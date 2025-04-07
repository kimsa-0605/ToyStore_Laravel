@extends('master')
@section('css/title')
<link rel="stylesheet" href="{{ asset('css/pages/search.css') }}">
@endsection
@section('content')
<!-- Search product section -->
<div class='container-search-page'>
   <div class="search-header">
        <div class="search-header-content">
            <div class="search-title-section">
                <p class="page-path">Home | <span class="current-page">Search</span></p>
                <h2 class="page-heading">Explore Our <span class="highlighted-text">Products</span></h2>
            </div>
            <div class="search-header-image">
                <img src="https://bizweb.dktcdn.net/thumb/1024x1024/100/430/947/products/13.jpg?v=1624844675963" alt="monter">
            </div>
        </div>
    </div>
   <div class="search-results-section">
        <div class="search-results-summary">
            <div class="results-count">
                <p class="content-right">There are 9 matching search results</p>
            </div>
            <div class="search-filters-products">
                <div class="search-filters">
                    <div class="filter-category">
                        <div class="filter-header">
                            <p class="filter-title">CATEGORIES</p>
                            <div class="filter-line"></div>
                        </div>
                        <div class="filter-items">
                            <label class="filter-item">
                                <input type="checkbox">
                                <span>Stuffed Animals</span>
                            </label>
                            <label class="filter-item">
                                <input type="checkbox">
                                <span>Wooden Toys</span>
                            </label>
                        </div>
                    </div>
                    <div class="filter-price">
                        <div class="filter-header">
                            <p class="filter-title">PRICE</p>
                            <div class="filter-line"></div>
                        </div>
                        <div class="filter-items">
                            <div class="price-range">
                                <input type="range" class="price-slider">
                                <div class="price-labels">
                                    <span class="price-min">0$</span>
                                    <span class="price-max">500$</span>
                                </div>
                                <div class="selected-price">
                                    <span class="title-input">Selected amount: 250$</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search-button-section">
                        <button class="search-button">Search</button>
                    </div>
                </div>
                <div class="product-grid">
                    <div id="product-list" class="product-list">
                        <div class="product-card">
                            <a href="/product/detail/1" class="product-card-content">
                                <img src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae12942ca03553bf0d536c_33903-2-plush-toy-transparent-image-min.png" alt="Teddy Bear" class="product-photo">
                                <h3 class="product-title">Teddy Bear</h3>
                                <span class="product-cost">$30.00 USD</span>
                            </a>
                        </div>
                    </div>
                    <div id="product-list" class="product-list">
                        <div class="product-card">
                            <a href="/product/detail/1" class="product-card-content">
                                <img src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae12942ca03553bf0d536c_33903-2-plush-toy-transparent-image-min.png" alt="Teddy Bear" class="product-photo">
                                <h3 class="product-title">Teddy Bear</h3>
                                <span class="product-cost">$30.00 USD</span>
                            </a>
                        </div>
                    </div>
                    <div id="product-list" class="product-list">
                        <div class="product-card">
                            <a href="/product/detail/1" class="product-card-content">
                                <img src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae12942ca03553bf0d536c_33903-2-plush-toy-transparent-image-min.png" alt="Teddy Bear" class="product-photo">
                                <h3 class="product-title">Teddy Bear</h3>
                                <span class="product-cost">$30.00 USD</span>
                            </a>
                        </div>
                    </div>
                    <div id="product-list" class="product-list">
                        <div class="product-card">
                            <a href="/product/detail/1" class="product-card-content">
                                <img src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae12942ca03553bf0d536c_33903-2-plush-toy-transparent-image-min.png" alt="Teddy Bear" class="product-photo">
                                <h3 class="product-title">Teddy Bear</h3>
                                <span class="product-cost">$30.00 USD</span>
                            </a>
                        </div>
                    </div>
                    <div id="product-list" class="product-list">
                        <div class="product-card">
                            <a href="/product/detail/1" class="product-card-content">
                                <img src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae12942ca03553bf0d536c_33903-2-plush-toy-transparent-image-min.png" alt="Teddy Bear" class="product-photo">
                                <h3 class="product-title">Teddy Bear</h3>
                                <span class="product-cost">$30.00 USD</span>
                            </a>
                        </div>
                    </div>
                    <div id="product-list" class="product-list">
                        <div class="product-card">
                            <a href="/product/detail/1" class="product-card-content">
                                <img src="https://cdn.prod.website-files.com/5baddb6a35e113da0e9a4802/5bae12942ca03553bf0d536c_33903-2-plush-toy-transparent-image-min.png" alt="Teddy Bear" class="product-photo">
                                <h3 class="product-title">Teddy Bear</h3>
                                <span class="product-cost">$30.00 USD</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
