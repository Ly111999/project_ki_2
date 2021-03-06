@extends('home.default',['page_title'=>'Chi tiết sản phẩm'])

@section('content')
    <div class="container single_product_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{route('home')}}">Trang chủ</a></li>
                        <li><a href="/product?categoryId={{$obj_view -> categoryId}}"><i
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
                        <span class="ti-truck"></span><span>giao hàng miễn phí</span>
                    </div>
                    <div class="product_price mt-2">{{$obj_view->discountPriceString}}
                        <span>{{$obj_view->originalPriceString}}</span>
                    </div>
                    <ul class="user_star_rating">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                    </ul>

                    <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                        <span style="width: 100px">Số lượng:</span>
                        <div class="quantity_selector ml-1">
                            <span class="minus"><i class="fa fa-minus" aria-hidden="true"></i></span>
                            <span id="quantity_value">1</span>
                            <span class="plus"><i class="fa fa-plus" aria-hidden="true"></i></span>
                        </div>
                        <div class="red_button_2 add_to_cart_button_2" id="add-cart-{{$obj_view->id}}"
                             style="color: #ffffff;">THÊM VÀO GIỎ HÀNG
                        </div>
                        <div
                            class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('.red_button_2').click(function () {
            var product_id = $(this).attr('id').replace('add-cart-', '');
            var quantity = $('#quantity_value').text();
            $.ajax({
                url: '/api-them-gio-hang',
                method: 'post',
                data: {
                    id: product_id,
                    quantity: quantity,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (resp) {
                    var new_count = resp.shopping_cart.count;
                    if (new_count == undefined) {
                        $('#checkout_items').text(1);
                    } else {
                        $('#checkout_items').text(new_count);
                    }
                    swal('Thao tác thành công!', 'Sản phẩm đã được thêm vào giỏ hàng!', 'success');
                },
                error: function (error) {
                    swal('Thao tác thất bại', JSON.parse(error.responseText).msg);
                }
            });
        });
    </script>
    <div class="best_sellers" style="margin-top: -120px">
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
            <div class="row" style="margin-top: -20px">
                <div class="col">
                    <div class="product_slider_container">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="owl-carousel owl-theme product_slider">
                                @for($i = 24; $i<39; $i++)

                                    <div class="owl-item product_slider_item">
                                        <div class="product-item">
                                            <div class="product discount">
                                                <div class="product_image">
                                                    <a href="/product/{{$obj[$i] -> id}}">
                                                        <img class="img-thumbnail"
                                                             style="height: 75% ; width: auto; "
                                                             src="{{$obj[$i] -> image}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="favorite favorite_left"></div>
                                                <div
                                                    class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center">
                                                    <span>-{{$obj[$i]->discount}}%</span></div>
                                                <div class="product_info">
                                                    <h6 class="product_name"><a
                                                            href="/product/{{$obj[$i] -> id}}">{{$obj[$i] -> name}}</a>
                                                    </h6>
                                                    <div
                                                        class="product_price">{{$obj[$i] -> discountPriceString}}
                                                        <span>{{$obj[$i]->originalPriceString}}</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
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
                            <p> Đổi trả trong 45 ngày </p>
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

@endsection
