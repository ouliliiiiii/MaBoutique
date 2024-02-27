@extends('web.layouts.app')

@section('content')
   <!--  <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="demo3.php" class="active">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.php">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div> -->
    <section class="pt-0 poster-section">
        <div class="poster-image slider-for custome-arrow classic-arrow" >
            <div>
                <img src="/photo/orgie3.png" style="max-height: 650px;" class="img-fluid blur-up lazyload" alt="">
            </div>
            <div>
                <img src="/frontend/assets/images/furniture-images/poster/2.png" class="img-fluid blur-up lazyload" alt="">
            </div>
            <div>
                <img src="/frontend/assets/images/furniture-images/poster/3.png" class="img-fluid blur-up lazyload" alt="">
            </div>
        </div>
        <div class="slider-nav image-show">
           <!--  <div>
                <div class="poster-img">
              -->       <!-- <img src="/photo/orgie3.png" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div> -->
              <!--   </div>
            </div>
            <div>
                <div class="poster-img">
                 -->   <!--  <img src="/frontend/assets/images/furniture-images/poster/t1.jpg" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div> -->
               <!--  </div>

            </div>
            <div>
                <div class="poster-img">
              -->     <!--   <img src="/frontend/assets/images/furniture-images/poster/t3.jpg" class="img-fluid blur-up lazyload" alt="">
                    <div class="overlay-color">
                        <i class="fas fa-plus theme-color"></i>
                    </div> -->
               <!--  </div>
            </div> -->
        </div>

        <div class="left-side-contain">
           <!--  <div class="banner-left">
                <h4>Sale <span class="theme-color">35% Off</span></h4>
                <h1>New Latest <span>Dresses</span></h1>
                <p>BUY ONE GET ONE <span class="theme-color">FREE</span></p>
                <h2>$79.00 <span class="theme-color"><del>$65.00</del></span></h2>
                <p class="poster-details mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting
                    industry.</p>
            </div> -->
        </div>

    </section>



    <div class="container-fluid mt-5" >
     <div class="row">
        <div class="col-lg-6" style="padding:7%">
            <div class="row">
                <div style="border:2.5px solid black;position:absolute;height:580px;width:35%;margin-top:-4%;margin-left:5%"></div>
                <div>
                <img style="width:100%;height:100%;" src="/photo/accueil.jpg" alt="">
                </div>
                <div style="border-left:2.5px solid black;padding:9px;margin-top:30px;color:black">
                    <h1 style="font-size:150%">Accessoires sensuels</h1>
                    <p class="mt-3">N'avez-vous jamais reve d'uliser des accessoires erotiques pour pimenter vos soirees? <br>
                    Apprenez a <span style="color:rgb(130, 34, 34);">jouer a faire l'amour avec des accessoires sensuels</span></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5" style="padding:7%;">
        <div style="border:2.5px solid #DEB887;position:absolute;height:580px;width:33%;margin-top:5%;margin-left:5%"></div>
            <div>
              <img style="width:91%;height: 91%;" src="/photo/accueil1.jpg" alt="">
            </div>
            <div style="border-left:2.5px solid black;padding:9px;margin-top:60px;color:black">
                    <h1 style="font-size:150%">Accessoires de lingere sexy</h1>
                    <p class="mt-3">Les chaines de corps delicates,les masques inspires de la dentelle , les accessoires pour tetons etc sont une facon
                    <span style="color:rgb(130, 34, 34);">excitante</span> de faire passer  <br>votre lingerie au niveau superieur 
                     en ajoutant <span style="color:rgb(130, 34, 34);"> une touche de pli bondage</span></p>
                </div>
        </div>
     </div>
    </div>


    <style>
    .section-3 
    {
        height: 650px; 
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url('/photo/parallax.jpeg');
        }
        .pa
        {
            padding: 20%;
        }
        .achat
        {
            font-size:170%;
            color: black;
        }
        .achat:hover
        {
            color:rgb(130, 34, 34);
        }
     
