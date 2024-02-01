<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    use HasFactory;

    protected $table = 'coches';

    protected $fillable = ['modelo'];

    protected $guarded = ['id'];
    protected  $primaryKey = 'id';
}
