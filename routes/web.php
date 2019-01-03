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
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/faqs', function(){
    $sections = new App\Section;
    $sections = $sections::all();

    $faqs = new App\Faq;
    $faqs = $faqs::all();

    return view('faqs', compact('sections', 'faqs'));
})->name('faqs');


Route::resource('admin/sections', 'SectionController')->except('show');
Route::resource('admin/icons', 'IconController')->except('show');
Route::resource('admin/faqs', 'FaqController')->except('show');
Route::resource('admin/solutions', 'SolutionController')->except('show');



Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('login.show');
Route::post('admin/login', 'Auth\LoginController@Login')->name('login.login');
Route::get('admin/logout', 'Auth\LoginController@logout')->name('login.logout');