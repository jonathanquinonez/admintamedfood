<?php

namespace App\Http\Controllers\Configuracion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
