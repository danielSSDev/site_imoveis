@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Editar Imoveis</h2>
        <div class="row">
            <nav>
                <div class="nav-wrapper green">
                    <div class="col s12">
                        <a href="{{ route('admin.principal') }}" class="breadcrumb">Inicio</a>
                        <a href="{{ route('admin.imoveis') }}" class="breadcrumb">Lista de Imoveis</a>
                        <a class="breadcrumb">Editar Imoveis</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            <form action="{{ route('admin.imoveis.atualizar', $registro->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('admin.imoveis._form')

                <button class="btn blue">Atualizar</button>

            </form>
        </div>
    </div>

@endsection