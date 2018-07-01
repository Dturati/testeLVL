<?php declare(strict_types=1);

namespace estoque\Http\Controllers;

use estoque\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    /**
     * @return object
     */
    public function lista()
    {
        $produtos = DB::select("select * from produtos");
        $context['listagem'] = $produtos;
        return view('listagem/listagem',$context);
    }

    /**
     * @param int|null $id
     * @return object
     */
    public function visualizar(?int $id) : object
    {
//        print_r(FacadeRequest::route('id'));
        $produto = Produto::find($id);
        if(empty($produto)){
            return view('error/error');
        }
        return view('listagem/detalhes',['produto' => $produto]);
    }

    public function novo(Request $request)
    {
        if($request->post()) {
            $dados = $request->all();
//            print_r($dados);
            $res = Produto::create($dados);
//            die();
        }


        return view('listagem/novo');
    }

}
