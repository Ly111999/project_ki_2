<html>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Admin</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('admin/css/font-face.css')}}css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('admin/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet"
          media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('admin/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

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
    <!-- Jquery JS -->
    <script src="{{asset('admin/vendor/jquery-3.2.1.min.js')}}"></script>
</head>
<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
    <header class="header-mobile d-block d-lg-none">
        <div class="header-mobile__bar">
            <div class="container-fluid ">
                <div class="header-mobile-inner h-75">
                    <a class="logo" href="index.html">
                        <img src="{{asset('image/shop_5.jpg')}}" alt="Bambole"/>
                    </a>
                    <button class="hamburger hamburger--slider" type="button">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                    </button>
                </div>
            </div>
        </div>
        <nav class="navbar-mobile">
            <div class="container-fluid">
                <ul class="navbar-mobile__list list-unstyled">
                    <li class="has-sub">
                        <a class="js-arrow" href="/admin/master">
                            <i class="fas fa-tachometer-alt"></i>Home</a>
                    </li>
                    <li>
                        <a href="/admin/product">
                            <i class="fas fa-table"></i>Product manager</a>
                    </li>
                    <li>
                        <a href="/admin/category">
                            <i class="fas fa-table"></i>Category manager</a>
                    </li>
                    <li>
                        <a href="/admin/order">
                            <i class="fas fa-table"></i>Order manager</a>
                    </li>
                    <li>
                        <a href="chart.html">
                            <i class="fas fa-chart-bar"></i>Charts</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="{{asset('image/shop_5.jpg')}}" alt="Bambole"/>
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="has-sub">
                        <a class="js-arrow" href="/admin/master">
                            <i class="fas fa-tachometer-alt"></i>Home</a>
                    </li>
                    <li>
                        <a href="/admin/product">
                            <i class="fas fa-table"></i>Product manager</a>
                    </li>
                    <li>
                        <a href="/admin/category">
                            <i class="fas fa-table"></i>Category manager</a>
                    </li>
                    <li>
                        <a href="/admin/order">
                            <i class="fas fa-table"></i>Order manager</a>
                    </li>
                    <li>
                        <a href="chart.html">
                            <i class="fas fa-chart-bar"></i>Charts</a>
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
                                   placeholder="Search for datas &amp; reports..."/>
                            <button class="au-btn--submit" type="submit">
                                <i class="zmdi zmdi-search"></i>
                            </button>
                        </form>
                        <div class="header-button">
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="{{asset('image/shop_5.jpg')}}}" alt="John Doe"/>
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">Huong Ly</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="{{asset('image/shop_5.jpg')}}" alt="John Doe"/>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">Huong Ly</a>
                                                </h5>
                                                <span class="email">bamboleShop100818@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__body">
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-account"></i>Account</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                                            </div>
                                            <div class="account-dropdown__item">
                                                <a href="#">
                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>
                                            </div>
                                        </div>
                                        <div class="account-dropdown__footer">
                                            <a href="http://127.0.0.1:8000">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
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

