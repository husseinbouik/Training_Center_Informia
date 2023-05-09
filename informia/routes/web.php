<?php

use Illuminate\Support\Facades\Route;

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



// Route::get('/', 'HomeController@index');
Route::get('/signin', 'AuthController@signin');
Route::get('/signup', 'RegisterController@store');
Route::get('/profile', 'ProfileController@index');
Route::get('/trainings', 'TrainingController@index');
Route::get('/detailtraining/{id}', 'DetailTrainingController@detail');
Route::get('/archive', 'ArchiveController@index');
Route::get('/recents', 'RecentsController@index');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/signin', function () {
    return view('signin');
});

Route::get('/signup', function () {
    return view('training');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/trainings', function () {
    return view('trainings');
});

Route::get('/detailtraining/{id}', function ($id) {
    return view('detailtraining', compact('id'));
});

Route::get('/archive', function () {
    return view('archive');
});

Route::get('/recents', function () {
    return view('recents');
});
