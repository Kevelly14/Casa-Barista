<!DOCTYPE html>
<html lang="pt-br">


   // Aqui entra o partial de head
   @include('partials.head')



<body>

   // Header
   @include('partials.topo')

   // Main 
   <main>
      // Área de conteúdo
      @yield('content')
   </main>

   // Footer
   @include('partials.rodape')

   // Scripts 
   @include('partials.script')
    
</body>

</html>