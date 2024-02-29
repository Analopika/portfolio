<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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
})->name('home');

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::post('/send', [MailController::class, 'index'])->name('send-email');

Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('register', [AuthManager::class, 'register'])->name('register');
Route::post('register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::group(['middleware' => 'auth'], function(){
    Route::get('portfolio', function(){
        return view('portfolio');
    })->name('portfolio');

    Route::get('logout', [AuthManager::class, 'logout'])->name('logout');
});

