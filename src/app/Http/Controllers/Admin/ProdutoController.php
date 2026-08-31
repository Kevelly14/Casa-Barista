<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Produto; 


class ProdutoController extends Controller{
   
// Listar todos os produtos cadastrados
  public function index() 
  {
    $produtos = Produto::orderByDesc('id_produto')->get();

    return view('admin.produto.index', compact('produtos'));

  }

}