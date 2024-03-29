<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $table = 'citas';

    protected $fillable = ['fecha', 'coche_id', 'user_id'];

    protected $guarded = ['id'];
    protected  $primaryKey = 'id';
}
