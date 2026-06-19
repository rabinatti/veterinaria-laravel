@extends('base')
@section('conteudo')
    <h1>Lista de clientes:</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Informações</th>
                <th>Pets</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $cliente->cpf }}</td>
                <td>{{ $cliente->dataNascimento }}</td>
                <td>
                    <a href="/clientes/{{ $cliente->id }}">Ver informações</a>
                </td>
                <td>
                    <a href="/clientes/{{ $cliente->id }}/pets">Ver pets</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="/clientes/create">Adicionar cliente</a>
@endsection
