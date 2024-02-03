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

    public function editarCoche($coche, $id):void{

        Coche::where('id', $id)->update([
            'modelo' => $coche['modelo'],
            'precio' => $coche['precio'],
            'marca_id' => $coche['marca_id']
        ]);
    }

    public function borrarCoche($id):void{
        Coche::destroy($id);
    }

    public static function getAll(){
        return Coche::all();
    }

    public function show($id){
        return $this->model->find($id);
    }
}
