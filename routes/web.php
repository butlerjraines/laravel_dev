<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;
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
   return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('foo', function () {
  return 'Hello World';
});

Route::get('about', function () {
  return view('about');
});

//show all users
Route::get('users', function () {
  return view('users');
});

//show a user
Route::get('user/{id}', function ($id) {
  return 'User '.$id;
});

//Route::get('surveys', 'SurveyController@index');
Route::get('surveys', [SurveyController::class, 'index']);
//Route::get('surveys', function()  {
  //return view('survey');
  //return 'hi';
//});