<!DOCTYPE html>
<html lang="pt-br">


  
   @include('partials.head')



<body>

  
   @include('partials.topo')

   
   <main>
      
      @yield('content')
   </main>

  
   @include('partials.rodape')

  
   @include('partials.script')
    
</body>

</html>