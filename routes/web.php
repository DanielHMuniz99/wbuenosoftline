<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\App;

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

App::setLocale("pt");

# Preview
Route::get('/register', [RegisterController::class, 'show'])->name('register.show');
Route::post('/register', [RegisterController::class, 'register'])->name('register.perform');

Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');


Route::group(['middleware' => ['auth']], function() {

    Route::get('/admin/logout', [LogoutController::class, 'perform'])->name('logout.perform');

    Route::get('/', [AdminController::class, 'show'])->name('index');

    Route::get('/customers', [CustomersController::class, 'show'])->name('customers');
    Route::get('/customers/list', [CustomersController::class, 'list'])->name('customers.list');
    Route::get('/customers/create', [CustomersController::class, 'create'])->name('customers.new');
    Route::post('/customers', [CustomersController::class, 'save'])->name('customers.save');
    Route::get('/customers/edit/{id}', [CustomersController::class, 'edit'])->name('customers.edit');
    Route::put('/customers/update/{id}', [CustomersController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{id}', [CustomersController::class, 'delete'])->name('customers.delete');

    Route::get('/products', [ProductsController::class, 'show'])->name('products');
    Route::get('/products/list', [ProductsController::class, 'list'])->name('products.list');
    Route::get('/products/create', [ProductsController::class, 'create'])->name('products.new');
    Route::post('/products', [ProductsController::class, 'save'])->name('products.save');
    Route::get('/products/edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
    Route::put('/products/update/{id}', [ProductsController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductsController::class, 'delete'])->name('products.delete');
});