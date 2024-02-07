<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        
<!--         ============== template ============== -->  
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="MkRqEzTGuoSx6LqJUm0OAKxSgNUYt26wTT7RMUZY">
    <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="assets/images/favicon.ico">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <meta name="theme-color" content="#e87316">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Surfside Media">
    <meta name="msapplication-TileImage" content="assets/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Surfside Media">
    <meta name="keywords" content="Surfside Media">
    <meta name="author" content="Surfside Media">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <title>SurfsideMedia</title>

    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('css/templateshams/vendors/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/templateshams/vendors/ion.rangeSlider.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/templateshams/vendors/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/templateshams/vendors/feather-icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/templateshams/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/templateshams/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/templateshams/vendors/slick/slick-theme.css')}}">
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('css/templateshams/demo4.css')}}">

    <style>
        header .profile-dropdown ul li {
            display: block;
            padding: 5px 20px;
            border-bottom: 1px solid #ddd;
            line-height: 35px;
        }

        header .profile-dropdown ul li:last-child {
            border-color: #fff;
        }

        header .profile-dropdown ul {
            padding: 10px 0;
            min-width: 250px;
        }

        .name-usr {
            /*   changement de ouly */
            background: rgb(130, 42, 42);
            /*   changement de ouly */

           /*  background: #e87316; */
            padding: 8px 12px;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            line-height: 24px;
        }

        .name-usr span {
            margin-right: 10px;
        }

        @media (max-width:600px) {
            .h-logo {
                max-width: 150px !important;
            }

            i.sidebar-bar {
                font-size: 22px;
            }

            .mobile-menu ul li a svg {
                width: 20px;
                height: 20px;
            }

            .mobile-menu ul li a span {
                margin-top: 0px;
                font-size: 12px;
            }

            .name-usr {
                padding: 5px 12px;
            }
        }

            /* login style */
            .h-logo {
                        max-width: 185px !important;
                    }

                    .f-logo {
                        max-width: 220px !important;
                    }

                    @media only screen and (max-width: 600px) {
                        .h-logo {
                            max-width: 110px !important;
                        }
                    }
            /* login style */        

    </style>
    
    
       <!--  ============== template ============== -->

      

        <!-- Fonts -->
<!--         <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
 -->
        <!-- Scripts -->
<!--         @vite(['resources/css/app.css', 'resources/js/app.js'])
 -->   
 </head>
    <body>
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="index.htm">
                                        <img src="assets/images/logo.png" class="h-logo img-fluid blur-up lazyload"
                                            alt="logo">
                                    </a>
                                </div>

                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li><a href="{{route('accueil')}}" class="nav-link menu-title">Accueil</a></li>
                                            <li><a href="{{route('categories')}}" class="nav-link menu-title">Shop</a></li>
                                            <li><a href="cart/list.html" class="nav-link menu-title">Cart</a></li>
                                            <li><a href="about-us.html" class="nav-link menu-title">About Us</a></li>
                                            <li><a href="contact-us.html" class="nav-link menu-title">Contact Us</a>
                                            </li>
                                            <li><a href="blog.html" class="nav-link menu-title">Blog</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li>
                                        <div class="search-box theme-bg-color">
                                            <i data-feather="search"></i>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="wishlist/list.html">
                                                <i data-feather="heart"></i>
                                                <span id="wishlist-count" class="label label-theme rounded-pill">
                                                    0
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="cart/list.html">
                                                <i data-feather="shopping-cart"></i>
                                                <span id="cart-count" class="label label-theme rounded-pill">
                                                    0
                                                </span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown">
                                        <div class="cart-media name-usr">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul>
                                                <li>
                                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline"> Log in</a>
                                                </li>
                                                <li>
                                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                                </li>

                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-full">
                                <form method="GET" class="search-full" action="http://localhost:8000/search">
                                    <div class="input-group">
                                        <span class="input-group-text">
                                            <i data-feather="search" class="font-light"></i>
                                        </span>
                                        <input type="text" name="q" class="form-control search-type"
                                            placeholder="Search here..">
                                        <span class="input-group-text close-search">
                                            <i data-feather="x" class="font-light"></i>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>


    @yield('content')

            
         

<!--  ============== template ============== -->
    <script src="{{asset('js/jstemplateshams/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/feather/feather.min.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/lazysizes.min.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/slick/slick.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/slick/slick-animation.min.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/slick/custom_slick.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/price-filter.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/ion.rangeSlider.min.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/filter.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/newsletter.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/cart_modal_resize.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/bootstrap/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/theme-setting.js')}}"></script>
    <script src="{{asset('js/jstemplateshams/script.js')}}"></script>
    <script>
        $(function () {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
    </script> 
     <!--  ============== template ============== -->  
    </body>
</html>
