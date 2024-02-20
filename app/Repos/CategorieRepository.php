<?php

namespace App\Repos;

use App\Models\Category;
use App\Interfaces\CategorieInterface;

class CategorieRepository implements CategorieInterface 
{

    public function all() 
    {
        $categories= Category::all();
        return $categories;
    }

}