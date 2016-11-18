<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','UserController@index');
Route::post('/upload','UserController@upload');
Route::get('/login','LoginController@login');
Route::any('/selfreport','ReportController@selfreport');
Route::any('/green','ReportController@green');
Route::any('/arrive','ReportController@arrive');
Route::any('/delay','ReportController@delay');
Route::any('/dorm','UserController@dorm');
Route::any('/mustknow','DataController@mustknow');
Route::any('/notice','DataController@notice');
Route::any('/data','DataController@data');
Route::any('/ask','DataController@ask');
Route::any('/self','SelfhelpController@index');
Route::any('/route','SelfhelpController@route');
Route::any('/usercenter','UserController@usercenter');
Route::any('/user-info','UserController@userinfo');
Route::any('/reportcard','UserController@reportcard');
Route::any('/commonquestion','AdviceController@commonquestion');
Route::any('/answer','AdviceController@answer');
Route::any('/myanswer','AdviceController@myanswer');
Route::any('/tiwen','AdviceController@tiwen');
Route::any('/change','AdviceController@change');
Route::any('login','UserController@login');
Route::any('/myuploaDate','DataController@myuploaDate');
Route::any('/uploaDate','DataController@uploaDate');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
