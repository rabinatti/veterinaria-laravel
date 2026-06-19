@extends('base')
@section('conteudo')
    <h1>Lista de Pets:</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Raça</th>
                <th>Data de Nascimento</th>
                <th>Tipo</th>
                <th>Tutor</th>
                <th>Falecimento</th>
                <th>Mais informações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->nomePet }}</td>
                <td>{{ $pet->raca }}</td>
                <td>{{ $pet->dataNascimentoPet }}</td>
                <td>{{ $pet->tipo }}</td>
                <td>{{ $pet->cliente->nome }}</td>
                <td>
                    @if($pet->dataFalecimento)
                        {{ $pet->dataFalecimento }}
                    @else
                        Vivo
                    @endif
                </td>
                <th><a href="/pets/{{ $pet->id }}">Ver informações</a></th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/pets/create">Adicionar pet</a>
@endsection