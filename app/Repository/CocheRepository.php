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
        
        $imagen = $coche['imagen'];
        $originalName = $imagen->getClientOriginalName();
        Coche::create([
            'modelo' => $coche['modelo'],
            'precio' => $coche['precio'],
            'imagen' => $originalName,
            'marca_id' => $coche['marca_id']
        ]);

        $destinationPath = public_path('/img');
        $imagenSubida = $imagen->move($destinationPath, $originalName);
    }

    public static function getAll(){
        return Coche::all();
    }

    public function show($id){
        return $this->model->find($id);
    }
}
