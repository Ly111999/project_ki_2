<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Title Page-->
    <title>Admin</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('admin/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet"
          media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Vendor CSS-->
    <link href="{{asset('admin/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet"
          media="all">
    <link href="{{asset('adminMiddleware')}}" media="all">
    <link href="{{asset('admin/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('admin/css/theme.css')}}" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/manu-bar.css') }}">

    <!-- Jquery JS -->
    <script src="{{asset('admin/vendor/jquery-3.2.1.min.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

</head>
<body class="animsition">


    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset('image/logo.png')}}" alt="Bambole"/>
            </a>
        </div>
        <div class=" nav menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar mt-5">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub {{$current_menu == 'home' ? 'active' : ''}}">
                        <a class="js-arrow" href="/admin/master">
                            <i class="fas fa-home"></i>Trang chủ</a>
                    </li>
                    <li class="{{$current_menu == 'product_manager' ? 'active' : ''}}">
                        <a href="/admin/product">
                            <i class="fas fa-list-ul"></i>Quản lí sản phẩm</a>
                    </li>
                    <li class="{{$current_menu == 'category_manager' ? 'active' : ''}}" >
                        <a href="/admin/category">
                            <i class="fas fa-table"></i>Quản lí chủng loại</a>
                    </li>
                    <li class="{{$current_menu == 'order_manager' ? 'active' : ''}}" >
                        <a href="/admin/order">
                            <i class="fab fa-jedi-order"></i>Quản lí đơn hàng</a>
                    </li>
                    <li class="{{$current_menu == 'user' ? 'active' : ''}}" >
                        <a href="/admin/user">
                            <i class="fas fa-address-card"></i>Quản lí khách hàng</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <input class="au-input au-input--xl" type="text" name="search"
                                   placeholder="Tìm kiếm"/>
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        {{--<img src="{{asset('image/logo.png')}}" alt="John Doe"/>--}}
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">Huong Ly</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{asset('image/logo.png')}}" alt="Bambole"/>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">Huong Ly</a>
                                                </h5>
                                                <span class="email">bamboleShop100818@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="{{route('home')}}">
                                                <i class="zmdi zmdi-power"></i>Đăng xuất</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <div class="main-content" style="background-color: #FFFFFF">
            @yield('content')
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="{{asset('admin/vendor/bootstrap-4.1/popper.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>

<!-- Vendor JS -->
<script src="{{asset('admin/vendor/slick/slick.min.js')}}"></script>
<script src="{{asset('admin/vendor/wow/wow.min.js')}}"></script>
<script src="{{asset('admin/vendor/animsition/animsition.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<script src="{{asset('admin/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('admin/vendor/counter-up/jquery.counterup.min.js')}}"></script>
<script src="{{asset('admin/vendor/circle-progress/circle-progress.min.js')}}"></script>
<script src="{{asset('admin/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin/vendor/chartjs/Chart.bundle.min.js')}}"></script>
<script src="{{asset('admin/vendor/select2/select2.min.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('admin/js/main.js')}}"></script>
</body>
<footer>
    <div class="row" style="margin-left: 300px">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2018 Bambole. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
</html>

