<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Linha_tempo; 


class Linha_tempoController extends Controller{
   
// Listar todos os depoimentos cadastrados
  public function index() 
  {
    $LinhadoTempo = Linha_tempo::orderByDesc('id_linha_tempo')->get();

    return view('admin.linha_tempo.index', compact('LinhadoTempo'));

  }

}