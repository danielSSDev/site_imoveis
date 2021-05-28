@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Tipos</h2>

        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
                        <a class="breadcrumb">Lista de Tipos</a>
                    </div>
                </div>
            </nav>
        </div>

        <form action="{{ route('admin.tipos.buscar') }}">
        <div class="row">
            <div class="input-field col s6 m4">
                <input class="validate" type="text" name="titulo" value="{{ isset($busca['titulo']) ? $busca['titulo'] : '' }}">
                <label>Tipo de Imovel</label>
            </div>
            <div class="input-field col s12 m2">
                <button class="btn deep-range darken-1 right">Filtrar</button>
            </div>
        </div>
        </form>

        <div class="row">
            <table>
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($tipos as $tipo)
                    <tr>
                        <td>{{ $tipo->id }}</td>
                        <td>{{ $tipo->titulo }}</td>

                        <td>
                            <a class="btn orange" href="{{ route('admin.tipos.editar', $tipo->id) }}">Editar</a>
                            <a class="btn red" href="javascript: if(confirm('Deletar esse Registro ?')){ window.location.href = '{{ route('admin.tipos.deletar',$tipo->id) }}' }">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.tipos.adicionar') }}">Adicionar</a>
        </div>
    </div>

@endsection