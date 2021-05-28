<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function imoveis()
    {
        return $this->hasMany(Imovel::class);
    }


}
