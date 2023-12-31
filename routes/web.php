<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('about', function () {
    return view('about');
});
Route::get('films', function () {
    return view('films');
});
Route::get('blog', function () {
    return view('blog');
});

 Route::get('/dashboard', [ProductController::class, 'cartView']);
 Route::get('/shopping-cart', [ProductController::class, 'productCart'])->name('shopping.cart');
 Route::get('/product/{id}', [ProductController::class, 'addProducttoCart'])->name('addProduct.to.cart');
 Route::patch('/update-shopping-cart', [ProductController::class, 'updateCart'])->name('update.sopping.cart');
 Route::delete('/delete-cart-product', [ProductController::class, 'deleteProduct'])->name('delete.cart.product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/library', function () {
    return view('menu.library');
})->middleware(['auth', 'verified'])->name('library');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:2'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin_dashboard');
    })->name('admin.dashboard');

});


require __DIR__ . '/auth.php';

