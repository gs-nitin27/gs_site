<?php

/*

|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('articles','HomeController@getArticles');

Route::get('event_tour','HomeController@getEvent_Tour');

Route::get('job','HomeController@getJob');

Route::get('/','HomeController@index');




?>