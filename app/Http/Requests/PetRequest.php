<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
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
            'nomePet' => 'required|max:50',
            'raca' => 'required|max:50',
            'dataNascimentoPet' => 'required|date_format:d/m/Y',
            'tipo' => 'required',
            'idCliente' => 'required|exists:clientes,id'
        ];
    }

    public function messages(): array
    {
        return [
            'nomePet.required' => 'Nome é obrigatório',
            'nomePet.max' => 'Nome com no máximo 50 caracteres',
            'raca.required' => 'Raça é obrigatório',
            'dataNascimentoPet.required' => 'Data de nascimento obrigatória',
            'dataNascimentoPet.date_format' => 'Exemplo de entrada: 09/07/1995',
            'tipo.required' => 'Tipo de pet é obrigatório',
            'idCliente.required' => 'O id do tutor é obrigatório'
        ];
    }
}
