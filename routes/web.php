<?php

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

//use Illuminate\Routing\Route;

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'Frontend\FrontendController@index');
Route::get('about-us','Frontend\FrontendController@aboutUs')->name('about.us');
Route::get('contact-us','Frontend\FrontendController@contactUs')->name('contact.us');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::prefix('users')->group(function(){
    Route::get('/view', 'Backend\UserController@view')->name('user.view');
    Route::get('/add', 'Backend\UserController@add')->name('user.add');
    Route::post('/store', 'Backend\UserController@store')->name('user.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('user.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('user.update');
    Route::get('/delete/{id}', 'Backend\UserController@delete')->name('user.delete');
});
