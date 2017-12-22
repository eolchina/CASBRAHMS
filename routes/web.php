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
    return view('welcome');

});
// Route::get('/', function () { return redirect('admin/home'); });

//Register Routes
$this->get('register', 'Auth\RegisterController@showRegisterForm')->name('register');
$this->post('register', 'Auth\RegisterController@postRegister');



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
Route::group(['middleware' => ['auth'], 'prefix' => 'data', 'as' => 'data.'], function(){
    Route::resource('herbariums', 'Data\HerbariumsController');
    Route::resource('collectors', 'Data\CollectorsController');
    Route::resource('collections', 'Data\CollectionsController');
    Route::resource('specimens', 'Data\SpecimensController');
    Route::post('herbariums_mass_destroy', ['herbariums' => 'Data\HerbariumsController@massDestroy', 'as' => 'herbariums.mass_destroy']);
    Route::post('collectors_mass_destroy', ['collectors' => 'Data\CollectorsController@massDestroy', 'as' => 'collectors.mass_destroy']);
    Route::post('collections_mass_destroy', ['collections' => 'Data\CollectionsController@massDestroy', 'as' => 'collections.mass_destroy']);
    Route::post('specimens_mass_destroy', ['specimens' => 'Data\SpecimensController@massDestroy', 'as' => 'specimens.mass_destroy']);


});


//Taxonomyterms route
// Route::get('taxonomyterms', 'Data\TaxonomytermsController@index')->name('data.taxonomyterms');
// Route::get('taxonomyterms/data', 'Data\TaxonomytermsController@data');

Route::resource('taxonomyterms', 'Data\TaxonomytermsController');

// Route::controller('taxonomyterms', 'TaxonomytermsController', [
//     'anyData'  => 'datatables.data',
//     'Index' => 'datatables',
// ]);




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
