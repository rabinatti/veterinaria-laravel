@extends('base')
@section('conteudo')

    <h1>Lista de Funcionários</h1>
    <a href="/funcionarios/create">Adicionar funcionário</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Salário</th>
                <th>Ativo</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($funcionarios as $funcionario)
            <tr>
                <td>{{ $funcionario->id }}</td>
                <td>{{ $funcionario->nome }}</td>
                <td>{{ $funcionario->cpf }}</td>
                <td>{{ \Carbon\Carbon::parse($funcionario->dataNascimento)->format('d/m/Y') }}</td>
                <td>R$ {{ number_format($funcionario->salario, 2, ',', '.') }}</td>
                <td>{{ $funcionario->funcionarioAtivo ? 'Sim' : 'Não' }}</td>
                <td>
                    <a href="/funcionarios/{{ $funcionario->id }}">Ver</a>
                    <a href="/funcionarios/{{ $funcionario->id }}/edit">Editar</a>
                    <form action="/funcionarios/{{ $funcionario->id }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Deseja excluir este funcionário?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection