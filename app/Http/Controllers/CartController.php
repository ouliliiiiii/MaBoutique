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
      $request->input('quantity'),
      $pr,
    )->associate('App\Models\Produits');
    return redirect()->back();
  }


  public function updatecart(Request $request)
  {
    $p = Produits::find($request->input('product_id'));
    $pr = 0;
    if ($p->is_solde == false)
      $pr = $p->prix;
    elseif ($p->is_solde == true)
      $pr = $p->remise($p->prix, $p->remise);
    $p = Produits::find($request->input('product_id'));
    Cart::instance('cart')->update(
      $p->id,
      $p->nom,
      $request->input('quantity'),
      $pr,
    )->associate('App\Models\Produits');
    return redirect()->back();
  }
}
