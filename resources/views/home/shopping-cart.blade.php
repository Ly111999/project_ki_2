@extends('home.default',['page_title'=>'Giỏ hàng'])
@section('content')
    <!-- Title Page -->
    <div class="container contact_container">
        <div class="row">
            <div class="col">

                <!-- Breadcrumbs -->

                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="{{route('home')}}">Trang chủ</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Giỏ hàng</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <div class="m-t-5">
            <h2 class=" text-center">
                Giỏ hàng
            </h2>
        </div>

        <!-- Cart -->
        <section class="cart bgwhite p-t-50 p-b-100">
            <div class="container">
                <form action="/sua-gio-hang" method="post" name="update-cart-form">
                {{csrf_field()}}
                @method('PUT')
                <!-- Cart item -->
                    <div class="container-table-cart pos-relative">
                        <div class="wrap-table-shopping-cart bgwhite">
                            <table class="table-shopping-cart">
                                <tr class="table-head">
                                    <th class="column-1"></th>
                                    <th class="column-2">Tên sản phẩm</th>
                                    <th class="column-3">Giá (VND)</th>
                                    <th class="column-4 p-l-70">Số lượng</th>
                                    <th class="column-5">Tổng cộng (VND)</th>
                                </tr>
                                @foreach($shopping_cart->items as $item)
                                    <tr class="table-row">
                                        <td class="column-1">
                                            <div class="cart-img-product b-rad-4 o-f-hidden">
                                                <img src="{{$item->product->image}}" alt="{{$item->product->name}}">
                                            </div>
                                        </td>
                                        <td class="column-2">{{$item->product->name}}</td>
                                        <td class="column-3">{{$item->product->discountPriceString}}</td>
                                        <td class="column-4">
                                            <div class="quantity_selector">
                                                <input type="hidden" class="discountPrice" name="discountPrice"
                                                       value="{{$item->product->discountPrice}}">
                                                <span class="minus btn-num-product-down"><i class="fa fa-minus"
                                                                                            aria-hidden="true"></i></span>
                                                <input class="size8 m-text18 t-center num-product"
                                                       type="number" name="products[{{$item->product->id}}]"
                                                       value="{{$item->quantity}}">
                                                <span class="plus btn-num-product-up"><i class="fa fa-plus"
                                                                                         aria-hidden="true"></i></span>
                                            </div>
                                        </td>
                                        <td class="column-5">{{$item->getTotalPriceWithFormat()}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>

                    <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
                        <div class="flex-w flex-m w-full-sm">
                            <a href="{{route('home')}}">
                                <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                                    <!-- Button -->
                                    <button class="flex-c-m sizefull bg0 bo-rad-23 hov1 s-text1 trans-0-4"
                                            type="button">
                                        Tiếp tục mua hàng
                                    </button>
                                </div>
                            </a>
                        </div>

                        <div class="size10 trans-0-4 m-t-10 m-b-10">
                            <!-- Button -->
                            <input class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="Lưu thay đổi"
                                   type="submit">
                        </div>
                    </div>
                </form>

                <form action="/gui-don-hang" name="order-form" method="POST">
                @csrf()
                <!-- Total -->
                    <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
                        <h5 class="m-text20 p-b-24">
                            Thông tin đơn hàng
                        </h5>

                        <!--  -->
                        <div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Tổng tiền hàng:
					</span>

                            <span class="m-text21 w-size20 w-full-sm">
						{{$shopping_cart -> getTotalMoneyWithFormat()}} (VND)
					</span>
                        </div>

                        <!--  -->
                        <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Thông tin người nhận:
					</span>

                            <div class="w-size20 w-full-sm">
                                <div>
                            <span class="s-text19">
							    Họ và tên
						    </span>
                                    <div class="size13 bo4 m-b-12">
                                        <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="ship_name"
                                               placeholder=""></div>
                                </div>
                                <div>
                            <span class="s-text19">
                                Địa chỉ
                            </span>
                                    <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20"
                                              name="ship_address" placeholder=""></textarea>
                                </div>
                                <div>
                            <span class="s-text19">
                                Số điện thoại
                            </span>
                                    <div class="size13 bo4 m-b-12">
                                        <input class="sizefull s-text7 p-l-15 p-r-15" type="text" name="ship_phone"
                                               placeholder="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  -->
                        <div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Tổng cộng:
					</span>

                            <span class="m-text21 w-size20 w-full-sm">
						{{$shopping_cart -> getTotalMoneyWithFormat()}} (VND)
					</span>
                        </div>

                        <div class="size15 trans-0-4">
                            <!-- Button -->
                            <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                                Gửi đơn hàng
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
@endsection
