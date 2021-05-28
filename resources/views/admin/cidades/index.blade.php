@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Cidades</h2>

        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
                        <a class="breadcrumb">Lista de Cidades</a>
                    </div>
                </div>
            </nav>

        </div>

        <form action="{{ route('admin.cidades.buscar') }}">
            <div class="row">
                <div class="input-field col s12 m3">
                    <input class="validate" type="text" name="nome" value="{{ isset($busca['nome']) ? $busca['nome'] : '' }}">
                    <label>Tipo de Cidade</label>
                </div>

                <div class="input-field col s12 m3">
                    <input class="validate" type="text" name="estado" value="{{ isset($busca['estado']) ? $busca['estado'] : '' }}">
                    <label>Tipo de Estado</label>
                </div>

                <div class="input-field col s12 m1">
                    <button class="btn deep-range darken-1 right">Filtrar</button>
                </div>
            </div>
        </form>

        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th>Sigla do Estado</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $cidade)
                    <tr>
                        <td>{{ $cidade->id }}</td>
                        <td>{{ $cidade->nome }}</td>
                        <td>{{ $cidade->estado }}</td>
                        <td>{{ $cidade->sigla_estado }}</td>

                        <td>
                            <a class="btn orange" href="{{ route('admin.cidades.editar', $cidade->id) }}">Editar</a>
                            <a class="btn red" href="javascript: if(confirm('Deletar esse Registro ?')){ window.location.href = '{{ route('admin.cidades.deletar',$cidade->id) }}' }">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.cidades.adicionar') }}">Adicionar</a>
        </div>
    </div>

@endsection