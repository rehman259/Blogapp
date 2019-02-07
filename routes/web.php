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

/*Route::get('/', function () {
    
    return view('welcome');
});*/

Route::get("/","PostsController@index");


/*Route::get('/{id}/{username}', function ($id,$username) {
	return "ID=".$id."&nbsp;Name=".$username;
});*/

Route::get("page/about","PageController@about");
Route::get("page/services","PageController@services");
Route::resource("posts","PostsController");
Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

// Route to send email notfication
Route::get('sendemail', 'PostsController@sendNotificationByemail');
