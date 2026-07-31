<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Produto;
class CardapioController extends Controller
{

    public function cardapio(?int $idCategoria = null){

    $listaCategoria = Categoria::where('status_categoria', 'ATIVO')
    ->orderBy('nome_categoria')
    ->get();

    //SE nennhuma categoria estiver na URL 
    if($idCategoria === null){
        $categoriaSelecionada = $listaCategoria->first();
    }else{
        $categoriaSelecionada = $listaCategoria->firstWhere('id_categoria', $idCategoria);
    }

    //Caso não tenha a categoria
    abort_if($categoriaSelecionada === null, 404, 'Categoria não encontrada');

    //Buscar somente os produtos relacionado a categoria

    $listaProduto = Produto::where('status_produto', 'ATIVO')
    ->orderBy('nome_produto')
    ->get();
    
    //dd($listaProduto);

    $produtos = Produto::query()
    ->where('id_categoria', $categoriaSelecionada->id_categoria)
    ->where('status_produto', 'ATIVO')
    ->orderBy('nome_produto')
    ->get();

    //dd($produtos);
    //dd($listaCategoria);

    return view('site.cardapio.cardapio', compact('listaCategoria', 'listaProduto', 'produtos', 'categoriaSelecionada'));

    }

}