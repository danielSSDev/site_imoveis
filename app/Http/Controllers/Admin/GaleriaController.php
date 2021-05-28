<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Galeria;
use App\Imovel;
use Illuminate\Support\Str;
use PHPUnit\Framework\Exception;
use function Symfony\Component\Console\Tests\Command\createClosure;

class GaleriaController extends Controller
{
    public function index($id)
    {
        $imovel = Imovel::find($id);

        $registros = $imovel->galeria()->orderBy('ordem')->get();
        return view('admin.galerias.index',compact('registros', 'imovel'));
    }

    public function adicionar($id)
    {
        $imovel = Imovel::find($id);

        return view('admin.galerias.adicionar', compact( 'imovel'));
    }

    public function salvar(Request $request,$id)
    {
        try{

            $imovel = Imovel::find($id);

            $dados = $request->all();

            if($imovel->galeria()->count())
            {
                $galeria = $imovel->galeria()->orderBy('ordem', 'desc')->first();
                $ordemAtual = $galeria->ordem;
            }else{
                $ordemAtual = 0;
            }

            if($request->hasFile('imagens'))
            {
                $slug = Str::slug($imovel['titulo'], '-');

                $arquivos = $request->file('imagens');
                foreach($arquivos as $arquivo)
                {
                    $registro = new Galeria();

                    $rand = rand(11111,99999);
                    $diretorio = "img/imoveis/".$slug."/";
                    $ext = $arquivo->guessClientExtension();
                    $nomeArquivo = "_img_".$rand.".".$ext;
//pelo move ele salva a imagem tambem!
                    $arquivo->move($diretorio,$nomeArquivo);

                    $registro->imovel_id = $imovel->id;
                    $registro->ordem = $ordemAtual + 1;
                    $ordemAtual ++;
                    $registro->imagem = $diretorio.'/'.$nomeArquivo;
                    $registro->save();
                }
            }
            \Session::flash('mensagem', ['msg' => 'Registro criado com sucesso!', 'class' => 'green white-text']);

        }catch (\Exception $e){
            if(file_exists($diretorio.'/'.$nomeArquivo)){
                unlink($diretorio.'/'.$nomeArquivo);
            }
            \Session::flash('mensagem',['msg'=>'Erro ao salvar Imagem: '.$e->getMessage(),'class'=>'red white-text']);
        }

        return redirect()->route('admin.galerias',$imovel->id);
    }

    public function editar($id)
    {
        $registro = Galeria::find($id);
        $imovel = $registro->imovel;
        return view('admin.galerias.editar', compact('registro', 'imovel'));
    }

    public function atualizar(Request $request, $id)
    {
        try{
            $registro = Galeria::find($id);
            $dados = $request->all();
            $registro->titulo = $dados['titulo'];
            $registro->descricao = $dados['descricao'];
            $registro->ordem = $dados['ordem'];

            $imovel= $registro->imovel;
            $slug = Str::slug($imovel['titulo'], '-');

            $file = $request->file('imagem');
            if($file){
                $rand = rand(11111,99999);
                $diretorio = "img/imoveis/".$slug."/";
                $ext = $file->guessClientExtension();
                $nomeArquivo = "_img_".$rand.".".$ext;
                $file->move($diretorio,$nomeArquivo);
                $registro->imagem = $diretorio.'/'.$nomeArquivo;
            }

            $registro->save($dados);

            \Session::flash('mensagem',['msg'=>'Registro Atualizado com sucesso!','class'=>'green white-text']);

        }catch(\Exception $e){
            \Session::flash('mensagem',['msg'=>'Erro ao salvar usuário: '.$e->getMessage(),'class'=>'red white-text']);
        }

        return redirect()->route('admin.galerias',$imovel->id);
    }

    public function deletar($id)
    {
        $galeria = Galeria::find($id);
        $imovel = $galeria->imovel;
        $galeria->delete();

        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.galerias', $imovel->id);
    }
}
