<?php

use ErlandMuchasaj\LaravelFileUploader\FileUploader; // <= import the package
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\UploadController;

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

Route::get('/blog-home', function () {
    return view('blog-home');
});

Route::get('/blog-post', function () {
    return view('blog-post');
});

Route::get('/calendar-page', function () {
    return view('calendar-page');
});

Route::get('/elements-page', function () {
    return view('elements-page');
});

Route::get('/index-video', function () {
    return view('index-video');
});

Route::get('/sidebar-page', function () {
    return view('sidebar-page');
});


Route::resource('posts', 'PostController');

Route::middleware('auth')->group(function () {
    Route::resource('posts', 'PostController');
});


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
});




/*Weken/opdrachten*/
Route::get('/week1', function () {
    return view('./weken/week-1');
});
Route::get('/week2', function () {
    return view('./weken/week-2');
});

/*File upload*/

Route::post('/upload', [UploadController::class, 'store']);


