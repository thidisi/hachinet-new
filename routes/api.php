<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CasestudyController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\UploadFileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//category admin
Route::get('list_category', [CategoryController::class, 'list_category'])->name('api.categories.list');
Route::get('edit_category/{id}', [CategoryController::class, 'showCate'])->name('api.categories.edit');
Route::resource('categories', CategoryController::class)->only('store', 'update', 'destroy');
//blogs admin
Route::get('list_blog', [BlogController::class, 'list_blog'])->name('api.blogs.list');
Route::get('list_case', [CasestudyController::class, 'list_case'])->name('api.case-study.list');
//accounts admin
Route::get('list_account', [UserController::class, 'list_account'])->name('api.accounts.list');
Route::get('edit_account/{id}', [UserController::class, 'showAccount'])->name('api.accounts.edit');
Route::resource('accounts', UserController::class)->only('store', 'update', 'destroy');
// contact admin
Route::get('list_contact', [AdminContactController::class, 'list_contact'])->name('api.contacts.list');
Route::get('list_contact/{id}', [AdminContactController::class, 'show_contact'])->name('api.contacts.show_contact');
Route::post('confirm_calendar', [HomeController::class, 'confirm_calendar'])->name('api.confirm_calendar');

Route::post('uploadImage/{id}', [UploadFileController::class, 'uploadImageDel'])->name('api.upload.image.del');
// redirect to page does not exist => luôn là route cuối cùng
Route::get('{code}', function () {
    return redirect()->route('home');
});
// Route::resource('blogs', BlogController::class)->only('store', 'update', 'destroy');
// Route::resource('contacts', ContactController::class)->only('store');
