<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Cliente;
use App\Http\Requests\PetRequest;
use Illuminate\Http\Request;

class PetController extends Controller
{

    public function index()
    {
        $pets = Pet::with('cliente')->get();
        return view('pets.index', compact('pets'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('pets.create', compact('clientes'));
    }

    public function store(PetRequest $request)
    {
        $data = $request->all();
        $data['dataNascimentoPet'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request->dataNascimentoPet)->format('Y-m-d');
        $data['petAtivo'] = 1;

        Pet::create($data);
        return redirect('/pets');
    }

    public function show(Pet $pet)
    {
        $clientes = Cliente::all();
        return view('pets.show', compact('pet', 'clientes'));
    }

    public function edit(Pet $pet)
    {
        $clientes = Cliente::all();
        return view('pets.edit', compact('pet', 'clientes'));
    }

    public function update(PetRequest $request, Pet $pet)
    {
        $data = $request->all();
        $data['dataNascimentoPet'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request->dataNascimentoPet)->format('Y-m-d');
    
        if (!empty($data['dataFalecimento'])) {
            $data['dataFalecimento'] = $data['dataNascimentoPet'] = \Carbon\Carbon::createFromFormat('d/m/Y', $request->dataFalecimento)->format('Y-m-d');
        }

        $pet->update($data);
        return redirect('/pets');
    }

    public function destroy(Pet $pet)
    {
        $pet->delete();
        return redirect('/pets');
    }
}
