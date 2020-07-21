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
        CategoriasNutricional::truncate();
        CategoriasTipo::truncate();
        Delivery::truncate();
        ArticulosPedido::truncate();
        Direccione::truncate();
        Estado::truncate();
        MovimientosArticulosPedido::truncate();
        MovimientosPedido::truncate();
        MovimientosProducto::truncate();
        Pedido::truncate();
        Productore::truncate();
        Producto::truncate();
        TerminosCondicione::truncate();
        Suscripcione::truncate();
        

        User::flushEventListeners(); 
        Direccione::flushEventListeners(); 
        TerminosCondicione::flushEventListeners();
        CategoriasTipo::flushEventListeners();
        Cliente::flushEventListeners();
        CategoriasNutricional::flushEventListeners();
        Cliente::flushEventListeners();
        Delivery::flushEventListeners();
        Estado::flushEventListeners();
        MovimientosArticulosPedido::flushEventListeners();
        MovimientosPedido::flushEventListeners();
        MovimientosProducto::flushEventListeners();
        Pedido::flushEventListeners();
        Productore::flushEventListeners();
        Producto::flushEventListeners();
        ArticulosPedido::flushEventListeners();


        $cantidadDireciones                = 10;
        $cantidadUsuarios                  = 20;
        $cantidadClientes                  = 20;
        $cantidadCategoriasNutricional     = 20;
        $cantidadCategoriasTipo            = 20;
        $cantidadDelivery                  = 20;
        $cantidadSuscripcione              = 20;
        $cantidadMovimientosPedido         = 20;
        $cantidadMovimientosProducto       = 20;
        $cantidadMovimientosArticulosPedido= 20;
        $cantidadPedido                    = 20;
        $cantidadProductore                = 20;
        $cantidadEstado                    = 20;
        $cantidadTerminosySuscripciones    = 20;
        $cantidadArticulosPedido           = 20;
        $cantidadProducto                  = 20;




        factory(user::class, $cantidadUsuarios)                                        ->create();
        factory(Direccione::class, $cantidadDireciones)                                ->create();
        factory(TerminosCondicione::class, $cantidadTerminosySuscripciones)            ->create();
        factory(Suscripcione::class, $cantidadSuscripcione)                            ->create();
        factory(Cliente::class, $cantidadClientes)                                     ->create();
        factory(Delivery::class, $cantidadDelivery)                                    ->create();
        factory(Estado::class, $cantidadEstado)                                        ->create();
        factory(Productore::class, $cantidadProductore)                                ->create();
        factory(CategoriasTipo::class, $cantidadClientes)                              ->create();
        factory(CategoriasNutricional::class, $cantidadClientes)                       ->create();
        factory(Producto::class, $cantidadProducto)                                    ->create();        
        factory(Pedido::class, $cantidadPedido)                                        ->create();
        factory(ArticulosPedido::class, $cantidadArticulosPedido)                      ->create();
        factory(MovimientosArticulosPedido::class, $cantidadMovimientosArticulosPedido)->create();
        factory(MovimientosProducto::class, $cantidadMovimientosProducto)              ->create();
        factory(MovimientosPedido::class, $cantidadMovimientosPedido)                  ->create();



    }
}