</style>
    <section>
            <div class="pa site-section section-3">
                <div class="container">
                    <div class=" title-3 text-center">
                        <h2 style="font-size:270%">Enfilez nos lingeries sexy </h2>
                        <h3 style="font-size:170%;color:rgb(130, 34, 34);">Et offrez vous un plaisir enorme</h3>
                        <a href="{{route('shop')}}"><h5 class="achat ">Achetez des maintenant</h5></a> 
                        <hr style="margin:auto;width:35%;border-top:2px solid black">
                    </div>
                </div>
            </div>
    </section>
    

    <!-- category section start -->
    <section class="category-section ratio_40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title title-2 text-center">
                        <h2 style="color:black">Nos  Collections</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-3">
                <div class="col-xxl-2 col-lg-3">
                    <div class="category-wrap category-padding category-block theme-bg-color">
                        <div>
                            <h2 class="light-text">Nos</h2>
                            <h2 class="top-spacing">Top</h2>
                            <span>Categories</span>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-10 col-lg-9">
                    <div class="category-wrapper category-slider1 white-arrow category-arrow" >
                    @foreach($categories as $cat)
                        <div>
                            
                            <a href="shop-left-sidebar.html" class="category-wrap category-padding">
                                <img src="{{asset('photo/'.$cat->getPhoto())}}" class="bg-img blur-up lazyload"
                                    alt="category image">
                                <div class="category-content category-text-1">
                                    <h3 class="the">{{$cat->getNom()}}</h3>
                                    <span style="color:black">Seduction</span>
                                </div>
                            </a>
                            
                        </div>
                        @endforeach
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- category section start-->



    <section class="ratio_asos overflow-hidden pb-5">
        <div class="px-0 container-fluid p-sm-0">
            <div class="row m-0">
                <div class="col-12 p-0">
                    <div class="title-3 text-center">
                        <h2 style="color: gray;">Mega Deals</h2>
                        <h5 style="color:rgb(130, 34, 34);">Profitez de nos reductions de certains de nos articles</h5>
                    </div>
                </div>
             
                    <div class="our-product products-c">  
                    @foreach($produit as $pr)                 
                        <div class="product-box">
                            <div class="img-wrapper">
                                <a href="product/details.html">
                                    <img src="{{asset('photo/'.$pr->photo)}}"
                                         class="w-100 bg-img blur-up lazyload" alt="">
                                </a>
                                <div class="circle-shape"></div>
                                <span class="background-text">Sexy</span>
                                <div class="label-block">
                                    <span class="label label-theme">-{{$pr->remise}}%</span>
                                </div>
                                <div class="cart-wrap" >
                                    <ul >
                                        <li>
                                            <a href="javascript:void(0)" class="addtocart-btn" data-bs-toggle="modal"
                                               data-bs-target="#addtocart">
                                                <i data-feather="shopping-cart"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{route('detail', $pr->id)}}" data-bs-toggle="modal"
                                               data-bs-target="#quick-view">
                                                <i data-feather="eye"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="wishlist.php" class="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product-style-3 product-style-chair">
                                <div class="product-title d-block mb-0">
                                    <div class="r-price">
                                        <div class="theme-color">
                                            <del>{{$pr->prix}} CFA</del> 
                                          CFA
                                    </div>
                                        <div class="main-price">
                                            <ul class="rating mb-1 mt-0">
                                                <li>
                                                    <i class="fas fa-star theme-color"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star theme-color"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                                <li>
                                                    <i class="fas fa-star"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="font-light mb-sm-2 mb-0">{{$pr->nom}}</p>
                                   <!--  <a href="product/details.html" class="font-default">
                                        <h5>Skater Multicolor Dress</h5>
                                    </a> -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
        </div>
    </section>

    <div id="qvmodal">

    </div>

    
   
@endsection
