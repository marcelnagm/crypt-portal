<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    //
    
    
    public function create() {
        return view('produtos.create');
    }
    
    public function store(Request $request) {
        echo 'tututu';
        return dd($request->all());
    }
    
}
