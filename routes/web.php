<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Models\Admin;
use Symfony\Component\Translation\MessageCatalogue;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['auth'])->group(function () {

    Route::get('/rent', function () {
        return view('dashboard.rent-log');
    });

    Route::get('/category', function () {
        return view('dashboard.category');
    });


});

Route::middleware(['admin', 'admin:1'])->group(function () {
    // Route data user
        Route::get('/user', [AdminController::class, 'index'])->name('dashboard.index');
        Route::delete('/user/{id}',[AdminController::class, 'destroy'])->name('dashboard.destroy');
        Route::get('/user/{id}/edit',[AdminController::class,'editUser'])->name('user.editUser');
        Route::put('/user/{id}/edit',[AdminController::class, 'update'])->name('dashboard.update');
    // end Route data user

    // stat route data book
        Route::post('/book',[AdminController::class, 'CreateBook'])->name('book.create');
        Route::get('/book', [AdminController::class, 'books'])->name('dashboard.books');
    // end route data book
});

Route::middleware(['auth'])->group(function () {


    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


    Route::get('/dashboard', [AdminController::class, 'indexDash'])->name('dashboard.indexDash');


});


Route::middleware(['guest'])->group(function () {

    // Route Message
    Route::get('/', [MessageController::class, 'index'])->name('landing.index');

    //Route  message post
    Route::post('/', [MessageController::class, 'store'])->name('landing.store');

        // Route Register
        Route::get('/register', [RegisterController::class, 'register'])->name('auth.register');

        Route::post('/register', [RegisterController::class, 'store'])->name('auth.store');

        // Route Login
        Route::get('/login', [LoginController::class, 'index'])->name('login');

        Route::post('/login', [LoginController::class, 'login'])->name('auth.login');

});
