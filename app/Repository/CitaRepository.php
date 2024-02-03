<?php

namespace App\Repository;

use App\Models\Cita;

class CitaRepository
{
    public static function getAll(){
        return Cita::all();
    }
}
