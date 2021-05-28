<?php

use Illuminate\Database\Seeder;
use App\Pagina;

class PaginasSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existe = Pagina::where('tipo', '=', 'sobre')->count();
        if($existe){
            $paginaSobre = Pagina::where('tipo','=','sobre')->first();

        }else{
            $paginaSobre = new Pagina();
        }

        $paginaSobre->titulo = " Titulo da Empresa ";
        $paginaSobre->descricao = "Descrição breve sobre a empresa.";
        $paginaSobre->texto = "Texto sobre a empresa.";
        $paginaSobre->imagem = "img/modelo_img_home.jpg";
        $paginaSobre->mapa = "<iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d647.153178205579!2d-51.915584639058295!3d-23.42974154533363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecd729b83ebd01%3A0x88ec75d2c4a36b9a!2zSk0gQXV0b21hw6fDo28!5e0!3m2!1spt-BR!2sbr!4v1558113482795!5m2!1spt-BR!2sbr' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe>";
        $paginaSobre->tipo = "sobre";
        $paginaSobre->save();
        echo "Pagina sobre criada com sucesso!";

        $existe = Pagina::where('tipo', '=', 'contato')->count();
        if($existe){
            $paginaContato = Pagina::where('tipo','=','contato')->first();

        }else{
            $paginaContato = new Pagina();
        }

        $paginaContato->titulo = "Entre em contato";
        $paginaContato->descricao = "Preencha o formulario.";
        $paginaContato->texto = "Contato.";
        $paginaContato->imagem = "img/modelo_img_home.jpg";
        $paginaContato->email = 'daniel-santos2000@live.com';
        $paginaContato->tipo = "Contato";
        $paginaContato->save();
        echo "Pagina contato criada com sucesso!";
    }
}
