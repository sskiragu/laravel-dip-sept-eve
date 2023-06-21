<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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
    return view('home');
});

Route::get('/about', function (){
    return view('about');
});

Route::get('/services', function (){
    return view('services');
});

Route::get('/contacts', function (){
    return view('contacts');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/signup', function (){
    return view('signup');
});

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function (){
        return view('dashboard');
    });

});

Route::post('/process_signup', [UserController::class, 'store'] );
Route::post('/login', [AuthController::class, 'login'] )->name('login');
Route::get('/logout', [AuthController::class, 'logout'] );
