@extends('layout.app')
@section('content')

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="category-flex-grid.html#">{{$identify}}</a></li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <div class="banner full-banner banner-cat" style="background-image: url('/images/banners/banner-fashion.jpg');">
                    <div class="banner-content banner-content-box">
                        <div>
                            <h1 class="banner-title">
                                <span>Fashion</span>
                                Mega Sale
                            </h1>
                            <h2 class="banner-subtitle">up to 60% OFF</h2>
                            <p>* SELECTED ITEMS</p>
                        </div>
                    </div><!-- End .banner-content -->
                </div><!-- End .banner -->
                <nav class="toolbox">
                    <div class="toolbox-left">
                        <div class="toolbox-item toolbox-sort">

                        </div><!-- End .toolbox-item -->
                    </div><!-- End .toolbox-left -->

                    <div class="toolbox-item toolbox-show">

                    </div><!-- End .toolbox-item -->

                    <div class="layout-modes">
                        <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                            <i class="icon-mode-grid"></i>
                        </a>
                        <a href="category-list.html" class="layout-btn btn-list" title="List">
                            <i class="icon-mode-list"></i>
                        </a>
                    </div><!-- End .layout-modes -->
                </nav>

                        <div class="product-wrapper">
                            <div class="row row-sm category-grid">
                            @if (count($products) > 0 )
                            @foreach($products as $product)
                                <div class="col-6 col-md-4 col-lg-3">
                                    <div class="grid-product">
                                        <figure class="product-image-container">
                                            <a href="/{{array_get($product, 'id')}}" class="product-image">
                                                <img src="{{ array_get($product, 'with_image.0.image')}}" alt="product">
                                            </a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview">Quick View</a>
                                        </figure>
                                        <div class="product-details action-inner">
                                            <h2 class="product-title">
                                                <a href="/{{array_get($product, 'id')}}">{{array_get($product, 'title')}}</a>
                                            </h2>
                                            <div class="product-action">
                                                <a href="category-flex-grid.html#" class="paction add-wishlist" title="Add to Wishlist">
                                                    <span>Add to Wishlist</span>
                                                </a>
                                            </div><!-- End .product-action -->
                                            <div class="price-box">
                                                <span class="product-price">&#8358;{{array_get($product, 'price')}}</span>
                                            </div><!-- End .price-box -->
                                        </div><!-- End .product-details -->
                                        <div class="product-grid-action">
                                            <a href="/{{array_get($product, 'id')}}" class="paction add-cart" title="Add to Cart">
                                                <span>Add to Cart</span>
                                            </a>
                                        </div><!-- End .product-grid-action -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-xl-3 -->
                        @endforeach
                    @else
                        <div class="alert alert-info">
                            <p>No records available </p>
                        </div>
                    @endif

                            </div><!-- End .row -->
                        </div>

                <nav class="toolbox toolbox-pagination">


                  {{--   <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link page-link-btn" href="category-flex-grid.html#"><i class="icon-angle-left"></i></a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="category-flex-grid.html#">1 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="category-flex-grid.html#">2</a></li>
                        <li class="page-item"><a class="page-link" href="category-flex-grid.html#">3</a></li>
                        <li class="page-item"><a class="page-link" href="category-flex-grid.html#">4</a></li>
                        <li class="page-item"><a class="page-link" href="category-flex-grid.html#">5</a></li>
                        <li class="page-item"><span class="page-link">...</span></li>
                        <li class="page-item">
                            <a class="page-link page-link-btn" href="category-flex-grid.html#"><i class="icon-angle-right"></i></a>
                        </li>
                    </ul> --}}
                </nav>
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- margin -->
        </main><!-- End .main -->

@stop