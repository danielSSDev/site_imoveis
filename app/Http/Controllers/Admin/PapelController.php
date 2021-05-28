<?php

namespace App\Http\Controllers\Admin;

use App\Permissao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Papel;

class PapelController extends Controller
{
    public function index()
    {
        if (auth()->user()->can('papel_listar')) {
            return redirect()->route('admin.principal');
        }

        $registros = Papel::all();
        return view('admin.papel.index', compact('registros'));
    }

    public function adicionar()
    {
        if (auth()->user()->can('papel_adicionar')) {
            return redirect()->route('admin.principal');
        }

        return view('admin.papel.adicionar');
    }

    public function salvar(Request $request)
    {
        if (auth()->user()->can('papel_adicionar')) {
            return redirect()->route('admin.principal');
        }

        Papel::create($request->all());
        return redirect()->route('admin.papel');
    }

    public function editar($id)
    {
        if (auth()->user()->can('papel_editar')) {
            return redirect()->route('admin.principal');
        }

        if (Papel::find($id)->nome == 'admin')
        {
            \Session::flash('mensagem',['msg'=>'Este Registro Não pode ser Editado!','class'=>'red white-text']);
            return redirect()->route('admin.papel');
        }

        $papel = Papel::find($id);

        return view('admin.papel.editar', compact('papel'));
    }

    public function atualizar(Request $request, $id)
    {
        if (auth()->user()->can('papel_editar')) {
            return redirect()->route('admin.principal');
        }

        if (Papel::find($id)->nome == 'admin')
        {
            \Session::flash('mensagem',['msg'=>'Este Registro Não pode ser Editado!','class'=>'red white-text']);
            return redirect()->route('admin.papel');
        }

        Papel::find($id)->update($request->all());
        \Session::flash('mensagem',['msg'=>'Registro Atualizado com Sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.papel');
    }

    public function deletar($id)
    {
        if (auth()->user()->can('papel_deletar')) {
            return redirect()->route('admin.principal');
        }

        if (Papel::find($id)->nome == 'admin')
        {
            \Session::flash('mensagem',['msg'=>'Este Registro Não pode ser Deletado!','class'=>'red white-text']);
            return redirect()->route('admin.papel');
        }

        Papel::find($id)->delete();
        \Session::flash('mensagem',['msg'=>'Registro Deletado com Sucesso!','class'=>'green white-text']);
        return redirect()->route('admin.papel');
    }

    public function permissao($id)
    {
        $papel = Papel::find($id);
        $permissao = Permissao::all();
        return view('admin.papel.permissao', compact('papel', 'permissao'));
    }

    public function salvarPermissao(Request $request, $id)
    {
        $papel = Papel::find($id);
        $permissao = Permissao::find($request['permissao_id']);
        $papel->adicionarPermissao($permissao);
        return redirect()->back();
    }

    public function removerPermissao($id, $id_permissao)
    {
        $papel = Papel::find($id);
        $permissao = Permissao::find($id_permissao);
        $papel->removerPermissao($permissao);
        return redirect()->back();
    }
}


















