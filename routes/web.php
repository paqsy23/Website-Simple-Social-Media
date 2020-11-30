<?php

use App\Http\Controllers\GameController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@showHome');
Route::get('{id}', 'MainController@showHome');



Route::group(['prefix' => 'account'], function () {
    Route::get('login', 'LoginRegisterController@showLogin');
    Route::post('login', 'LoginRegisterController@loginProcess');
    Route::get('register', 'LoginRegisterController@showRegister');
    Route::post('register', 'LoginRegisterController@registerProcess');
    Route::get('logout', 'LoginRegisterController@logout');

    Route::get('/', 'UserController@dashboard');
    Route::get('orders', 'UserController@order');
    Route::get('address', 'UserController@addresses');
    Route::get('detail', 'UserController@accountDetails');
    Route::post('edit', 'UserController@editDetails');
    Route::post('edit-password', 'UserController@editPassword');
    Route::post('checkout','UserController@checkout');
    Route::post('done','UserController@done');
});

Route::get('/game/{id}','GameController@showGameDetail');
Route::get('/tambahTag','GameController@tambahTag');

// Admin
Route::group(['middleware'=>['AdminOnly'],'prefix' => 'admin'], function () {
    Route::get('/login', function () {
        return view('admin.login');
    })->withoutMiddleware('AdminOnly');
    Route::post('/login','AdminController@login')->withoutMiddleware('AdminOnly');
    Route::get('/home','AdminController@home');
    Route::get('/developer','AdminController@developer');
    Route::get('/report','AdminController@report');
    Route::get('/logout','AdminController@logout');
    Route::get('/developer/{id}','AdminController@developerDetail');
    Route::get('/reactivate/game/{id}','AdminController@reactivateGame');
    Route::get('/ban/game/{id}','AdminController@banGame');
    Route::get('/confirm/developer/{id}','AdminController@confirmDeveloper');
    Route::get('/reject/developer/{id}','AdminController@rejectDeveloper');
});

// Developer
Route::group(['middleware'=>['DeveloperOnly'],'prefix' => 'developer'], function () {
    Route::get('/login',function(){
        return view('developer.login');
    })->withoutMiddleware('DeveloperOnly');
    Route::post('/login','DeveloperController@login')->withoutMiddleware('DeveloperOnly');
    Route::get('/register',function(){
        return view('developer.register');
    })->withoutMiddleware('DeveloperOnly');
    Route::get('/forgetpassword',function(){
        return view('developer.forgotpassword');
    })->withoutMiddleware('DeveloperOnly');
    Route::post('/resetPasswordToken','DeveloperController@prosesResetPasswordToken')->withoutMiddleware('DeveloperOnly');
    Route::post('/forgetpassword','DeveloperController@resetPassword')->withoutMiddleware('DeveloperOnly');
    Route::get('/editprofile/{id}','DeveloperController@showEditprofile');
    Route::post('/editprofile','DeveloperController@editProfile');
    Route::post('/register','DeveloperController@Register')->withoutMiddleware('DeveloperOnly');
    Route::get('/home','DeveloperController@home');
    Route::get('/gamelist','DeveloperController@gameList');
    Route::get('/newGame','DeveloperController@newGame');
    Route::get('/reactivate/{id}','DeveloperController@reactivate');
    Route::get('/deactivate/{id}','DeveloperController@deactivate');
    Route::post('/insertGame','DeveloperController@insertGame');
    Route::get('/logout','DeveloperController@logout');
});

Route::get('/resetpassword/{token}','DeveloperController@resetPasswordToken');
