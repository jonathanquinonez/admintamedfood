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
        Cliente::truncate();
        Delivery::truncate();
        // ArticulosPedido::truncate();
        Direccione::truncate();
        // Estado::truncate();
        // MovimientosArticulosPedido::truncate();
        // MovimientosPedido::truncate();
        // MovimientosProducto::truncate();
        // PasswordReset::truncate();
        // Pedido::truncate();
        // Productore::truncate();
        TerminosCondicione::truncate();
        Suscripcione::truncate();
        

        User::flushEventListeners(); 
        Direccione::flushEventListeners(); 
        TerminosCondicione::flushEventListeners();
        Suscripcione::flushEventListeners();
        Cliente::flushEventListeners();
        Delivery::flushEventListeners();

        $cantidadDireciones                = 100;
        $cantidadUsuarios                  = 100;
        $cantidadClientes                  = 100;
        $cantidadDelivery                  = 100;
        $cantidadSuscripcione              = 100;
        $cantidadTerminosySuscripciones    = 100;



        factory(user::class, $cantidadUsuarios)                             ->create();
        factory(Direccione::class, $cantidadDireciones)                     ->create();
        factory(Cliente::class, $cantidadClientes)                          ->create();
        factory(Delivery::class, $cantidadDelivery)                         ->create();
        factory(Suscripcione::class, $cantidadSuscripcione)                 ->create();
        factory(TerminosCondicione::class, $cantidadTerminosySuscripciones) ->create();



    }
}
