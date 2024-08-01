<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Users\UserDetailController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Users\UserProfileController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Language Translation

Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);



//FRONTEND ROUTES


Route::get('/auth', [FrontendController::class, 'auth'])->name('auth');
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/packages', [FrontendController::class, 'packages'])->name('packages');
Route::get('/how-it-work', [FrontendController::class, 'howItWork'])->name('howItWork');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/listing', [FrontendController::class, 'listing'])->name('listing');





//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//BACKEND ROUTES
Route::group(['middleware' => 'auth'], function () {

    Route::get('/index', [HomeController::class, 'root'])->name('root');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');


    Route::get('/userdetail', [UserDetailController::class, 'show'])->name('userdetail');
    Route::post('/userdetail', [UserDetailController::class, 'update'])->name('userdetail.update');
    Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
    Route::get('/profile-settings', [UserProfileController::class, 'show'])->name('profileSettings');
    Route::put('/profile-settings', [UserProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/change-password', [UserProfileController::class, 'changePassword'])->name('profile.changePassword');
    Route::put('/profile/change-email', [UserProfileController::class, 'changeEmail'])->name('profile.changeEmail');
    Route::resource('users', UserController::class);


    Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->where('any', '.*');

});

Route::fallback(function () {
    return response()->view('frontend.errors.404', [], 404);
});




