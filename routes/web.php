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

Route::redirect('/','/user');
Route::get('/',function(){

	return view('welcome');

});
Route::get('/name',function(){
	return "Hello Fadwa in Laravel ";
});
Route::get('/user/{id}',function($id){

	return "Hello MS.fadwa ".$id;

});
Route::get('/name/{name?}',function($name = 'Jone'){

	return "Your Name is ".$name;
});
Route::get('/user/{name?}',function($name = 'Jone'){

	return "Your Name is ".$name;

});

Route::get('/userid/{id}',function($id){

	return "UserID ".$id;

});
*/
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

//get all routes list 
Route::resource('posts','PostsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
