<!doctype html>
<!--[if IE 9]> <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js " lang="en"> <!--<![endif]-->
<head>
    <!-- basic page needs -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>小韩博客|商城</title>
    <meta name="description" content="add your site description here">
    <!-- mobile meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}">
    <!-- fancybox -->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery.fancybox.css') }}">
    <!-- mobile menu -->
    <link rel="stylesheet" href="{{ URL::asset('css/meanmenu.min.css') }}">
    <!-- jquery-ui-slider -->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui-slider.css') }}">
    <!-- nivo-slider css -->
    <link rel="stylesheet" href="{{ URL::asset('css/nivo-slider.css') }}">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css' />
    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="http://www.jq22.com/jquery/font-awesome.4.6.0.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <!-- modernizr js -->
    <script src="{{ URL::asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
    <!-- jquery js -->
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <!-- jqueryui js -->
    <script src="http://www.jq22.com/jquery/jquery-ui-1.11.0.js"></script>
    <!-- mobile menu js -->
    <script src="{{ URL::asset('js/jquery.meanmenu.js') }}"></script>
    <!-- fancybox js -->
    <script src="{{ URL::asset('js/jquery.fancybox.js') }}"></script>
    <!-- elevatezoom js -->
    <script src="{{ URL::asset('js/jquery.elevatezoom.js') }}"></script>
    <!-- bootstrap js -->
    <script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
    <!-- owl.carousel js -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ URL::asset('js/jquery.nivo.slider.pack.js') }}"></script>
    <!-- jquery-counterup js -->
    <script src="{{ URL::asset('js/jquery.counterup.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ URL::asset('js/wow.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!-- main js -->
    <script src="{{ URL::asset('js/main.js') }}"></script>
<!--[if lt IE 9]>
    <script src="{{ URL::asset('js/vendor/html5shiv.min.js') }}"></script>
    <script src="{{ URL::asset('js/vendor/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body>




