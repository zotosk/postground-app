<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Auth::loginUsingId(13);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/profiles/{user:username}', 'ProfileController@show')->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets', 'TweetsController@store');
    Route::post('/profiles/{user:username}/follow', 'FollowsController@store');
    Route::get('/profiles/{user:username}/edit', 'ProfileController@edit')->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', 'ProfileController@update')->middleware('can:edit,user');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('/explore', 'ExploreController@index');
});


Auth::routes();
