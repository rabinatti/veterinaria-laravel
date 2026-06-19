<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConsultaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'dataConsulta' => 'required|date_format:d/m/Y',
            'horaConsulta' => 'required|date_format:H:i',
            'idPet' => 'required|integer|exists:pets,id',
            'idFuncionario' => 'required|integer|exists:funcionarios,id',
        ];
    }

    public function messages(): array
    {
        return [
            'dataConsulta.required' => 'Data da consulta é obrigatória',
            'dataConsulta.date_format' => 'Exemplo de entrada: 09/07/1995',
            'horaConsulta.required' => 'Hora da consulta obrigatória',
            'horaConsulta.date_format' => 'Formato de hora inválido. Ex: 01:30 ou 14:30',
            'idPet' => 'O id do Pet é obrigatório e deve ser em formato número',
            'idPet.exists' => 'O pet deve estar cadastrado no sistema',
            'idFuncionario' => 'O id do funcionário é obrigatório e deve ser em formato número',
            'idFuncionario.exists' => 'O funcionário deve estar cadastrado no sistema',
        ];
    }
}
