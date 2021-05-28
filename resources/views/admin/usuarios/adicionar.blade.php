@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Adicionar Usuario</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
                        <a href="{{ route('admin.usuarios') }}" class="breadcrumb">Lista de Usuario</a>
                        <a class="breadcrumb">Adicionar Usuario</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <form action="{{ route('admin.usuarios.salvar') }}" method="post">
                {{ csrf_field() }}
                @include('admin.usuarios._form')

                <button class="btn blue">Adicionar</button>

            </form>
        </div>
    </div>

@endsection