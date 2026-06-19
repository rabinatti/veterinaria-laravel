@extends('base')
@section('conteudo')

    <form action="/pets/{{ $pet->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nome:</label>
        <input type="text" name="nomePet" value="{{ $pet->nomePet }}">

        <label>Raça:</label>
        <input type="text" name="raca" value="{{ $pet->raca }}">

        <label>Data de Nascimento:</label>
        <input type="text" name="dataNascimentoPet" value="{{ \Carbon\Carbon::parse($pet->dataNascimentoPet)->format('d/m/Y') }}">

        <label>Tipo:</label>
        <input type="text" name="tipo" value="{{ $pet->tipo }}">

        <label>Cliente:</label>
        <select name="idCliente">
            <option value="">Selecione um cliente</option>
            @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $pet->idCliente == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->nome }}
                </option>
            @endforeach
        </select>

        <label>Data de Falecimento:</label>
        <input type="text" name="dataFalecimento" value="{{ $pet->dataFalecimento ? \Carbon\Carbon::parse($pet->dataFalecimento)->format('d/m/Y') : '' }}">

        <button type="submit">Atualizar</button>
    </form>

@endsection