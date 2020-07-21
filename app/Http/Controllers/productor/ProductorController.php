<?php

namespace App\Http\Controllers\Productor;

use Illuminate\Http\Request;
use App\User;
use App\Direccione;
use App\Cliente;
use App\Productore;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataProductor = Productore::Select('users.*')
        ->join('users','users.id','=','productores.user_id')
        ->paginate(5);

        
         return view('admin.productor.verProductor', compact('dataProductor'));
        // $prodcutores = Productore::all();
        // return response()->json(compact('prodcutores'),201);
         //return view('admin.productor.verProductor');
     
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
     * Nos envia a la vista del productor para proceder a crearlo
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearViewProductor()
    {
        return view('admin.productor.crearProductor');
    }

   
    public function detalleProductor($id)
    {
        $dataProductor = Productore::Select('users.*')
        ->join('users','users.id','=','productores.user_id')
        ->get();


        return view('admin.productor.detalleProductor', compact('dataProductor'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:50',
            'apellido' => 'required|string|max:45',
            'telefono' => 'required|string|max:45',
            'identificacion' => 'required|string|max:100',
            'direccion' => 'string|max:100',
            'detalle' => 'string|max:100',
            'latitud' => 'string|max:100',
            'longitud' => 'string|max:100',
        ]);

        if($validator->fails())
        {
            return redirect()->back()
                ->withInput($request->only(
                    'name', 'apellido', 'telefono', 'identificacion', 'direccion','detalle','latitud','longitud'))
                ->withErrors($validator->errors());
        }
        
        $usuario = User::find($id);
        $direccion = Direccione::where('user_id', '=', $usuario->id)->first();
        //dd($direccion);
        try{
            $usuario->name = $request->name;
            $usuario->apellido = $request->apellido;
            $usuario->telefono = $request->telefono;
            $usuario->identificacion = $request->identificacion;
            $usuario->update();

            if ($direccion != null) {
                $direccion->direccion = $request->direccion;
                $direccion->detalle = $request->detalle;
                $direccion->longitud = $request->longitud;
                $direccion->latitud = $request->latitud;
                $direccion->update();
            } else {
                if (!empty($request->direccion)) {
                    $direccion_nueva = Direccione::create([
                        'user_id' => $usuario->id,
                        'direccion' => $request->direccion,
                        'detalle' => $request->detalle,
                        'longitud' => $request->longitud,
                        'latitud' => $request->latitud,
                    ]);
                    $direccion_nueva->save();
                    
                }
            }

        }catch (\Exception $exception) {
            
            return redirect()->back();
        }
       
        return redirect()->back();
    }

    public function crearProductor(Request $request){

        $validator = Validator::make($request->all(),[

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
            'img_perfil' => 'https://picsum.photos/200/300',
            'verificado' => 1
        ]);

        if ($usuario->save()) {

            $productor = Productore::create([
                'user_id' => $usuario->id
            ]);
            $productor->save();

            $direccion = Direccione::create([
                'user_id' => $usuario->id,
                'direccion' => $request->direccion
            ]);
            $direccion->save();
        }

        return redirect()->action('Productor\ProductorController@index');
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
