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

<<<<<<< .merge_file_a04196
$router->group([
    'namespace' => 'Postpone'
], function () {
    Route::get('/postpone/exams', 'ExamController@index');
    Route::get('/postpone/exams/create', 'ExamController@create');
    Route::post('/postpone/exams', 'ExamController@store');
    Route::get('/postpone/studies', 'StudyController@index');
});

Route::resource('permissions', 'PermissionController');

$router->group([
    'middleware' => 'auth'
], function () {
    Route::get('/appeals', 'AppealController@index');
    Route::get('/appeals/new', 'AppealController@create');
});

=======
Route::resource('users', 'UserController');
Route::post('/users/attachRole', 'UserController@attachRole');

Route::resource('roles', 'RoleController');
Route::post('/roles/attachPermission', 'RoleController@attachPermission');

Route::resource('permissions', 'PermissionController');
>>>>>>> .merge_file_a06028
