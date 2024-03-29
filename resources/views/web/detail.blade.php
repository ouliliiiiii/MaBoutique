@extends('web.layouts.app')

@section('content')
p
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
    </section> <!-- Shop Section start -->

    <section>
        <div class="container">
            <div class="row gx-4 gy-5">
                <div class="col-lg-12 col-12">
                    <div class="details-items">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="row">
                                     <div class="col-lg-2">
                                        <div class="details-image-vertical black-slide rounded">
                                            <div>
                                                <img src="{{asset('photo/'.$p->photo)}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="{{asset('photo/'.$p->photo)}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="{{asset('photo/'.$p->photo)}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="{{asset('photo/bienetre/'.$p->photo)}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="col-lg-10" >
                                        <div class="details-image-1 ratio_asos">
                                            <div>
                                                <img src="{{asset('photo/'.$p->photo)}}" id="zoom_01"
                                                    data-zoom-image=""
                                                    class="img-fluid w-100 image_zoom_cls-0 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="{{asset('photo/'.$p->photo)}}.jpg" id="zoom_02"
                                                    data-zoom-image="assets/images/fashion/2.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-1 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="{{asset('photo/'.$p->photo)}}" id="zoom_03"
                                                    data-zoom-image="assets/images/fashion/3.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-2 blur-up lazyload" alt="">
                                            </div>
                                            <div>
                                                <img src="{{asset('photo/'.$p->photo)}}" id="zoom_04"
                                                    data-zoom-image="assets/images/fashion/4.jpg"
                                                    class="img-fluid w-100 image_zoom_cls-3 blur-up lazyload" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="cloth-details-size">
                                    <div class="details-image-concept">
                                        <h2>{{$p->nom}}</h2>
                                    </div>

                                    <div class="label-section">
                                        <span class="badge badge-grey-color">{{$p->category->nom}}</span>
                                    </div>
                                    @if ($p->is_solde == true)
                                        <h3 class="price-detail">{{$p->remise($p->prix, $p->remise)}} CFA</h3>
                                        <del> {{$p->prix}} CFA</del>
                                        <span> - {{$p->remise}} %</span>
                                    @else
                                        <h3 class="price-detail">{{$p->prix}} CFA</h3>
                                    @endif

                                    <div class="color-image">
                                        <div class="image-select">
                                            <h5>Color :</h5>
                                            <ul class="image-section">
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="{{asset('photo/'.$p->photo)}}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="{{asset('photo/'.$p->photo)}}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <img src="{{asset('photo/'.$p->photo)}}"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="selectSize" class="addeffect-section product-description border-product">
                                        <h6 class="product-title size-text">select size
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#sizemodal">size chart</a>
                                        </h6>

                                        <!-- <h6 class="error-message">please select size</h6>

                                        <div class="size-box">
                                            <ul>
                                                <li>
                                                    <a href="javascript:void(0)">s</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">m</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">l</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">xl</a>
                                                </li>
                                            </ul>
                                        </div> -->

                                        <h6 class="product-title product-title-2 d-block">Quantite</h6>

                                        <div class="qty-box">
                                            <div class="input-group">
                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-left-minus"
                                                        onclick="updateQuantity()" data-type="minus" data-field="">
                                                        <i class="fas fa-minus"></i>
                                                    </button>
                                                </span>

                                                <input type="text" name="quantite" id="q"
                                                    class="form-control input-number" value="1">

                                                <span class="input-group-prepend">
                                                    <button type="button" class="btn quantity-right-plus"
                                                        onclick="updateQuantity()" data-type="plus" data-field="">
                                                        <i class="fas fa-plus"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="product-buttons">
                                        <a href="#" class="btn btn-solid">
                                            <i class="fa fa-bookmark fz-16 me-2"></i>
                                            <span>Wishlist</span>
                                        </a>
<!--                                         event.preventDefault(); document.getElementById('addtocart').submit()
 -->                                    <button                                              
                                               id="cartEffect" class="btn btn-solid hover-solid btn-animation">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Ajouter au panier</span>
                                            <form id="addtocart" action="{{route('ajoutpanier')}}" method="post">
                                                @csrf

                                                <input type="hidden" name="product_id" id="product_id" value="{{$p->id}}">
                                                <input type="hidden" name="quantite" id="quantite"  > 
                                            </form> 
                                        </button> 
                                    </div>

                                    <div class="mt-2 mt-md-3 border-product">
                                        <h6 class="product-title hurry-title d-block">Hurry Up! Left <span>{{$p->quantite}}</span> in
                                            stock</h6>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width:{{$p->quantite}}%">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="border-product">
                                        <h6 class="product-title d-block">share it</h6>
                                        <div class="product-icon">
                                            <ul class="product-social">
                                                <li>
                                                    <a href="https://www.facebook.com/">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.google.com/">
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/">
                                                        <i class="fab fa-instagram"></i>
                                                    </a>
                                                </li>
                                                <li class="pe-0">
                                                    <a href="https://www.google.com/">
                                                        <i class="fas fa-rss"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="cloth-review">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                    data-bs-target="#desc" type="button">Description</button>

                                <button class="nav-link" id="nav-question-tab" data-bs-toggle="tab"
                                    data-bs-target="#question" type="button">Q & A</button>

                                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#review" type="button">Review</button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="desc">
                                <div class="shipping-chart">
                                    <div class="part">
                                        <h4 class="inner-title mb-2">Give you a complete account of the system</h4>
                                        <p class="font-light">Nor again is there anyone who loves or pursues or desires
                                            to
                                            obtain pain of itself, because it is pain, but because occasionally
                                            circumstances occur in which toil and pain can procure him some great
                                            pleasure.
                                            To take a trivial example, which of us ever undertakes laborious physical
                                            exercise, except to obtain some advantage from it? But who has any right to
                                            find
                                            fault with a man who chooses to enjoy a pleasure that has no annoying
                                            consequences, or one who avoids a pain that produces no resultant pleasure.
                                        </p>
                                    </div>

                                    <div class="row g-3 align-items-center">
                                        <div class="col-lg-8">
                                            <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Ab, autem nemo? Tempora vitae assumenda laudantium unde magni, soluta
                                                repudiandae quam, neque voluptate deleniti consequatur laboriosam
                                                veritatis?
                                                Tempore dolor molestias voluptatum! Minima possimus, pariatur sed, quasi
                                                provident dolorum unde molestias, assumenda consequuntur odit magni
                                                blanditiis obcaecati? Ea corporis odit dolorem fuga, fugiat soluta
                                                consequuntur magni.</p>

                                            <div class="part mt-3">
                                                <h5 class="inner-title mb-2">fabric:</h5>
                                                <p class="font-light">Art silk is manufactured by synthetic fibres like
                                                    rayon. It's light in weight and is soft on the skin for comfort in
                                                    summers.Art silk is manufactured by synthetic fibres like rayon.
                                                    It's
                                                    light in weight and is soft on the skin for comfort in summers.</p>
                                                <p class="font-light">Lorem Ipsum is simply dummy text of the printing
                                                    and typesetting industry. Lorem Ipsum has been the industry's
                                                    standard dummy text ever since the 1500s</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-4">
                                            <img src="../assets/images/fashion/slider/1.jpg"
                                                class="img-fluid rounded blur-up lazyload" alt="">
                                        </div>

                                        <div class="col-lg-8 order-lg-2 mt-4">
                                            <p class="font-light">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit.
                                                Ab, autem nemo? Tempora vitae assumenda laudantium unde magni, soluta
                                                repudiandae quam, neque voluptate deleniti consequatur laboriosam
                                                veritatis?
                                                Tempore dolor molestias voluptatum! Minima possimus, pariatur sed, quasi
                                                provident dolorum unde molestias, assumenda consequuntur odit magni
                                                blanditiis obcaecati? Ea corporis odit dolorem fuga, fugiat soluta
                                                consequuntur magni.</p>
                                            <div class="part mt-3">
                                                <p class="font-light">Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing
                                                    elit. Odio repellat numquam perspiciatis eum quis ab, sed dicta
                                                    tenetur
                                                    fugit culpa, aut distinctio deserunt quisquam ipsam reprehenderit
                                                    iure?
                                                    Adipisci, optio enim? Voluptates voluptatum neque id ad commodi
                                                    quisquam
                                                    dolorem vitae inventore quasi! Officiis facere, iusto tempore atque
                                                    magnam voluptas. Architecto laboriosam deleniti hic veritatis
                                                    nesciunt.
                                                    Aut officia quasi inventore et. Debitis.</p>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 order-lg-0 mt-4">
                                            <img src="../assets/images/fashion/slider/2.jpg"
                                                class="img-fluid rounded blur-up lazyload" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="question">
                                <div class="question-answer">
                                    <ul>
                                        <li>
                                            <div class="que">
                                                <i class="fas fa-question"></i>
                                                <div class="que-details">
                                                    <h6>Is it compatible with all WordPress themes?</h6>
                                                    <p class="font-light">If you want to see a demonstration version of
                                                        the premium plugin, you can see that in this page. If you want
                                                        to see a demonstration version of the premium plugin, you can
                                                        see that in this page. If you want to see a demonstration
                                                        version of the premium plugin, you can see that in this page.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="que">
                                                <i class="fas fa-question"></i>
                                                <div class="que-details">
                                                    <h6>How can I try the full-featured plugin? </h6>
                                                    <p class="font-light">Compatibility with all themes is impossible,
                                                        because they are too many, but generally if themes are developed
                                                        according to WordPress and WooCommerce guidelines, YITH plugins
                                                        are compatible with them. Compatibility with all themes is
                                                        impossible, because they are too many, but generally if themes
                                                        are developed according to WordPress and WooCommerce guidelines,
                                                        YITH plugins are compatible with them.</p>
                                                </div>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="que">
                                                <i class="fas fa-question"></i>
                                                <div class="que-details">
                                                    <h6>Is it compatible with all WordPress themes?</h6>
                                                    <p class="font-light">If you want to see a demonstration version of
                                                        the premium plugin, you can see that in this page. If you want
                                                        to see a demonstration version of the premium plugin, you can
                                                        see that in this page. If you want to see a demonstration
                                                        version of the premium plugin, you can see that in this page.
                                                    </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="review">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="customer-rating">
                                            <h2>Customer reviews</h2>
                                            <ul class="rating my-2 d-inline-block">
                                                <li>
                                                    <i class="fas fa-star theme-color"></i>
                                                </li>
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
                                            </ul>

                                            <div class="global-rating">
                                                <h5 class="font-light">82 Ratings</h5>
                                            </div>

                                            <ul class="rating-progess">
                                                <li>
                                                    <h5 class="me-3">5 Star</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 78%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">78%</h5>
                                                </li>
                                                <li>
                                                    <h5 class="me-3">4 Star</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 62%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">62%</h5>
                                                </li>
                                                <li>
                                                    <h5 class="me-3">3 Star</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 44%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">44%</h5>
                                                </li>
                                                <li>
                                                    <h5 class="me-3">2 Star</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 30%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">30%</h5>
                                                </li>
                                                <li>
                                                    <h5 class="me-3">1 Star</h5>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" style="width: 18%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>
                                                    <h5 class="ms-3">18%</h5>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <p class="d-inline-block me-2">Rating</p>
                                        <ul class="rating mb-3 d-inline-block">
                                            <li>
                                                <i class="fas fa-star theme-color"></i>
                                            </li>
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
                                        </ul>
                                        <div class="review-box">
                                            <form class="row g-4">
                                                <div class="col-12 col-md-6">
                                                    <label class="mb-1" for="name">Name</label>
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="Enter your name" required="">
                                                </div>

                                                <div class="col-12 col-md-6">
                                                    <label class="mb-1" for="id">Email Address</label>
                                                    <input type="email" class="form-control" id="id"
                                                        placeholder="Email Address" required="">
                                                </div>

                                                <div class="col-12">
                                                    <label class="mb-1" for="comments">Comments</label>
                                                    <textarea class="form-control" placeholder="Leave a comment here"
                                                        id="comments" style="height: 100px" required=""></textarea>
                                                </div>

                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn default-light-theme default-theme default-theme-2">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-12 mt-4">
                                        <div class="customer-review-box">
                                            <h4>Customer Reviews</h4>

                                            <div class="customer-section">
                                                <div class="customer-profile">
                                                    <img src="{{asset('photo/'.$p->photo)}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>

                                                <div class="customer-details">
                                                    <h5>Mike K</h5>
                                                    <ul class="rating my-2 d-inline-block">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
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
                                                    </ul>
                                                    <p class="font-light">I purchased my Tab S2 at Best Buy but I wanted
                                                        to
                                                        share my thoughts on Amazon. I'm not going to go over specs and
                                                        such
                                                        since you can read those in a hundred other places. Though I
                                                        will
                                                        say that the "new" version is preloaded with Marshmallow and now
                                                        uses a Qualcomm octacore processor in place of the Exynos that
                                                        shipped with the first gen.</p>

                                                    <p class="date-custo font-light">- Sep 08, 2021</p>
                                                </div>
                                            </div>

                                            <div class="customer-section">
                                                <div class="customer-profile">
                                                    <img src="{{asset('photo/'.$p->photo)}}"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>

                                                <div class="customer-details">
                                                    <h5>Norwalker</h5>
                                                    <ul class="rating my-2 d-inline-block">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
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
                                                    </ul>
                                                    <p class="font-light">Pros: Nice large(9.7") screen. Bright colors.
                                                        Easy
                                                        to setup and get started. Arrived on time. Cons: a bit slow on
                                                        response, but expected as tablet is 2 generations old. But works
                                                        fine and good value for the money.</p>

                                                    <p class="date-custo font-light">- Sep 08, 2021</p>
                                                </div>
                                            </div>

                                            <div class="customer-section">
                                                <div class="customer-profile">
                                                    <img src="../assets/images/inner-page/review-image/3.jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>

                                                <div class="customer-details">
                                                    <h5>B. Perdue</h5>
                                                    <ul class="rating my-2 d-inline-block">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
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
                                                    </ul>
                                                    <p class="font-light">Love the processor speed and the sensitivity
                                                        of
                                                        the touch screen.</p>

                                                    <p class="date-custo font-light">- Sep 08, 2021</p>
                                                </div>
                                            </div>

                                            <div class="customer-section">
                                                <div class="customer-profile">
                                                    <img src="../assets/images/inner-page/review-image/4.jpg"
                                                        class="img-fluid blur-up lazyload" alt="">
                                                </div>

                                                <div class="customer-details">
                                                    <h5>MSL</h5>
                                                    <ul class="rating my-2 d-inline-block">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
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
                                                    </ul>
                                                    <p class="font-light">I purchased the Tablet May 2017 and now April
                                                        2019
                                                        I have to charge it everyday. I don't watch movies on it..just
                                                        play
                                                        a game or two while on lunch. I guess now I need to power it
                                                        down
                                                        for future use.</p>

                                                    <p class="date-custo font-light">- Sep 08, 2021</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section end -->

    <!-- product section start -->
    <section class="ratio_asos section-b-space overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-lg-4 mb-3">Autres Produits</h2>
                    <div class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space">
                         @foreach($produits as $prod)
                         <div class="product-box">
                                <div class="img-wrapper">
                                    <div class="front">
                                        <a href="details.html">
                                            <img src="{{asset('photo/' . $prod->photo)}}"
                                                class="bg-img blur-up lazyload" alt="">
                                        </a>
                                    </div>
                                    <div class="cart-wrap">
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)" class="addtocart-btn"
                                                    data-bs-toggle="modal" data-bs-target="#addtocart">
                                                    <i data-feather="shopping-bag"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                                    data-bs-target="#quick-view">
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
                                        <span class="font-light grid-content">{{$prod->nom}}</span>
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
                                        <a href="details.php" class="font-default">
                                            <h5>Qui Laboriosam Quas Beatae</h5>
                                        </a>
                                        <div class="listing-content">
                                            <span class="font-light">Regular Fit</span>
                                            <p class="font-light">Dolorem nihil quia qui laudantium expedita aut dolor.
                                                Qui eligendi voluptatem autem ullam et. Voluptas nemo eum nihil aliquam
                                                eos aperiam. Numquam dolorum veniam non magnam illum odit deleniti.</p>
                                        </div>
                                        <h3 class="theme-color">$1</h3>
                                        <button onclick="location.href = 'cart.html';" class="btn listing-content">Add
                                            To Cart</button>
                                    </div>
                                </div>
                            </div> 
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->

    <div class="modal fade newletter-modal" id="newsletter">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <img src="assets/images/newletter-icon.png" class="img-fluid blur-up lazyload" alt="">
                    <div class="modal-title">
                        <h2 class="tt-title">Sign up for our Newsletter!</h2>
                        <p class="font-light">Never miss any new updates or products we reveal, stay up to date.</p>
                        <p class="font-light">Oh, and it's free!</p>

                        <div class="input-group mb-3">
                            <input placeholder="Email" class="form-control" type="text">
                        </div>

                        <div class="cancel-button text-center">
                            <button class="btn default-theme w-100" data-bs-dismiss="modal"
                                type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cart-modal" id="addtocart" tabindex="-1" role="dialog" aria-label="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content ">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <div class="modal-contain">
                        <div>
                            <div class="modal-messages">
                                <i class="fas fa-check"></i> 3-stripes full-zip hoodie successfully added to
                                you cart.
                            </div>
                            <div class="modal-product">
                                <div class="modal-contain-img">
                                    <img src="assets/images/fashion/instagram/4.jpg" class="img-fluid blur-up lazyload"
                                        alt="">
                                </div>
                                <div class="modal-contain-details">
                                    <h4>Premier Cropped Skinny Jean</h4>
                                    <p class="font-light my-2">Yellow, Qty : 3</p>
                                    <div class="product-total">
                                        <h5>TOTAL : <span>$1,140.00</span></h5>
                                    </div>
                                    <div class="shop-cart-button mt-3">
                                        <a href="shop-left-sidebar.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">CONTINUE
                                            SHOPPING</a>
                                        <a href="cart.php"
                                            class="btn default-light-theme conti-button default-theme default-theme-2 rounded">VIEW
                                            CART</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="ratio_asos mt-4">
                        <div class="container">
                            <div class="row m-0">
                                <div class="col-sm-12 p-0">
                                    <div
                                        class="product-wrapper product-style-2 slide-4 p-0 light-arrow bottom-space spacing-slider">
                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="details.php">
                                                            <img src="assets/images/fashion/product/front/1.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="details.php">
                                                            <img src="assets/images/fashion/product/front/2.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="details.php">
                                                            <img src="assets/images/fashion/product/front/3.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="product-box">
                                                <div class="img-wrapper">
                                                    <div class="front">
                                                        <a href="details.php">
                                                            <img src="assets/images/fashion/product/front/4.jpg"
                                                                class="bg-img blur-up lazyload" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="product-details text-center">
                                                    <div class="rating-details d-block text-center">
                                                        <span class="font-light grid-content">B&Y Jacket</span>
                                                    </div>
                                                    <div class="main-price mt-0 d-block text-center">
                                                        <h3 class="theme-color">$78.00</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
@endsection

@push('scripts')
<script>
$("#cartEffect").on('click',function()
   {
    // Sélectionner l'élément input et récupérer sa valeur
    var input = document.getElementById("q").value;
    document.getElementById("quantite").value= input;
    $('#addtocart').submit();
    })
</script>
@endpush



