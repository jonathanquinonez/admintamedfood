<?php

namespace App\Http\Controllers\Delivery;

use App\Pedido;
use App\Cliente;
use App\Delivery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataDelivery = Delivery::Select('users.*', 'delivery.id as user_id')
        ->join('users','users.id','=','delivery.user_id')
        // 'suscripciones.nombre as nombre_suscripcion',
        // 'suscripciones.detalle as detalle_suscripcion'
        ->paginate(3);


        //  $data = Cliente::all();
        //return response()->json(compact('dataCliente'),201);
        return view('admin.Delivery.verDelivery', compact('dataDelivery'));
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
    public function show($id)
    {

        $dataDelivery = Delivery::select(
            'users.*', 
            'direcciones.direccion as direccion_user', 
            'direcciones.latitud', 
            'direcciones.longitud', 
            'direcciones.detalle as detalle_direccion')
            ->join('users', 'users.id', '=', 'delivery.user_id')
            ->Leftjoin('direcciones','direcciones.user_id','=','users.id')
            ->where('delivery.id', '=', $id)
            ->first();
        $dataPedidos = Pedido::join('clientes','clientes.id','=','pedidos.cliente_id')
            ->join('users','users.id','=','clientes.user_id')
            ->join('estados','estados.id','=','pedidos.estado_id')
            ->leftJoin('direcciones','direcciones.id','=','users.id')
            ->where('pedidos.delivery_id', '=', $id)
            ->select('pedidos.created_at as fecha_pedido',
            'direcciones.direccion',
            'direcciones.detalle as detalle_direccion',
            'pedidos.id',
            'pedidos.total',
            'users.name',
            'users.apellido',
            'users.telefono',
            'clientes.img_perfil',
            'estados.nombre as nombre_estado'
            )
            ->get();
            //dd($dataDelivery);
            return view('admin.Delivery.editarDelivery', compact('dataDelivery', 'dataPedidos'));
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
