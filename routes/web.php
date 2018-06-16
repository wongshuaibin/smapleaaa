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

//主页
Route::get('/', 'StaticPagesController@home')->name('home');
//帮助页
Route::get('/help', 'StaticPagesController@help')->name('help');
//关于页
Route::get('/about', 'StaticPagesController@about')->name('about');

//注册页
Route::get('/signup', 'UsersController@create')->name('signup');
//用户控制器详见入门教程6.2章
Route::resource('users', 'UsersController');

//显示登录页面
Route::get('login', 'SessionsController@create')->name('login');
//创建新会话(登录)
Route::post('login', 'SessionsController@store')->name('login');
//销毁会话(退出登录)
Route::delete('logout', 'SessionsController@destroy')->name('logout');

//注册用户验证邮箱
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

//重设密码
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
