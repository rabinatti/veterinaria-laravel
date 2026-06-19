<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use App\Http\Requests\FuncionarioRequest;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return view('funcionarios.create');
    }

    public function store(FuncionarioRequest $request)
    {
        $data = $request->all();
        $data['dataNascimento'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request->dataNascimento)->format('Y-m-d');
        $data['dataContratacao'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request->dataContratacao)->format('Y-m-d');
        $data['funcionarioAtivo'] = 1;

        Funcionario::create($data);
        return redirect('/funcionarios');
    }

    public function show(Funcionario $funcionario)
    {
        return view('funcionarios.show', compact('funcionario'));
    }

    public function edit(Funcionario $funcionario)
    {
        return view('funcionarios.edit', compact('funcionario'));
    }

    public function update(FuncionarioRequest $request, Funcionario $funcionario)
    {
        $data = $request->all();
        $data['dataNascimento'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request->dataNascimento)->format('Y-m-d');
        $data['dataContratacao'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request->dataContratacao)->format('Y-m-d');

        $funcionario->update($data);
        return redirect('/funcionarios');
    }

    public function destroy(Funcionario $funcionario)
    {
        $funcionario->delete();
        return redirect('/funcionarios');
    }
}