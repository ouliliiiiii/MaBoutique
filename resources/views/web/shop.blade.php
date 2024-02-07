@extends('web.layouts.app')
@push('styles')
    <link id="color-link" rel="stylesheet" type="text/css" href="/frontend/assets/css/demo2.css">
@endpush
@section('content')
    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12" style="height:100px">
                   
                </div>
            </div>
        </div>
    </section>
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 category-side col-md-4">
                    <div class="category-option">
                        <div class="button-close mb-3">
                            <button class="btn p-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg> Close</button>
                        </div>
                        <div class="accordion category-name" id="accordionExample">
                            <div class="accordion-item category-rating">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                        Categories
                                    </button>
                                </h2>
                                <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                                    <div class="accordion-body category-scroll">
                                        <ul class="category-list">

                                                <li>
                                                    <div class="form-check ps-0 custome-form-check">
                                                        <input class="checkbox_animated check-it" id="ct1" name="categories" type="checkbox" value="1">
                                                        <label class="form-check-label">Nom de la categorie</label>
                                                        <p class="font-light">4</p>
                                                    </div>
                                                </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item category-price">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">Price</button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse show"
                                     aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="range-slider category-list">
                                            <input type="text" class="js-range-slider" id="js-range-price" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item category-color">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        Color
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="category-list">
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">
                                                    <i class="fas fa-check"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="category-product col-lg-9 col-12 ratio_30">

                    <div class="row g-4">
                        <!-- label and featured section -->
                        <div class="col-md-12">
                            <ul class="short-name">


                            </ul>
                        </div>

                        <div class="col-12">
                            <div class="filter-options">
                                <div class="select-options">
                                    <div class="page-view-filter">
                                        <div class="dropdown select-featured">
                                            <select class="form-select" name="orderby" id="orderby">
                                                <option value="-1" selected="">Default</option>
                                                <option value="1">Date, New To Old</option>
                                                <option value="2">Date, Old To New</option>
                                                <option value="3">Price, Low To High</option>
                                                <option value="4">Price, High To Low</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="dropdown select-featured">
                                        <select class="form-select" name="size" id="pagesize">
                                            <option value="12" selected="">12 Products Per Page</option>
                                            <option value="24">24 Products Per Page</option>
                                            <option value="52">52 Products Per Page</option>
                                            <option value="100">100 Products Per Page</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid-options d-sm-inline-block d-none">
                                    <ul class="d-flex">
                                        <li class="two-grid">
                                            <a href="javascript:void(0)">
                                                <img src="/frontend/assets/svg/grid-2.svg" class="img-fluid blur-up lazyloaded" alt="">
                                            </a>
                                        </li>
                                        <li class="three-grid d-md-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="/frontend/assets/svg/grid-3.svg" class="img-fluid blur-up lazyloaded" alt="">
                                            </a>
                                        </li>
                                        <li class="grid-btn active d-lg-inline-block d-none">
                                            <a href="javascript:void(0)">
                                                <img src="/frontend/assets/svg/grid.svg" class="img-fluid blur-up lazyloaded" alt="">
                                            </a>
                                        </li>
                                        <li class="list-btn">
                                            <a href="javascript:void(0)">
                                                <img src="/frontend/assets/svg/list.svg" class="img-fluid blur-up lazyloaded" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- label and featured section -->

                    <!-- Prodcut setion -->
                    <div class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">
                            <div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product/nihil-beatae-sit-sed.html">
                                                <img src="/frontend/assets/images/fashion/product/front/4.jpg"
                                                     class="bg-img blur-up lazyload" alt="">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="product/nihil-beatae-sit-sed.html">
                                                <img src="/frontend/assets/images/fashion/product/back/4.jpg"
                                                     class="bg-img blur-up lazyload" alt="">
                                            </a>
                                        </div>
                                        <div class="cart-wrap">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)" class="addtocart-btn">
                                                        <i data-feather="shopping-cart"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)" class="wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <div class="rating-details">
                                            <span class="font-light grid-content">Categorie du produit</span>
                                            <ul class="rating mt-0">
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
                                        <div class="main-price">
                                            <a href="#" class="font-default">
                                                <h5 class="ms-0">Nom du produit</h5>
                                            </a>
                                            <div class="listing-content">
                                                <span class="font-dark">Nom du produit</span>
                                                <p class="font-light">
                                                    votre description
                                                </p>
                                            </div>
                                            <h3 class="theme-color">$19</h3>
                                            <button class="btn listing-content">Add To Cart</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <nav class="page-section">
                        <ul class="pagination">
                            

                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </section>
@endsection
