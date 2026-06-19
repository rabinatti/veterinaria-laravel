<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prontuario extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'idPet', 
        'pesoPet', 
        'descricao', 
        'estadoPet', 
    ];
}
