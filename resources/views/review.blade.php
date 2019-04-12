@extends('layout.app')
@section('content')
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="product.html#">Electronics</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Headsets</li>
                    </ol>
                </div><!-- End .container -->
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-single-container product-single-default">
                            <div class="row">
                                <div class="col-lg-7 col-md-6 product-single-gallery">
                                    <div class="product-slider-container product-item">
                                        <div class="product-single-carousel owl-carousel owl-theme">
                                            <div class="product-item">
                                                <img class="product-single-image" src="{{array_get($product, 'with_image.0.image')}}" data-zoom-image="{{array_get($product, 'with_image.0.image')}}"/>
                                            </div>

                                        </div>
                                        <!-- End .product-single-carousel -->
                                        <span class="prod-full-screen">
                                            <i class="icon-plus"></i>
                                        </span>
                                    </div>
                                 {{--    <div class="prod-thumbnail row owl-dots" id='carousel-custom-dots'>
                                        <div class="col-3 owl-dot">
                                            <img src="/images/products/zoom/product-1.jpg"/>
                                        </div>
                                        <div class="col-3 owl-dot">
                                            <img src="/images/products/zoom/product-2.jpg"/>
                                        </div>
                                        <div class="col-3 owl-dot">
                                            <img src="/images/products/zoom/product-3.jpg"/>
                                        </div>
                                        <div class="col-3 owl-dot">
                                            <img src="/images/products/zoom/product-4.jpg"/>
                                        </div>
                                    </div> --}}
                                </div><!-- End .col-lg-7 -->

                                <div class="col-lg-5 col-md-6">
                                    <div class="product-single-details">

                                        <h1 class="product-title">{{array_get($product, 'title')}}</h1>



                                        <div class="price-box">
                                            {{-- <span class="old-price">$81.00</span> --}}
                                            <span class="product-price">&#8358;{{array_get($product, 'price')}}</span>
                                        </div><!-- End .price-box -->

                                        <div class="product-desc">
                                             <p>{{substr(array_get($product, 'description'), 0, 200)}}</p>
                                        </div><!-- End .product-desc -->



                                        <div class="product-action">
                                            <div class="product-single-qty">
                                                <input class="horizontal-quantity form-control" type="text" id="qty">
                                            </div><!-- End .product-single-qty -->
                                            <input type="hidden" value="{{array_get($product, 'id')}}" id="pID">
                                            <a href="javascript:void(0)" class="paction add-cart" id="btn-cart">
                                                <span>Add to Cart</span>
                                            </a>
                                           {{--  <a href="product.html#" class="paction add-wishlist" title="Add to Wishlist">
                                                <span>Add to Wishlist</span>
                                            </a> --}}
                                        </div><!-- End .product-action -->

                                    </div><!-- End .product-single-details -->
                                </div><!-- End .col-lg-5 -->
                            </div><!-- End .row -->
                        </div><!-- End .product-single-container -->

                        <div class="product-single-tabs">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="product-tab-desc" data-toggle="tab" href="product.html#product-desc-content" role="tab" aria-controls="product-desc-content" aria-selected="true">Description</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="product-tab-tags" data-toggle="tab" href="product.html#product-tags-content" role="tab" aria-controls="product-tags-content" aria-selected="false">Tags</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="product-tab-reviews" data-toggle="tab" href="product.html#product-reviews-content" role="tab" aria-controls="product-reviews-content" aria-selected="false">Reviews</a>
                                </li> --}}
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="product-desc-content" role="tabpanel" aria-labelledby="product-tab-desc">
                                    <div class="product-desc-content">
                                        <p>{{array_get($product, 'description')}}</p>

                                    </div><!-- End .product-desc-content -->
                                </div><!-- End .tab-pane -->

                                <div class="tab-pane fade" id="product-tags-content" role="tabpanel" aria-labelledby="product-tab-tags">
                                    <div class="product-tags-content">
                                        <form action="product.html#">
                                            <h4>Add Your Tags:</h4>
                                            <div class="form-group">
                                                <input type="text" class="form-control form-control-sm" required>
                                                <input type="submit" class="btn btn-primary" value="Add Tags">
                                            </div><!-- End .form-group -->
                                        </form>
                                        <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                    </div><!-- End .product-tags-content -->
                                </div><!-- End .tab-pane -->

                                <div class="tab-pane fade" id="product-reviews-content" role="tabpanel" aria-labelledby="product-tab-reviews">
                                    <div class="product-reviews-content">
                                        <div class="collateral-box">
                                            <ul>
                                                <li>Be the first to review this product</li>
                                            </ul>
                                        </div><!-- End .collateral-box -->

                                        <div class="add-product-review">
                                            <h3 class="text-uppercase heading-text-color font-weight-semibold">WRITE YOUR OWN REVIEW</h3>
                                            <p>How do you rate this product? *</p>

                                            <form action="product.html#">
                                                <table class="ratings-table">
                                                    <thead>
                                                        <tr>
                                                            <th>&nbsp;</th>
                                                            <th>1 star</th>
                                                            <th>2 stars</th>
                                                            <th>3 stars</th>
                                                            <th>4 stars</th>
                                                            <th>5 stars</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Quality</td>
                                                            <td>
                                                                <input type="radio" name="ratings[1]" id="Quality_1" value="1" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="ratings[1]" id="Quality_2" value="2" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="ratings[1]" id="Quality_3" value="3" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="ratings[1]" id="Quality_4" value="4" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="ratings[1]" id="Quality_5" value="5" class="radio">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Value</td>
                                                            <td>
                                                                <input type="radio" name="value[1]" id="Value_1" value="1" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="value[1]" id="Value_2" value="2" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="value[1]" id="Value_3" value="3" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="value[1]" id="Value_4" value="4" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="value[1]" id="Value_5" value="5" class="radio">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Price</td>
                                                            <td>
                                                                <input type="radio" name="price[1]" id="Price_1" value="1" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="price[1]" id="Price_2" value="2" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="price[1]" id="Price_3" value="3" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="price[1]" id="Price_4" value="4" class="radio">
                                                            </td>
                                                            <td>
                                                                <input type="radio" name="price[1]" id="Price_5" value="5" class="radio">
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <div class="form-group">
                                                    <label>Nickname <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm" required>
                                                </div><!-- End .form-group -->
                                                <div class="form-group">
                                                    <label>Summary of Your Review <span class="required">*</span></label>
                                                    <input type="text" class="form-control form-control-sm" required>
                                                </div><!-- End .form-group -->
                                                <div class="form-group mb-2">
                                                    <label>Review <span class="required">*</span></label>
                                                    <textarea cols="5" rows="6" class="form-control form-control-sm"></textarea>
                                                </div><!-- End .form-group -->

                                                <input type="submit" class="btn btn-primary" value="Submit Review">
                                            </form>
                                        </div><!-- End .add-product-review -->
                                    </div><!-- End .product-reviews-content -->
                                </div><!-- End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .product-single-tabs -->
                    </div><!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <div class="sidebar-toggle"><i class="icon-sliders"></i></div>
                    <aside class="sidebar-product col-lg-3 padding-left-lg mobile-sidebar">
                        <div class="sidebar-wrapper">





                        </div>
                    </aside><!-- End .col-md-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->


        </main><!-- End .main -->

@stop