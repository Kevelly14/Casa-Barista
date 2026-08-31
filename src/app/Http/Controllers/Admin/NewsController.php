<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\News;


class NewsController extends Controller{
   
// Listar todos os produtos cadastrados
  public function index() 
  {
    $newsletter = News::orderByDesc('id_news')->get();

    return view('admin.newsletter.index', compact('newsletter'));

  }

}