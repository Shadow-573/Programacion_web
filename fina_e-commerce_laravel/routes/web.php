<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishListController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get("/",[AppController::class,'index'])-> name('app.index');
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}',[ShopController::class,'productDetails'])->name('shop.product.details');
Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');
Route::post('/wishlist/add', [WishListController::class,'addProductToWishList'])->name('wishlist.store');
Route::get('/cart-wishlist-count',[ShopController::class,'getCartAndWishListCount'])->name('shop.cart.wishlist.count');
Route::get('/wishlist',[WishlistController::class,'getWishlistedProducts'])->name('wishlist.list');
Route::delete('/wishlist/remove',[WishlistController::class,'removeProductFromWishlist'])->name('wishlist.remove');
Route::delete('/wishlist/clear',[WishlistController::class,'clearWishlist'])->name('wishlist.clear');
Route::post('/wishlist/move-to-cart',[WishlistController::class,'moveToCart'])->name('wishlist.move.to.cart');


Auth::routes();

Route::middleware('auth')->group(function() {
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
});

Route::middleware(['auth','auth.admin'])->group(function() {
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
    Route::get('admin/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
    Route::post('admin/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
    Route::get('admin/products/{id}/edit', [AdminController::class, 'editProduct'])->name('admin.products.edit');
    Route::put('admin/products/{id}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
    Route::delete('admin/products/{id}', [AdminController::class, 'destroyProduct'])->name('admin.products.destroy');

    Route::get('admin/categories/create', [AdminController::class, 'createCategory'])->name('admin.categories.create');
    Route::post('admin/categories', [AdminController::class, 'storeCategory'])->name('admin.categories.store');
    Route::get('admin/categories/{id}/edit', [AdminController::class, 'editCategory'])->name('admin.categories.edit');
    Route::put('admin/categories/{id}', [AdminController::class, 'updateCategory'])->name('admin.categories.update');
    Route::delete('admin/categories/{id}', [AdminController::class, 'destroyCategory'])->name('admin.categories.destroy');

    Route::get('admin/users/create', [AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('admin/users', [AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('admin/users/{id}/edit', [AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('admin/users/{id}', [AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('admin/users/{id}', [AdminController::class, 'destroyUser'])->name('admin.users.destroy');
});
