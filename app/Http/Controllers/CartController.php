<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function index()
  {
    $cartitem=Cart::instance('cart')->content();
    //dd($cartitem->count());
    return view ('web.panier',
    [
        'cartitem'=>$cartitem
    ]);
  }

  public function add(Request $request)
  {
    dd($request);
    $product=Produits::find($request->id);


  }
}
