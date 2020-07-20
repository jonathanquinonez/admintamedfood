<?php

namespace App\Http\Controllers\Cliente;

use http\Client;
use Illuminate\Support\Facades\Crypt;
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
        ->paginate(4);


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

        $password_encrypt = bcrypt($request->password);
        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password_encrypt,
            'telefono' => $request->telefono,
            'apellido' => $request->apellido,
            'admin' => 'cliente',
            'verificado' => 1
        ]);

        if ($usuario->save()) {

            $cliente = Cliente::create([
                'rut' => $request->rut,
                'img_perfil' => 'https://www.lavanguardia.com/r/GODO/LV/p5/WebSite/2018/07/25/Recortada/img_msanoja_20160801-194152_imagenes_lv_getty_istock_77607221_small-k0hH--656x437@LaVanguardia-Web.jpg',
                'user_id' => $usuario->id
            ]);
            $cliente->save();

            $direccion = Direccione::create([
                'user_id' => $usuario->id,
                'direccion' => $request->direccion
            ]);
                
        }

        return redirect()->action('Cliente\ClienteController@index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function editView($id)
    {
        $data_user = User::select(
            'users.id',
            'users.name',
            'users.apellido',
            'users.telefono',
            'clientes.rut',
            'clientes.img_perfil',
            'direcciones.direccion')
            ->leftjoin('clientes', 'users.id', '=', 'clientes.user_id')
            ->leftjoin('direcciones', 'users.id', '=', 'direcciones.user_id')
            ->where('users.id', '=', $id)
            ->get();

        return view('admin.cliente.editCliente', compact('data_user'));
    }

    public function edit($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            //'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'string|max:128',
            // 'img_perfil' => 'mimes:jpeg,jpg,png,gif|max:10000',
            'name' => 'required|string|max:50',
            'apellido' => 'required|string|max:55',
            'telefono' => 'required|string|max:20',
            'rut' => 'required|string|max:100',
            //'direccion' => 'string|max:500',
        ]);

        if($validator->fails())
        {
            return redirect()->back()
                ->withInput($request->only(
                    'password', 'img_perfil', 'name', 'apellido', 'telefono', 'rut', 'direccion'))
                ->withErrors($validator->errors());
        }

        $usuario = User::find($id);
        $cliente = Cliente::where('user_id', '=', $usuario->id)->first();
        $direccion = Direccione::where('user_id', '=', $usuario->id)->first();

        try {
            if (!empty($request->password)) {
                $usuario->password = bcrypt($request->password);

            }
            $usuario->name = $request->name;
            $usuario->apellido = $request->apellido;
            $usuario->telefono = $request->telefono;
            $usuario->update();

            $cliente->rut = $request->rut;
            $cliente->img_perfil = $request->img_perfil;
            $cliente->update();

            if ($direccion != null) {
                $direccion->direccion = $request->direccion;
                $direccion->update();
            } else {
                if (!empty($request->direccion)) {
                    $direccion_nueva = Direccione::create([
                        'user_id' => $usuario->id,
                        'direccion' => $request->direccion
                    ]);
                    $direccion_nueva->save();
                }
            }

        } catch (\Exception $exception) {
            return redirect()->action('Cliente\ClienteController@index');
        }

        return redirect()->action('Cliente\ClienteController@index');
    }

}
