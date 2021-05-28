<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = ['tipo'];

    public function imoveis()
    {
        return $this->hasMany(Imovel::class);
    }
}
