@extends('web.layouts.app')


@section('content')
   

    <style>
        a.disabled,
        a.disabled:hover .fas {
            color: grey !important;
            cursor: not-allowed;
        }
    </style>
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
                <div class="col-12">
                    <h3>Panier</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">panier</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
          @if($cartitem->count() > 0) 
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table cart-table">
                        <thead>
                            <tr class="table-head">
                                <th scope="col">image</th>
                                <th scope="col">nom du produit</th>
                                <th scope="col">prix</th>
                                <th scope="col">quantite</th>
                                <th scope="col">total</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($cartitem as $item)
                            <tr>
                                <td>
                                    <a href="../product/details.html">
                                        <img src="{{asset('photo/'.$item->model->photo)}}" class="blur-up lazyloaded"
                                            alt="">
                                    </a>
                                </td>
                                <td>
                                    <a href="../product/details.html">{{$item->name}}</a>
                                    <div class="mobile-cart-content row">
                                        <div class="col">
                                            <div class="qty-box">
                                                <div class="input-group">
                                                    <input type="text" name="quantity" class="form-control input-number"
                                                        value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>     
                                <td>
                                    <h2 class="td-color">{{$item->price}}</h2>
                                </td>
                                <td>
                                    <h2 class="td-color">{{$item->qty}}</h2>
                                </td>
                                <td>
                                    <h2 class="td-color">{{$item->price*$item->qty}}</h2>
                                </td>
                                <td>
                                    <a href="javascript:void(0)">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <a href="javascript:void(0)"
                                    class="text-decoration-underline theme-color d-block text-capitalize">clear
                                    all items</a>
                            </div>
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="../shop.html" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-checkout-section">
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="promo-section">
                                <form class="row g-3">
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="number" placeholder="Coupon Code">
                                    </div>
                                    <div class="col-5">
                                        <button class="btn btn-solid-default rounded btn">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 ">
                            <div class="checkout-button">
                                <a href="checkout" class="btn btn-solid-default btn fw-bold">
                                    Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <h3>Cart Totals</h3>
                                            <h6>Sub Total <span>{{Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->subtotal()}}</span></h6>
                                            <h6>Tax <span>{{Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->tax()}}</span></h6>

                                            <h6>Total <span>{{Gloudemans\Shoppingcart\Facades\Cart::instance('cart')->total()}}</span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a href="checkout">Process Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
              <div class="row">
                <div class="col-md-12">
                    <h2>Votre panier est vide</h2>
                    <a href="{{route('shop')}}">
                       <h5 class="mt-3">Ajoutez-y des articles des maintenant </h5>
                    </a>
                </div>
              </div>
          @endif 
        </div>
    </section>

@endsection
   

   
    
  