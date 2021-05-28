@extends('layouts.app')

@section('content')

    <div class="container">
        <h2 class="center">Admin</h2>
        <div class="row">
            <div class="col s12 m4">
                <div class="card blue darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Imoveis</span>
                        <p>Lista de Imoveis</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.imoveis') }}">Acessar</a>
                    </div>
                </div>
            </div>


            <div class="col s12 m4">
                <div class="card green darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Tipos</span>
                        <p>Tipo de Imoveis</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.tipos') }}">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="card red darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Cidades</span>
                        <p>Lista de Cidades</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.cidades') }}">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card orange darken-3">
                    <div class="card-content white-text">
                        <span class="card-title">Usuarios</span>
                        <p>Lista de Usuarios</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.usuarios') }}">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card blue darken-4">
                    <div class="card-content white-text">
                        <span class="card-title">Paginas</span>
                        <p>Lista de Paginas</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.paginas') }}">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card purple darken-1">
                    <div class="card-content white-text">
                        <span class="card-title">Papel</span>
                        <p>Lista de Papeis</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.papel') }}">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m6">
                <div class="card grey darken-2">
                    <div class="card-content white-text">
                        <span class="card-title">Slides</span>
                        <p>Lista de Slides</p>
                    </div>
                    <div class="card-action">
                        <a href="{{ route('admin.slides') }}">Acessar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection