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

Route::get('/', function () { return redirect('admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::resource('abilities', 'Admin\AbilitiesController');
    Route::post('abilities_mass_destroy', ['uses' => 'Admin\AbilitiesController@massDestroy', 'as' => 'abilities.mass_destroy']);
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);

});

// Herbarium Routes
Route::get('herbariums', 'Data\HerbariumsController@index')->name('herbariums.index');
Route::post('herbariums', 'Data\herbariumsController@create')->name('herbariums.create');
Route::get('herbariums', 'Data\herbariumsController@edit')->name('herbariums.edit');



// Collector Routes
Route::get('collectors', 'Data\CollectorsController@index')->name('collectors.index');
Route::post('collectors', 'Data\CollectorsController@create')->name('collectors.create');
Route::get('collectors', 'Data\CollectorsController@edit')->name('collectors.edit');


// Collections Routes
Route::get('collections', 'Data\CollectionsController@index')->name('collections.index');
Route::post('collections', 'Data\CollectionsController@create')->name('collection.create');
Route::get('collections', 'Data\CollectionsController@edit')->name('collection.edit');



// old route config.

// Route::get('/', 'StaticPagesController@home')->name('home');
// Route::get('/help', 'StaticPagesController@help')->name('help');
// Route::get('/about', 'StaticPagesController@about')->name('about');
//
//
// Route::get('signup', 'UsersController@create')->name('signup');
// Route::resource('users', 'UsersController');
//
// Route::get('login', 'SessionsController@create')->name('login');
// Route::post('login', 'SessionsController@store')->name('login');
// Route::delete('logout', 'SessionsController@destroy')->name('logout');
//
// Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');
//
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
