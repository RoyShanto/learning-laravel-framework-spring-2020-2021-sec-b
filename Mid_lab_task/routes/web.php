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


Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

route::get('/home', 'HomeController@index');
// route::get('/home/customers', 'HomeController@manage_customer');
// route::get('/home/customers/add_customer', 'HomeController@add_manage');

// route::get('/home/static_contents', 'HomeController@static_contents');




// route::get('/home/vendors', 'HomeController@manage_vendors');
// route::get('/home/others_company_stuffs', 'HomeController@others_company_stuffs');

route::get('/logout', 'LogoutController@index');
