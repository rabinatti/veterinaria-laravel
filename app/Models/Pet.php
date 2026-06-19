<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pet extends Model
{
    use HasFactory;
    protected $table = 'pets';
    
    protected $fillable = [
        'id', 
        'nomePet', 
        'raca', 
        'dataNascimentoPet', 
        'tipo', 
        'idCliente', 
        'petAtivo', 
        'dataFalecimento'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idCliente');
    }
}
