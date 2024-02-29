<header class="header-style-2" id="home" style="background-color:black">
    <div class="main-header navbar-searchbar" >
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="menu-left">
                            <div class="brand-logo">
                                <a href="index.htm">
                                    <img src="/frontend/assets/images/logo.png" class="h-logo img-fluid blur-up lazyload"
                                         alt="logo">
                                </a>
                            </div>

                        </div>
                        <nav>
                            <div class="main-navbar">
                                <div id="mainnav">
                                    <div class="toggle-nav" >
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
                                        <li><a href="{{route('shop')}}" class="nav-link menu-title">Boutique</a></li>
                                        <li><a href="#" class="nav-link menu-title">A propos de nous</a></li>
                                        <li><a href="{{route('contact')}}" class="nav-link menu-title">Nous contacter</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="menu-right">
                            <ul>
                                <li class="onhover-dropdown wislist-dropdown">
                                    <div class="cart-media">
                                        <a href="{{route('wishlist')}}">
                                        <i class="icon fa-regular fa-heart"></i>
                                            <span id="wishlist-count" class="label label-theme rounded-pill">
                                                    0
                                                </span>
                                        </a>
                                    </div>
                                </li>
                             
                                <li class="onhover-dropdown wislist-dropdown">
                                    <div class="cart-media">
                                        <a href="{{route('panier')}}">
                                        <i class=" icon fa-solid fa-cart-shopping"></i>
                                            <span id="cart-count" class="label label-theme rounded-pill">
                                                    {{Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->content()->count()}}
                                                </span>
                                        </a>
                                    </div>
                                </li>
                              
                                <li class="onhover-dropdown">
                                    <div class="cart-media ">
                                    <i class=" icon fa-regular fa-user"></i>
                                    </div>
                                    <div class="onhover-div profile-dropdown">
                                            <ul>
                                                    @auth
                                                    <li>
                                                        <a onclick="event.preventDefault();document.getElementById('fo').submit()" href="{{route('logout')}}" class="d-block">Déconnection</a>
                                                        <form id="fo" action="{{route('logout')}}" method="post">
                                                            @method('post')
                                                            @csrf
                                                        </form>
                                                    </li>
                                                    @else
                                                    <li>
                                                        <a href="{{route('login')}}" class="d-block">Connecter</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('register')}}" class="d-block">S'inscrire</a>
                                                    </li>

                                                    @endauth
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
<div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
 </div>