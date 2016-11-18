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

/*Route::get('/', 'WelcomeController@index');
Route::get('my','MyController@index');
Route::get('home', 'HomeController@index');
Route::get('di_login', 'LoginController@index');
Route::get('liu', 'LiuController@index');
Route::get('login', 'loginController@show');
Route::get('update', 'loginController@update');
Route::post('/add', 'LiuController@add');
Route::post('/index', 'LiuController@index');
Route::post('/a', 'LiuController@store');
Route::get('/show1', 'LiuController@show');
Route::get('/insert', 'LiuController@store');
Route::post('/del', 'LiuController@del');
Route::post('/upload', 'LiuController@upload');
Route::post('/dd', 'LiuController@dd');
Route::post('/login', 'LoginController@index');
Route::post('/xiu', 'LoginController@upload');
Route::post('/show', 'LoginController@show');
Route::get('/qq', 'LoginController@qq');
Route::get('/edit', 'LoginController@edit');
Route::get('/d', 'LoginController@destroy');
Route::get('shore', 'TestController@store');
//第三方登录
Route::get('jing', 'JingController@index');
Route::get('test', 'TestController@index');
Route::get('create', 'TestController@create');
Route::get('/jingstore', 'JingController@store');
Route::post('/jingreset', 'JingController@reset');
//测试
Route::get('li', 'LiController@index');
Route::get('shu', 'LiController@shuzu');
Route::get('log', 'LiController@log');
Route::get('del', 'LiController@del');
Route::get('huan', 'LiController@huan');
Route::get('login1','LiController@login');
//Excel
Route::get('E', 'EController@index');
Route::post('ll', 'EController@login');
Route::get('jk', 'EController@jk');
//测试
Route::get('N','NController@login');
Route::get('index','NController@index');
Route::post('a','NController@login');
Route::post('insert','NController@insert');
Route::get('ton','NController@ton');
Route::get('buton','NController@buton');
Route::get('lton','NController@lton');
Route::get('lbuton','NController@lbuton');
Route::get('ss','CommonController@ss');*/
//首页
Route::get('news','FirstController@news');
Route::get('images','FirstController@images');
Route::get('green','FirstController@green');
Route::get('userinfo','FirstController@selfmessage');
Route::get('dorm','FirstController@drom');
Route::get('arrive','FirstController@arrive');
Route::get('delay','FirstController@delay');
Route::get('login','FirstController@login');
Route::get('change','FirstController@change');
Route::get('myanswer','FirstController@myanswer');
Route::get('myuploaDate','FirstController@myuploaDate');
Route::get('uploaDate','FirstController@uploaDate');
Route::get('tiwen','FirstController@tiwen');
Route::get('commonquestion','FirstController@commonquestion');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
