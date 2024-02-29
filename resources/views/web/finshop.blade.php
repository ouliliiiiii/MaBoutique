@extends('web.layouts.app')


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
                <div class="col-12">
                    <h3>Checkout</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section Start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <form class="needs-validation" method="POST" action="place-order">
                        <input type="hidden" name="_token" value="CVH6XgdFhoUV6OBdiTIlT2bviIidpb0qD6U1Vf68">
                        <div id="shippingAddress" class="row g-4">
                            <h3 class="mb-3 theme-color">Adresse de livraison</h3>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="s_name" name="s_name"
                                    placeholder="Enter Full Name">
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Telephone</label>
                                <input type="text" class="form-control" id="s_phone" name="s_phone"
                                    placeholder="Enter Phone Number">
                            </div>
                            <div class="col-md-6">
                                <label for="locality" class="form-label">Localite</label>
                                <input type="text" class="form-control" id="s_locality" name="s_locality"
                                    placeholder="Locality">
                            </div>
                           

                            <div class="col-md-12">
                                <label for="address" class="form-label">Adresse</label>
                                <textarea class="form-control" id="s_address" name="s_address"></textarea>

                            </div>

                            <div class="col-md-3">
                                <label for="city" class="form-label">Ville</label>
                                <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville">

                            </div>

                            <div class="col-md-3">
                                <label for="country" class="form-label">Pays</label>
                                <select class="form-select custome-form-select" id="s_country" name="s_country">
                                    <option>Senegal</option>
                                    <option>Mali</option>
                                    <option>Niger</option>
                                    <option>France</option>
                                    <option>Allemagne</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-check ps-0 mt-3 custome-form-check">
                            <input class="checkbox_animated check-it" type="checkbox" name="saveAddress"
                                id="saveAddress">
                            <label class="form-check-label checkout-label" for="saveAddress">Save this information for
                                next time</label>
                        </div>

                        <hr class="my-lg-5 my-4">

                        <h3 class="mb-3">Mode de payement</h3>

                        <div class="d-block my-3">
                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" checked=""
                                    id="cod">
                                <label class="form-check-label" for="cod">Espece</label>
                            </div>
                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="debit">
                                <label class="form-check-label" for="debit">Carte</label>
                            </div>

                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="paypal">
                                <label class="form-check-label" for="paypal">Orange Money</label>
                            </div>
                            <div class="form-check custome-radio-box">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="paypal">
                                <label class="form-check-label" for="paypal">Free Money</label>
                            </div>
                        </div>
                        <div class="row g-4" style="display: none;">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name">
                                <div id="emailHelp" class="form-text">Full name as displayed on card</div>
                            </div>
                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number">
                                <div class="invalid-feedback">Credit card number is required</div>
                            </div>
                            <div class="col-md-3">
                                <label for="expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="expiration">
                            </div>
                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv">
                            </div>
                        </div>
                        <button class="btn btn-solid-default mt-4" type="submit">Terminer</button>
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="your-cart-box">
                        <h3 class="mb-3 d-flex text-capitalize">Your cart<span
                                class="badge bg-theme new-badge rounded-pill ms-auto bg-dark">0</span>
                        </h3>
                        <ul class="list-group mb-3">



                            <li class="list-group-item d-flex justify-content-between lh-condensed active">
                                <div class="text-dark">
                                    <h6 class="my-0">Tax</h6>
                                    <small></small>
                                </div>
                                <span>$0.00</span>
                            </li>
                            <li class="list-group-item d-flex lh-condensed justify-content-between">
                                <span class="fw-bold">Total (Franc cfa)</span>
                                <strong>$0.00</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Cart Section End -->
   
    @endsection