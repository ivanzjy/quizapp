<?php

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

Route::get('/', function () {
    return view('admin.index');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::group(['middleware' => 'isAdmin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('quiz', 'QuizController');
    Route::resource('question', 'QuestionController');
    Route::resource('user', 'UserController');
    Route::get('quiz/{id}/questions', 'QuizController@question')->name('quiz.question');
});


