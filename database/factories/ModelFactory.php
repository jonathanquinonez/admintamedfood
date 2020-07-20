<?php

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
        'password'           => $password ?: $password = bcrypt('123456'),
        'admin'              => $faker                 ->randomElement([user::USUARIO_ADMINISTRADOR, user::USUARIO_REGULAR]),
        'verificado'          => $faker                 ->randomElement([user::USUARIO_VERIFICADO, user::USUARIO_NO_VERIFICADO]),
        'bloqueado'          => $faker                 ->randomElement([user::USUARIO_NO_BLOQUEADO, user::USUARIO_BLOQUEADO]),
        'notificaciones'     => $faker                 ->randomElement([user::si,user::no]),
    ];
});
