<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class ProdutoController extends BaseController 
{
    public function lista(){
        $html = '<h1>Listagem de produtos com Laravel</h1>';

        $html .= '<ul>';
        $produtos = DB::select('select * from produtos');
        foreach($produtos as $p){
            $html.= '<li> 
            id:'.$p->id.',
            nome:'.$p->nome.',
            preco'.$p->preco.',
            quantidade'.$p->quantidade.'</li>';
        }
        $html .= '</ul>';

        return $html;
    }
}