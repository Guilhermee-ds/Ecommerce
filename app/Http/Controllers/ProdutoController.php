<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function categoria(request $request){
        $data  =[];

        return view("categoria",$data);
    }
}
