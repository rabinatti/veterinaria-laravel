<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consulta extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'dataConsulta', 
        'horaConsulta', 
        'idPet', 
        'idFuncionario'
    ];
}
