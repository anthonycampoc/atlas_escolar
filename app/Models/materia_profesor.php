<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materia_profesor extends Model
{
    use HasFactory;

    protected $fillable =[
        'materia_id',
        'profesor_id',
        'estado',
    ];

    public function materia(){
        return $this->belongsTo(Materia::class);
    }
    public function profesor(){
        return $this->belongsTo(Profesor::class);
    }
}
