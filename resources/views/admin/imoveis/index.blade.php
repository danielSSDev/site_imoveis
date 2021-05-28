@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="center">Lista de Imoveis</h2>

        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
                        <a class="breadcrumb">Lista de Imoveis</a>
                    </div>
                </div>
            </nav>
        </div>

        <form action="{{ route('admin.imoveis.buscar') }}">
            <div class="row">
                <div class="input-field col s6 m4">
                    <select name="status">
                        <option {{ isset($busca['status']) && $busca['titulo'] == 'todos' ? 'selected' : ''}} value="todos">Aluga e Venda</option>
                        <option {{ isset($busca['status']) && $busca['status'] == 'aluga' ? 'selected' : ''}} value="aluga">Aluga</option>
                        <option {{ isset($busca['status']) && $busca['status'] == 'vende' ? 'selected' : ''}} value="vende">Vende</option>
                    </select>
                    <label>Status</label>
                </div>

                <div class="input-field col s6 m4">
                    <input class="validate" type="text" name="titulo" value="{{ isset($busca['titulo']) ? $busca['titulo'] : '' }}">
                    <label>Titulo</label>
                </div>

                <div class="input-field col s6 m4">
                    <select name="cidade">
                        <option {{ isset($busca['cidade']) && $busca['cidade'] == $cidades ? 'selected' : '' }} value="todos">Todas as Cidades</option>
                        @foreach($cidades as $cidade)
                            <option {{ isset($busca['cidade']) && $busca['cidade'] == $cidade ? 'selected' : '' }} value="{{$cidade->nome }}">{{ $cidade->nome }}</option>
                        @endforeach
                    </select>
                    {{--<input class="validate" type="text" name="cidade"  value="{{ isset($busca['cidade']) ? $busca['cidade'] : '' }}">--}}
                    <label>Cidade</label>
                </div>

                <div class="input-field col s12 m12">
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
                    <th>Status</th>
                    <th>Cidade</th>
                    <th>Valor</th>
                    <th>Imagem</th>
                    <th>Publicado</th>
                    <th>Ação</th>
                </tr>
                </thead>
                <tbody>
                @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->id }}</td>
                        <td>{{ $registro->titulo }}</td>
                        <td>{{ $registro->status }}</td>
                        <td>{{ $registro->cidade->nome }}</td>
                        <td>R$ {{ number_format($registro->valor,2,",",".")}}</td>
                        <td><img width="100" src="{{ asset($registro->imagem) }}"></td>
                        <td>{{ $registro->publicar }}</td>

                        <td>
                            <a class="btn orange" href="{{ route('admin.imoveis.editar', $registro->id) }}">Editar</a>
                            <a class="btn blue" href="{{ route('admin.imoveis.email', $registro->id) }}">Enviar email</a>
                            <a class="btn green" href="{{ route('admin.galerias', $registro->id) }}">Galeria</a>
                            <a class="btn red" href="javascript: if(confirm('Deletar esse Registro ?')){ window.location.href = '{{ route('admin.imoveis.deletar',$registro->id) }}' }">Deletar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="row">
            <a class="btn blue" href="{{ route('admin.imoveis.adicionar') }}">Adicionar</a>
        </div>
    </div>

@endsection