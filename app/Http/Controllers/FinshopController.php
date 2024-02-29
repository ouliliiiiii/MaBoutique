<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinshopController extends Controller
{
   public function index()
   {
    return view('web.finshop');
   }
}
