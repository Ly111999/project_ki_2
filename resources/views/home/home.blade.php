@extends('home.default')

@section('content')

    <div class="fs_menu_overlay"></div>
    <div class="hamburger_menu">
        <div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
        <div class="hamburger_menu_content text-right">
            <ul class="menu_top_nav">
                <li class="menu_item has-children">
                    <a href="#">
                        English
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#">Vietnamese</a></li>
                    </ul>
                </li>
                <li class="menu_item has-children">
                    <a href="#">
                        My Account
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="menu_selection">
                        <li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
                        <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
                    </ul>
                </li>
                <li class="menu_item"><a href="http://127.0.0.1:8000">home</a></li>
                <li class="menu_item"><a href="#">Category</a><i class="fa fa-angle-down"></i>
                    <ul>
                        <li class="category">
                            <a href="#">Category &nbsp;&nbsp;<i class="fa fa-angle-down"></i></a>
                            <ul class="category_selection">
                                @foreach($listCategory as $category)
                                    <li>
                                        <a href="/home/categories/{{$category->id}}">{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu_item"><a href="#">shop</a></li>
                <li class="menu_item"><a href="#blog">blog</a></li>
                <li class="menu_item"><a href="http://127.0.0.1:8000/home/contact">contact</a></li>
            </ul>
        </div>
    </div>

    <!-- Slider -->

    <div class="main_slider" style="background-image:url(image/slider_1.jpg)">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                    <div class="main_slider_content">
                        <h6>Spring / Aó khoác nữ AKN4175 (2018)</h6>
                        <h1>Get up to 20% Off New Arrivals</h1>
                        <div class="red_button shop_now_button"><a href="/home/product/18">shop now</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->

    <div class="banner" style="margin-top: 80px">
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title mt-1">
                        <h2>Category</h2>
                    </div>
                </div>
            </div>{{--<li class="{{$current_menu == 'category_manager' ? 'active' : ''}}">--}}
            <div class="row" style="margin-top: 60px;">
                <div class="col-md-3">
                    <div class="banner_item align-items-center" style="background-image:url(image/banner_6.jpg)">
                        <div class="banner_category">
                            <a href="/home/categories/1">kid's</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="banner_item align-items-center" style="background-image:url(image/banner_5.jpg)">
                        <div class="banner_category">
                            <a href="/home/categories/2">teen's</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="banner_item align-items-center" style="background-image:url(image/baner_1.jpg)">
                        <div class="banner_category">
                            <a href="/home/categories/3">office's</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="banner_item align-items-center" style="background-image:url(image/banner_2.jpg)">
                        <div class="banner_category">
                            <a href="/home/categories/4">accessories's</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- New Arrivals -->

    <div class="new_arrivals" style="margin-top: -100px">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>New Arrivals</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
                            <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked"
                                data-filter="*">all
                            </li>

                            @foreach($listCategory as $key => $category)
                                <li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center"
                                    data-filter=".{{$category -> id}}">{{$category -> name}}</li>
                            @endforeach


                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid"
                         data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                    @foreach($listProduct as $key => $productWithCategory)

                        <!-- Product {{$productWithCategory['categoryId']}} -->

                            <div class="product-item {{$productWithCategory['categoryId']}}">
                                <div class="product discount product_filter">
                                    <div class="product_image ">
                                        <a href="/home/product/{{$productWithCategory['product'] -> id}}">
                                            <img class="img-thumbnail" style="height: 75% ; width: 100%; border: none ;"
                                                 src="{{$productWithCategory['product'] -> image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div
                                        class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                        <span>-$20</span></div>
                                    <div class="product_info">
                                        <h6 class="product_name"><a
                                                href="/home/product/{{$productWithCategory['product'] -> id}}">{{$productWithCategory['product'] -> name}}</a>
                                        </h6>
                                        <div class="product_price">{{$productWithCategory['product'] -> price}}VND
                                        </div>
                                    </div>
                                </div>
                                <div onclick="add(this)" id="{{$productWithCategory['product'] -> id}}" class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                            </div>

                        <!--End Product {{$productWithCategory['categoryId']}}-->

                        @endforeach

                    </div>
                </div>
            </div>



        </div>
    </div>

    <script>
        function add(elm) {
            var cart = Cookies.get("cart");
            if (!cart)
            {
                cart = {};
            } else
            {
                cart = JSON.parse(cart);
            }

            if (!cart[elm.id])
            {
                cart[elm.id] = 1;
            } else
            {
                cart[elm.id]++;
            }

            Cookies.set("cart", cart);
            alert(Cookies.get("cart"));
            alert('Thêm vào giỏ hàng thành công !')
        }
    </script>

    <!-- Deal of the week -->

    <div class="deal_ofthe_week">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="deal_ofthe_week_img">
                        <img src="image/deal_ofthe_week.png" alt="">
                    </div>
                </div>
                <div class="col-lg-6 text-right deal_ofthe_week_col">
                    <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                        <div class="section_title">
                            <h2>Deal Of The Week</h2>
                        </div>
                        <ul class="timer">
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="day" class="timer_num">03</div>
                                <div class="timer_unit">Day</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="hour" class="timer_num">15</div>
                                <div class="timer_unit">Hours</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="minute" class="timer_num">45</div>
                                <div class="timer_unit">Mins</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="second" class="timer_num">23</div>
                                <div class="timer_unit">Sec</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Best Sellers -->

    <div class="best_sellers" style="margin-top: -120px">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Best Sellers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product_slider_container">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="owl-carousel owl-theme product_slider">
                            @foreach($listProduct as $key => $productWithCategory)
                                <!-- Slide  -->

                                    <div class="owl-item product_slider_item">
                                        <div class="product-item">
                                            <div class="product discount">
                                                <div class="product_image">
                                                    <a href="/home/product/{{$productWithCategory['product'] -> id}}">
                                                        <img class="img-thumbnail" style="height: 75% ; width: auto; "
                                                             src="{{$productWithCategory['product'] -> image}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div
                                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                    <span>-$20</span></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a
                                                            href="/home/product/{{$productWithCategory['product'] -> id}}">{{$productWithCategory['product'] -> name}}</a>
                                                    </h6>
                                                    <div
                                                        class="product_price">{{$productWithCategory['product'] -> price}}
                                                        VND
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <!-- Slider Navigation -->

                        <div
                            class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </div>
                        <div
                            class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefit -->

    <div class="benefit" >
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

    <!-- Blogs -->

    <div class="blogs" id="blog" style="margin-top: -120px">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title">
                        <h2>Latest Blogs</h2>
                    </div>
                </div>
            </div>
            <div class="row blogs_container">
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url(image/blog_1.jpg)"></div>
                        <div
                            class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                            <span class="blog_meta">by admin | dec 01, 2017</span>
                            <a class="blog_more" href="https://www.bocadolobo.com/en/inspiration-and-ideas/trends-forecast-fallwinter-2018/">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url(image/blog_2.jpg)"></div>
                        <div
                            class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                            <span class="blog_meta">by admin | dec 01, 2017</span>
                            <a class="blog_more" href="https://ngoisao.net/tin-tuc/thoi-trang/tu-van/phoi-do-hoa-tre-trung-cho-ngay-cuoi-tuan-3793687.html">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background" style="background-image:url(image/blog_3.jpg)"></div>
                        <div
                            class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Here are the trends I see coming this fall</h4>
                            <span class="blog_meta">by admin | dec 01, 2017</span>
                            <a class="blog_more" href="https://www.24h.com.vn/tui-bop-that-lung/7-kieu-tui-thu-nay-cac-co-gai-phai-co-ma-tau-c174a984347.html">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop

