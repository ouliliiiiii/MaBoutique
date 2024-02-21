<?php
namespace App\Repos;

use App\Interfaces\ProduitsInterface;
use App\Models\Produits;

class ProduitRepository implements ProduitsInterface
{
 
    public function getProduits($request)
    {
         //recuperer le parametre passe en ur
         $cate=$request->query('cate');
         $page=$request->query('page');
         $size=$request->query('size');

         if(!$page)
             $page=1;
         if(!$size)
             $size=8;

     $rech = trim($request->query('q'));

      //Select * from produits where category_id=? 
      $produit=Produits::where(function($req) use ($cate)
      {
       //transformer chaine de caractere en tableau avec explode
          $req->whereIn('category_id', explode(',',$cate))->orWhereRaw("' ".$cate." '=' '");
          
      })->where('nom', 'like', "{$rech}%")//<-afficher le nombre de produits par recherche
       ->orderBy('created_at', 'ASC')->paginate($size);//<-afficher le nombre de produits par page 

       return $produit;
    }
    
}

