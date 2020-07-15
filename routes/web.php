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
// Route::get('/', function () {
//     // console.log('hola');
//     OneSignal::sendNotificationToAll("Some Message", $url = null, $data = null, $buttons = null, $schedule = null);

//     return view('welcome');
// });
Route::get('/', function () {
    // OneSignal::sendNotificationToAll("Some Message", $url = null, $data = null, $buttons = null, $schedule = null);
// return Artisan::call('config:clear');
// php artisan config:clear.
    return view('login');
});

Route::get('volver','Admin\Establecimientos\EstablecimientosController@volver')->name('volver');

Route::get('error404', 'HomeController@error404')->name('error404');
Route::get('error500', 'HomeController@error500')->name('error500');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home', 'HomeController@index')->name('home');
Route::post('verificando', 'Admin\AdminController@verificando')->name('verificando1');

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
 */

Route::get('/ver/perfil/{id}', 'User\UserController@verPerfil')->name('verPerfil');
Route::get('/editar/perfil/{id}', 'User\UserController@editarPerfil')->name('editarPerfil');

/*
|--------------------------------------------------------------------------
| Clientes
|--------------------------------------------------------------------------
 */

Route::get('/ver/Clientes', 'Cliente\ClienteController@index')->name('verClientes');




