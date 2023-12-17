<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorekeeperController;
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
/*
Route::get('/product/form', [StorekeeperController::class, 'showForm'])->name('product.form');
Route::post('/product/add', [StorekeeperController::class, 'addProduct'])->name('product.add');
Route::post('/product/sell/{productId}', [StorekeeperController::class, 'sellProduct'])->name('product.sell');
Route::post('/sales/sell/{productId}', [StorekeeperController::class, 'sellProduct'])->name('product.sell');
*/




Route::get('/product/form', [StorekeeperController::class, 'showForm'])->name('product.form');
Route::post('/product/add', [StorekeeperController::class, 'addProduct'])->name('product.add');
Route::post('/product/sell/{productId}', [StorekeeperController::class, 'sellProduct'])->name('product.sell');
Route::get('/sales/history', [StorekeeperController::class, 'salesHistory'])->name('sales.history');
Route::get('/dashboard', [StorekeeperController::class, 'dashboard'])->name('dashboard');

/*
Route::get('/', function () {
    return view('welcome');
});
*/