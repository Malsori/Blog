<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;

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
    return view('blog.index');
})->name('home');

Route::get('/about', function () {
    return view('blog.about');
})->name('about');

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');

Route::get('/features', function () {
    return view('blog.features');
})->name('features');

Route::get('/contact', function () {
    return view('blog.contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin',[AdminController::class,'index'])->name('admin');

Route::prefix('admin')->middleware('auth','isAdmin')->get('/dashboard',[Admincontroller::class,'index']);


