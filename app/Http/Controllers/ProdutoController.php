<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(request $request){
        $data  =[];

        return view("home",$data);
    }

    public function categoria(request $request){
        $data  =[];

        return view("categoria",$data);
    }
}
