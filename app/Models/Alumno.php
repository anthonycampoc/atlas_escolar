<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable= [
        'name',
        'number',
        'codigo',
        'last_name',
        'telephone',
        'status',
        'email',
    ];

    public function grupo(){
        return $this->belongsToMany(Grupo::class,'grupo_alumnos')
        ->withPivot('grupo_id');
    }

}
