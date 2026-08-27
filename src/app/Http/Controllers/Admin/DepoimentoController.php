<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Depoimento; 


class DepoimentoController extends Controller{
   
// Listar todos os depoimentos cadastrados
  public function index() 
  {
    $listaDepo = Depoimento::orderByDesc('id_depoimento')->get();

    return view('admin.depoimento.index', compact('listaDepo'));

  }

}