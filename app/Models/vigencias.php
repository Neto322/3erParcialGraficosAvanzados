<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vigencias extends Model
{
    use HasFactory;

    protected $table = "vigencias";

    protected $fillable = [
        'id',
        'id_organizacion',
        'fecha_verificacion',
        'comentario',

    ];

}
