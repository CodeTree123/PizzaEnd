<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ItemController;
use App\Http\Controllers\Backend\MealController;
use App\Http\Controllers\Backend\OfferController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Backend\SpeacialController;
use App\Http\Controllers\Forntend\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');

Route::get('/login', [AdminController::class, 'login'])->name('admin.index');
Route::post('/login_post', [AdminController::class, 'login_post'])->name('admin.login');

Route::group(['middleware' => 'admin-auth'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
    //category
    Route::get('/category/list', [CategoryController::class, 'list'])->name('category.list');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::put('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
    //item
    Route::get('/item/list', [ItemController::class, 'list'])->name('item.list');
    Route::get('/item/create', [ItemController::class, 'create'])->name('item.create');
    Route::post('/item/store', [ItemController::class, 'store'])->name('item.store');
    Route::get('/item/delete/{id}', [ItemController::class, 'delete'])->name('item.delete');
    Route::get('/item/price', [ItemController::class, 'price'])->name('item.price');
    Route::get('/item/price/list', [ItemController::class, 'price_list'])->name('item.price.list');
    Route::post('/item/price/store', [ItemController::class, 'price_store'])->name('item.price_store');
    Route::put('/item/edit/{id}', [ItemController::class, 'edit'])->name('item.edit');
    Route::get('/item/update/{id}', [ItemController::class, 'update'])->name('item.update');
    //offer
    Route::get('/offer/list', [OfferController::class, 'list'])->name('offer.list');
    Route::get('/offer/create', [OfferController::class, 'create'])->name('offer.create');
    Route::post('/offer/store', [OfferController::class, 'store'])->name('offer.store');
    Route::delete('/offer/delete/{id}', [OfferController::class, 'delete'])->name('offer.delete');
    //pizza end meals
    Route::get('/pizza/meal/list', [MealController::class, 'list'])->name('meal.list');
    Route::get('/pizza/meal/create', [MealController::class, 'create'])->name('meal.create');
    Route::post('/pizza/meal/store', [MealController::class, 'store'])->name('meal.store');
    Route::get('/pizza/meal/delete/{id}', [MealController::class, 'delete'])->name('meal.delete');
    Route::put('/pizza/meal/edit/{id}', [MealController::class, 'edit'])->name('meal.edit');
    Route::get('/pizza/meal/update/{id}', [MealController::class, 'update'])->name('meal.update');
    //special menu
    Route::get('/speacial/menu/list', [SpeacialController::class, 'list'])->name('speacial.list');
    Route::get('/speacial/menu/create', [SpeacialController::class, 'create'])->name('speacial.create');
    Route::post('/speacial/menu/store', [SpeacialController::class, 'store'])->name('speacial.store');
    Route::get('/speacial/menu/delete/{id}', [SpeacialController::class, 'delete'])->name('speacial.delete');
    Route::put('/speacial/menu/edit/{id}', [SpeacialController::class, 'edit'])->name('speacial.edit');
    Route::get('/speacial/menu/update/{id}', [SpeacialController::class, 'update'])->name('speacial.update');
    //Order
Route::get('/admin/product/order/status/{id}', [OrderController::class, 'ordre_status'])->name('ordre_status');
Route::get('/order/list', [OrderController::class, 'list'])->name('order.list');
Route::get('order_detail/{id}', [OrderController::class, 'order_detail']);
});
//add to cart

Route::get('cart/addtocart/{id}', [FrontendController::class, 'addtocart'])->name('cart.addtocart');
Route::get('cart/addtocart2/{id}/{sub_id}', [FrontendController::class, 'addtocart2'])->name('cart.addtocart2');
Route::get('cart/list', [FrontendController::class, 'list'])->name('cart.list');
Route::put('/cart/update', [FrontendController::class, 'update'])->name('cart.update');
Route::get('/cart/delete/{id}', [FrontendController::class, 'delete'])->name('cart.delete');
Route::get('/cart/checkout/', [FrontendController::class, 'checkout'])->name('cart.checkout');
Route::post('/order/detailes/', [FrontendController::class, 'detailes'])->name('order.detailes');
