<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;

    protected $table = "tags";

        //Query Scope
    public function scopeTag($query, $descripcion)
    {
        if($descripcion)
        {
            return $query->where('descripcion', 'LIKE', "%$descripcion%");
        }
        
    }

}
