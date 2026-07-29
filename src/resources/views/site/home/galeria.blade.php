<section class="galeria">
            <header class="parallax-padrao wow animate__animated animate__fadeInUp">
              <h2>Galeria</h2>
              <h3>Momentos que traduzem nosso propósito</h3>
            </header>

            <div class="itensGaleria slideGaleria">
              @foreach($listaGaleria as $linha)
              <img src="{{ asset ("barista/assets/$linha->imagem_galeria") }}" alt="{{ $linha->nome_galeria }}">
              @endforeach
            
            </div>
</section>