@extends('layout.app')
@section('content')

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
               {{--  <ul class="checkout-progress-bar">
                    <li>
                        <span>Cart</span>
                    </li>
                    <li class="active">
                        <span>Review &amp; Payments</span>
                    </li>
                </ul> --}}
                <div class="row">
                    <div class="col-lg-4">
                        <div class="order-summary">
                            <h3>Summary</h3>

                            <h4>
                                <a data-toggle="collapse" href="checkout-review.html#order-cart-section" class="collapsed" role="button" aria-expanded="false" aria-controls="order-cart-section">{{count(session('cart'))}} product(s) in Cart</a>
                            </h4>

                            <div class="collapse" id="order-cart-section">
                                <table class="table table-mini-cart">
                                    <tbody>
                                        <tr>
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="/images/products/product-1.jpg" alt="product">
                                                    </a>
                                                </figure>
                                                <div>
                                                    <h2 class="product-title">
                                                        <a href="product.html">Reason Logo Snapback</a>
                                                    </h2>

                                                    <span class="product-qty">Qty: 4</span>
                                                </div>
                                            </td>
                                            <td class="price-col">$112.00</td>
                                        </tr>

                                        <tr>
                                            <td class="product-col">
                                                <figure class="product-image-container">
                                                    <a href="product.html" class="product-image">
                                                        <img src="/images/products/product-2.jpg" alt="product">
                                                    </a>
                                                </figure>
                                                <div>
                                                    <h2 class="product-title">
                                                        <a href="product.html">Leather Crisscross Slides</a>
                                                    </h2>

                                                    <span class="product-qty">Qty: 4</span>
                                                </div>
                                            </td>
                                            <td class="price-col">$7.90</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- End #order-cart-section -->
                        </div><!-- End .order-summary -->

                        <div class="checkout-info-box">
                            <h3 class="step-title">Ship To:
                                <a href="checkout-review.html#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                            </h3>

                            <address>
                                Address Here<br/>
                            </address>
                        </div><!-- End .checkout-info-box -->
{{--
                        <div class="checkout-info-box">
                            <h3 class="step-title">Shipping Method:
                                <a href="checkout-review.html#" title="Edit" class="step-title-edit"><span class="sr-only">Edit</span><i class="icon-pencil"></i></a>
                            </h3>

                            <p>Flat Rate - Fixed</p>
                        </div><!-- End .checkout-info-box --> --}}
                    </div><!-- End .col-lg-4 -->

                    <div class="col-lg-8 order-lg-first">
                        <div class="checkout-payment">
                            <h2 class="step-title">Payment Method:</h2>

                            {{-- <h4>Check / Money order</h4> --}}

                            <div class="form-group-custom-control">
                                <div class="custom-control custom-checkbox">
                                    {{-- <a href="/signup">Click to login / register </a> --}}

                                </div><!-- End .custom-checkbox -->
                            </div><!-- End .form-group -->

                            <div id="checkout-shipping-address">
                                <address>
                                    Desmond Mason <br>
                                    123 Street Name, City, USA <br>
                                    Los Angeles, California 03100 <br>
                                    United States <br>
                                    (123) 456-7890
                                </address>
                            </div><!-- End #checkout-shipping-address -->

                            <div id="new-checkout-address" class="show">
                                <form action="" method="post">
                                    <div class="form-group required-field">
                                        <label>Street Address </label>
                                        <input type="text" class="form-control" required>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>City  </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label>State/Province</label>
                                        <div class="select-custom">
                                            <select class="form-control">
                                                <option value="CA">California</option>
                                                <option value="TX">Texas</option>
                                            </select>
                                        </div><!-- End .select-custom -->
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Zip/Postal Code </label>
                                        <input type="text" class="form-control" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input type="tel" class="form-control" required>
                                            <span class="input-tooltip" data-toggle="tooltip" title="For delivery questions." data-placement="right"><i class="icon-question-circle"></i></span>
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->

                                </form>
                            </div><!-- End #new-checkout-address -->

                            <div class="clearfix">
                                <a href="#" class="btn btn-primary">Place Order</a>
                            </div><!-- End .clearfix -->
                        </div><!-- End .checkout-payment -->

                        <div class="checkout-discount">

                        </div><!-- End .checkout-discount -->
                    </div><!-- End .col-lg-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->
@stop