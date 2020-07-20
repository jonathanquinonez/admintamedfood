<?php

namespace App\Http\Controllers\Pedido;

use App\ArticulosPedido;
use App\Cliente;
use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verPedido()
    {
        $dataPedidos = Pedido::join('clientes','clientes.id','=','pedidos.cliente_id')
        ->join('users','users.id','=','clientes.user_id')
        ->join('estados','estados.id','=','pedidos.estado_id')
        ->select('pedidos.created_at as fecha_pedido',
        'pedidos.id',
        'pedidos.total',
        'users.name',
        'users.apellido',
        'users.telefono',
        'clientes.rut',
        'clientes.direccion',
        'clientes.img_perfil',
        'estados.nombre as nombre_estado'
        )
        ->get();
        
        return view('admin.pedidos.verPedidos',compact('dataPedidos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function crearViewPedido(Request $request){
        $lista_clientes = Cliente::join('users','users.id','=','clientes.user_id')
            ->select(
                'clientes.id',
                'users.name',
                'users.apellido'
            )
            ->get();

        return view('admin.pedidos.crearPedido', compact(['lista_clientes']));
    }

    public function crearPedido(Request $request){
        return view('admin.pedidos.crearPedido');
    }

    public function show($id)
    {
        //
    }

    /**
     * Muestra el detalle de los pedidos con la información de sus productos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function detallePedido($id)
    {
        $pedido = Pedido::join('clientes','clientes.id','=','pedidos.cliente_id')
            ->leftJoin('users','users.id','=','clientes.user_id')
            ->leftJoin('direcciones','direcciones.id','=','users.id')
            ->select(
                'pedidos.id',
                'users.name',
                'users.apellido',
                'users.telefono',
                'clientes.rut',
                'direcciones.direccion'
            )
            ->where('pedidos.id', '=', $id)
            ->get();

        $lista_pedido = DB::table('articulos_pedidos')
            ->join('productos','productos.id','=','articulos_pedidos.producto_id')
            ->select(
                'articulos_pedidos.cantidad',
                'articulos_pedidos.precio',
                'productos.nombre',
                'productos.medida'
            )
            ->where('pedido_id', '=', $id)
            ->get();

        $total_pedido = 0;
        foreach ($lista_pedido as $item) {
            $total_pedido += $item->precio;
        }

        return view('admin.pedidos.detallePedido', compact(['pedido', 'lista_pedido', 'total_pedido']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
