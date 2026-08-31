<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Categoria; 


class CategoriaController extends Controller{
   
// Listar todos os produtos cadastrados
  public function index() 
  {
    $categorias = Categoria::orderByDesc('id_categoria')->get();

    return view('admin.categoria.index', compact('categorias'));

  }

}