<?php

namespace App\Repository;

use App\Models\Coche;
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

    public function show($id){
        return Coche::where('marca_id', $id)->get();
    }

    public function getMarca($id){
        return Marca::find($id);
    }

    public function editarMarca($marca, $id):void{
        Marca::where('id', $id)->update([
            'nombre' => $marca['nombre']
        ]);
    }

    public function borrarMarca($id):void{
        Marca::destroy($id);
    }

    public static function getDatos($id){
        return Marca::where('id', $id)->first();
    }
}
