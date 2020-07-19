<?php

namespace App\Http\Controllers\Productor;

use Illuminate\Http\Request;
use App\Productore;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $dataProductor = DB::table('productores')
            ->join('users','users.id','=','productores.user_id')
            ->select('users.*')
            ->get();

        
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
     * Muestra el detalle del productos con la información de sus productos.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalleProductor($id)
    {
        return view('admin.productor.detalleProductor');
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
