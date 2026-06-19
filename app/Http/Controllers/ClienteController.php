<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Http\Requests\ClienteRequest;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes= Cliente::all();
        return view('clientes.index', compact('clientes'));
    }


    public function create()
    {
        return view('clientes.create');
    }

    public function store(ClienteRequest $request)
    {
        $data = $request->all();
        $data['dataNascimento'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request->dataNascimento)->format('Y-m-d');
    
        Cliente::create($data);
        return redirect('/clientes');
    }

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(ClienteRequest $request, Cliente $cliente)
    {
        $data = $request->all();
        $data['dataNascimento'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request->dataNascimento)->format('Y-m-d');

        $cliente->update($data);
        return redirect('/clientes');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('/clientes');
    }
}
