<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cidade;
use App\Imovel;

class CidadeController extends Controller
{
    public function index()
    {
        $registros = Cidade::all();
        return view('admin.cidades.index',compact('registros'));
    }

    public function adicionar()
    {
        return view('admin.cidades.adicionar');
    }

    public function salvar(Request $request)
    {
        try{
            $dados = $request->all();

            $cidade = new Cidade();
            $cidade->nome = $dados['nome'];
            $cidade->estado = $dados['estado'];
            $cidade->sigla_estado = $dados['sigla_estado'];

            $cidade->save();

            \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'green white-text']);
        }catch(\Exception $e)
        {
            \Session::flash('mensagem', ['msg' => 'Erro ao Registrar Cidade', 'class' => 'red white-text']);
        }

        return redirect()->route('admin.cidades');
    }

    public function editar($id)
    {
        $cidade = Cidade::find($id);
        return view('admin.cidades.editar', compact('cidade'));
    }

    public function atualizar(Request $request, $id)
    {
        try{
            $cidade = Cidade::find($id);
            $dados = $request->all();
            $cidade->nome = $dados['nome'];
            $cidade->estado = $dados['estado'];
            $cidade->sigla_estado = $dados['sigla_estado'];

            $cidade->save($dados);

            \Session::flash('mensagem',['msg'=>'Registro Atualizado com sucesso!','class'=>'green white-text']);

        }catch(\Exception $e){
            \Session::flash('mensagem',['msg'=>'Erro ao salvar usuário: '.$e->getMessage(),'class'=>'red white-text']);
        }

        return redirect()->route('admin.cidades');
    }

    public function deletar($id)
    {
        if(Imovel::where('cidade_id', '=', $id)->count())
        {
            $msg = "Não é possivel deletar essa Cidade !
                Esses Imoveis(";
            $imoveis = Imovel::where('cidade_id', '=', $id)->get();

            foreach ($imoveis as $imovel)
            {
                $msg .= "id:".$imovel->id." ";
            }
            $msg .= ") estão relacionados.";

            \Session::flash('mensagem',['msg'=>$msg, 'class'=>'red white-text']);
            return redirect()->route('admin.cidades');
        }


        Cidade::find($id)->delete();

        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.cidades');
    }

    public function buscar(Request $request)
    {
        $busca = $request->all();
        $filtro = [];

        if ($busca['nome'] != '')
        {
            $filtroNome = ['nome', 'like', '%'.$busca['nome'].'%'];
            array_push($filtro,$filtroNome);
        }

        if($busca['estado'] != '')
        {
            $filtroEstado = ['estado', 'like', '%'.$busca['estado'].'%'];
            array_push($filtro,$filtroEstado);
        }

        $registros = Cidade::where($filtro)->get();


        return view('admin.cidades.index', compact('busca', 'registros'));
    }
}
