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



Auth::routes();
Route::resource('news', 'PostsController');
Route::resource('link', 'LinksController', ['only' => ['create', 'store']]);
Route::get('r/{link}', ['as' => 'link.show', 'uses' =>'LinksController@show'])->where('link', '[0-9]+');

// Systeme raccourcisseur d'url
// Route::get('links/create', 'LinksController@create');
// Route::post('links/create', 'LinksController@store');
// Fin Systeme raccourcisseur d'url


Route::get('/', ['as' => 'accueil', 'uses' => 'HomeController@accueil']);
Route::get('/contact', ['as' => 'contact', 'uses' => 'PagesController@contact']);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/a-propos', ['as' => 'propos', 'uses' => 'PagesController@about']);
