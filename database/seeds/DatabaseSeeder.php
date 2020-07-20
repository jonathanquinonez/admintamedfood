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
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS =0');
        user::truncate();


        User::flushEventListeners(); //desactiva todops los evetos de un modelos para que no mande mucho contenido

        $cantidadUsuarios =1000;

        factory(user::class, $cantidadUsuarios)->create();
    }
}
