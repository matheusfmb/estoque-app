<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class ProdutoController extends BaseController 
{
    public function lista(){

        $produtos = DB::select('select * from produtos');
        return view('produtos/listar_produtos')-> with('produtos',$produtos);


        // Outra forma de passar o array para view sem o método with
        // return view('listagem', ['produtos' => $produtos]);

        //  Mais uma forma de passar o array pra view é extraindo o array para uma variável
        // $data = ['produtos' => $produtos];
        // return view ('listagem', $data);
        
    }

    public function cadastrarProduto(Request $request){
        if (empty($request->all())) {
            return "Preencha todo o formulário";
        }else{
            $nome = $request->input('nome');
            $valor = $request->input('valor');
            $quantidade = $request->input('quantidade');
            DB::insert('insert into produtos(nome,preco,quantidade) values (?,?,?)', array ($nome,$valor,$quantidade));
            return view('produtos/cadastro_sucess');
        }
    
    }

}
//     FUNCIONALIDADE NÃO É MAIS NECESSÁRIA
//     public function mostra($id){
//         $resposta = DB::select('select * from produtos where id = ?', [$id]);
//         if(empty($resposta)){
//             return "Esse produto não existe";
//         }
//         return view('detalhes')-> with ('p', $resposta[0]);


//         ALL - ONLY E EXCEPT PARA REQUEST.

//         lista todos os params 
//         $input = Request::all();

//         apenas nome e id
//         $input = Request::only(’nome’, ’id’); 

//         todos os params, menos o id
//         $input = Request::except(’id’);
//     }
// }