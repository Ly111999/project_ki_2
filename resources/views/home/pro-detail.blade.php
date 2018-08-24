@extends('home.default')

@section('content')
    <div class="container single_product_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="http://127.0.0.1:8000/home">Home</a></li>
                        <li><a href="http://127.0.0.1:8000/product?categoryId={{$obj_view -> categoryId}}"><i
                                    class="fa fa-angle-right" aria-hidden="true"></i>{{$selected_category -> name}}</a>
                        </li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right"
                                                          aria-hidden="true"></i>{{$obj_view->name}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7">
                <div class="single_product_pics">
                    <div class="row">
                        <div class="col-lg-9 image_col order-lg-2 order-1">
                            <div class="single_product_image">
                                <div class="single_product_image_background"
                                     style="background-image:url({{$obj_view->image}})"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-5" style="float: right">
                <div class="product_details">
                    <div class="product_details_title">
                        <h3>{{$obj_view->name}}</h3>
                        <p id="description">{!!$obj_view->description!!}</p>
                    </div>
                    <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                        <span class="ti-truck"></span><span>free delivery</span>
                    </div>
                    <div class="product_price mt-2">{{$obj_view->discountPriceString}}
                        <span>{{$obj_view->originalPriceString}}</span>
                    </div>
                    <ul class="star_rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                    </ul>

                    <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                        <span>Quantity:</span>
                        <div class="quantity_selector">
                            <span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            <span id="quantity_value">1</span>
                            <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </div>
                        <div class="red_button_2 add_to_cart_button_2"><a
                                href="#">add to cart</a></div>
                        <div
                            class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="best_sellers" style="margin-top: -120px">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Featured products</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <p>We love to tell our successful far far away, behind the word mountains, far from the<br>
                            countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: -20px">
                <div class="col">
                    <div class="product_slider_container">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="owl-carousel owl-theme product_slider">
                            @foreach($list_Product as $key => $product)
                                <!-- Slide  -->

                                    <div class="owl-item product_slider_item">
                                        <div class="product-item">
                                            <div class="product discount">
                                                <div class="product_image">
                                                    <a href="/product/sell/{{$product -> id}}">
                                                        <img class="img-thumbnail"
                                                             style="height: 75% ; width: auto;  border: none;"
                                                             src="{{$product -> image}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div
                                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                    <span>-{{$product->discount}}%</span></div>
                                                <div class="product_info mt-3">
                                                    <h6 class="product_name"><a
                                                            href="/product/sell/{{$product -> id}}">{{$product -> name}}</a>
                                                    </h6>
                                                    <div
                                                        class="product_price">{{$product->discountPriceString}}
                                                        <span>{{$product->originalPriceString}}</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Benefit -->

    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>free shipping</h6>
                            <p>Suffered Alteration in Some Form</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>cach on delivery</h6>
                            <p>The Internet Tend To Repeat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>45 days return</h6>
                            <p>Making it Look Like Readable</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>opening all week</h6>
                            <p>8AM - 09PM</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
