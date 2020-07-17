<?php

namespace App\Http\Controllers\Cliente;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\User;
use App\Cliente;
use App\Direccione;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataCliente = DB::table('clientes')
        ->join('users','users.id','=','clientes.user_id')
        //->join('suscripciones','suscripciones.id','=','clientes.suscripcion_id')
        ->leftJoin('suscripciones','suscripciones.id','=','clientes.suscripcion_id')
        ->select('users.*',
        'clientes.direccion',
        'clientes.rut',
        'clientes.img_perfil',
        'clientes.suscripcion_id' 
        // 'suscripciones.nombre as nombre_suscripcion',
        // 'suscripciones.detalle as detalle_suscripcion'
        )
        ->get();

        //  $data = Cliente::all();
        //return response()->json(compact('dataCliente'),201);
        return view('admin.cliente.verClientes', compact('dataCliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createView()
    {
        return view('admin.cliente.crearCliente');
    }

    public function create(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|max:128',
           // 'img_perfil' => 'mimes:jpeg,jpg,png,gif|max:10000',
            'name' => 'required|string|max:50',
            'apellido' => 'required|string|max:55',
            'telefono' => 'required|string|max:20',
            'rut' => 'required|string|max:100',
            'direccion' => 'required|string|max:500',
        ]);

        if($validator->fails())
        {

            return redirect()->back()
                ->withInput($request->only(
                    'email', 'password', 'img_perfil', 'name', 'apellido', 'telefono', 'rut', 'direccion'))
                ->withErrors($validator->errors());
        }

        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telefono' => $request->telefono,
            'apellido' => $request->apellido,
            'admin' => 'cliente',
            'verificado' => 1
        ]);
        $usuario->save();

        if ($usuario->id != null) {

            $cliente = Cliente::create([
                'rut' => $request->name,
                'img_perfil' => 'https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2018/07/25/Recortada/img_msanoja_20160801-194152_imagenes_lv_getty_istock_77607221_small-k0hH--656x437@LaVanguardia-Web.jpg',
                'user_id' => $usuario->id
            ]);
            $cliente->save();

            $direccion = Direccione::create([
                'user_id' => $usuario->id,
                'direccion' => $request->email
            ]);
            $direccion->save();
        }

        return redirect()->back();
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
