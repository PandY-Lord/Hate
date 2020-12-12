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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addcontent', function () {
    return view('addcontent');
})->name('addcontent');


Auth::routes();

Route::post('/addcontent/submit', 'ContactControler@submit')->name('contact-form');
Route::get('/home', 'HomeController@index')->name('home');
