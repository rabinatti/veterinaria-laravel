<?php

namespace Database\Seeders;

use App\Models\Cliente;
use App\Models\Pet;
use App\Models\Funcionario;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Cliente::create([
            'nome'=>'Maria',
            'cpf'=>'11122233344',
            'dataNascimento'=>'1994-05-14'
        ]);
        Cliente::create([
            'nome'=>'João',
            'cpf'=>'11122233345',
            'dataNascimento'=>'1994-07-13'
        ]);
        Pet::create([
            'nomePet'=>'Rex',
            'raca'=>'Lhasa',
            'dataNascimentoPet'=>'2020-05-25',
            'tipo'=>'Cachorro',
            'idCliente'=>'1',
            'PetAtivo'=>'1'
        ]);
        Pet::create([
            'nomePet'=>'Nina',
            'raca'=>'Persa',
            'dataNascimentoPet'=>'2024-10-14',
            'tipo'=>'Gato',
            'idCliente'=>'2',
            'PetAtivo'=>'1'
        ]);
        Pet::create([
            'nomePet'=>'Frajola',
            'raca'=>'Vira-lata',
            'dataNascimentoPet'=>'2019-01-30',
            'tipo'=>'Gato',
            'idCliente'=>'2',
            'PetAtivo'=>'1'
        ]);
        Funcionario::create([
            'nome' => 'Carlos Silva',
            'cpf' => '12345678901',
            'dataNascimento' => '1990-05-10',
            'salario' => 2500.00,
            'dataContratacao' => '2020-03-15',
            'funcionarioAtivo' => 1,
            'senhaFuncionario' => 'Senha123'
        ]);
    }
}
