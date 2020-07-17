<?php

namespace App\Http\Controllers\Configuracion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verCategoriTipo()
    {
        $dataConfiguracion = DB::table('categorias_tipos')
        ->get();
        return view('admin.configuracion.verCategoriasTipo',compact('dataConfiguracion'));
    }

     /**
     * verCategoriaNutricionla.
     *
     * @return \Illuminate\Http\Response
     */
    public function verCategoriaNutricional()
    {
        $dataConfiguracion = DB::table('categorias_nutricional')
        ->get();
        return view('admin.configuracion.verCategoriasNutricion',compact('dataConfiguracion'));
    }

    /**
     * Muestra el listado de terminos y condiciones
     *
     * @return \Illuminate\Http\Response
     */
    public function verTerminosCondiciones()
    {
        $dataTerminos = DB::table('terminos_condiciones')
        ->get();
        return view('admin.configuracion.verTerminosCondiciones',compact('dataTerminos'));
    }

     /**
     * Muestra el listado de Suscripciones
     *
     * @return \Illuminate\Http\Response
     */
    public function verSuscripciones()
    {
        $dataSuscripcion = DB::table('suscripciones')
        ->get();
        return view('admin.configuracion.verSuscripciones',compact('dataSuscripcion'));
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
     * Crear terminos y condiciiones a partir de un modal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearTerminosCondiciones(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
            'descripcion' => 'required|string',
        ]); 

        if($validator->fails())
        {
            // return $validator->errors();
            //Alert::error('Error al crear')->persistent("Cerrar");
                return redirect()->back()
                    ->withInput($request->only('nombre', 'descripcion'))
                    ->withErrors($validator->errors());
        }
        DB::table('terminos_condiciones')->insert([
            [
                'nombre' => $request->nombre, 
                'descripcion' => $request->descripcion
            ],
        ]);
        return redirect()->back();
    }

    /**
     * Crear suscripciones a partir de un modal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearSuscripciones(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
            'detalle' => 'required|string|max:50',
            'porcentaje' => 'required|string|max:50',
        ]); 

        if($validator->fails())
        {
            // return $validator->errors();
            //Alert::error('Error al crear')->persistent("Cerrar");
                return redirect()->back()
                ->withInput($request->only('nombre','detalle','porcentaje'))
                ->withErrors($validator->errors());
        }
        
        DB::table('suscripciones')->insert([
            ['nombre' => $request->nombre, 
            'detalle' => $request->detalle,
            'porcentaje' => $request->porcentaje,
            'img' => 'https://picsum.photos/200/300',
            'terminos_condiciones_id' => 1],
        ]);
        return redirect()->back();
    }
      /**
     * Crear las categorias_tipo a partir de un modal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearCategoriaTipo(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
        ]); 

        if($validator->fails())
        {
            // return $validator->errors();
            //Alert::error('Error al crear')->persistent("Cerrar");
                return redirect()->back()
                ->withInput($request->only('nombre'))
                ->withErrors($validator->errors());
        }
        
        DB::table('categorias_tipos')->insert([
            ['nombre' => $request->nombre, 
            'img' => 'https://picsum.photos/200/300',
            'estado' => 1],
        ]);
        return redirect()->back();
    }
    
        /**
     * Crear las categorias_tipo a partir de un modal.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function crearCategoriaNutricion(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre' => 'required|string|max:50',
        ]); 

        if($validator->fails())
        {
            // return $validator->errors();
            //Alert::error('Error al crear')->persistent("Cerrar");
                return redirect()->back()
                ->withInput($request->only('nombre'))
                ->withErrors($validator->errors());
        }
        
        DB::table('categorias_nutricional')->insert([
            ['nombre' => $request->nombre, 
            'img' => 'https://picsum.photos/200/300',
            'estado' => 1],
        ]);
        return redirect()->back();
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

     /**
     * Acrtualiza el estado de la categoria tipo y recibe un parametro del estado actual de la categoria
     *
     * @param  int  $id = 1 or 0
     * @return \Illuminate\Http\Response
     */
    public function actualizarEstadoCategoriaTipo($id,$estado)
    {
        if($estado == 1){
            DB::table('categorias_tipos')
            ->where('id', $id)
            ->update(['estado' => 0]);
        }else{
                DB::table('categorias_tipos')
                ->where('id', $id)
                ->update(['estado' => 1]);
        }

        return redirect()->back();
    }

      /**
     * Acrtualiza el estado de la categoria nutricion y recibe un parametro del estado actual de la categoria
     *
     * @param  int  $id = 1 or 0
     * @return \Illuminate\Http\Response
     */
    public function actualizarEstadoCategoriaNutricion($id,$estado)
    {
        if($estado == 1){
            DB::table('categorias_nutricional')
            ->where('id', $id)
            ->update(['estado' => 0]);
        }else{
                DB::table('categorias_nutricional')
                ->where('id', $id)
                ->update(['estado' => 1]);
        }

        return redirect()->back();
    }
}