<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
<!-- header-area start -->
<header class="header-area">
    <!-- header-top start -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="welcome-mes">
                        <p>欢迎访问小韩商城</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="header-right-menu">
                        <nav>
                            <ul>
                                @guest
                                    <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>

                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                    @endif
                                @else
                                    <li><a href="">{{ Auth::user()->name }}</a><i class="fa fa-angle-down"></i>
                                        <ul>
                                            <li><a href="my-account.html">个人资料</a></li>
                                            <li><a href="wishlist.html">我的博客</a></li>
                                            <li><a href="cart.html">我的购物车</a></li>
                                            <li><a href="checkout.html">我的订单</a></li>
                                            <li><a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}</a></li>
                                        </ul>
                                    </li>
                                @endif
                                                                <li class="last"><a href="{{route('blog.create')}}">发博客</a>
{{--                                                                    <i class="fa fa-angle-down"></i>--}}
{{--                                                                    <ul>--}}
{{--                                                                        <li><a href="#">eur</a></li>--}}
{{--                                                                        <li><a href="#">usd</a></li>--}}
{{--                                                                    </ul>--}}
                                                                </li>
                                {{--                                <li class="last"><a href="#">English</a><i class="fa fa-angle-down"></i>--}}
                                {{--                                    <ul>--}}
                                {{--                                        <li><a href="#">English</a></li>--}}
                                {{--                                        <li><a href="#">France</a></li>--}}
                                {{--                                    </ul>--}}
                                {{--                                </li>--}}
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top end -->
    <!-- header-middle start -->
    <div class="header-middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-3">
                    <!-- logo start -->
                    <div class="logo">
                        <a href="index.html"><img src="img/logo.png" alt="GreenTech" /></a>
                    </div>
                    <!-- logo end -->
                </div>
                <div class="col-xs-12 col-md-9">
                    <!-- category search start -->
                    <div class="category-search-area">
                        <div class="search-cat">
                            <select>
                                <option value="1">全部分类</option>
                                <option value="2">Games</option>
                                <option value="2">Software</option>
                                <option value="3">Laptop</option>
                                <option value="3">Computer</option>
                                <option value="4">Fashion</option>
                                <option value="4">Dress</option>
                                <option value="5">Toys</option>
                                <option value="5">Kids</option>
                                <option value="6">Sport</option>
                                <option value="6">Healthy</option>
                                <option value="7">Accessories</option>
                            </select>
                        </div>
                        <div class="search-form">
                            <form action="#" method="post">
                                <input class="cat-search-box" type="text" placeholder="搜索整个商城" />
                                <a href="" class="cat-search-btn"><i class="fa fa-search"></i></a>
                            </form>
                        </div>
                    </div>
                    <!-- category search end -->
                    <!-- top-shoping-cart start -->
                    <div class="top-shoping-cart">
                        <div class="top-wishlist">
                            <a class="top-wishlist-link" href="wishlist.html"><span>3</span></a>
                            <div class="wishlist-box-overlay">
                                <p class="last-added-item">最近加入购物车</p>
                                <div class="single-mycart-item">
                                    <div class="mycart-item-pro">
                                        <div class="mycart-item-img">
                                            <a href="wishlist.html"><img src="img/product/shoping-cart/4.jpg" alt="cart" /></a>
                                        </div>
                                        <div class="mycart-item-text">
                                            <a href="#" class="item-delete" title="delete">delete Item</a>
                                            <p><a class="mycart-title" href="wishlist.html">Cras neque metus </a></p>
                                            <div class="product-price">
                                                <span class="regular-price">$180.00</span>
                                                <span class="old-price">$300.00</span>
                                            </div>
                                            <p><a class="t-w-add-cart" href="#" title="Add to Cart">加入购物车</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-mycart-item">
                                    <div class="mycart-item-pro">
                                        <div class="mycart-item-img">
                                            <a href="wishlist.html"><img src="img/product/shoping-cart/5.jpg" alt="cart" /></a>
                                        </div>
                                        <div class="mycart-item-text">
                                            <a href="#" class="item-delete" title="delete">删除</a>
                                            <p><a class="mycart-title" href="wishlist.html">Cras neque metus </a></p>
                                            <div class="product-price">
                                                <span class="regular-price">$280.00</span>
                                            </div>
                                            <p><a class="t-w-add-cart" href="#" title="Add to Cart">Add to Cart</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-mycart-item">
                                    <div class="mycart-item-pro">
                                        <div class="mycart-item-img">
                                            <a href="wishlist.html"><img src="img/product/shoping-cart/2.jpg" alt="cart" /></a>
                                        </div>
                                        <div class="mycart-item-text">
                                            <a href="#" class="item-delete" title="delete">delete Item</a>
                                            <p><a class="mycart-title" href="wishlist.html">Cras neque metus </a></p>
                                            <div class="product-price">
                                                <span class="regular-price">$220.00</span>
                                                <span class="old-price">$200.00</span>
                                            </div>
                                            <p><a class="t-w-add-cart" href="#" title="Add to Cart">Add to Cart</a></p>
                                        </div>
                                    </div>
                                </div>
                                <p class="go-to-wishlist"><a href="wishlist.html">Go to Wishlist</a></p>
                            </div>
                        </div>
                        <div class="top-mycart">
                            <a class="top-mycart-link" href="cart.html">我的购物车 <span>(3) 项: <strong>$975.00</strong></span></a>
                            <div class="top-mycart-overlay">
                                <div class="single-mycart-item">
                                    <div class="mycart-item-pro">
                                        <div class="mycart-item-img">
                                            <a href="cart.html"><img src="img/product/shoping-cart/1.jpg" alt="cart" /></a>
                                        </div>
                                        <div class="mycart-item-text">
                                            <p><a class="mycart-title" href="cart.html">Cras neque metus </a></p>
                                            <a href="#" class="cart-price"><strong>1</strong><sub>x</sub> <span>$160.00</span></a>
                                        </div>
                                    </div>
                                    <div class="mycart-item-edit">
                                        <a href="#" class="item-edit" title="edit">Edit Item</a>
                                        <a href="#" class="item-delete" title="delete">delete Item</a>
                                    </div>
                                </div>
                                <div class="single-mycart-item">
                                    <div class="mycart-item-pro">
                                        <div class="mycart-item-img">
                                            <a href="cart.html"><img src="img/product/shoping-cart/2.jpg" alt="cart" /></a>
                                        </div>
                                        <div class="mycart-item-text">
                                            <p><a class="mycart-title" href="cart.html">Proin lectus ipsum</a></p>
                                            <a href="#" class="cart-price"><strong>2</strong><sub>x</sub> <span>$250.00</span></a>
                                        </div>
                                    </div>
                                    <div class="mycart-item-edit">
                                        <a href="#" class="item-edit" title="edit">Edit Item</a>
                                        <a href="#" class="item-delete" title="delete">delete Item</a>
                                    </div>
                                </div>
                                <div class="single-mycart-item">
                                    <div class="mycart-item-pro">
                                        <div class="mycart-item-img">
                                            <a href="cart.html"><img src="img/product/shoping-cart/3.jpg" alt="cart" /></a>
                                        </div>
                                        <div class="mycart-item-text">
                                            <p><a class="mycart-title" href="cart.html">Donec ac tempus</a></p>
                                            <a href="#" class="cart-price"><strong>1</strong><sub>x</sub> <span>$190.00</span></a>
                                        </div>
                                    </div>
                                    <div class="mycart-item-edit">
                                        <a href="#" class="item-edit" title="edit">Edit Item</a>
                                        <a href="#" class="item-delete" title="delete">delete Item</a>
                                    </div>
                                </div>
                                <div class="total-calculate">
                                    <p><span>subtotal</span> $980.00<a class="topcart-check-btn" href="checkout.html">checkout</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- top-shoping-cart end -->
                </div>
            </div>
        </div>
    </div>
    <!-- header-middle end -->
    <!-- header-bottom start -->
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <!-- left-category-menu-area start -->
                <div class="col-xs-12 col-md-3">
                    <div class="left-category-menu-area">
                        <h3 class="cat-toggle-heading">分类</h3>
                        <div class="none-menu left-category-menu">
                            <ul>
                                <li>
                                    <a href="shop-grid.html">游戏和软件</a><p>广泛的游戏，如在线游戏</p>
                                    <div class="left-cat-dropdown left-cat-1">
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Desktops</a>
                                                <a href="shop-grid.html">Accessories</a>
                                                <a href="shop-grid.html">Car Electronics</a>
                                                <a href="shop-grid.html">Cell Phones</a>
                                                <a href="shop-grid.html">Desktops & Key</a>
                                            </div>
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Accessories</a>
                                                <a href="shop-grid.html">Accessories</a>
                                                <a href="shop-grid.html">Car Electronics</a>
                                                <a href="shop-grid.html">Cell Phones</a>
                                                <a href="shop-grid.html">Desktops & Key</a>
                                            </div>
                                        </div>
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Phones</a>
                                                <a href="shop-grid.html">Accessories</a>
                                                <a href="shop-grid.html">Car Electronics</a>
                                                <a href="shop-grid.html">Cell Phones</a>
                                                <a href="shop-grid.html">Desktops & Key</a>
                                            </div>
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Electronics</a>
                                                <a href="shop-grid.html">Accessories</a>
                                                <a href="shop-grid.html">Car Electronics</a>
                                                <a href="shop-grid.html">Cell Phones</a>
                                                <a href="shop-grid.html">Desktops & Key</a>
                                            </div>
                                        </div>
                                        <div class="single-cat-dropdown">
                                            <a href="shop-grid.html"><img src="img/add/11.jpg" alt="product image" /></a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="shop-grid.html">Laptop & Computer</a><p>Shop for multiple laptop styles includin</p>
                                    <div class="left-cat-dropdown left-cat-2">
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Bags</a>
                                                <a href="shop-grid.html">Video & Home</a>
                                                <a href="shop-grid.html">Home Surveillance</a>
                                                <a href="shop-grid.html">Cell Phones</a>
                                                <a href="shop-grid.html">Desktops & Key</a>
                                            </div>
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Telecommunications�?/a>
                                                    <a href="shop-grid.html">Lingerie</a>
                                                    <a href="shop-grid.html">Electronics</a>
                                                    <a href="shop-grid.html">Home Telephones</a>
                                                    <a href="shop-grid.html">Desktops & Key</a>
                                            </div>
                                        </div>
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Portable Audio</a>
                                                <a href="shop-grid.html">Communication</a>
                                                <a href="shop-grid.html">Handbag</a>
                                                <a href="shop-grid.html">Vintage Electronics</a>
                                                <a href="shop-grid.html">Desktops & Key</a>
                                            </div>
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Clothing</a>
                                                <a href="shop-grid.html">Funiture</a>
                                                <a href="shop-grid.html">Car Electronics</a>
                                                <a href="shop-grid.html">Lifestyle</a>
                                                <a href="shop-grid.html">Desktops & Key</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="shop-grid.html">Fashion & Dress</a><p>Offers a wide range of women's accessori</p>
                                    <div class="left-cat-dropdown left-cat-3">
                                        <div class="single-cat-dropdown">
                                            <a href="shop-grid.html"><img src="img/add/menuadd3.jpg" alt="product image" /></a>
                                        </div>
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Footwear Man</a>
                                                <a href="shop-grid.html">Gold Ring</a>
                                                <a href="shop-grid.html">Platinum Rings</a>
                                                <a href="shop-grid.html">Silver Ring</a>
                                                <a href="shop-grid.html">Tungsten Ring</a>
                                            </div>
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Footwear Womens</a>
                                                <a href="shop-grid.html">Bands Gold</a>
                                                <a href="shop-grid.html">Platinum Bands</a>
                                                <a href="shop-grid.html">Silver Bands</a>
                                                <a href="shop-grid.html">Tungsten Bands</a>
                                            </div>
                                        </div>
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Rings</a>
                                                <a href="shop-grid.html">Platinum Bracelets</a>
                                                <a href="shop-grid.html">Gold Ring</a>
                                                <a href="shop-grid.html">Silver Ring</a>
                                                <a href="shop-grid.html">Diamond Bracelets</a>
                                            </div>
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Bands</a>
                                                <a href="shop-grid.html">Platinum Necklaces </a>
                                                <a href="shop-grid.html">Gold Ring</a>
                                                <a href="shop-grid.html">Silver Ring</a>
                                                <a href="shop-grid.html">Sunglasses</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="shop-grid.html">Toys & Kids</a><p>Find toys and kids belongings for child</p>
                                    <div class="left-cat-dropdown left-cat-4">
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Rings</a>
                                                <a href="shop-grid.html">Babies  2 months</a>
                                                <a href="shop-grid.html">3+ Years</a>
                                                <a href="shop-grid.html">Little Kids  1-5 years</a>
                                                <a href="shop-grid.html">Big Kids  6-9 years</a>
                                            </div>
                                        </div>
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Dresses</a>
                                                <a href="shop-grid.html">Toys Just Landed</a>
                                                <a href="shop-grid.html">Shop All Toys</a>
                                                <a href="shop-grid.html">Clog sandals</a>
                                                <a href="shop-grid.html">Combat Boots</a>
                                            </div>
                                        </div>
                                        <div class="no-margin-r single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Accessories</a>
                                                <a href="shop-grid.html">Bootees Bags</a>
                                                <a href="shop-grid.html">Blazers</a>
                                                <a href="shop-grid.html">Jackets</a>
                                                <a href="shop-grid.html">Shoes</a>
                                            </div>
                                        </div>
                                        <div class="menu-bottom-img-add">
                                            <a href="shop-grid.html"><img src="img/add/menuadd.jpg" alt="product image" /></a>
                                            <a href="shop-grid.html"><img src="img/add/menuadd4.jpg" alt="product image" /></a>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="shop-grid.html">Sport & Healthy</a><p>Get your health, fitness and personal ca</p>
                                    <div class="left-cat-dropdown left-cat-5">
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Nightwear</a>
                                                <a href="shop-grid.html">Briefs</a>
                                                <a href="shop-grid.html">Camis</a>
                                                <a href="shop-grid.html">Cell Phones</a>
                                                <a href="shop-grid.html">Shapewear</a>
                                            </div>
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Shoes</a>
                                                <a href="shop-grid.html">Digital SLRs</a>
                                                <a href="shop-grid.html">Digital Software</a>
                                                <a href="shop-grid.html">TV & Video</a>
                                                <a href="shop-grid.html">Books</a>
                                            </div>
                                        </div>
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Handbags</a>
                                                <a href="shop-grid.html">Blazers</a>
                                                <a href="shop-grid.html">table</a>
                                                <a href="shop-grid.html">coats</a>
                                                <a href="shop-grid.html">kids</a>
                                            </div>
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Clothing</a>
                                                <a href="shop-grid.html">T-shirts</a>
                                                <a href="shop-grid.html">coats</a>
                                                <a href="shop-grid.html">Jackets</a>
                                                <a href="shop-grid.html">Desktops & Key</a>
                                            </div>
                                        </div>
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">jeans</a>
                                                <a href="shop-grid.html">Cell Phones</a>
                                                <a href="shop-grid.html">Desktops & Key</a>
                                                <a href="shop-grid.html">Accessories</a>
                                                <a href="shop-grid.html">Car Electronics</a>
                                            </div>
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html"><img src="img/add/menuadd2.png" alt="product image" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="extra_menu"><a href="shop-grid.html">Accessories</a>
                                    <div class="left-cat-dropdown left-cat-6">
                                        <div class="single-cat-dropdown">
                                            <div class="single-cat-item">
                                                <a href="shop-grid.html" class="single-cat-dropdown-title">Desktops</a>
                                                <a href="shop-grid.html">Accessories</a>
                                                <a href="shop-grid.html">Exercise & Fitness</a>
                                                <a href="shop-grid.html">Fitness Tech</a>
                                                <a href="shop-grid.html">Indoor Games</a>
                                                <a href="shop-grid.html">Play Centres</a>
                                                <a href="shop-grid.html">Pools & Slides</a>
                                                <a href="shop-grid.html">Skateboarding</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="more-cat">
                                <span class="more-view">More Categories</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- left-category-menu-area end -->
                <!-- mainmenu start -->
                <div class="col-xs-12 col-md-9">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="index.html">首页</a><i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li><a href="index-2.html">商城</a></li>
                                        <li><a href="index-3.html">用户中心</a></li>
                                        <li><a href="index-4.html">博客</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">关于我们</a></li>
                                <li><a href="shop-grid.html">商店</a></li>
                                <li class="active"><a href="blog.html">博客</a><i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a><i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li><a href="shop-grid.html">shop grid</a></li>
                                        <li><a href="shop-list.html">shop list</a></li>
                                        <li><a href="single-product.html">single product</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="contact-us.html">contact us</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- mainmenu end -->
            </div>
            <!-- mobile menu start -->
            <div class="row">
                <div class="col-sm-12 mobile-menu-area">
                    <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
                        <span class="mobile-menu-title">菜单</span>
                        <nav>
                            <ul>
                                <li><a href="index.html">首页</a>
                                    <ul>
                                        <li><a href="index-2.html">Home Version 2</a></li>
                                        <li><a href="index-3.html">Home Version 3</a></li>
                                        <li><a href="index-4.html">Home Version 4</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="shop-grid.html">Chair</a>
                                    <ul>
                                        <li><a href="shop-grid.html">Dresses</a>
                                            <ul>
                                                <li><a href="shop-grid.html">Dresses</a></li>
                                                <li><a href="shop-grid.html">Anime & Manga</a></li>
                                                <li><a href="shop-grid.html">Accessories</a></li>
                                                <li><a href="shop-grid.html">Shoes</a></li>
                                                <li><a href="shop-grid.html">Animals & Nature</a></li>
                                                <li><a href="shop-grid.html">Air conditioner</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.html">Anime & Manga</a>
                                            <ul>
                                                <li><a href="shop-grid.html">Dresses</a></li>
                                                <li><a href="shop-grid.html">Anime & Manga</a></li>
                                                <li><a href="shop-grid.html">Accessories</a></li>
                                                <li><a href="shop-grid.html">Shoes</a></li>
                                                <li><a href="shop-grid.html">Animals & Nature</a></li>
                                                <li><a href="shop-grid.html">Air conditioner</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.html">Accessories</a></li>
                                        <li><a href="shop-grid.html">Shoes</a></li>
                                        <li><a href="shop-grid.html">Animals & Nature</a></li>
                                        <li><a href="shop-grid.html">Air conditioner</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid.html">Lamp</a>
                                    <ul>
                                        <li><a href="shop-grid.html">Accessories</a>
                                            <ul>
                                                <li><a href="shop-grid.html">Dresses</a></li>
                                                <li><a href="shop-grid.html">Anime & Manga</a></li>
                                                <li><a href="shop-grid.html">Accessories</a></li>
                                                <li><a href="shop-grid.html">Shoes</a></li>
                                                <li><a href="shop-grid.html">Animals & Nature</a></li>
                                                <li><a href="shop-grid.html">Air conditioner</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.html">Shoes</a>
                                            <ul>
                                                <li><a href="shop-grid.html">Dresses</a></li>
                                                <li><a href="shop-grid.html">Anime & Manga</a></li>
                                                <li><a href="shop-grid.html">Accessories</a></li>
                                                <li><a href="shop-grid.html">Shoes</a></li>
                                                <li><a href="shop-grid.html">Animals & Nature</a></li>
                                                <li><a href="shop-grid.html">Air conditioner</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid.html">Animals & Nature</a></li>
                                        <li><a href="shop-grid.html">Dresses</a></li>
                                        <li><a href="shop-grid.html">Anime & Manga</a></li>
                                        <li><a href="shop-grid.html">Air conditioner</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid.html">Dresses</a>
                                    <ul>
                                        <li><a href="shop-grid.html">Animals & Nature</a></li>
                                        <li><a href="shop-grid.html">Air conditioner</a></li>
                                        <li><a href="shop-grid.html">Accessories</a></li>
                                        <li><a href="shop-grid.html">Shoes</a></li>
                                        <li><a href="shop-grid.html">Dresses</a></li>
                                        <li><a href="shop-grid.html">Anime & Manga</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-grid.html">Shoes</a>
                                    <ul>
                                        <li><a href="shop-grid.html">Dresses</a></li>
                                        <li><a href="shop-grid.html">Accessories</a></li>
                                        <li><a href="shop-grid.html">Shoes</a></li>
                                        <li><a href="shop-grid.html">Air conditioner</a></li>
                                        <li><a href="shop-grid.html">Anime & Manga</a></li>
                                        <li><a href="shop-grid.html">Animals & Nature</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    <ul>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="shop-grid.html">shop grid</a></li>
                                        <li><a href="shop-list.html">shop list</a></li>
                                        <li><a href="single-product.html">single product</a></li>
                                        <li><a href="cart.html">cart</a></li>
                                        <li><a href="checkout.html">checkout</a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">wishlist</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="single-blog.html">Single Blog</a></li>
                                        <li><a href="about-us.html">about us</a></li>
                                        <li><a href="contact-us.html">contact us</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- mobile menu end -->
        </div>
    </div>
    <!-- header-bottom end -->
</header>
<!-- header-area end -->
