<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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

// welcome
Route::get('/', function () {
    return view('welcome');
});

// main
Route::get('main', function () {
    return view('layouts.main');
});

// dashboard index
// Route::get('dashboard', function () {
//     return view('dashboard.index');
// });
// dashboard admin
Route::get('/dashboard/admin', [AdminController::class, 'dashboardAdmin'])->name('dashboard.admin')->middleware('auth')->middleware('admin');

// dashboard user
Route::get('/dashboard/user', [UserController::class, 'dashboardUser'])->name('dashboard.user')->middleware('auth')->middleware('user');
Route::get('/user/logout', [UserController::class, 'logout']);
// Route::get('user', function () {
//     return view('dashboard.user');
// });

//user
Route::get('/user', [AdminController::class, 'indexUsers'])->name('content.users')->middleware('admin');
Route::get('/user/edit/{id}', [AdminController::class, 'edit'])->name('users.edit');
Route::post('/user/update/{id}', [AdminController::class, 'update'])->name('users.update');
Route::delete('/destroy{id}', [AdminController::class, 'destroy'])->name('users.destroy');


// Route::get('books', function () {
//     return view('dashboard.books');
// });

//books
Route::get('/books', [AdminController::class, 'books'])->name('content.books');
Route::post('/books/create', [AdminController::class, 'createBooks'])->name('booksCreate');
Route::get('/books/data', [AdminController::class, 'dataBooks'])->name('booksData');
Route::get('/books/edit/{id}', [AdminController::class, 'editBooks'])->name('books.edit');
Route::post('/books/update/{id}', [AdminController::class, 'updateBooks'])->name('books.update');
Route::delete('/books/destroy/{id}', [AdminController::class, 'destroyBooks'])->name('books.destroy');

Route::get('category', function () {
    return view('content.category');
});
Route::get('rent-log', function () {
    return view('content.rent-log');
});

// message
Route::post('/message/store', [MessageController::class, 'storeMessage'])->name('message.store');

// Auth
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/user', [AuthController::class, 'registerAccount'])->name('registerStore');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('login.auth');
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');


