<?php

namespace App\Http\Controllers\Producto;

use App\Producto;
use App\Productore;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductoController extends Controller
{

    public function index(Request $request)
    {
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
                    'categorias_nutricional.nombre as categoria_producto',
                    'categorias_tipos.nombre as categoria_nutricional'
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
                    'categorias_nutricional.nombre as categoria_producto',
                    'categorias_tipos.nombre as categoria_nutricional'
                )
                ->paginate(10);
        }

        return view('admin.producto.verProductos', compact(['dataProductos']));
    }

    public function verDetalleProducto($id)
    {
        return view('admin.producto.detalleProducto');
    }

    public function crearViewProducto(Request $request)
    {
        $lista_productores = Productore::join('users','users.id','=','productores.user_id')
            ->select('productores.id', 'users.name', 'users.apellido')
            ->get();

        return view('admin.producto.crearProducto', compact(['lista_productores']));
    }
}
