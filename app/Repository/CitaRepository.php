<?php

namespace App\Repository;

use App\Models\Cita;

class CitaRepository
{
    public function insertarCita($cita):void{
        Cita::create([
            'fecha' => $cita['fecha'],
            'coche_id' => $cita['coche_id'],
            'user_id' => $cita['user_id']
        ]);
    }

    public function getCitasByUser($user_id){
        return Cita::where('user_id', $user_id)->get();
    }

    public function deleteCita($id){
        Cita::destroy($id);
    }

    public static function getAll(){
        return Cita::all();
    }
}
