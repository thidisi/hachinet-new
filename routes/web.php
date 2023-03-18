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
// login
Route::middleware('guest')->prefix('/')->group(function () {
    Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
});
Route::get('/logout', [AuthController::class, 'getLogout'])->name('getLogout');
Route::get('/', [HomeController::class, 'index'])->name('home');
//contact
Route::resource('contacts', ContactController::class)->only('store');
Route::post('contactEmail', [ContactController::class, 'submitEmail'])->name('contact.submitEmail');
Route::post('contactHomeEmail', [ContactController::class, 'homeEmail'])->name('contact.homeEmail');
Route::post('contact_mail_feed_back', [ContactController::class, 'feedbackEmail'])->name('contact.feedbackEmail');

//client
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/blogs', [ClientBlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [ClientBlogController::class, 'show'])->name('blog-detail');
// Route::get('/blog-two', function () {
//     return view('blog-two');
// });
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/privacy-statement', function () {
    return view('privacy-statement');
})->name('privacy-statement');
Route::get('/products', function () {
    return view('products');
})->name('products');
// Route::get('/project-details-one', function () {
//     return view('project-details-on e');
// })->name('project-details-one');
// Route::get('/project-details-two', function () {
//     return view('project-details-two');
// })->name('project-details-two');
// Route::get('/projects-one', function () {
//     return view('projects-one');
// })->name('projects-one');
// Route::get('/projects-two', function () {
//     return view('projects-two');
// })->name('projects-two');
Route::get('/service-details', function () {
    return view('service-details');
})->name('service-details');
Route::get('/services-one', function () {
    return view('services-one');
})->name('services-one');
Route::get('/services', function () {
    return view('services');
})->name('services');
// Route::get('/team', function () {
//     return view('team');
// })->name('team');
Route::get('/terms-of-use', function () {
    return view('terms-of-use');
})->name('terms-of-use');

Route::get('/salesforce-development-outsource', function () {
    return view('salesforce-os-details');
})->name('salesforce-development-outsource');
Route::get('/case-study', [CasestudyController::class, 'index'])->name('case-study');
Route::get('/case-study/{slug}', [CasestudyController::class, 'show'])->name('case-study.show');
// service
Route::get('/java-systems-development', function () {
    return view('java-systems-development');
})->name('java-systems-development');
Route::get('/outsourcing-angular-development', function () {
    return view('outsourcing-angular-development');
})->name('outsourcing-angular-development');
Route::get('/cobol-systems-development', function () {
    return view('cobol-systems-development');
})->name('cobol-systems-development');
Route::get('/net-systems-development', function () {
    return view('net-systems-development');
})->name('net-systems-development');
Route::get('/smartphone-application-development', function () {
    return view('smartphone-application-development');
})->name('smartphone-application-development');

Route::get('/service-testing-outsource', function () {
    return view('service-testing-outsource');
})->name('service-testing-outsource');

Route::get('/service-of-human-resources', function () {
    return view('service-of-human-resources');
})->name('service-of-human-resources');

Route::get('/project-details-one', function () {
    return view('project-details-one');
})->name('project-details-one');

Route::get('/software-outsourcing', function () {
    return view('software_development');
})->name('software-development');

Route::get('/software-testing', function () {
    return view('software-testing');
})->name('software-testing');


// redirect to page does not exist => luôn là route cuối cùng
Route::get('{code}', function () {
    return redirect()->route('home');
});

// Route::get('email', function () {
//     $data['name'] = 'Nhân viên';
//     $data['email'] = 'trandoantrong2000@gmail.com';
//     $data['subject'] = 'Nhân viên';
//     $data['message'] = 'Nhân viên chào bạn';
//     $data['phone'] = '0975928483';
//     return view('emails.homeMail', compact('data'));
// });
