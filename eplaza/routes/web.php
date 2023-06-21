<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('product')->group(function () {
    Route::view('/add','admin.product.add' )->name('product_add');
    Route::post('/add-product', [ProductController::class, 'add'])->name('storeproduct');
    Route::get('/list',[ProductController::class, 'list'] )->name('product_list');
    Route::get('/edit', [ProductController::class, 'edit'])->name('updateproduct');
    Route::post('/update', [ProductController::class, 'update'])->name('product_update');
    Route::get('/delete', [ProductController::class, 'delete'])->name('product_delete');
});
