<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\AdminController;
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

Route::prefix('admin')->middleware('auth','isAdmin')->group(
    function()
    {
        Route::get('/dashboard',[Admincontroller::class,'index'])->name('dashboard');
        Route::get('/add-products',[Admincontroller::class,'create'])->name('add-products');
        Route::post('/add-products',[Admincontroller::class,'store']);
        Route::get('/products',[Admincontroller::class,'product'])->name('products');
        Route::get('/edit-products/{id}',[Admincontroller::class,'edit'])->name('edit-products');
        Route::put('/update-products/{id}',[Admincontroller::class,'update'])->name('update-products');
        Route::get('/delete-products/{id}',[Admincontroller::class,'destroy'])->name('delete-products');
        
        // Route::get('/add-products',[Admincontroller::class,'create']);

    }

   
);

Route::get('/contact',[SendMailController::class,'index'])->name('contact');
    Route::post('/sendMail',[SendMailController::class,'sendMail'])->name('sendMail');
    
    Route::get('/blog',[Admincontroller::class,'productUsers'])->name('blog');

