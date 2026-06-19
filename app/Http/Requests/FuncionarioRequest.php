<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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
            'nome' => 'required|max:100',
            'cpf' => 'required|digits:11',
            'dataNascimento' => 'required|date_format:d/m/Y',
            'salario' => 'required|decimal:2',
            'dataContratacao' => 'required|date_format:d/m/Y',
            'senhaFuncionario' => 'required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/'
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
            'dataNascimento.date_format' => 'Exemplo de entrada: 09/07/1995',
            'salario.required' => 'Salário é obrigatório',
            'salario.decimal' => 'O salário deve conter 2 casas decimais, separadas com ponto. Exemplo: 3500.00',
            'senhaFuncionario' => 'Senha é obrigatória, e deve conter uma letra maiúscula, uma letrea minúscula, e um número'
        ];
    }
}

