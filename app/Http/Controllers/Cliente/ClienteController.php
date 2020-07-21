<?php

namespace App\Http\Controllers\Cliente;

use App\Pedido;
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
    public function index(Request $request)
    {
        $dataCliente = null;
        $buscador = $request->buscador;

        if ($buscador) {
            $dataCliente = Cliente::join('users','users.id','=','clientes.user_id')
                ->leftJoin('suscripciones','suscripciones.id','=','clientes.suscripcion_id')
                ->whereRaw("(users.name LIKE '%{$buscador}%' OR users.apellido LIKE '%{$buscador}%' OR users.identificacion LIKE '%{$buscador}%')")
                ->select(
                    'users.name',
                    'users.apellido',
                    'users.identificacion',
                    'users.telefono',
                    'users.verificado',
                    'clientes.id',
                    'clientes.img_perfil',
                    'clientes.suscripcion_id'
                )
                ->paginate(10);
        } else {
            $dataCliente = Cliente::join('users','users.id','=','clientes.user_id')
                ->leftJoin('suscripciones','suscripciones.id','=','clientes.suscripcion_id')
                ->select(
                    'users.name',
                    'users.apellido',
                    'users.identificacion',
                    'users.telefono',
                    'users.verificado',
                    'clientes.id',
                    'clientes.img_perfil',
                    'clientes.suscripcion_id'
                )
                ->paginate(10);
        }

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
            'identificacion' => 'required|string|max:100',
            'direccion' => 'required|string|max:500',
        ]);

        if($validator->fails())
        {
            return redirect()->back()
                ->withInput($request->only(
                    'email', 'password', 'img_perfil', 'name', 'apellido', 'telefono', 'identificacion', 'direccion'))
                ->withErrors($validator->errors());
        }

        $password_encrypt = bcrypt($request->password);
        $usuario = User::create([
            'name' => $request->name,
            'identificacion' => $request->identificacion,
            'email' => $request->email,
            'password' => $password_encrypt,
            'telefono' => $request->telefono,
            'apellido' => $request->apellido,
            'admin' => 'cliente',
            'verificado' => 1
        ]);

        if ($usuario->save()) {

            $cliente = Cliente::create([
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
        $data_user = Cliente::join('users','users.id','=','clientes.user_id')
            ->leftjoin('direcciones', 'users.id', '=', 'direcciones.user_id')
            ->where('clientes.id', '=', $id)
            ->select(
                'users.email',
                'users.password',
                'users.name',
                'users.apellido',
                'users.identificacion',
                'users.telefono',
                'users.verificado',
                'direcciones.direccion',
                'clientes.id',
                'clientes.img_perfil'
            )->get();

        $lista_pedidos = Pedido::where('cliente_id', '=', $id)
            ->leftjoin('estados', 'estados.id', '=', 'pedidos.estado_id')
            ->select(
                'pedidos.id',
                'pedidos.total',
                'pedidos.created_at',
                'estados.nombre'
            )
            ->get();

        return view('admin.cliente.editCliente', compact(['data_user', 'lista_pedidos']));
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
            'identificacion' => 'required|string|max:100',
            //'direccion' => 'string|max:500',
        ]);

        if($validator->fails())
        {
            return redirect()->back()
                ->withInput($request->only(
                    'password', 'img_perfil', 'name', 'apellido', 'telefono', 'identificacion', 'direccion'))
                ->withErrors($validator->errors());
        }

        $cliente = Cliente::find($id);
        $usuario = User::find($cliente->user_id);
        $direccion = Direccione::where('user_id', '=', $usuario->id)->first();

        try {
            if (!empty($request->password)) {
                $usuario->password = bcrypt($request->password);

            }
            $usuario->name = $request->name;
            $usuario->apellido = $request->apellido;
            $usuario->telefono = $request->telefono;
            $usuario->identificacion = $request->identificacion;
            $usuario->update();

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
            return redirect()->back();
        }

        return redirect()->action('Cliente\ClienteController@index');
    }

}
