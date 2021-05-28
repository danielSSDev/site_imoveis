<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pagina;

class PaginaController extends Controller
{
    public function sobre()
    {
        $pagina = Pagina::where('tipo', '=', 'sobre')->first();

        return view('site.sobre',compact('pagina'));
    }

    public  function contato()
    {
        $pagina = Pagina::where('tipo', '=', 'contato')->first();

        return view('site.contato', compact('pagina'));
    }

    public function enviarContato(Request $request)
    {
       try{
           $Pagina = Pagina::where('tipo', '=', 'contato')->first();
           $email = $Pagina->email;

           \Mail::send('emails.contato', ['request' =>$request], function($m) use($request,$email){
               $m->from($request['email'], $request['nome']);
               $m->to($email, 'Contato do Site');
           });

           \Session::flash('mensagem',['msg'=>'Contato enviado com sucesso!','class'=>'green white-text']);

       }catch(\Exception  $e){
           \Session::flash('mensagem',['msg'=>'Error ao enviar Email !'.$e->getMessage(),'class'=>'red white-text']);
       }

        return redirect()->route('site.contato');

    }
}
