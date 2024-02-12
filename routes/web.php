<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProduitsController;
use App\Models\Produits;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[CategoryController::class, 'index' ])->name('accueil');

Route::get('/shop',[ProduitsController::class, 'index' ])->name('shop');

Route::get('/detail/{ouli}',[ProduitsController::class, 'show' ])->name('detail');

require __DIR__.'/auth.php';
