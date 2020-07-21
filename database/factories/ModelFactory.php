<?php

use App\ArticulosPedido;
use App\Cliente;
use App\CategoriasNutricional;
use App\CategoriasTipo;
use App\Delivery;
use App\Direccione;
use App\Estado;
use App\MovimientosArticulosPedido;
use App\MovimientosPedido;
use App\MovimientosProducto;
use App\PasswordReset;
use App\Pedido;
use App\Producto;
use App\Productore;
use App\Suscripcione;
use App\TerminosCondicione;
use App\User;

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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'               => $faker                 ->firstName,
        'apellido'           => $faker                 ->lastName,
        'identificacion'     => $faker                 ->word,
        'email'              => $faker                 ->unique()->safeEmail,
        'telefono'           => $faker                 ->phoneNumber,
        'password'           => $password ?: $password = bcrypt('123456'),
        'admin'              => $faker                 ->randomElement([User::USUARIO_ADMINISTRADOR, User::USUARIO_REGULAR]),
        'verificado'         => $faker                 ->randomElement([User::USUARIO_VERIFICADO, User::USUARIO_NO_VERIFICADO]),
        'bloqueado'          => $faker                 ->randomElement([User::USUARIO_NO_BLOQUEADO, User::USUARIO_BLOQUEADO]),
        'notificaciones'     => $faker                 ->randomElement([User::si,User::no]),
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
        'terminos_condiciones_id' => function() {
            return factory(TerminosCondicione::class)->create()->id;
        }
    ];
});


$factory->define(App\Cliente::class, function (Faker\Generator $faker) {

    return [
        'img_perfil'                    => $faker                ->image,

        'user_id'                       => function() {
            return factory(User::class)->create()->id;
        },

        'suscripcion_id'                => function() {
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


$factory->define(App\Estado::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker ->firstName,
    ];
});


$factory->define(App\Productore::class, function (Faker\Generator $faker) {

    return [
        'user_id'            =>function() {
            return factory(User::class)->create()->id;
        }
    ];
});
#######################################################################################
$factory->define(App\CategoriasTipo::class, function (Faker\Generator $faker) {

    return [
        'nombre'             =>$faker ->firstName,
        'img'                =>$faker ->image, 
        'estado'             =>$faker->randomElement([CategoriasTipo::si,CategoriasTipo::no]),
    ];
});

$factory->define(App\CategoriasNutricional::class, function (Faker\Generator $faker) {

    return [
        'nombre'             =>$faker ->firstName,
        'img'                =>$faker ->image, 
        'estado'             =>$faker->randomElement([CategoriasNutricional::si,CategoriasNutricional::no]),
    ];
});

#######################################################################################
$factory->define(App\Producto::class, function (Faker\Generator $faker) {

    return [
        'medida'                    => $faker->word,
        'img'                       => $faker->image,
        'stock'                     => $faker->numberBetween(1,10),
        'nombre'                    => $faker->firstName,
        'productor_id'              =>function() {
            return factory(Productore::class)->create()->id;
        },
        'categoria_tipo_id'         =>function() {
            return factory(CategoriasTipo::class)->create()->id;
        },
        'categoria_nutricional_id'  =>function() {
            return factory(CategoriasNutricional::class)->create()->id;
        }

    ];
});
#######################################################################################
$factory->define(App\Pedido::class, function (Faker\Generator $faker) {

    return [
        'total'                 => $faker->numberBetween(1,10),
        'cliente_id'              =>function() {
            return factory(Cliente::class)->create()->id;
        },
        'delivery_id'            =>function() {
            return factory(Delivery::class)->create()->id;
        },
        'estado_id'            =>function() {
            return factory(Estado::class)->create()->id;
        }

    ];
});

$factory->define(App\ArticulosPedido::class, function (Faker\Generator $faker) {

    return [
        'cantidad'               => $faker->numberBetween(1,10),
        'precio'                 => $faker->numberBetween(1,10),
        'pedido_id'              =>function() {
            return factory(Pedido::class)->create()->id;
        },
        'producto_id'            =>function() {
            return factory(Producto::class)->create()->id;
        }

    ];
});


$factory->define(App\MovimientosArticulosPedido::class, function (Faker\Generator $faker) {

    return [
        'stock_actual' => $faker ->numberBetween(1,10),
        'cantidad'     => $faker ->numberBetween(1,10),
        'articulo_pedido_id' =>function(){
            return factory(ArticulosPedido::class)->create()->id;
        },
        'estado_id' =>function(){
            return factory(Estado::class)->create()->id;
        }
    ];
});


$factory->define(App\MovimientosProducto::class, function (Faker\Generator $faker) {

    return [
        'cantidad'        => $faker ->numberBetween(1,10),
        'stock_actual'     => $faker ->numberBetween(1,10),
        'tipo_movimiento'  => $faker ->word,
        'producto_id'              =>function() {
            return factory(Producto::class)->create()->id;
        }        
    ];
});

$factory->define(App\MovimientosPedido::class, function (Faker\Generator $faker) {

    return [
        'pedido_id'              =>function() {
            return factory(Pedido::class)->create()->id;
        },
        'estado_id'              =>function() {
            return factory(Estado::class)->create()->id;
        }        
    ];
});


