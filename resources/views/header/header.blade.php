<header id="header" class="header header-style1">
    <div class="header-top clearfix">
        <div class="container">
            <div class="rows">
                <!-- SIDEBAR TOP MENU -->
                {{-- <div class="pull-left top1">
                    <div class="widget text-2 widget_text pull-left">
                        <div class="widget-inner">
                            <div class="textwidget">
                                <div class="call-us"><span>Call Us Now: </span>0123-444-666654123</div>
                            </div>
                        </div>
                    </div>

                    <div class="widget text-3 widget_text pull-left">
                        <div class="widget-inner">
                            <div class="textwidget">
                                <div id="lang_sel">
                                    <ul class="nav">
                                        <li>
                                            <a class="lang_sel_sel icl-en">
                                                <img class="iclflag" title="English" alt="en" src="images/icons/en.png" width="18" height="12" /> English
                                            </a>
                                            <ul>
                                                <li class="icl-en">
                                                    <a href="#">
                                                        <img class="iclflag" title="English" alt="en" src="images/icons/en.png" width="18" height="12" /> English
                                                    </a>
                                                </li>

                                                <li class="icl-ar">
                                                    <a href="#">
                                                        <img class="iclflag" title="Arabic" alt="ar" src="images/icons/ar.png" width="18" height="12" /> Arabic
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget widget_currency_converter pull-left">
                        <div class="widget-inner">
                            <ul class="currency_w">
                                <li>
                                    <a href="#" class="">USD</a>
                                    <ul class="currency_switcher">
                                        <li><a href="#" class="reset default active">USD</a></li>
                                        <li><a href="#">EUR</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}

                <div class="wrap-myacc pull-right">
                    @if (Session::get('user-login') == null)
                        {{-- Kalau Belum Sign In --}}
                        <div class="pull-left top2">
                            <div class="widget-1 widget-first widget nav_menu-2 widget_nav_menu">
                                <div class="widget-inner">
                                    <ul id="menu-checkout" class="menu">
                                        <li class="menu-checkout">
                                            <a href="{{ url('account/login') }}">
                                                <span>Login</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        {{-- Kalau Sudah Sign In --}}
                        <div class="sidebar-account pull-left">
                            <div class="account-title">Hello, {{ Session::get('user-login')->name }}</div>

                            <div id="my-account" class="my-account">
                                <div class="widget-1 widget-first widget nav_menu-2 widget_nav_menu">
                                    <div class="widget-inner">
                                        <ul id="menu-my-account" class="menu">
                                            <li class="menu-my-account">
                                                <a class="item-link" href="{{ url('account') }}">
                                                    <span class="menu-title">My Account</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ url('account/wallet') }}">
                                                    <span>Top Up </span>
                                                </a>
                                            </li>
                                            <li class="menu-my-account">
                                                <a class="item-link" href="{{ url('account/library') }}">
                                                    <span class="menu-title">Library</span>
                                                </a>
                                            </li>
                                            {{-- <li class="menu-cart">
                                                <a class="item-link" href="cart.html">
                                                    <span class="menu-title">Cart</span>
                                                </a>
                                            </li> --}}

                                            {{-- <li class="menu-checkout">
                                                <a class="item-link" href="checkout.html">
                                                    <span class="menu-title">Checkout</span>
                                                </a>
                                            </li>

                                            <li class="menu-wishlist">
                                                <a class="item-link" href="wishlist.html">
                                                    <span class="menu-title">Wishlist</span>
                                                </a>
                                            </li> --}}
                                            <li>
                                                <a href="{{ url('account/logout') }}">
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pull-left top2">
                            <div class="widget-1 widget-first widget nav_menu-2 widget_nav_menu">
                                <div class="widget-inner">
                                    <ul id="menu-checkout" class="menu">
                                        <li class="menu-checkout">
                                            <a class="item-link" href="{{ url('account/wallet') }}">
                                                <span class="menu-title">$ {{ number_format(Session::get('user-login')->money, 2) }}</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="header-mid clearfix">
        <div class="container">
            <div class="rows">
                <!-- LOGO -->
                <div class="etrostore-logo pull-left">
                    <a href="{{ url('/') }}">
                        <img src="{{asset('images/epicGameLogo.svg.png')}}" alt="Epic Game Store" style="width:50px;height:60px">
                    </a>
                </div>

                <div class="mid-header pull-right">
                    <div class="widget-1 widget-first widget sw_top-2 sw_top">
                        <div class="widget-inner">
                            <div class="top-form top-search">
                                <form class="topsearch-entry" action="{{ url('search') }}" method="get">
                                    <input type="text" value="" name="name" placeholder="Enter your keyword...">

                                    <button title="Search" type="submit" class="fa fa-search button-search-pro"></button>
                                </form>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="widget sw_top-3 sw_top pull-left">
                        <div class="widget-inner">
                            <div class="top-form top-form-minicart etrostore-minicart pull-right">
                                <div class="top-minicart-icon pull-right">
                                    <i class="fa fa-shopping-cart"></i>
                                    <a class="cart-contents" href="cart.html" title="View your shopping cart">
                                        <span class="minicart-number">2</span>
                                    </a>
                                </div>

                                <div class="wrapp-minicart">
                                    <div class="minicart-padding">
                                        <div class="number-item">
                                            There are <span>items</span> in your cart
                                        </div>

                                        <ul class="minicart-content">
                                            <li>
                                                <a href="simple_product.html" class="product-image">
                                                    <img 	width="100" height="100" src="images/1903/45-150x150.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt=""
                                                            srcset="images/1903/45-150x150.jpg 150w, images/1903/45-300x300.jpg 300w, images/1903/45-180x180.jpg 180w, images/1903/45.jpg 600w"
                                                            sizes="(max-width: 100px) 100vw, 100px" />
                                                </a>

                                                <div class="detail-item">
                                                    <div class="product-details">
                                                        <h4>
                                                            <a class="title-item" href="simple_product.html">Veniam Dolore</a>
                                                        </h4>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $190.00
                                                            </span>

                                                            <div class="qty">
                                                                <span class="qty-number">1</span>
                                                            </div>
                                                        </div>

                                                        <div class="product-action clearfix">
                                                            <a href="#" class="btn-remove" title="Remove this item">
                                                                <span class="fa fa-trash-o"></span>
                                                            </a>

                                                            <a class="btn-edit" href="cart.html" title="View your shopping cart">
                                                                <span class="fa fa-pencil"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li>
                                                <a href="simple_product.html" class="product-image">
                                                    <img 	width="100" height="100" src="images/1903/22-150x150.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt=""
                                                            srcset="images/1903/22-150x150.jpg 150w, images/1903/22-300x300.jpg 300w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w"
                                                            sizes="(max-width: 100px) 100vw, 100px" />
                                                </a>

                                                <div class="detail-item">
                                                    <div class="product-details">
                                                        <h4>
                                                            <a class="title-item" href="simple_product.html">Cleaner with bag</a>
                                                        </h4>

                                                        <div class="product-price">
                                                            <span class="price">
                                                                $350.00
                                                            </span>

                                                            <div class="qty">
                                                                <span class="qty-number">1</span>
                                                            </div>
                                                        </div>

                                                        <div class="product-action clearfix">
                                                            <a href="#" class="btn-remove" title="Remove this item">
                                                                <span class="fa fa-trash-o"></span>
                                                            </a>

                                                            <a class="btn-edit" href="cart.html" title="View your shopping cart">
                                                                <span class="fa fa-pencil"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                        <div class="cart-checkout">
                                            <div class="price-total">
                                                <span class="label-price-total">Total</span>

                                                <span class="price-total-w">
                                                    <span class="price">
                                                        $540.00
                                                    </span>
                                                </span>
                                            </div>

                                            <div class="cart-links clearfix">
                                                <div class="cart-link">
                                                    <a href="cart.html" title="Cart">View Cart</a>
                                                </div>

                                                <div class="checkout-link">
                                                    <a href="checkout.html" title="Check Out">Check Out</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget nav_menu-3 widget_nav_menu pull-left">
                        <div class="widget-inner">
                            <ul id="menu-wishlist" class="menu">
                                <li class="menu-wishlist">
                                    <a class="item-link" href="wishlist.html">
                                        <span class="menu-title">Wishlist</span>
                                    </a>
                                </li>

                                <li class="yith-woocompare-open menu-compare">
                                    <a class="item-link compare" href="#">
                                        <span class="menu-title">Compare</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="header-bottom clearfix">
        <div class="container">
            <div class="rows">
                <!-- Primary navbar -->
                <div id="main-menu" class="main-menu">
                    <nav id="primary-menu" class="primary-menu">
                        <div class="navbar-inner navbar-inverse">
                            <div class="resmenu-container">
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#ResMenuprimary_menu">
                                    <span class="sr-only">Categories</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <div id="ResMenuprimary_menu" class="collapse menu-responsive-wrapper">
                                    <ul id="menu-primary-menu" class="etrostore_resmenu">
                                        <li class="res-dropdown menu-home">
                                            <a class="item-link dropdown-toggle" href="{{ url('/') }}">Home</a>
                                            <span class="show-dropdown"></span>

                                            <ul class="dropdown-resmenu">
                                                <li class="res-dropdown menu-home-pages">
                                                    <a class="item-link dropdown-toggle" href="#">Home Pages</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-home-page-1">
                                                            <a href="{{ url('/') }}">Home Page 1</a>
                                                        </li>

                                                        <li class="menu-home-page-2">
                                                            <a href="home_page_2.html">Home Page 2</a>
                                                        </li>

                                                        <li class="menu-home-page-3">
                                                            <a href="home_page_3.html">Home Page 3</a>
                                                        </li>

                                                        <li class="menu-home-page-4">
                                                            <a href="home_page_4.html">Home Page 4</a>
                                                        </li>

                                                        <li class="menu-home-page-5">
                                                            <a href="home_page_5.html">Home Page 5</a>
                                                        </li>

                                                        <li class="menu-home-page-boxed">
                                                            <a href="home_page_1_boxed.html">Home Page Boxed</a>
                                                        </li>

                                                        <li class="menu-home-page-full">
                                                            <a href="home_page_1_full.html">Home Page Full</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-color-styles">
                                                    <a class="item-link dropdown-toggle" href="#">Color Styles</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-default">
                                                            <a data-theme="default">Default</a>
                                                        </li>

                                                        <li class="menu-orange">
                                                            <a data-theme="orange">Orange</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-advanced">
                                                    <a class="item-link dropdown-toggle" href="#">Advanced</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-default">
                                                            <a data-advanced="ltr">Left to right</a>
                                                        </li>

                                                        <li class="menu-orange">
                                                            <a data-advanced="rtl">Right to left</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="active res-dropdown menu-shop">
                                            <a class="item-link dropdown-toggle" href="#">Shop</a>
                                            <span class="show-dropdown"></span>

                                            <ul class="dropdown-resmenu">
                                                <li class="res-dropdown menu-shop-pages">
                                                    <a class="item-link dropdown-toggle" href="#">Shop Pages</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-shop">
                                                            <a href="shop.html">Shop</a>
                                                        </li>

                                                        <li class="menu-cart">
                                                            <a href="cart.html">Cart</a>
                                                        </li>

                                                        <li class="menu-checkout">
                                                            <a href="checkout.html">Checkout</a>
                                                        </li>

                                                        <li class="menu-my-account">
                                                            <a href="my_account.html">My Account</a>
                                                        </li>

                                                        <li class="menu-wishlist">
                                                            <a href="wishlist.html">Wishlist</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-shop-layouts">
                                                    <a class="item-link dropdown-toggle" href="#">Shop Layouts</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-right-sidebar-grid">
                                                            <a href="shop_right_sidebar.html">Right Sidebar Grid</a>
                                                        </li>

                                                        <li class="menu-left-sidebar-grid">
                                                            <a href="shop_left_sidebar.html">Left Sidebar Grid</a>
                                                        </li>

                                                        <li class="menu-full-width-grid">
                                                            <a href="shop_full_width.html">Full Width Grid</a>
                                                        </li>

                                                        <li class="menu-2-columns-grid">
                                                            <a href="shop_two_columns.html">2 Columns Grid</a>
                                                        </li>

                                                        <li class="menu-3-columns-grid">
                                                            <a href="shop_three_columns.html">3 Columns Grid</a>
                                                        </li>

                                                        <li class="menu-4-columns-grid">
                                                            <a href="shop_four_columns.html">4 Columns Grid</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="active res-dropdown menu-product-types">
                                                    <a class="item-link dropdown-toggle" href="#">Product Types</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="active menu-simple-product">
                                                            <a href="simple_product.html">Simple Product</a>
                                                        </li>

                                                        <li class="menu-variable-product">
                                                            <a href="variable_product.html">Variable Product</a>
                                                        </li>

                                                        <li class="menu-group-product">
                                                            <a href="group_product.html">Group Product</a>
                                                        </li>

                                                        <li class="menu-externalaffiliate-product">
                                                            <a href="externalaffiliate_product.html">External/Affiliate Product</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-product-layouts">
                                                    <a class="item-link dropdown-toggle" href="#">Product Layouts</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-full-width">
                                                            <a href="sidebar_product_full.html">Full width</a>
                                                        </li>

                                                        <li class="menu-left-sidebar">
                                                            <a href="sidebar_product_left.html">Left Sidebar</a>
                                                        </li>

                                                        <li class="menu-right-sidebar">
                                                            <a href="sidebar_product_right.html">Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="res-dropdown menu-smartphones-tablet">
                                            <a class="item-link dropdown-toggle" href="#">Smartphones & Tablet</a>
                                            <span class="show-dropdown"></span>

                                            <ul class="dropdown-resmenu">
                                                <li class="res-dropdown menu-electronics">
                                                    <a class="item-link dropdown-toggle" href="#">Electronics</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-leds">
                                                            <a href="#">Leds</a>
                                                        </li>

                                                        <li class="menu-laptop-desktop-accessories">
                                                            <a href="#">Laptop & Desktop Accessories</a>
                                                        </li>

                                                        <li class="menu-storage-external-drives">
                                                            <a href="#">Storage & External Drives</a>
                                                        </li>

                                                        <li class="menu-networking-wireless">
                                                            <a href="#">Networking & Wireless</a>
                                                        </li>

                                                        <li class="menu-motherboards-cpus-psus">
                                                            <a href="#">Motherboards, CPUs & PSUs</a>
                                                        </li>

                                                        <li class="menu-webcams">
                                                            <a href="#">Webcams</a>
                                                        </li>

                                                        <li class="menu-gaming">
                                                            <a href="#">Gaming</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-smartphone">
                                                    <a class="item-link dropdown-toggle" href="#">Smartphone</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-smartphones">
                                                            <a href="#">Smartphones</a>
                                                        </li>

                                                        <li class="menu-mobile-phones">
                                                            <a href="#">Mobile Phones</a>
                                                        </li>

                                                        <li class="menu-smart-watches-accessories">
                                                            <a href="#">Smart Watches & Accessories</a>
                                                        </li>

                                                        <li class="menu-mobile-accessories">
                                                            <a href="#">Mobile Accessories</a>
                                                        </li>

                                                        <li class="menu-cases-covers">
                                                            <a href="#">Cases & Covers</a>
                                                        </li>

                                                        <li class="menu-power-banks">
                                                            <a href="#">Power Banks</a>
                                                        </li>

                                                        <li class="menu-memory-cards">
                                                            <a href="#">Memory Cards</a>
                                                        </li>

                                                        <li class="menu-headphonesheadsets">
                                                            <a href="#">Headphones/Headsets</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-tablet">
                                                    <a class="item-link dropdown-toggle" href="#">Tablet</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-tablets">
                                                            <a href="#">Tablets</a>
                                                        </li>

                                                        <li class="menu-tablet-accessories">
                                                            <a href="#">Tablet Accessories</a>
                                                        </li>

                                                        <li class="menu-cases-covers">
                                                            <a href="#">Cases & Covers</a>
                                                        </li>

                                                        <li class="menu-power-banks">
                                                            <a href="#">Power Banks</a>
                                                        </li>

                                                        <li class="menu-memory-cards">
                                                            <a href="#">Memory Cards</a>
                                                        </li>

                                                        <li class="menu-headphonesheadsets">
                                                            <a href="#">Headphones/Headsets</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-computer">
                                                    <a class="item-link dropdown-toggle" href="#">Computer</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-computers">
                                                            <a href="#">Computers</a>
                                                        </li>

                                                        <li class="menu-macbooks-imacs">
                                                            <a href="#">Macbooks & iMacs</a>
                                                        </li>

                                                        <li class="menu-computers-desktops">
                                                            <a href="#">Computers & Desktops</a>
                                                        </li>

                                                        <li class="menu-printers-scanners-faxs">
                                                            <a href="#">Printers, Scanners, & Faxs</a>
                                                        </li>

                                                        <li class="menu-laptop-desktop-accessories">
                                                            <a href="#">Laptop & Desktop Accessories</a>
                                                        </li>

                                                        <li class="menu-storage-external-drives">
                                                            <a href="#">Storage & External Drives</a>
                                                        </li>

                                                        <li class="menu-networking-wireless">
                                                            <a href="#">Networking & Wireless</a>
                                                        </li>

                                                        <li class="menu-motherboards-cpus-psus">
                                                            <a href="#">Motherboards, CPUs & PSUs</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="res-dropdown menu-blog">
                                            <a class="item-link dropdown-toggle" href="#">Blog</a>
                                            <span class="show-dropdown"></span>

                                            <ul class="dropdown-resmenu">
                                                <li class="res-dropdown menu-blog-layouts">
                                                    <a class="item-link dropdown-toggle" href="#">Blog Layouts</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-left-sidebar-default">
                                                            <a href="blog_left_sidebar.html">Left Sidebar Default</a>
                                                        </li>

                                                        <li class="menu-left-sidebar-list">
                                                            <a href="blog_left_sidebar_list.html">Left Sidebar List</a>
                                                        </li>

                                                        <li class="menu-right-sidebar-list">
                                                            <a href="blog_right_sidebar_list.html">Right Sidebar List</a>
                                                        </li>

                                                        <li class="menu-full-width-list">
                                                            <a href="blog_full_width_list.html">Full width List</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-blog-layouts-2">
                                                    <a class="item-link dropdown-toggle" href="#">Blog Layouts 2</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-2-columns-grid">
                                                            <a href="blog_two_columns.html">2 Columns Grid</a>
                                                        </li>

                                                        <li class="menu-3-columns-grid">
                                                            <a href="blog_three_columns.html">3 Columns Grid</a>
                                                        </li>

                                                        <li class="menu-4-columns-grid">
                                                            <a href="blog_four_columns.html">4 Columns Grid</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-post-formats">
                                                    <a class="item-link dropdown-toggle" href="#">Post Formats</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-post-format-image">
                                                            <a href="post_format_image.html">Post Format : Image</a>
                                                        </li>

                                                        <li class="menu-post-format-audio">
                                                            <a href="post_format_audio.html">Post Format : Audio</a>
                                                        </li>

                                                        <li class="menu-post-format-gallery">
                                                            <a href="post_format_gallery.html">Post Format : Gallery</a>
                                                        </li>

                                                        <li class="menu-post-format-video">
                                                            <a href="post_format_video.html">Post Format : Video</a>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="res-dropdown menu-post-layouts">
                                                    <a class="item-link dropdown-toggle" href="#">Post Layouts</a>
                                                    <span class="show-dropdown"></span>

                                                    <ul class="dropdown-resmenu">
                                                        <li class="menu-full-width">
                                                            <a href="post_layout_full_width.html">Full Width</a>
                                                        </li>

                                                        <li class="menu-left-sidebar">
                                                            <a href="post_layout_left_sidebar.html">Left Sidebar</a>
                                                        </li>

                                                        <li class="menu-right-sidebar">
                                                            <a href="post_layout_right_sidebar.html">Right Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-deals">
                                            <a class="item-link" href="deals.html">Deals</a>
                                        </li>

                                        <li class="res-dropdown menu-portfolios">
                                            <a class="item-link dropdown-toggle" href="#">Portfolios</a>
                                            <span class="show-dropdown"></span>

                                            <ul class="dropdown-resmenu">
                                                <li class="menu-portfolio-2-columns">
                                                    <a href="portfolios_two_columns.html">Portfolio 2 Columns</a>
                                                </li>

                                                <li class="menu-portfolio-3-columns">
                                                    <a href="portfolios_three_columns.html">Portfolio 3 Columns</a>
                                                </li>

                                                <li class="menu-portfolio-4-columns">
                                                    <a href="portfolios_four_columns.html">Portfolio 4 Columns</a>
                                                </li>

                                                <li class="menu-portfolio-masonry">
                                                    <a href="portfolios_masonry.html">Portfolio Masonry</a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="menu-about-us">
                                            <a class="item-link" href="about_us.html">About Us</a>
                                        </li>

                                        <li class="menu-contact-us">
                                            <a class="item-link" href="contact_us.html">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <ul id="menu-primary-menu-1" class="nav nav-pills nav-mega etrostore-mega etrostore-menures">
                                <li class="dropdown menu-home etrostore-mega-menu level1">
                                    <a href="{{ url('/') }}" class="item-link dropdown-toggle">
                                        <span class="have-title">
                                            <span class="menu-color" data-color="#f034ca"></span>
                                            <span class="menu-title">Store</span>
                                        </span>
                                    </a>

                                    <ul class="dropdown-menu nav-level1 column-3">
                                        <li class="dropdown-submenu column-3 menu-home-pages">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Home Pages</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-home-page-1">
                                                    <a href="{{ url('/') }}">
                                                        <span class="have-title">
                                                            <span class="menu-title">Home Page 1</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-home-page-2">
                                                    <a href="home_page_2.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Home Page 2</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-home-page-3">
                                                    <a href="home_page_3.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Home Page 3</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-home-page-4">
                                                    <a href="home_page_4.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Home Page 4</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-home-page-5">
                                                    <a href="home_page_5.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Home Page 5</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-home-page-boxed">
                                                    <a href="home_page_1_boxed.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Home Page Boxed</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-home-page-full">
                                                    <a href="home_page_1_full.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Home Page Full</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-3 menu-color-styles">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Color Styles</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-default">
                                                    <a data-theme="default">
                                                        <span class="have-title">
                                                            <span class="menu-title">Default</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-orange">
                                                    <a data-theme="orange">
                                                        <span class="have-title">
                                                            <span class="menu-title">Orange</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-3 menu-advanced">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Advanced</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-default">
                                                    <a data-advanced="ltr">
                                                        <span class="have-title">
                                                            <span class="menu-title">Left to right</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-orange">
                                                    <a data-advanced="rtl">
                                                        <span class="have-title">
                                                            <span class="menu-title">Right to left</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="active dropdown menu-shop etrostore-mega-menu level1 etrostore-menu-img">
                                    <a href="#" class="item-link dropdown-toggle">
                                        <span class="have-title">
                                            <span class="menu-color" data-color="#f03442"></span>

                                            <span class="menu-img">
                                                <img src="{{asset('images/1903/icon-new-1.png')}}" alt="Menu Image" />
                                            </span>

                                            <span class="menu-title">Shop</span>
                                        </span>
                                    </a>

                                    <ul class="dropdown-menu nav-level1 column-4">
                                        <li class="dropdown-submenu column-4 menu-shop-pages">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Shop Pages</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-shop">
                                                    <a href="shop.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Shop</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-cart">
                                                    <a href="cart.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Cart</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-checkout">
                                                    <a href="checkout.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Checkout</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-my-account">
                                                    <a href="my_account.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">My Account</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-wishlist">
                                                    <a href="wishlist.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Wishlist</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-4 menu-shop-layouts">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Shop Layouts</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-right-sidebar-grid">
                                                    <a href="shop_right_sidebar.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Right Sidebar Grid</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-left-sidebar-grid">
                                                    <a href="shop_left_sidebar.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Left Sidebar Grid</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-full-width-grid">
                                                    <a href="shop_full_width.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Full Width Grid</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-2-columns-grid">
                                                    <a href="shop_two_columns.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">2 Columns Grid</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-3-columns-grid">
                                                    <a href="shop_three_columns.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">3 Columns Grid</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-4-columns-grid">
                                                    <a href="shop_four_columns.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">4 Columns Grid</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="active dropdown-submenu column-4 menu-product-types">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Product Types</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="active menu-simple-product">
                                                    <a href="simple_product.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Simple Product</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-variable-product">
                                                    <a href="variable_product.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Variable Product</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-group-product">
                                                    <a href="group_product.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Group Product</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-externalaffiliate-product">
                                                    <a href="externalaffiliate_product.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">External/Affiliate Product</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-4 menu-product-layouts">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Product Layouts</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-full-width">
                                                    <a href="sidebar_product_full.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Full width</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-left-sidebar">
                                                    <a href="sidebar_product_left.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Left Sidebar</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-right-sidebar">
                                                    <a href="sidebar_product_right.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Right Sidebar</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown menu-smartphones-tablet etrostore-mega-menu level1">
                                    <a href="#" class="item-link dropdown-toggle">
                                        <span class="have-title">
                                            <span class="menu-color" data-color="#13528c"></span>

                                            <span class="menu-title">Smartphones & Tablet</span>
                                        </span>
                                    </a>

                                    <ul class="dropdown-menu nav-level1 column-4">
                                        <li class="dropdown-submenu column-4 menu-electronics etrostore-menu-img">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-img">
                                                        <img src="images/1903/menu-bn3.jpg" alt="Menu Image" />
                                                    </span>

                                                    <span class="menu-title">Electronics</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-leds">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Leds</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-laptop-desktop-accessories">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Laptop & Desktop Accessories</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-storage-external-drives">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Storage & External Drives</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-networking-wireless">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Networking & Wireless</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-motherboards-cpus-psus">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Motherboards, CPUs & PSUs</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-webcams">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Webcams</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-gaming">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Gaming</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-4 menu-smartphone etrostore-menu-img">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-img">
                                                        <img src="images/1903/menu-bn4.jpg" alt="Menu Image" />
                                                    </span>

                                                    <span class="menu-title">Smartphone</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-smartphones">
                                                    <a href="#">
                                                        <span class="have-title">
                                                        <span class="menu-title">Smartphones</span></span></a></li>

                                                <li class="menu-mobile-phones">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Mobile Phones</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-smart-watches-accessories">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Smart Watches & Accessories</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-mobile-accessories">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Mobile Accessories</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-cases-covers">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Cases & Covers</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-power-banks">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Power Banks</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-memory-cards">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Memory Cards</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-headphonesheadsets">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Headphones/Headsets</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-4 menu-tablet etrostore-menu-img">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-img">
                                                        <img src="images/1903/menu-bn5.jpg" alt="Menu Image" />
                                                    </span>

                                                    <span class="menu-title">Tablet</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-tablets">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Tablets</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-tablet-accessories">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Tablet Accessories</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-cases-covers">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Cases & Covers</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-power-banks">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Power Banks</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-memory-cards">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Memory Cards</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-headphonesheadsets">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Headphones/Headsets</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-4 menu-computer etrostore-menu-img">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-img">
                                                        <img src="images/1903/menu-bn6.jpg" alt="Menu Image" />
                                                    </span>

                                                    <span class="menu-title">Computer</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-computers">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Computers</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-macbooks-imacs">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Macbooks & iMacs</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-computers-desktops">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Computers & Desktops</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-printers-scanners-faxs">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Printers, Scanners, & Faxs</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-laptop-desktop-accessories">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Laptop & Desktop Accessories</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-storage-external-drives">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Storage & External Drives</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-networking-wireless">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Networking & Wireless</span>
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="menu-motherboards-cpus-psus">
                                                    <a href="#">
                                                        <span class="have-title">
                                                            <span class="menu-title">Motherboards, CPUs & PSUs</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown menu-blog etrostore-mega-menu level1">
                                    <a href="#" class="item-link dropdown-toggle">
                                        <span class="have-title">
                                            <span class="menu-title">Blog</span>
                                        </span>
                                    </a>

                                    <ul class="dropdown-menu nav-level1 column-4">
                                        <li class="dropdown-submenu column-4 menu-blog-layouts">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Blog Layouts</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-left-sidebar-default">
                                                    <a href="blog_left_sidebar.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Left Sidebar Default</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-left-sidebar-list">
                                                    <a href="blog_left_sidebar_list.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Left Sidebar List</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-right-sidebar-list">
                                                    <a href="blog_right_sidebar_list.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Right Sidebar List</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-full-width-list">
                                                    <a href="blog_full_width_list.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Full width List</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-4 menu-blog-layouts-2">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Blog Layouts 2</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-2-columns-grid">
                                                    <a href="blog_two_columns.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">2 Columns Grid</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-3-columns-grid">
                                                    <a href="blog_three_columns.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">3 Columns Grid</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-4-columns-grid">
                                                    <a href="blog_four_columns.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">4 Columns Grid</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-4 menu-post-formats">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Post Formats</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-post-format-image">
                                                    <a href="post_format_image.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Post Format : Image</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-post-format-audio">
                                                    <a href="post_format_audio.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Post Format : Audio</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-post-format-gallery">
                                                    <a href="post_format_gallery.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Post Format : Gallery</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-post-format-video">
                                                    <a href="post_format_video.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Post Format : Video</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="dropdown-submenu column-4 menu-post-layouts">
                                            <a href="#">
                                                <span class="have-title">
                                                    <span class="menu-title">Post Layouts</span>
                                                </span>
                                            </a>

                                            <ul class="dropdown-sub nav-level2">
                                                <li class="menu-full-width">
                                                    <a href="post_layout_full_width.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Full Width</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-left-sidebar">
                                                    <a href="post_layout_left_sidebar.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Left Sidebar</span>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li class="menu-right-sidebar">
                                                    <a href="post_layout_right_sidebar.html">
                                                        <span class="have-title">
                                                            <span class="menu-title">Right Sidebar</span>
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>

                                        <li class="image-fix column-4 menu-image etrostore-menu-img">
                                            <a href="#">
                                                <span class="">
                                                    <span class="menu-img">
                                                        <img src="images/1903/menu-bn1.jpg" alt="Menu Image" />
                                                    </span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="image-fix column-4 menu-image etrostore-menu-img">
                                            <a href="#">
                                                <span class="">
                                                    <span class="menu-img">
                                                        <img src="{{asset('images/1903/menu-bn2.jpg')}}" alt="Menu Image" />
                                                    </span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-deals etrostore-menu-custom level1 etrostore-menu-img">
                                    <a href="deals.html" class="item-link">
                                        <span class="have-title">
                                            <span class="menu-img">
                                                <img src="{{asset('images/1903/icon-hot.png')}}" alt="Menu Image" />
                                            </span>

                                            <span class="menu-title">Deals</span>
                                        </span>
                                    </a>
                                </li>

                                <li class="dropdown menu-portfolios etrostore-menu-custom level1">
                                    <a href="#" class="item-link dropdown-toggle">
                                        <span class="have-title">
                                            <span class="menu-title">Portfolios</span>
                                        </span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="column-1 menu-portfolio-2-columns">
                                            <a href="portfolios_two_columns.html">
                                                <span class="have-title">
                                                    <span class="menu-title">Portfolio 2 Columns</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="column-1 menu-portfolio-3-columns">
                                            <a href="portfolios_three_columns.html">
                                                <span class="have-title">
                                                    <span class="menu-title">Portfolio 3 Columns</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="column-1 menu-portfolio-4-columns">
                                            <a href="portfolios_four_columns.html">
                                                <span class="have-title">
                                                    <span class="menu-title">Portfolio 4 Columns</span>
                                                </span>
                                            </a>
                                        </li>

                                        <li class="column-1 menu-portfolio-masonry">
                                            <a href="portfolios_masonry.html">
                                                <span class="have-title">
                                                    <span class="menu-title">Portfolio Masonry</span>
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="menu-about-us etrostore-menu-custom level1">
                                    <a href="about_us.html" class="item-link">
                                        <span class="have-title">
                                            <span class="menu-title">About Us</span>
                                        </span>
                                    </a>

                                </li>

                                <li class="menu-contact-us etrostore-menu-custom level1">
                                    <a href="contact_us.html" class="item-link">
                                        <span class="have-title">
                                            <span class="menu-title">Contact Us</span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- /Primary navbar -->

                <div class="top-form top-form-minicart etrostore-minicart pull-right">
                    <div class="top-minicart-icon pull-right">
                        <i class="fa fa-shopping-cart"></i>
                        <a class="cart-contents" href="cart.html" title="View your shopping cart">
                            <span class="minicart-number">2</span>
                        </a>
                    </div>

                    <div class="wrapp-minicart">
                        <div class="minicart-padding">
                            <div class="number-item">
                                There are <span>items</span> in your cart
                            </div>

                            <ul class="minicart-content">
                                <li>
                                    <a href="simple_product.html" class="product-image">
                                        <img 	width="100" height="100" src="images/1903/45-150x150.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt=""
                                                srcset="images/1903/45-150x150.jpg 150w, images/1903/45-300x300.jpg 300w, images/1903/45-180x180.jpg 180w, images/1903/45.jpg 600w"
                                                sizes="(max-width: 100px) 100vw, 100px" />
                                    </a>

                                    <div class="detail-item">
                                        <div class="product-details">
                                            <h4>
                                                <a class="title-item" href="simple_product.html">Veniam Dolore</a>
                                            </h4>

                                            <div class="product-price">
                                                <span class="price">
                                                    $190.00
                                                </span>

                                                <div class="qty">
                                                    <span class="qty-number">1</span>
                                                </div>
                                            </div>

                                            <div class="product-action clearfix">
                                                <a href="#" class="btn-remove" title="Remove this item">
                                                    <span class="fa fa-trash-o"></span>
                                                </a>

                                                <a class="btn-edit" href="cart.html" title="View your shopping cart">
                                                    <span class="fa fa-pencil"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <a href="simple_product.html" class="product-image">
                                        <img	 width="100" height="100" src="images/1903/22-150x150.jpg" class="attachment-100x100 size-100x100 wp-post-image" alt=""
                                                srcset="images/1903/22-150x150.jpg 150w, images/1903/22-300x300.jpg 300w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w"
                                                sizes="(max-width: 100px) 100vw, 100px" />
                                    </a>

                                    <div class="detail-item">
                                        <div class="product-details">
                                            <h4>
                                                <a class="title-item" href="simple_product.html">Cleaner with bag</a>
                                            </h4>

                                            <div class="product-price">
                                                <span class="price">
                                                    $350.00
                                                </span>

                                                <div class="qty">
                                                    <span class="qty-number">1</span>
                                                </div>
                                            </div>

                                            <div class="product-action clearfix">
                                                <a href="#" class="btn-remove" title="Remove this item">
                                                    <span class="fa fa-trash-o"></span>
                                                </a>

                                                <a class="btn-edit" href="cart.html" title="View your shopping cart">
                                                    <span class="fa fa-pencil"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="cart-checkout">
                                <div class="price-total">
                                    <span class="label-price-total">Total</span>

                                    <span class="price-total-w">
                                        <span class="price">
                                            $540.00
                                        </span>
                                    </span>
                                </div>

                                <div class="cart-links clearfix">
                                    <div class="cart-link">
                                        <a href="cart.html" title="Cart">View Cart</a>
                                    </div>

                                    <div class="checkout-link">
                                        <a href="checkout.html" title="Check Out">Check Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mid-header pull-right">
                    <div class="widget sw_top">
                        <span class="stick-sr">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </span>

                        <div class="top-form top-search">
                            <div class="topsearch-entry">
                                    <input type="text" value="" name="s" class="search-query" placeholder="Keyword here..." />
                                    <button type="button" class="button-search-pro">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</header>
