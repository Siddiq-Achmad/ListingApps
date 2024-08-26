<?php



use App\Http\Controllers\API\Surveys\AnswerController;
use App\Http\Controllers\API\Surveys\QuestionController;
use App\Http\Controllers\API\Surveys\ResponseController;
use App\Http\Controllers\API\Surveys\SurveyController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('oauth/token', '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');

Route::group(['middleware' => 'auth:api'], function () {    
    Route::get('logout', [AuthController::class, 'logout']);


    Route::get('/answers', [AnswerController::class, 'index']);
    Route::get('/questions', [QuestionController::class, 'index']);
    Route::get('/surveys', [SurveyController::class, 'index']);
    Route::get('/responses', [ResponseController::class, 'index']);

});

