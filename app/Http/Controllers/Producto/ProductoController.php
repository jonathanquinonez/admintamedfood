<?php

namespace App\Http\Controllers\Producto;

use App\Producto;
use App\Productore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\CategoriasNutricional;
use App\CategoriasTipo;

class ProductoController extends Controller
{

    public function index(Request $request)
    {
        //dd($request);
        $dataProductos = null;
        $buscador = $request->buscador;

        if ($buscador) {
            $dataProductos = Producto::join('productores','productores.id','=','productos.productor_id')
                ->join('users','users.id','=','productores.user_id')
                ->join('categorias_nutricional','categorias_nutricional.id','=','productos.categoria_nutricional_id')
                ->join('categorias_tipos','categorias_tipos.id','=','productos.categoria_tipo_id')
                ->whereRaw("(productos.nombre LIKE '%{$buscador}%')")
                ->select(
                    'productos.id',
                    'productos.nombre',
                    'productos.stock',
                    'productos.medida',
                    'productos.precio',
                    'users.name',
                    'users.apellido',
                    'categorias_nutricional.nombre as categorias_nutricional',
                    'categorias_tipos.nombre as categoria_producto',
                    'categorias_tipos.id',
                    'categorias_nutricional.id'
                )
                ->paginate(10);
        } else {
            $dataProductos = Producto::join('productores','productores.id','=','productos.productor_id')
                ->join('users','users.id','=','productores.user_id')
                ->join('categorias_nutricional','categorias_nutricional.id','=','productos.categoria_nutricional_id')
                ->join('categorias_tipos','categorias_tipos.id','=','productos.categoria_tipo_id')
                ->select(
                    'productos.id',
                    'productos.nombre',
                    'productos.stock',
                    'productos.medida',
                    'productos.precio',
                    'users.name',
                    'users.apellido',
                    'categorias_nutricional.nombre as categorias_nutricional',
                    'categorias_tipos.nombre as categoria_producto',
                    'categorias_tipos.id',
                    'categorias_nutricional.id'
                )->paginate();
            
        }
        return view('admin.producto.verProductos', compact(['dataProductos']));
    }

    public function verDetalleProducto($id)
    {
        return view('admin.producto.detalleProducto');
    }

    public function crearViewProducto()
    {
        $lista_productores = Productore::join('users','users.id','=','productores.user_id')
         ->select('productores.id',
                 'users.name',
                 'users.apellido')->get();

        $lista_categoriaNutricion = DB::table('categorias_nutricional')->get();           
                 
        $lista_categoriaTipo = DB::table('categorias_tipos')->get();
                                                  
        
        return view('admin.producto.crearProducto', compact(['lista_productores','lista_categoriaNutricion','lista_categoriaTipo']));
    }

    public function crearProductoo(Request $request)
    {
        $validator = Validator::make($request->all(),[
               'nombre'                   => 'required|string|max:50',
               'stock'                    => 'required|string|max:50',
               'precio'                   => 'required|string|max:50',
               'medida'                   => 'required|string|max:50',
               'productor_id'             => 'required|string|max:50',
               'categoria_tipo_id'        => 'required|max:50',
               'categoria_nutricional_id' => 'required|max:50',
           

        ]);
       
       
      if($validator->fails())
        {
            return redirect()->back()
                ->withInput($request->only(
                'nombre','stock','precio','medida','categoria_producto','categorias_nutricional','productor_id','categoria_tipo_id','categoria_nutricional_id'))
                ->withErrors($validator->errors());
        }
        
        DB::table('productos')->insert([
              'nombre'                   => $request->nombre,
              'stock'                    => $request->stock,
              'precio'                   => $request->precio,
              'medida'                   => $request->medida,
              'categoria_tipo_id'        => $request->categoria_tipo_id,
              'categoria_nutricional_id'=> $request->categoria_nutricional_id,
              'productor_id'             => $request->productor_id
        ]);
        
             return redirect()->action('Producto\ProductoController@index');
    }
}
