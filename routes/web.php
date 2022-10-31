<?php

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


use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Http\Controllers\CompanyController;
use App\Models\Company;
use App\Http\Controllers\GameController;
use App\Models\Game;


Route::middleware([
	'auth:sanctum',
	config('jetstream.auth_session'),
	'verified'
])->group(function () {
	Route::get('/', function () {
		return view('home');
	})->name('home');
});

Route::get('/', [ProductController::class, 'index']);

Route::get('/product/products', [ProductController::class, 'product']);
Route::get('/company/companies', [CompanyController::class, 'company']);
Route::get('/game/games', [GameController::class, 'game']);



Route::get('product/edit/{id}', [ProductController::class, 'edit']);

Route::get('/products/{name}/{id}', [ProductController::class, 'showItem']);

Route::post('/products', [ProductController::class, 'store']);
Route::post('/company', [CompanyController::class, 'store']);
Route::post('/game', [GameController::class, 'store']);

Route::delete('products/{id}', [ProductController::class, 'destroy']);


Route::put('product/update/{id}', [ProductController::class, 'update']);

