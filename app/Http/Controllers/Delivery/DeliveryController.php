<?php

namespace App\Http\Controllers\Delivery;

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
        $dataDelivery = DB::table('delivery')
        ->join('users','users.id','=','delivery.user_id')
        ->select('users.*'
        // 'suscripciones.nombre as nombre_suscripcion',
        // 'suscripciones.detalle as detalle_suscripcion'
        )
        ->paginate(2);


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
            'users.*')
            ->join('users', 'users.id', '=', 'delivery.user_id')
            ->where('users.id', '=', $id)
            ->get();
        $dataPedidos = Pedido::select()
            ->join('delivery', 'delivery.id', '=', 'pedidos.delivery_id')
            ->get();
            return view('admin.Delivery.editarDelivery', compact('dataDelivery'));
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
