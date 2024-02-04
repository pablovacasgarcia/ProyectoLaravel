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

    public static function getAll(){
        return Cita::all();
    }
}
