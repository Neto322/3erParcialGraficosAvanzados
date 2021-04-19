<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    //Laravel busca por default una tabla que se llame igual pero en minusculas
    //Y con una 's' al final

    protected $table = "tags";
}
