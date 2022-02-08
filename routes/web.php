<?php

use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'testController@test')->name('index');
Route::get('/', 'VisitorController@index')->name('VPage');
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

#category
Route::get('/category', 'categoryController@show')->name('cat.show');
Route::post('/category/store', 'categoryController@store')->name('cat.store');
Route::get('/category/{id}', 'categoryController@delete')->name('cat.delete');
Route::post('/category/update', 'categoryController@update')->name('cat.update');
#Meal

Route::get('/meal', 'mealController@index')->name('meal.index');
Route::get('/meal/create', 'mealController@create')->name('meal.create');
Route::post('/meal/store', 'mealController@store')->name('meal.store');
Route::get('/meal/edit/{id}', 'mealController@edit')->name('meal.edit'); 
Route::get('/meal/delete/{id}', 'mealController@delete')->name('meal.delete');
Route::post('/meal/update/{id}', 'mealController@update')->name('meal.update');   
Route::get('/meal/show/{id}', 'mealController@show_details')->name('meal_deatails');


#orders router
Route::post('/order/store', 'HomeController@orderStor')->name('order.store');
Route::get('/order/show', 'HomeController@show_order');
Route::post('/order/{id}/status', 'HomeController@changeStatus')->name('order.status');



