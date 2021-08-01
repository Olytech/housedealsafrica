<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect('/index');
});

Auth::routes();

Route::get('pages-login', 'VeltrixController@index');
Route::get('pages-login-2', 'VeltrixController@index');
Route::get('pages-register', 'VeltrixController@index');
Route::get('pages-register-2', 'VeltrixController@index');
Route::get('pages-recoverpw', 'VeltrixController@index');
Route::get('pages-recoverpw-2', 'VeltrixController@index');
Route::get('pages-lock-screen', 'VeltrixController@index');
Route::get('pages-lock-screen-2', 'VeltrixController@index');
Route::get('pages-404', 'VeltrixController@index');
Route::get('pages-500', 'VeltrixController@index');
Route::get('pages-maintenance', 'VeltrixController@index');
Route::get('pages-comingsoon', 'VeltrixController@index');


Route::get('{any}', 'HomeController@index');

Route::get('index/{locale}', 'LocaleController@lang');


// route group for admin


Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){

    Route::get('/', 'AdminPageController@home')->name('admin.home');

    Route::get('/members', 'AdminPageController@members')->name('admin.members');

    Route::get('/member', 'AdminPageController@member')->name('admin.member');

    Route::get('/properties', 'AdminPageController@properties')->name('admin.properties');

    Route::get('/property', 'AdminPageController@property')->name('admin.property');

    Route::get('/transactions', 'AdminPageController@transactions')->name('admin.transactions');

    Route::get('/transaction', 'AdminPageController@transaction')->name('admin.transaction');



});


// route group user

Route::group(['middleware' => ['auth', 'user'], 'prefix' => 'user'], function(){

    Route::get('/', 'UsersPageController@home')->name('user.home');

    Route::get('/profile', 'UsersPageController@profile')->name('user.profile');

    Route::get('/reservations', 'UsersPageController@reservations')->name('user.reservations');

    Route::get('/reservation', 'UsersPageController@reservation')->name('user.reservation');

    Route::get('/notifications', 'UsersPageController@notifications')->name('user.notifications');



});


// route group partners


Route::group(['middleware' => ['auth', 'partners'], 'prefix' => 'partners'], function(){

    Route::get('/', 'PartnersPageController@home')->name('partners.home');

    Route::get('/profile', 'PartnersPageController@profile')->name('partners.profile');

    Route::get('/notifications', 'PartnersPageController@notifications')->name('partners.notifications');

    Route::get('/properties', 'PartnersPageController@properties')->name('partners.properties');

    Route::get('/property', 'PartnersPageController@property')->name('partners.property');

    Route::get('/adverts', 'PartnersPageController@adverts')->name('partners.adverts');

    Route::get('/advert', 'PartnersPageController@advert')->name('partners.advert');

    
});




