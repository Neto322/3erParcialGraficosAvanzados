<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organization extends Model
{
    use HasFactory;

    protected $table = "organizations";

    protected $fillable = [
        'id',
        'nombre',
        'objeto_social',
        'presidente',
        'representantelegal',
        'director',
        'domicilio',
        'colonia',
        'telefono',
        'email',
        'sitioweb',
        'facebook',
        'instagram',
        'twitter',
        'activo',

    ];

}
