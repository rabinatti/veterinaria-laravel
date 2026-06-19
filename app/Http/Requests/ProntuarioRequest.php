<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProntuarioRequest extends FormRequest
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
            'idPet' => 'required|integer|exists:pets,id',
            'pesoPet' => 'required|decimal:3',
            'descricao' => 'required|string',
            'estadoPet' => 'required|string'
        ];
    }

    public function messages(): array
    {
        return [
            'idPet' => 'O id do Pet é obrigatório e deve ser em formato número',
            'idPet.exists' => 'O pet deve estar cadastrado no sistema',
            'pesoPet.required' => 'peso do pet é obrigatório',
            'descricao.required' => 'Descrição do pet é obrigatória',
            'estadoPet.required' => 'Estado do pet é obrigatório',
        ];
    }
}
