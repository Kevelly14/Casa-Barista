@extends('layout.site')

@section('content')

<!-- INÍCIO BANNER -->
@include('site.home.banner')

  <!-- Sessão Bem-Vindo -->
  @include('site.home.bemvindo')

  <!-- DESTAQUE -->
  @include('site.home.destaque')
   
  <!-- INÍCIO DA SESSÃO CARDÁPIO -->
  @include('site.home.cardapio')
  
  <!-- INÍCIO DA SESSÃO EQUIPE -->
  @include('site.home.equipe')

  <!-- INÍCIO DA SESSÃO EVENTOS -->
  @include('site.home.eventos')
    
  <!-- INÍCIO DA SESSÃO GALERIA -->
  @include('site.home.galeria')
      
  <!-- INÍCIO DA SESSÃO DEPOIMENTOS -->
  @include('site.home.depoimento')


@endsection