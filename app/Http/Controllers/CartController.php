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
    return view ('web.panier',
    [
        'cartitem'=>$cartitem
    ]);
  }

  public function add(Request $request)
  { 
    //recuperation des informations du produit clique
    $p = Produits::find($request->input('product_id'));
    $pr = 0;
    if ($p->is_solde == false)
      $pr = $p->prix;
    elseif ($p->is_solde == true)
      $pr = $p->remise($p->prix, $p->remise);

    //fonction mise en place par le package ..... les attributs id name price qty sont definis par defaut au niveau du package 
    Cart::instance('cart')->add(
      $p->id,
      $p->nom,
      $request->input('quantite'),
      $pr,
    )->associate('App\Models\Produits');
    return redirect()->back();
  }

  public function updateCart(Request $request)
  {

    Cart::instance('cart')->update($request->rowId,$request->input('quantite'));
    return redirect()->route('panier');
  }

 public function removeItem(Request $request)
  {
    Cart::instance('cart')->remove($request->input('r_id'));
    return redirect()->route('panier');
  }


}
