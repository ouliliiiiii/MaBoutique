<?php

namespace App\Interfaces;

interface CategorieInterface 
{
    //Recuperation de tous categories
    public function all();

   //recuperation de produits en promo
    public function getPromo();

}