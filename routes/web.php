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

Route::get('/', 'InterviewController@index') ->name("interviews.index");

Route::get('/companies/create', 'CompanyController@showCreateForm')->name('companies.create');
Route::post('/companies/create', 'CompanyController@create');