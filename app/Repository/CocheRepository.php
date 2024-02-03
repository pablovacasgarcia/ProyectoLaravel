<?php

namespace App\Repository;

use App\Models\Coche;

class CocheRepository
{

    protected Coche $model;

    public function __construct(Coche $model)
    {
        $this->model=$model;
    }

    public function insertarCoches($coche):void{
        
        Coche::create([
            'modelo' => $coche['modelo'],
            'precio' => $coche['precio'],
            'imagen' => $coche['imagen'],
            'marca_id' => $coche['marca_id']
        ]);
    }

    public static function getAll(){
        return Coche::all();
    }
}