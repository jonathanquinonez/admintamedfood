<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class CodigosGeneradosExport implements FromArray
{
    protected  $codigos;
    
    public function __construct(array $codigos)
    {
        //dd($codigos);
        $this->codigos = $codigos;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        return $this->codigos;
    }
}
