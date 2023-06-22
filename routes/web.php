<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductsController::class, 'index'])->name('products.list');
Route::get('/cart', [ProductsController::class, 'cart'])->name('cart.list');
Route::post('/updateCart', [ProductsController::class, 'updateCart'])->name('cart.update');
Route::get('/clear', [ProductsController::class, 'clearAllCart'])->name('cart.clear');
Route::get('/addtocart/{id}', '\App\Http\Controllers\ProductsController@addtocart');
Route::get("create", [ProductsController::class, "createGet"])->name('product.createGet');
Route::post("createPost", [ProductsController::class, "createPost"])->name('product.createPost');
Route::get("delete/{productId}", [ProductsController::class, "delete"])->name('product.delete'); 
Route::get("edit/{productId}", [ProductsController::class, "editGet"])->name('product.editGet');
Route::post("editPost", [ProductsController::class, "editPost"])->name('product.editPost');
