@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Enviar E-mail</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
                        <a href="{{ route('admin.imoveis') }}" class="breadcrumb">Lista de Imoveis</a>
                        <a class="breadcrumb">Enviar E-mail</a>
                    </div>
                </div>
            </nav>
        </div>

        <form action="{{ route('admin.imoveis.enviar', $registro->id) }}" method="get">
            <div class="row">
                <div class="col s12">
                    <div class="input-field col s4">
                        <input name="email" type="text" class="validate">
                        <label>E-Mail</label>
                    </div>

                    <div class="input-field col s4">
                        <input name="nome" type="text" class="validate">
                        <label>Nome</label>
                    </div>

                    <div class="input-field col s4">
                        <input name="assunto" type="text" class="validate">
                        <label>Assunto</label>
                    </div>
                </div>
            </div>
            <input name="id" type="hidden" value="{{ $registro->id }}">

        <div class="row">
            <div class="col s12 m4">
                <p><b>Titulo : </b>{{ $registro->titulo }}</p>
                <p><b>Status : </b>{{ $registro->status }}</p>
                <p><b>Cidade : </b>{{ $registro->cidade->nome }}</p>
                <p><b>Valor : </b>R$ {{number_format( $registro->valor,2,',','.') }}</p>
            </div>
        </div>
            <div class="row">
                <a class="btn blue">Enviar</a>
            </div>
        </form>
    </div>

@endsection
