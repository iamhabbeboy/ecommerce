@extends('layout.app')
@section('content')

        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">

                </div><!-- End .container -->
            </nav>

            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="order-summary">
                            <b>Quick Menu </b>
                            <div class="list-group" id="quick-menu">

                                <a href="/account/home" data-rel="welcome" class="list-group-item">Home </a>

                                <a href="?page=fund" data-rel="fund-account" class="list-group-item">Fund Account </a>

                                <a href="?page=history" data-rel="history" class="list-group-item">Shopping History </a>

                                <a href="/account/signout" data-rel="logout" class="list-group-item">Logout </a>
                            </div>
                        </div><!-- End .order-summary -->

                    </div><!-- End .col-lg-4 -->

                    <div class="col-lg-8 order-lg-first">
                        <div class="checkout-payment">
                            @if (Session::has('userinfo'))
                                <h2 class="step-title">Welcome back, {{session('userinfo')->name}}  </h2>
                            @else
                                <div class="alert alert-danger">You have been loggedout</div>
                            @endif

              {{--               <h4>Check / Money order</h4> --}}


                            {{-- </form> --}}
                          </div>

                            <div id="new-checkout-address" class="show">
                                <div id="page-loader">
                                    @if(array_get($_GET, 'page'))
                                        {{-- {{array_get($_GET,'page')}} --}}
                                        @include(array_get($_GET, 'page'))
                                    @else
                                    <div id="welcome">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                    {{-- <a href="javascript:void(0)" id="generate">click here</a> --}}

                                    {{-- @if (Session::has('cart')) --}}
                                    @if (count($cartProductMerged) > 0)
                                        @php $total = 0 @endphp
                                        <table class="table">
                                            <tr>
                                                <th># </th>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Qty </th>
                                            </tr>
                                            @foreach($cartProductMerged as $key => $product)
                                                @php
                                                $total = $total + ($quantityStorage[$key] * array_get($product, '0.price'))
                                                @endphp 
                                            <tr>
                                                <td># </td>
                                                <td><img src="{{array_get($product, '0.with_image.0.image')}}" alt="product" style="width:50px;height:50px;">
                                                </td>
                                               
                                                <td> {{array_get($product, '0.title')}} </td>
                                                <td>
                                                        {{array_get($product, '0.price')}} points * {{$quantityStorage[$key] }}  
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="2"></td>
                                            <td><b>Total</b></td>
                                        <td>
                                            <b>{{$total}} points</b>
                                        </td>
                                        </tr>
                                        </table>
                                    {{-- @endif --}}
                                    @if ($status == 1)
                                    <div class="alert alert-success">Payment made successfully
                                        <a href="javascript:window.location='/account/home'">click to continue </a>
                                    </div>
                                    @elseif ($status == 0)
                                    <div class="alert alert-danger">
                                        <b>Payment failed</b>
                                        <br><br/>
                                        <p> You dont have sufficient points to purchase this products</p>
                                        <p>Please fund your account</p>
                                    </div>
                                    @endif
                                    @if ($status != 1)
                                    <a href="?stat=pay&total={{$total}}" class="btn btn-primary">click to pay</a>
                                    @endif
                                    @endif
                                </div>
                                @endif
                                {{-- <a href="javascript:window.location='/account/home'">click to continue </a> --}}
                                </div>

                            </div><!-- End #new-checkout-address -->

                            <div class="clearfix">
                                &nbsp;
                            </div><!-- End .clearfix -->
                        </div><!-- End .checkout-payment -->
                    </div><!-- End .col-lg-8 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->



@stop