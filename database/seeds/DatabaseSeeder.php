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
        User::truncate();
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


        $cantidadDireciones                = 5;
        $cantidadUsuarios                  = 5;
        $cantidadClientes                  = 5;
        $cantidadCategoriasNutricional     = 5;
        $cantidadCategoriasTipo            = 5;
        $cantidadDelivery                  = 5;
        $cantidadSuscripcione              = 5;
        $cantidadMovimientosPedido         = 5;
        $cantidadMovimientosProducto       = 5;
        $cantidadMovimientosArticulosPedido= 5;
        $cantidadPedido                    = 5;
        $cantidadProductore                = 5;
        $cantidadEstado                    = 5;
        $cantidadTerminosySuscripciones    = 5;
        $cantidadArticulosPedido           = 5;
        $cantidadProducto                  = 5;




        factory(User::class, $cantidadUsuarios)                                        ->create();
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
