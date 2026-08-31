<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Cliente; 


class ClienteControler extends Controller{
   
// Listar todos os clientes cadastrados
  public function index() 
  {
    $clientes = Cliente::orderByDesc('id_cliente')->get();

    return view('admin.cliente.index', compact('clientes'));

  }

}