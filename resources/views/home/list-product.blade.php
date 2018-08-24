@extends('home.default')

@section('content')
    <div class="container product_section_container">
        <div class="row">
            <div class="col product_section clearfix">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="/home">Home</a></li>
                        <li class="active"><a href="/product?categoryId={{$selected_category -> id}}"><i
                                        class="fa fa-angle-right" aria-hidden="true"></i>{{$selected_category -> name}}</a>
                        </li>
                    </ul>
                </div>

                <!-- Sidebar -->

                <div class="sidebar">
                    <div class="sidebar_section">
                        <div class="sidebar_title">
                            <h5>Product Category</h5>
                        </div>
                        <ul class="sidebar_categories">
                            <li value="0" class="{{$selected_categoryId==0?'active':''}}"><a
                                        href="/product?categoryId=0"><i class="fa fa-angle-double-right"></i> All
                                    products</a></li>
                            @foreach($categories as $category)
                                <li class="{{$category->id==$selected_categoryId?'active':''}}">
                                    <a href="/product?categoryId={{$category -> id}}">
                                        <span><i class="fa fa-angle-double-right"
                                                 aria-hidden="true"
                                                 data-filter=".{{$category -> id}}"></i></span>{{$category -> name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Price Range Filtering -->
                    <div class="sidebar_section">
                        <form action="/product" method="GET">
                            {{csrf_field()}}
                            <input type="hidden" id="startPrice" name="startPrice" value="{{$start_price}}">
                            <input type="hidden" id="endPrice" name="endPrice" value="{{$end_price}}">
                            <input type="hidden" name="categoryId" value="{{$selected_categoryId}}">
                            <div class="sidebar_title">
                                <h5>Filter by Price (vnd)</h5>
                            </div>
                            <p>
                                <input type="text" id="amount" readonly
                                       style="border:0; color:#f6931f; font-weight:bold;">
                            </p>
                            <div id="slider-range"></div>
                            <button class="filter_button" id="btn-filter-price"><span>filter</span></button>
                        </form>
                    </div>

                </div>

                <!-- Main Content -->

                <div class="main_content">

                    <!-- Products -->

                    <div class="products_iso">
                        <div class="row">
                            <div class="col">

                                <!-- Product Sorting -->

                                <div class="product_sorting_container product_sorting_container_top">
                                    <ul class="product_sorting">
                                        <li>
                                            <span class="type_sorting_text">Default Sorting</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_type">
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "original-order" }'><span>Default Sorting</span>
                                                </li>
                                                <li class="type_sorting_btn"
                                                    data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                                                <li class="type_sorting_btn" data-isotope-option='{ "sortBy": "name" }'>
                                                    <span>Product Name</span></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <span>Show</span>
                                            <span class="num_sorting_text">{{count($list_product)}}</span>
                                            <i class="fa fa-angle-down"></i>
                                            <ul class="sorting_num">
                                                <li class="num_sorting_btn"><span>4</span></li>
                                                <li class="num_sorting_btn"><span>8</span></li>
                                                <li class="num_sorting_btn"><span>10</span></li>
                                            </ul>
                                        </li>
                                    </ul>

                                </div>
                                <!-- Product Grid -->

                                <div class=" product-grid">
                                    <div class="row">
                                    @foreach($list_product as $item)
                                        <!-- Product -->
                                            {{--<div class="col-xs-3 col-lg-3">--}}
                                            <div class="product-item {{$item -> id}}">
                                                <div class="product discount product_filter">
                                                    <div class="product_image">
                                                        <a href="/product/{{$item -> id}}">
                                                            <img class="img-thumbnail"
                                                                 style="height: 75% ; width: 100%; border: none;"
                                                                 src="{{$item -> image}}" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="favorite favorite_left"></div>
                                                    <div
                                                            class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                        <span>-{{$item->discount}}%</span></div>
                                                    <div class="product_info mt-3">
                                                        <h6 class="product_name"><a
                                                                    href="/home/product/{{$item -> id}}">{{$item->name}}</a>
                                                        </h6>
                                                        <div class="product_price">{{$item-> discountPriceString}}
                                                            <span>{{$item->originalPriceString}}</span>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div onclick="add(this)" id="{{$item -> id}}"
                                                     class="red_button add_to_cart_button"><a href="#">add to
                                                        cart</a></div>
                                            </div>
                                            {{--</div>--}}

                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" float-right mt-5 ">
                    {{$list_product->appends($_GET)->links()}}
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
                        <div class="benefit_icon"><i class="fa fa-truck"
                                                     aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>free shipping</h6>
                            <p>Suffered Alteration in Some Form</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money"
                                                     aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>cach on delivery</h6>
                            <p>The Internet Tend To Repeat</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo"
                                                     aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>45 days return</h6>
                            <p>Making it Look Like Readable</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o"
                                                     aria-hidden="true"></i></div>
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