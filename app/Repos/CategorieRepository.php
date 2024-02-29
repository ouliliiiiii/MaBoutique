<?php

namespace App\Repos;

use App\Models\Category;
use App\Interfaces\CategorieInterface;
use App\Models\Produits;

class CategorieRepository implements CategorieInterface 
{

    public function all() 
    {
        $categories= Category::all();
        return $categories;
    }
    public function getPromo()
    {
        $produit=Produits::where('is_solde',true)->get()->take(6);
        return $produit;
    }
  

}