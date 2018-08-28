@extends('home.default')

@section('content')

    <div class="fs_menu_overlay"></div>
    {{----}}

    <!-- Slider -->

    <div class="main_slider" style="background-image:url({{asset('image/slider_1.jpg')}})">
        <div class="container fill_height">
            <div class="row align-items-center fill_height">
                <div class="col">
                    <div class="main_slider_content">
                        <h6>Spring / Áo khoác nữ AKN4175 (2018)</h6>
                        <h1>Giảm giá tới 20% cho hàng mới</h1>
                        <div class="red_button shop_now_button"><a href="/product/18">mua ngay</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Banner -->

    <div class="banner" style="margin-top: 80px">
        <div class="container">
            <div class="container">
                <div class="row justify-content-center" style="margin-top: -20px">
                    <form style="width: 50%;">
                        <div class="input-group">
                            <input type="text" class="form-control" name="key" value="{{$data['key']}}"
                                   placeholder="Tìm kiếm">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="section_title new_arrivals_title mt-1">
                            <h2>Chủng loại</h2>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 60px;">
                    <div class="col-md-3">
                        <div class="banner_item align-items-center"
                             style="background-image:url({{asset('image/banner_6.jpg')}})">
                            <div class="banner_category">
                                <a href="/product?categoryId=1">kid's</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="banner_item align-items-center"
                             style="background-image:url({{asset('image/banner_5.jpg')}})">
                            <div class="banner_category">
                                <a href="/product?categoryId=2">teen's</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="banner_item align-items-center"
                             style="background-image:url({{asset('image/baner_1.jpg')}})">
                            <div class="banner_category">
                                <a href="/product?categoryId=3">office's</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="banner_item align-items-center"
                             style="background-image:url({{asset('image/banner_2.jpg')}})">
                            <div class="banner_category">
                                <a href="/product?categoryId=4">accessories's</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- New Arrivals -->

    <div class="new_arrivals" id="shop" style="margin-top: -100px">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="section_title new_arrivals_title">
                        <h2>Sản phẩm mới</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <p>Chúng tôi sẽ mang tới cho bạn những sản phẩm tốt nhất đảm bảo về mẫu mã và chất lượng.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="product-grid"
                         data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>
                        @foreach($obj as $item)
                            @if($loop->index == 15)

                                @break;
                            @endif
                            {{--<!-- Product {{$productWithCategory['categoryId']}} -->--}}

                            <div class="product-item obj">
                                <div class="product discount product_filter">
                                    <div class="product_image ">
                                        <a href="/product/{{$item -> id}}">
                                            <img class="img-thumbnail"
                                                 style="height: 75% ; width: 100%; border: none ;"
                                                 src="{{$item -> image}}" alt="">
                                        </a>
                                    </div>
                                    <div class="favorite favorite_left"></div>
                                    <div
                                        class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                        <span>-{{$item -> discount}}%</span></div>
                                    <div class="product_info mt-3">
                                        <h6 class="product_name"><a
                                                href="/product/{{$item -> id}}">{{$item -> name}}</a>
                                        </h6>
                                        <div
                                            class="product_price">{{$item -> discountPriceString}}
                                            <span>{{$item->originalPriceString}}</span>

                                        </div>
                                    </div>
                                </div>

                                <div class="red_button add_to_cart_button" id="add-cart-{{$item->id}}"
                                     style="color: #ffffff">THÊM VÀO GIỎ HÀNG
                                </div>
                            </div>

                            {{--<!--End Product {{$productWithCategory['categoryId']}}-->--}}

                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row float-right mt-3 ">
                <a href="/product?categoryId=0">
                    <button type="button" class="btn btn-outline-info">Xem thêm >>></button>
                </a>
            </div>
        </div>
    </div>



    <!-- Deal of the week -->

    <div class="deal_ofthe_week " style="margin-top: 80px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="deal_ofthe_week_img">
                        <img src="{{asset('image/deal_ofthe_week.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 text-right deal_ofthe_week_col">
                    <div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
                        <div class="section_title">
                            <h2>Giao dịch trong tuần</h2>
                        </div>
                        <ul class="timer">
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="day" class="timer_num">03</div>
                                <div class="timer_unit">Ngày</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="hour" class="timer_num">15</div>
                                <div class="timer_unit">Giờ</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="minute" class="timer_num">45</div>
                                <div class="timer_unit">Phút</div>
                            </li>
                            <li class="d-inline-flex flex-column justify-content-center align-items-center">
                                <div id="second" class="timer_num">23</div>
                                <div class="timer_unit">Giây</div>
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
                        <h2>Sản phẩm nổi bật</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col text-center">
                    <div class="new_arrivals_sorting">
                        <p>Chúng tôi sẽ mang tới cho bạn những sản phẩm tốt nhất đảm bảo về mẫu mã và chất lượng.</p>
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
                                                             style="height: 75% ; width: auto; "
                                                             src="{{$product -> image}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div
                                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                    <span>-{{$product->discount}}%</span></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a
                                                            href="/product/sell/{{$product -> id}}">{{$product -> name}}</a>
                                                    </h6>
                                                    <div
                                                        class="product_price">{{$product -> discountPriceString}}
                                                        <span>{{$product->originalPriceString}}</span>

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

    <div class="benefit">
        <div class="container">
            <div class="row benefit_row">
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>miễn phí vận chuyển</h6>
                            <p>Thay đổi trong một số hình thức</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>thanh toán khi giao hàng
                            </h6>
                            <p>Nhận hàng mới thanh toán</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6> 45 ngày trở lại </h6>
                            <p>Đổi trả trong 45 ngày </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 benefit_col">
                    <div class="benefit_item d-flex flex-row align-items-center">
                        <div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
                        <div class="benefit_content">
                            <h6>mở cả tuần</h6>
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
                        <h2> Blogs mới nhất</h2>
                    </div>
                </div>
            </div>
            <div class="row blogs_container mt-5">
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background"
                             style="background-image:url({{asset('image/blog_1.jpg')}})"></div>
                        <div
                            class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Những xu hướng mà tôi thấy đến mùa thu này </h4>
                            <span class = "blog_meta"> bởi quản trị viên | ngày 1 tháng 12 năm 2017 </span>
                            <a class="blog_more"
                               href="https://www.bocadolobo.com/en/inspiration-and-ideas/trends-forecast-fallwinter-2018/">Read
                                more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background"
                             style="background-image:url({{asset('image/blog_2.jpg')}})"></div>
                        <div
                            class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Những xu hướng mà tôi thấy đến mùa xuân này</h4>
                            <span class="blog_meta">bởi quản trị viên | ngày 1 tháng 12 năm 2017 </span>
                            <a class="blog_more"
                               href="https://ngoisao.net/tin-tuc/thoi-trang/tu-van/phoi-do-hoa-tre-trung-cho-ngay-cuoi-tuan-3793687.html">Read
                                more</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 blog_item_col">
                    <div class="blog_item">
                        <div class="blog_background"
                             style="background-image:url({{asset('image/blog_3.jpg')}})"></div>
                        <div
                            class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
                            <h4 class="blog_title">Những xu hướng mà tôi thấy đến mùa hè này</h4>
                            <span class="blog_meta">bởi quản trị viên | ngày 1 tháng 12 năm 2017 </span>
                            <a class="blog_more"
                               href="https://www.24h.com.vn/tui-bop-that-lung/7-kieu-tui-thu-nay-cac-co-gai-phai-co-ma-tau-c174a984347.html">Read
                                more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop


