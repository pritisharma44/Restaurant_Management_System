<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\AllController;


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

Route::get('/', [AllController::class, 'dashboard'])->name('admin.dashboard');

Route::resource('restaurants', RestaurantController::class);

Route::resource('menus', MenuController::class);

Route::resource('items',MenuItemController::class);

Route::get('/all-rest', [AllController::class, 'index'])->name('all.index');
Route::get('/show/{RestId}', [AllController::class, 'show'])->name('showrestaurant');

Route::get('/rest-Details',[AllController::class,'details'])->name('restData');
Route::get('/showItem/{id}',[AllController::class,'showItem'])->name('menuItem');

// For learning
Route::get('/demo-test', [AllController::class, 'demoTest'])->name('demo-test.index');
