@extends('base')
@section('titulo', 'Listagem Aluno')
@section('conteudo')

<h3>Listagem de Alunos</h3>

<a href="{{ url('aluno/create') }}">Criar Novo Aluno</a>

<table border="1" cellspacing="0" cellpadding="5">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
        @foreach($dados as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nome }}</td>
            <td>{{ $item->cpf }}</td>
            <td>{{ $item->telefone }}</td>
            <td>
                <form action="{{ route('aluno.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Remover</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@stop