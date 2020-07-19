<?php

namespace App\Http\Controllers\Pedido;

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
        $dataPedidos = DB::table('pedidos')
        ->join('clientes','clientes.id','=','pedidos.cliente_id')
        ->join('users','users.id','=','clientes.user_id')
        ->join('estados','estados.id','=','pedidos.estado_id')
        ->select('pedidos.created_at as fecha_pedido',
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

    public function crearPedido(Request $request){
        // $validator = Validator::make($request->all(),[
        //     'name' => 'required|string|max:50',
        //     'apellido' => 'required|string|max:50',
        //     'rut'    => 'required|string|max:50',
        //      'direccion'=>'required|string|max:50',
        //      'total'  => 'required|string|max:50'
        // ]);

        // if($validator->fails()){
        //     return redirect()->back()
        //     ->withInput($request->only('name','rut','direccion','total'))
        //     ->withErrors($validator->errors());
        // }

        // DB::table('pedidos')->insert([
        // [
           
        //     //'cliente_id' => 1,
        //     //'estado_id'  => 1,
        //     'total'      =>$request->total

        // ],
        // ]);
        // DB::table('users')->insert([
        //    [ 'name' => $request->name,
        //      'apellido'=> $request->apellido],
        // ]);

        // DB::table('clientes')->insert([
        //     ['rut'    => $request->rut,
        //     'img_perfil' => 'https://picsum.photos/200/300',
        //     'direccion'  => $request->direccion
        // ],
        // ]);
       
        // return redirect()->back();
        return view('admin.pedidos.crearPedido');
    }

    public function show($id)
    {
        //
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
