<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tags_organizacion extends Model
{
    use HasFactory;

    protected $table = "tags_organizacion";

    protected $fillable = [
        'id',
        'id_tag',
        'id_organizacion',
    ];

}
