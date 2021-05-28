@extends('layouts.site')

@section('content')
    <div class="container">
        <div class="row section">
            <h3 align="center">Imovel</h3>
            <div class="divider"></div>
        </div>
        <div class="row section">
            <div class="col s12 m8">
                @if($imovel->galeria()->count())
                <div class="row">
                    <div class="slider">
                        <ul class="slides">
                            @foreach($galeria as $imagem)
                            <li>
                                <img src="{{asset($imagem->imagem)}}" alt="imagem">
                                <div class="caption {{ $direcaoImagem[rand(0,2)] }}">
                                    <h3>{{ $imagem->titulo }}</h3>
                                    <h5>{{ $imagem->descricao }}</h5>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row" align="center">
                    <button onclick="sliderPrev()" class="btn blue">Anterior</button>
                    <button onclick="sliderNext()" class="btn blue">Proxima</button>
                </div>
                    @else
                @endif
            </div>
            <div class="col s12 m4">
                <h4>{{ $imovel->titulo }}</h4>
                <blockquote>
                    {{ $imovel->descricao }}
                </blockquote>
                <p><b>Codigo:</b> 245</p>
                <p><b>Status:</b>{{ $imovel->status }}</p>
                <p><b>Tipo:</b>{{ $imovel->tipo->titulo }}</p>
                <p><b>Endereço:</b>{{ $imovel->endereco }}</p>
                <p><b>Cep:</b>{{ $imovel->cep }}</p>
                <p><b>Cidade:</b>{{ $imovel->cidade->nome . ' - ' . $imovel->cidade->sigla_estado }}</p>
                <p><b>Valor:</b> R$ {{ $imovel->valor }}</p>
                <a class="btn deep-orange darken-1" href="{{route('site.contato')}}">Entrar em contato</a>
            </div>
        </div>
    </div>
@endsection