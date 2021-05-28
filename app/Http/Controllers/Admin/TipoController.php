<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tipo;
use App\Imovel;

class TipoController extends Controller
{
    public function index()
    {
        $tipos = Tipo::orderBy('id')->get();
        return view('admin.tipos.index',compact(  'tipos'));
    }

    public function adicionar()
    {
        return view('admin.tipos.adicionar');
    }

    public function salvar(Request $request)
    {
        $dados = $request->all();

        $registro = new Tipo();
        $registro->titulo = $dados['titulo'];

        $registro->save();

        \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'green white-text']);

        return redirect()->route('admin.tipos');
    }

    public function editar($id)
    {
        $registro = Tipo::find($id);
        return view('admin.tipos.editar', compact('registro'));
    }

    public function atualizar(Request $request, $id)
    {
        try{
            $registro = Tipo::find($id);
            $dados = $request->all();
            $registro->titulo = $dados['titulo'];

            $registro->update($dados);

            \Session::flash('mensagem',['msg'=>'Registro Atualizado com sucesso!','class'=>'green white-text']);

        }catch(\Exception $e){
        \Session::flash('mensagem',['msg'=>'Erro ao salvar usuário: '.$e->getMessage(),'class'=>'red white-text']);
    }

        return redirect()->route('admin.tipos');
    }

    public function deletar($id)
    {
        if(Imovel::where('tipo_id', '=', $id)->count())
        {
            $msg = "Não é possivel deletar esse tipo!
                Esses tipos(";
            $imoveis = Imovel::where('tipo_id', '=', $id)->get();

            foreach ($imoveis as $imovel)
            {
                $msg .= "id:".$imovel->id. " ". Tipo::find($id)->titulo. " ";
            }
            $msg .=  ")estão relacionados.";

            \Session::flash('mensagem',['msg'=>$msg,'class'=>'red white-text']);
            return redirect()->route('admin.tipos');
        }


        Tipo::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.tipos');
    }

    public function buscar(Request $request)
    {
        $busca = $request->all();

        if($busca['titulo'] == '')
        {
            $filtro =  ['id' , '>', 0];
        }else{
            $filtro = ['titulo', 'LIKE', '%'.$busca['titulo'].'%' ];
        }


        $tipos = Tipo::where([$filtro])->get();


        return view('admin.tipos.index', compact('busca','tipos'));
    }
}








