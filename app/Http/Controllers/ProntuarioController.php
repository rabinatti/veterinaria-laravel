<?php

namespace App\Http\Controllers;

use App\Models\Prontuario;
use Illuminate\Http\Request;

class ProntuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProntuarioRequest $request, $idPet)
    {
        Prontuario::create([
            ...$request->all(),
            'idPet' => $idPet     
        ]);

        return redirect('/pets/{$idPet}/prontuario');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prontuario $prontuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prontuario $prontuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProntuarioRequest $request, $idPet, Prontuario $prontuario)
    {
        $prontuario->update([
            ...$request->all(),
            'idPet' => $idPet
        ]); 
        
        return redirect("/pets/{idPet}/prontuario");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prontuario $prontuario)
    {
        //
    }
}
