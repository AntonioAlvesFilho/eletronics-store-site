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
Route::get('/products/{id}', [ProductController::class, 'showItem']);
Route::post('/products', [ProductController::class, 'store']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);
Route::get('product/edit/{id}', [ProductController::class, 'edit']);
Route::put('product/update/{id}', [ProductController::class, 'update']);
