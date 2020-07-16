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
}
