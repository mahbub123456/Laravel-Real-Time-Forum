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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//questions
Route::get('/question/details/{id}','QuestionController@details')->name('question.details');
Route::get('/question/create','QuestionController@create')->name('question.create');
Route::post('/question/store','QuestionController@store')->name('question.store');
Route::get('/question/delete/{id}','QuestionController@delete')->name('question.delete');
Route::get('/question/edit/{id}','QuestionController@edit')->name('question.edit');
Route::post('/question/update/{id}','QuestionController@update')->name('question.update');


//Category

Route::get('/category/create','CategoryController@create')->name('category.create');
Route::post('/category/save','CategoryController@store')->name('category.store');
//Route::get('/category/index','CategoryController@index')->name('category.index');
