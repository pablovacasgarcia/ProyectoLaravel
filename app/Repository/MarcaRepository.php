<?php

namespace App\Repository;

use App\Models\Marca;

class MarcaRepository
{
    protected Marca $model;

    public function __construct($model)
    {
        $this->model=$model;
    }

    public function insertarMarca($marca):void{
        Marca::create([
            'nombre' => $marca['nombre']
        ]);
    }

    public static function getAll(){
        return Marca::all();
    }
}
