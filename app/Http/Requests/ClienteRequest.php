<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|max:100',
            'cpf' => 'required|digits:11',
            'dataNascimento' => 'required|date_format:d/m/Y'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'nome.max' => 'Nome com no máximo 100 caracteres',
            'cpf.required' => 'CPF obrigatório',
            'cpf.digits' => 'Colocar somente os números no CPF',
            'dataNascimento.required' => 'Data de nascimento obrigatória',
            'dataNascimento.date_format' => 'Exemplo de entrada: 09/07/1995' 
        ];
    }
}
