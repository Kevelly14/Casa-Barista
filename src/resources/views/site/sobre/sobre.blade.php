@extends('layout.site')

@section('content')

  <!-- Sessão Bem-Vindo -->
   @include('site.home.bemvindo')
  
  <!-- INÍCIO DA SESSÃO EQUIPE -->
   @include('site.home.equipe')

  <!-- INÍCIO DA SESSÃO DEPOIMENTOS -->
  @include('site.home.depoimento')


@endsection