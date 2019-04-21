@extends('layout.app')
@section('content')

        <main class="main">
            <div class="container">
                <div class="home-slider-container">
                    <div class="home-slider owl-carousel">
                        <div class="home-slide">
                            <div class="slide-bg owl-lazy"  data-src="/images/slider/slide-1.jpg"></div><!-- End .slide-bg -->
                            <div class="home-slide-content slide-content-right">
                                <h3>New Summer</h3>
                                <h1>Collection</h1>
                                <a href="category.html" class="btn btn-secondary">Shop Now</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .home-slide -->

                        <div class="home-slide">
                            <div class="slide-bg owl-lazy"  data-src="/images/slider/slide-2.jpg"></div><!-- End .slide-bg -->
                            <div class="home-slide-content">
                                <h3>Elegent Collections</h3>
                                <h1>For Him & Her</h1>
                                <a href="category.html" class="btn btn-secondary">Shop Now</a>
                            </div><!-- End .home-slide-content -->
                        </div><!-- End .home-slide -->
                    </div><!-- End .home-slider -->
                </div><!-- End .home-slider-container -->
            </div><!-- End .container -->

            <div class="home-top-section">
                <div class="container">
                    <div class="row">

                        @if (count($categories) > 0)
                            @foreach ($categories as $category)
                                <div class="col-md-4">
                                    <div class="cat-box">
                                        <figure>
                                            <a href="/category/{{strtolower(array_get($category, 'title'))}}">
                                                <img src="/images/banners/banner-2.jpg" alt="banner">
                                            </a>
                                        </figure>

                                        <div class="cat-box-content">
                                            <h3 class="cat-box-title">
                                                <a href="/category/{{str_slug(array_get($category, 'title'))}}">{{strtoupper(array_get($category, 'title'))}}</a>
                                            </h3>
                                            <p>View More</p>
                                        </div><!-- End .cat-box-content -->
                                    </div><!-- End .cat-box -->
                                </div><!-- End .col-lg-4 -->
                            @endforeach
                        @endif
                    </div><!-- End .row -->
                </div><!-- End .container -->

                <div class="mb-3 mb-lg-5"></div><!-- margin -->

                <div class="container">
                    <h2 class="title mb-3">Featured Products</h2>
                    <div class="owl-carousel owl-theme featured-products">

                    @if (count($products) > 0 )
                        @foreach($products as $product)
                            <div class="product">
                                <figure class="product-image-container">
                                    <a href="{{array_get($product, 'id')}}" class="product-image">
                                        <img src="{{array_get($product, 'with_image.0.image')}}" alt="product">
                                    </a>
                                    <a href="/{{array_get($product, 'id')}}" class="btn-quickview">Quick View</a>
                                </figure>
                                <div class="product-details action-inner">
                                    <h2 class="product-title">
                                        <a href="/{{array_get($product, 'id')}}">{{array_get($product, 'title')}}</a>
                                    </h2>
                                    <div class="product-action">
                                        <a href="#" class="paction add-wishlist" title="Add to Wishlist">
                                            <span>Add to Wishlist</span>
                                        </a>
                                    </div><!-- End .product-action -->
                                    <div class="price-box">
                                        <span class="product-price">{{array_get($product, 'price')}} points</span>
                                    </div><!-- End .price-box -->
                                </div><!-- End .product-details -->
                            </div><!-- End .product -->
                        @endforeach
                    @endif
                    </div><!-- End .featured-products -->
                </div><!-- End .container -->
            </div><!-- End .home-top-section -->

        </main><!-- End .main -->
@stop