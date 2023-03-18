<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CasestudyController as AdminCasestudyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\BlogController as ClientBlogController;
use App\Http\Controllers\Client\CasestudyController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('categories', CategoryController::class)->only('index');
    Route::resource('blogs', BlogController::class)->only('index', 'create', 'edit', 'store', 'update', 'destroy');
    Route::get('/account', [UserController::class, 'index'])->name('account');
    Route::get('/contact', [AdminContactController::class, 'index'])->name('contact');
    // case study
    Route::get('/case-study', [AdminCasestudyController::class, 'index'])->name('case-study');
    Route::get('/case-study/create', [AdminCasestudyController::class, 'create'])->name('case-study.create');
    Route::post('/case-study/create', [AdminCasestudyController::class, 'store'])->name('case-study.store');
    Route::get('/case-study/{id}/edit', [AdminCasestudyController::class, 'edit'])->name('case-study.edit');
    Route::put('/case-study/{id}', [AdminCasestudyController::class, 'update'])->name('case-study.update');
    Route::delete('/case-study/{id}', [AdminCasestudyController::class, 'destroy'])->name('case-study.destroy');
    //profile
    Route::get('/profile/{id}', [UserController::class, 'profile'])->name('profile');
    Route::post('/updateProfile/{id}', [UserController::class, 'updateProfile'])->name('updateProfile');

    // redirect to page does not exist => luôn là route cuối cùng
    Route::get('{code}', function () {
        return redirect()->route('home');
    });
});
