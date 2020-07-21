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
Route::get('/crear/Clientes', 'Cliente\ClienteController@createView')->name('crearViewCliente');
Route::post('/crear/Clientes', 'Cliente\ClienteController@create')->name('crearCliente');
Route::get('/editar/Clientes/{id}', 'Cliente\ClienteController@editView')->name('editarViewCliente');
Route::post('/editar/Clientes/{id}', 'Cliente\ClienteController@edit')->name('editarCliente');

/*
|--------------------------------------------------------------------------
| Productor
|--------------------------------------------------------------------------
 */
Route::get('/ver/Productores', 'Productor\ProductorController@index')->name('verProductor');
Route::get('/crear/Productor', 'Productor\ProductorController@crearViewProductor')->name('crearViewProductor');
Route::post('/crear/Productor', 'Productor\ProductorController@crearProductor')->name('crearProductor');
Route::get('/ver/Productor/{id}', 'Productor\ProductorController@detalleProductor')->name('detalleProductor');
Route::post('/actualizar/Productor/{id}', 'Productor\ProductorController@update')->name('actualizarProductor');

/*
|--------------------------------------------------------------------------
| Deliverys
|--------------------------------------------------------------------------
 */
Route::get('/ver/Deliverys', 'Delivery\DeliveryController@index')->name('verDelivery');
Route::get('/detalle/Deliverys/{id}', 'Delivery\DeliveryController@show')->name('detalleDelivery');
Route::post('/actualizar/Deliverys/{id}', 'Delivery\DeliveryController@update')->name('actualizarDelivery');

/*
|--------------------------------------------------------------------------
| Configuraciones
|--------------------------------------------------------------------------
 */

Route::get('/ver/CategoriasTipo', 'Configuracion\ConfiguracionController@verCategoriTipo')->name('verCategoriasTipo');
Route::get('actualizarEstadoCategoriaTipo/{id}/{estado}', 'Configuracion\ConfiguracionController@actualizarEstadoCategoriaTipo')->name('actualizarEstadoCategoriaTipo');
Route::post('crear/CategoriaTipo', 'Configuracion\ConfiguracionController@crearCategoriaTipo')->name('crearCategoriaTipo');


Route::get('ver/TerminosCondiciones', 'Configuracion\ConfiguracionController@verTerminosCondiciones')->name('verTerminosCondiciones');
Route::post('crear/TerminosCondiciones', 'Configuracion\ConfiguracionController@crearTerminosCondiciones')->name('crearTerminosCondiciones');


Route::get('ver/Suscripciones', 'Configuracion\ConfiguracionController@verSuscripciones')->name('verSuscripciones');
Route::post('crear/Suscripciones', 'Configuracion\ConfiguracionController@crearSuscripciones')->name('crearSuscripciones');


Route::get('/ver/CategoriasNutricion', 'Configuracion\ConfiguracionController@verCategoriaNutricional')->name('verCategoriasNutricion');
Route::get('actualizarEstadoCategoriaNutricion/{id}/{estado}', 'Configuracion\ConfiguracionController@actualizarEstadoCategoriaNutricion')->name('actualizarEstadoCategoriaNutricion');
Route::post('crear/CategoriaNutricion', 'Configuracion\ConfiguracionController@crearCategoriaNutricion')->name('crearCategoriaNutricion');

/*
|--------------------------------------------------------------------------
| Pedidos
|--------------------------------------------------------------------------
 */
Route::get('/ver/Pedidos', 'Pedido\PedidoController@verPedido')->name('verPedidos');
Route::get('crear/Pedidos', 'Pedido\PedidoController@crearViewPedido')->name('crearViewPedido');
Route::post('crear/Pedidos', 'Pedido\PedidoController@crearPedido')->name('crearPedido');
Route::get('/ver/Pedidos/{id}', 'Pedido\PedidoController@detallePedido')->name('detallePedido');

/*
|--------------------------------------------------------------------------
| Productos
|--------------------------------------------------------------------------
 */
Route::get('/ver/productos', 'Producto\ProductoController@index')->name('verProductos');
Route::get('/ver/productos/{id}', 'Producto\ProductoController@verDetalleProducto')->name('verDetalleProducto');
Route::get('/crear/productos', 'Producto\ProductoController@crearViewProducto')->name('crearViewProducto');
Route::post('/crear/productos', 'Producto\ProductoController@crearProducto')->name('crearProducto');

