<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Usuario; 


class UsuarioController extends Controller{
   
// Listar todos os usuários cadastrados
  public function index() 
  {
    $usuarios = Usuario::orderByDesc('id_usuarios')->get();

    return view('admin.usuario.index', compact('usuarios'));

  }

}