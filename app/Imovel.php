<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        'tipo_id',
        'tipo_id',
        'cidade_id',
        'cidade_id',
        'titulo',
        'descricao',
        'imagem',
        'status',
        'endereco',
        'cep',
        'valor',
        'dormitorios', 
        'detalhes',
        'mapa',
        'visualizacoes',
        'publicar'
    ];

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    public function galeria()
    {
        return $this->hasMany(Galeria::class);
    }
}
