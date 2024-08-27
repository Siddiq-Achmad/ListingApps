<?php

use App\Http\Controllers\Auth\LoginHistoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Surveys\AnswerController;
use App\Http\Controllers\Surveys\QuestionController;
use App\Http\Controllers\Surveys\ResponseController;
use App\Http\Controllers\Surveys\SurveyController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Users\UserController;
use App\Http\Controllers\Users\UserDetailController;
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
Route::get('/listings', [FrontendController::class, 'listing'])->name('listing');
Route::get('/404', [FrontendController::class, 'notFound'])->name('404');

Route::get('/search', [FrontendController::class, 'search'])->name('search');

Route::get('/survey', [FrontendController::class, 'survey'])->name('survey');
Route::post('/survey', [FrontendController::class, 'surveyStore'])->name('surveyStore');





//Update User Details
Route::post('/update-profile/{id}', [HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [HomeController::class, 'updatePassword'])->name('updatePassword');

//Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');






//BACKEND ROUTES
Route::group(['middleware' => 'auth'], function () {

    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);
    Route::resource('tags', TagController::class);
    Route::resource('subscribers', SubscriberController::class);
    Route::resource('surveys', SurveyController::class);
    Route::resource('questions', QuestionController::class);
    Route::resource('answers', AnswerController::class);
    Route::resource('respondents', ResponseController::class);
    
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::post('/logout-device/{id}', [LoginHistoryController::class, 'logoutDevice'])->name('logout.device');

    Route::get('/info', [HomeController::class, 'info'])->name('info');


    Route::get('/surveys-list', [SurveyController::class, 'survey'])->name('surveys.list');
    Route::get('/questions-list', [QuestionController::class, 'questions'])->name('questions.list');
    Route::get('/responses-list', [ResponseController::class, 'responses'])->name('responses.list');
    Route::get('/answers-list', [AnswerController::class, 'answers'])->name('answers.list');

    Route::get('/users-list', [UserController::class, 'users'])->name('users.list');
    Route::get('/userdetails', [UserDetailController::class, 'show'])->name('userdetail');
    Route::post('/userdetails', [UserDetailController::class, 'update'])->name('userdetail.update');
    Route::get('/profile', [UserProfileController::class, 'index'])->name('profile');
    Route::get('/profile-settings', [UserProfileController::class, 'show'])->name('profileSettings');
    Route::put('/profile-settings', [UserProfileController::class, 'updateProfile'])->name('profile.update');
    Route::put('/profile/change-password', [UserProfileController::class, 'changePassword'])->name('profile.changePassword');
    Route::put('/profile/change-email', [UserProfileController::class, 'changeEmail'])->name('profile.changeEmail');


    //ON PRODUCTION ONLY
    //Route::get('{any}', [HomeController::class, 'index'])->where('any', '.*');
    

});

Route::fallback(function () {
    if(!Auth::check()){
        return response()->view('frontend.errors.404', [], 404);
    }
    else{
        return response()->view('errors.404', [], 404);
    }
});



