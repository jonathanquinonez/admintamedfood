<?php
namespace App\Imports;

use App\Codigos;
use Cyberduck\LaravelExcel\Contract\ParserInterface;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CodigosImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        
        
        $model = new Codigos();
        $model->codigo = $row['codigo'];
       
        $model->id_producto = $row['idproducto'];
        $model->id_sucursal = $row['idsucursal'];
        $model->fecha_vence = $row['fechavencimiento'];
        $model->descripcion = $row['descripcion'];
        $model->descripcion1 = $row['descripcion1'];
        $model->descripcion2 = $row['descripcion2'];
        
       
        $model->save();
        // We can manunipulate the data before returning the object
        // $model->field3 = new \Carbon($row[2]);
        return $model;
       
        // return $Codigo;
    }
}