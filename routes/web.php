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
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');

Route::get('signup','UsersController@create')->name('signup');
Route::resource('users', 'UsersController');

Route::get('login','SessionsController@create')->name('login');    //显示登陆页面
Route::post('login','SessionsController@store')->name('login');    //创建新会话（登陆）
Route::delete('logout','SessionsController@destroy')->name('logout');    //销毁会话（退出登陆)

Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');//注册生产token验证邮箱

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);

Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');//用户关注
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');//用户粉丝

Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');//关注用户
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');//取消关注

