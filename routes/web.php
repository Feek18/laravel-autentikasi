<?php

use App\Http\Controllers\formController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\productController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userTableController;
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
    return view('index');
});

// logout
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

// login
Route::get('/login', [loginController::class, 'loginForm'])->name('login');
Route::post('/login-user', [loginController::class, 'doneLogin'])->name('login_user');

// register
Route::get('/register', [registerController::class, 'regisForm'])->name('register');
Route::post('/register-user', [loginController::class, 'doneRegister'])->name('register_user');


// product
Route::get('/product-view', [productController::class, 'productData'])->name('product-view');

// user
Route::get('/product-table', [userController::class, 'user'])->name('admin-table');

// user table
Route::get('/user-table', [userTableController::class, 'userTable'])->name('user-table');

// form
Route::get('/form', [formController::class, 'form'])->name('form-data');
Route::post('/form-data', [formController::class, 'store'])->name('formData');
Route::get('/form-data/{id}/edit', [formController::class, 'edit'])->name('editData');
Route::put('/form-data/{id}/update', [formController::class, 'update'])->name('updateData');
Route::put('/form-data/{id}/delete', [formController::class, 'delete'])->name('deleteData');
