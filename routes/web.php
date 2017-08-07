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

// Main routes for viewing dashboard.
Route::get('/dashboard', 'DashboardController@index');
Route::get('/', 'DashboardController@index');

// Signing/register form routes.
Route::get('/login', 'LoginController@login');
Route::get('/register','LoginController@register');

// Logout Route.
Route::get('/logout','LoginController@logout');

// Authenticate/Create user routes.
Route::post('/authenticate','LoginController@authenticate');  
Route::post('/store','LoginController@store');  

