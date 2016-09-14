<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

$router->group([
    'namespace' => 'Postpone'
], function() {
    Route::get('/postpone/exams', 'ExamController@index');
    Route::get('/postpone/studies', 'StudyController@index');
});

$router->group([
    'middleware' => 'auth'
], function() {
    Route::get('/appeals', 'AppealController@index');
    Route::get('/appeals/new', 'AppealController@create');
});

