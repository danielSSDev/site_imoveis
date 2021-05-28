@component('mail::message')

<h3>Imovel Cadastrado</h3>

<p><b>Titulo : </b>{{ $imovel->titulo }}</p>
<p><b>Status : </b>{{ $imovel->status }}</p>
<p><b>Cidade : </b>{{ $imovel->cidade->nome }}</p>
<p><b>Valor : </b>R$ {{number_format( $imovel->valor,2,',','.') }}</p>

@component('mail::button', ['url' => route('site.imovel',[$imovel->id, $imovel->titulo])])
Visualizar Imovel
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
