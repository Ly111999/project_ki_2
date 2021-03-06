<header class="header trans_300">

    <!-- Top Navigation -->

    <div class="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top_nav_left">MIỄN PHÍ VẬN CHUYỂN TRÊN TẤT CẢ ĐƠN HÀNG TRÊN 500.000 VND</div>
                </div>
                <div class="col-md-6 text-right">
                    <div class="top_nav_right">
                        <ul class="top_nav_menu">

                            <!-- Language / My Account -->


                            <li class="language">
                                <a href="#">
                                    HOTLINE: 093 221 6375

                                </a>
                            </li>
                            @if(!Auth::check())
                                <li class="account" style="width: 120px;">
                                    <a href="#">
                                        Tài khoản
                                        <i class="fa fa-angle-down"></i>
                                    </a>


                                    <ul class="account_selection">
                                        <li><a href="{{ route('login') }}"><i class="fa fa-sign-in"
                                                                              aria-hidden="true"></i>Đăng nhập</a></li>
                                        <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"
                                                                                 aria-hidden="true"></i>Đăng ký</a>
                                        </li>
                                    </ul>
                                </li>
                            @else
                                <li class="account">
                                    <a id="navbarDropdown" href="#">
                                        {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
                                    </a>


                                    <ul class="account_selection " style="width: 100px;">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                Đăng xuất &nbsp;&nbsp;</a>
                                        </li>


                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endguest

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <div class="main_nav_container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-right">
                    <div class="logo_container">
                        <a href="{{route('home')}}">bambole<span>shop</span></a>
                    </div>
                    <nav class="navbar">
                        <ul class="navbar_menu">
                            <li><a href="{{route('home')}}">Trang chủ</a></li>
                            <li class="category">
                                <a href="#">Chủng loại &nbsp;&nbsp;<i class="fa fa-angle-down"></i></a>

                                <ul class="category_selection">
                                    @foreach($categories as $category)
                                        <li>
                                            <a href="/product?categoryId={{$category -> id}}">{{$category->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            {{--<li><a href="#shop">cửa hàng</a></li>--}}

                            <li><a href="#blog">blog</a></li>
                            <li><a href="/contact">liên hệ</a></li>
                        </ul>

                            <ul class="navbar_user">
                                @if(Auth::check() && auth()->user()->adminLevel == 1)
                                <li><a href="/admin/master" title="Admin page"><i class="fa fa-user"
                                                                                  aria-hidden="true"></i></a>
                                </li>
                                @endif

                                <li class="checkout">
                                    <a href="/xem-gio-hang" title="Cart">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span id="checkout_items"
                                              class="checkout_items">{{\App\ShoppingCart::getTotalItem()}}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="hamburger_container">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>




</header>
