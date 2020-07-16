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
    public function index()
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
    public function categoriaNutricional()
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
            ['nombre' => $request->nombre, 
            'descripcion' => $request->descripcion],
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
            'img' => 'data:image/jpeg;base64,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',
            'terminos_condiciones_id' => 1],
        ]);
        return redirect()->back();
    }
      /**
     * Crear suscripciones a partir de un modal.
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
        
        DB::table('categorias_tipo')->insert([
            ['nombre' => $request->nombre, 
            'img' => 'data:image/jpeg;base64,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',
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
