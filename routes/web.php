<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\RechercheController;
use App\Http\Controllers\WishlistController;
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

Route::get('/detail/{id}',[ProduitsController::class, 'show' ])->name('detail');

Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/wishlist',[WishlistController::class,'index'])->name('wishlist');

Route::get('/cart',[CartController::class,'index'])->name('panier');

Route::post('/cart',[CartController::class,'add'])->name('ajoutpanier');

Route::put('/cart',[CartController::class,'updateCart'])->name('updatepanier');

Route::delete('/panier/remove',[CartController::class,'removeItem'])->name('retirerpanier');

Route::delete('/panier/clear',[CartController::class,'clearCart'])->name('ajourpanier'); 



require __DIR__.'/auth.php';
