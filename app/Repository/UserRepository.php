<?php

namespace App\Repository;

use App\Models\Coche;
use App\Models\User;

class UserRepository
{
    protected User $model;

    public function __construct($model)
    {
        $this->model=$model;
    }

   public static function getDatos($id){
        return User::where('id',$id)->first();
   }
}
