<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    protected $table = 'coches';

    protected $fillable = ['modelo', 'precio', 'imagen', 'marca_id'];

    protected $guarded = ['id'];
    protected  $primaryKey = 'id';
}
