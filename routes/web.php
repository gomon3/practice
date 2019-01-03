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

/*Route::get('/test', function(){
    $user = new App\User;

    $user->name = 'Admin';
    $user->email = 'admin@admin.com';
    $user->password = bcrypt('admin');

    $user->save();
});*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::resource('sections', 'SectionController');
Route::resource('icons', 'IconController');
Route::resource('faqs', 'FaqController');
Route::resource('solutions', 'SolutionController');


//Route::get('/admin', 'AdministrationController@admin')->name('admin.show.login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.show');
Route::post('login', 'Auth\LoginController@Login')->name('login.login');
Route::get('logout', 'Auth\LoginController@logout')->name('login.logout');


//Página CRUD de íconos
/*Route::get('/admin/icons', 'AdministrationController@icon')->name('admin.show.icons');

//Página CRUD de Secciones
Route::get('/admin/sections', 'AdministrationController@section')->name('admin.show.sections');*/