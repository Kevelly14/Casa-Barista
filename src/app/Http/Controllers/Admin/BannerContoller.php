<?php

namespace App\Models\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Banner; 


Class BannerController extends Controller{
   
// Listar todos os banners cadastrados
  public function index() 
  {
    $listaBanner = Banner::orderByDesc('id_banner')->get();

    return view('admin.benner,index', compact('listaBanner'));

    
  }




}