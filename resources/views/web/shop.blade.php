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
                            <button class="btn p-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg> Close</button>
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
                                            @foreach($categories as $c)
                                                <li>
                                                    <div class="form-check ps-0 custome-form-check">
                                                        <input class="checkbox_animated check-it" id="ct{{$c->id}}" name="categories" type="checkbox" 
                                                        @if(in_array($c->id, explode(',', $cate))) 
                                                        checked 
                                                        @endif 
                                                        value="{{$c->id}}" onclick="sendCate(this)">
                                                        <label class="form-check-label">{{$c->getNom()}}</label>
                                                        <p class="font-light">
                                                            {{$c->produits()->count()}}
                                                        </p>

                                                    </div>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item category-price">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">Prix</button>
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
                            <!-- <div class="accordion-item category-color">
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
                            </div> -->
                        </div>
                    </div>
                </div>

                <div class="category-product col-lg-9 col-12 ratio_30">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="filter-options">
                                <div class="select-options">    
                                    <div class="dropdown select-featured">
                                        <select class="form-select" name="size" id="pagesize">
                                        <option value="4" {{$size == 4 ? 'selected':''}}>4 Produits par page</option>
                                            <option value="8" {{$size == 8 ? 'selected':''}}>8 Produits par page</option>
                                            <option value="16" {{$size == 16 ? 'selected':''}}>16 Produits par page</option>
                                            <option value="24" {{$size == 24 ? 'selected':''}}>24 Produits par page</option>
                                        </select>
                                    </div>
                                </div>
                              
                                <div>
                                    <form class="card-body" action="{{route('shop')}}" method="GET" role="search">
                                        {{ csrf_field() }}
                                        <div class="input-group">
                                            <input type="text" class="form-control"  placeholder="Rechercher..." name="q">
                                            <span class="input-group-btn">
                                        <button class="btn btn-secondary" type="submit">Rechercher</button>
                                    </span>
                                 </div>
                                </form>
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
                        @forelse($produit as $p)
                            <div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="{{route('detail', $p->id)}}">
                                                <img src="{{ asset('photo/'.$p->photo)}}" class="bg-img blur-up lazyload" alt="">
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
                                                    <a href="{{route('detail', $p->id)}}">
                                                        <i data-feather="eye"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="" class="wishlist">
                                                        <i data-feather="heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                       
                                        <div class="main-price">    
                                                <h5 class="ms-0"> {{$p->nom}}</h5>
                                            @if ($p->is_solde == true)
                                             <h3 class="theme-color"> CFA</h3>
                                             <h3 class="theme-color"><del>{{$p->prix}} CFA</del></h3>
                                            @else
                                            <h3 class="theme-color">{{$p->prix}} CFA</h3>
                                            @endif
                                            
                                            <button class="btn listing-content">Ajouter au panier</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         @empty
                         <div class="col-lg-12 text-center" >
                            <h2 style="margin-top: 12%;">
                            <?php if (isset($_GET['q']))
                            {?>
                                Aucun resultat trouve pour : <?php  echo $_GET['q']; 
                            }
                            ?>
                            </h2>     
                             </div>
                           
                        @endforelse
                    </div>
                    <nav class="page-section">
                    
                    </nav>

                </div>
            </div>
        </div>
    </section>
<!--     infos passe en url -->  
    <form id="frm" method="get">
        <input type="hidden" name="page" id="page" value="{{$page}}">
        <input type="hidden" name="size" id="size" value="{{$size}}">
        <input type="hidden" name="cate" id="cate" value="{{$cate}}">
    </form>
    <!-- <form id="rec" method="get">
        <input type="hidden" name="q" id="q" value="{{}}">
    </form> 
function blur a revoir-->
@endsection

@push('scripts')
    <script>
        $(function(){
            //
            $('#pagesize').on('change', function() {
                //console.log('coucou')
                $('#size').val($('#pagesize option:selected').val());
                $('#frm').submit();
            })      
        });

       function sendCate(cate) {
            let tab = "";
            //recuperation des checkbox cochees
            $('input[name="categories"]:checked').each(function () {
                if (tab === "") {
                    tab += this.value;       
                } else {
                    tab += ',' + this.value; 
                }
                $('#cate').val(tab);
                $('#frm').submit();
                    
            })
        }
        
    </script>
@endpush
