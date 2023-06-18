<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Produto;



class ProdutoController extends Controller
{
    public function index(request $request){
        $data  =[];

        //Buscar  todos os produtos
        //Select * from produtos
        $listaProdutos = \App\Models\Produto:: all();
        $data["lista"] = $listaProdutos;

        return view("home",$data);
    }

    public function categoria($idcategoria = 0, Request $request)
    {
        // Seleciona todas as categorias
        $listaCategorias = Categoria::all();

        // Seleciona todos os produtos da categoria (se $idcategoria não for nulo)
        $listaProdutos = [];
        if ($idcategoria != 0) {
            $listaProdutos = Produto::where("categoria_id", $idcategoria)->get();
        }

        // Passa as variáveis para a view
        return view("categorias", ["listaCategoria" => $listaCategorias, "lista" => $listaProdutos]);
    }

    public function adicionarCarrinho($listaProduto=0, Request $requeste){

        //Buscar o produto pelo id

        $prod = Produto::find($listaProduto );

        if ($prod){
            //Encontrou o produto

            //  Bucar a secao

            $carrinho = session('cart',[]);


            array_push($carrinho, $prod);
            session(['cart'=> $carrinho]);

        }

        return redirect() ->route("home");
    }
    public function verCarrinho(Request $request){
        $carrinho = session('cart',[]);
        dd($carrinho);

    }
}

