<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
class ProdutoController extends BaseController 
{
    public function lista(){
       
        $produtos = DB::select('select * from produtos');
        return view('listagem')-> with('produtos',$produtos);


        // Outra forma de passar o array para view sem o método with
        // return view('listagem', ['produtos' => $produtos]);

        //  Mais uma forma de passar o array pra view é extraindo o array para uma variável
        // $data = ['produtos' => $produtos];
        // return view ('listagem', $data);
        
    }

    public function mostra(){
        $id = request()->input('id');
        $resposta = DB::select('select * from produtos where id = ?', [$id]);
        if(empty($resposta)){
            return "Esse produto não existe";
        }
        return view('detalhes')-> with ('p', $resposta[0]);
    }
}