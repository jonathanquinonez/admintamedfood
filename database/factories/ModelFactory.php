<?php

use App\ArticulosPedido;
use App\Cliente;
use App\Delivery;
use App\Direccione;
use App\Estado;
use App\MovimientosArticulosPedido;
use App\MovimientosPedido;
use App\MovimientosProducto;
use App\PasswordReset;
use App\Pedido;
use App\Productore;
use App\Suscripcione;
use App\TerminosCondicione;
use App\user;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\user::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'               => $faker                 ->firstName,
        'apellido'           => $faker                 ->lastName,
        'email'              => $faker                 ->unique()->safeEmail,
        'telefono'           => $faker                 ->phoneNumber,
        'password'           => $password ?: $password = bcrypt('123456'),
        'admin'              => $faker                 ->randomElement([user::USUARIO_ADMINISTRADOR, user::USUARIO_REGULAR]),
        'verificado'         => $faker                 ->randomElement([user::USUARIO_VERIFICADO, user::USUARIO_NO_VERIFICADO]),
        'bloqueado'          => $faker                 ->randomElement([user::USUARIO_NO_BLOQUEADO, user::USUARIO_BLOQUEADO]),
        'notificaciones'     => $faker                 ->randomElement([user::si,user::no]),
    ];
});

$factory->define(App\Direccione::class, function (Faker\Generator $faker) {
   

    return [
        'latitud'            => $faker                ->latitude(-90,90),
        'longitud'           => $faker                ->longitude(-90,90),
        'direccion'          => $faker                ->address,
        'detalle'            => $faker                ->word,
        'tipo_direccion'     => $faker                ->address,
        'user_id'            => function() {
            return factory(User::class)->create()->id;
        }
        
    ];
});


$factory->define(App\TerminosCondicione::class, function (Faker\Generator $faker) {

    return [
        'nombre'                  => $faker ->firstName,   
        'descripcion'             => $faker ->paragraph(1),
    ];
});


$factory->define(App\Suscripcione::class, function (Faker\Generator $faker) {

    return [
        'nombre'                  => $faker ->firstName,   
        'detalle'                 => $faker ->paragraph(1),
        'porcentaje'              => $faker ->numberBetween(1,20),
        'img'                     => $faker ->image,
        'terminos_condiciones'    => function() {
            return factory(TerminosCondicione::class)->create()->id;
        }
    ];
});

$factory->define(App\Cliente::class, function (Faker\Generator $faker) {

    return [
        'img_perfil'        => $faker                ->image,
        'user_id'           => function() {
            return factory(User::class)->create()->id;
        },
        'suscripcion_id'    => function() {
            return factory(Suscripcione::class)->create()->id;
        }
    ];
});

$factory->define(App\Delivery::class, function (Faker\Generator $faker) {

    return [
        'user_id'            =>function() {
            return factory(User::class)->create()->id;
        }
    ];
});
