@extends('layout.app')
@section('content')

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Account</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="order-summary">
                            <form method="post" action="/account/authorized?rel=login">
                                @csrf
                                <h3>
                                  Login Here
                                </h3>
                                @if (Session::has('error'))
                                    <div class="alert alert-danger">{{session('error')}}</div>
                                @endif
                                <label>Email Address</label>
                                <input type="text" name="email" class="form-control" required>
                                 <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                                <p></p>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div><!-- End .order-summary -->

                        <div class="checkout-info-box">

                        </div><!-- End .checkout-info-box -->

                        <div class="checkout-info-box">

                        </div><!-- End .checkout-info-box -->
                    </div><!-- End .col-lg-4 -->

                    <div class="col-lg-8 order-lg-first">
                        <div class="checkout-payment">
                            <h2 class="step-title">Register Account</h2>

              {{--               <h4>Check / Money order</h4> --}}


                            {{-- </form> --}}
                          </div>



                         {{--    <div id="checkout-shipping-address">
                                <address>
                                    Desmond Mason <br>
                                    123 Street Name, City, USA <br>
                                    Los Angeles, California 03100 <br>
                                    United States <br>
                                    (123) 456-7890
                                </address>
                            </div> --}}
                            <!-- End #checkout-shipping-address -->

                            <div id="new-checkout-address" class="show">
                                <form method="post" action="/account/authorized?rel=signup">
                                    @csrf
                                    <div class="form-group required-field">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" required name="name">
                                    </div>
                                    <div class="form-group required-field">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" required="" name="email">
                                    </div>

                                    <div class="form-group required-field">
                                        <label>Phone Number </label>
                                        <div class="form-control-tooltip">
                                            <input type="tel" class="form-control" required name="phone">
                                        </div><!-- End .form-control-tooltip -->
                                    </div><!-- End .form-group -->
                                    <div class="form-group required-field">
                                        <label>Password</label>
                                        <input type="password" class="form-control" required name="password">
                                    </div>
                                    <div class="form-group required-field">
                                        <label>Confirm Password</label>
                                        <input type="password" class="form-control" required="">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- End #new-checkout-address -->

                            <div class="clearfix">
                                &nbsp;
                            </div><!-- End .clearfix -->
                        </div><!-- End .checkout-payment -->

                        <div class="checkout-discount">
                           {{--  <h4>
                                <a data-toggle="collapse" href="checkout-review.html#checkout-discount-section" class="collapsed" role="button" aria-expanded="false" aria-controls="checkout-discount-section">Apply Discount Code</a>
                            </h4> --}}

                            <div class="collapse" id="checkout-discount-section">
                                <form action="" method="post">
                                        <input type="text" class="form-control form-control-sm" placeholder="Enter discount code"  required>
                                        <button class="btn btn-sm btn-outline-secondary" type="submit">Apply Discount</button>
                                </form>
                            </div><!-- End .collapse -->
                        </div><!-- End .checkout-discount -->
                    </div><!-- End .col-lg-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->



@stop