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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/interviews/index', 'InterviewController@index') ->name("interviews.index");
Route::get('/companies/{id}/interviews/create', 'InterviewController@showCreateForm')->name('interviews.create');
Route::post('/companies/{id}/interviews/create', 'InterviewController@create');
Route::get('/companies/{id}/interviews/{interview_id}/edit', 'InterviewController@showEditForm')->name('interviews.edit');
Route::post('/companies/{id}/interviews/{interview_id}/edit', 'InterviewController@edit');

Route::get('/companies/create', 'CompanyController@showCreateForm')->name('companies.create');
Route::post('/companies/create', 'CompanyController@create');