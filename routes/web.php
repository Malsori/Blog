<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SendMailController;

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



Route::get('/features', function () {
    return view('blog.features');
})->name('features');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/add-products', [AdminController::class, 'create'])->name('add-products_admin');
    Route::post('/add-products', [AdminController::class, 'store']);
    Route::get('/products', [AdminController::class, 'product'])->name('products_admin');
    Route::get('/edit-products/{id}', [AdminController::class, 'edit'])->name('edit-products');
    Route::put('/update-products/{id}', [AdminController::class, 'update'])->name('update-products');
    Route::get('/delete-products/{id}', [AdminController::class, 'destroy'])->name('delete-products');
});

Route::prefix('user')->middleware('auth', 'isUser')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
    Route::get('/add-products', [UserController::class, 'create'])->name('add-products');
    Route::post('/add-products', [UserController::class, 'store']);
    Route::get('/products', [UserController::class, 'product'])->name('products');
    Route::get('/edit-products/{id}', [UserController::class, 'edit'])->name('edit-products');
    Route::put('/update-products/{id}', [UserController::class, 'update'])->name('update-products');
    Route::get('/delete-products/{id}', [UserController::class, 'destroy'])->name('delete-products');
    Route::get('/searchUser', [UserController::class, 'searchUser'])->name('searchUser');
    Route::get('/userProducts/{id}', [UserController::class, 'userProducts'])->name('userProducts');
    Route::get('/requests', [UserController::class, 'requests'])->name('requests');
    Route::post('/follow', [UserController::class, 'follow'])->name('follow');
});








Route::get('/contact',[SendMailController::class,'index'])->name('contact');
    Route::post('/sendMail',[SendMailController::class,'sendMail'])->name('sendMail');
    
    Route::get('/blog',[AdminController::class,'productUsers'])->name('blog');

