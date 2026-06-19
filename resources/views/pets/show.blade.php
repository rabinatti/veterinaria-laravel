@extends('base')
@section('conteudo')

    <p>ID: {{ $pet->id }}</p>
    <p>Nome: {{ $pet->nomePet }}</p>
    <p>Raça: {{ $pet->raca }}</p>
    <p>Data de Nascimento do Pet: {{ \Carbon\Carbon::parse($pet->dataNascimentoPet)->format('d/m/Y') }}</p>
    <p>Tipo: {{ $pet->tipo }}</p>
    <p>Tutor: {{ $pet->cliente->nome }}</p>
    @if(!$pet->petAtivo)
        <p>Falecimento: {{ \Carbon\Carbon::parse($pet->dataFalecimento)->format('d/m/Y') }}</p></p>
    @endif

    <a href="/pets/{{ $pet->id }}/edit">Editar</a>

    <form action="/pets/{{ $pet->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Deseja excluir este pet?')">Excluir</button>
    </form>

    <a href="/pets">Voltar</a>

@endsection