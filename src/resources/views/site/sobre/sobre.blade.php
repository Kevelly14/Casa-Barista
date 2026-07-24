@extends('layout.site')

@section('content')

  <!-- Sessão Bem-Vindo -->
   @include('site.sobre.bemvindo')
  
  <!-- INÍCIO DA SESSÃO EQUIPE -->
   @include('site.sobre.equipe')

  <!-- INÍCIO DA SESSÃO DEPOIMENTOS -->
  @include('site.sobre.depoimento')


@endsection