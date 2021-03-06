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
    $user = Session::get('username');
    if(!$user) return redirect('/login');
    return view('index');
});
Route::get('/login', 'LoginController1@index');
Route::post('/login', 'LoginController1@login');
Route::get('/logout', 'LogoutController@logout');
Route::get('/register', 'NewUserController@index');
Route::post('/register', 'NewUserController@create');
Route::group(['middleware' => ['web']], function () {
    Route::get('/user', function(Request $request) {
        $user = Session::get("username");
        return $user;
    });
});
Route::post('/resetPassword', 'LoginController1@resetPassword');
Route::get('/resetPassword', function() {
    return view('/resetPassword');
});
Route::resource('tasks', 'TasksController');
Route::patch('/task/{id}', 'TaskController@toggleComplete');