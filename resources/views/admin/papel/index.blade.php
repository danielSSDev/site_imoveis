@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Papéis</h2>

        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
                        <a class="breadcrumb">Lista de Papéis</a>
                    </div>
                </div>
            </nav>

        </div>

        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $papel)
                    <tr>
                        <td>{{ $papel->id }}</td>
                        <td>{{ $papel->nome }}</td>
                        <td>{{ $papel->descricao }}</td>

                        <td>
                            @if($papel->nome != 'admin')
                                <a class="btn orange" href="{{ route('admin.papel.editar', $papel->id) }}">Editar</a>
                                <a class="btn blue" href="{{ route('admin.papel.permissao', $papel->id) }}">Permissão</a>
                            @else
                                <a class="btn orange disabled" >Editar</a>
                                <a class="btn blue disabled">Permissão</a>
                            @endif

                            @if($papel->nome != 'admin')
                                <a class="btn red" href="javascript: if(confirm('Deletar esse Registro ?')){ window.location.href = '{{ route('admin.papel.deletar',$papel->id) }}' }">Deletar</a>
                            @else
                                <a class="btn red disabled" >Deletar</a>
                            @endif

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.papel.adicionar') }}">Adicionar</a>
        </div>
    </div>

@endsection