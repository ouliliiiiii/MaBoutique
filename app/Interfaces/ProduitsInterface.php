<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ProduitsInterface

{
    //Recuperation de tous produits
    /* public function produitsall(); */

    //recuperation des produits de par leur id
    public function getProduits(Request $request);
}