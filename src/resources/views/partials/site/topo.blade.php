   <!-- Cabeçalho -->
  <header class="topo" id="topoFixo">

    <div class="site"> 
        <!-- LOGO -->
        <h1>Casa do Barista</h1>

        <!-- MENU -->
         <button class="abrir-menu"></button>
         <nav class="menu">
            <button class="fechar-menu"></button>
            <ul>
                <li>
                    <a class="menu-ativo" href="{{ route ('home') }}">Home</a>
                </li>
                <li>
                   <a class="" href="{{ route ('sobre') }}">Sobre</a>
                </li>

                <li class="item-submenu">
                    <a class="" href="{{ route ('cardapio') }}">Cardápio</a>

                    <!-- SUB MENU -->
                    <ul class="submenu">
                        @foreach ($categoriaMenu as $linha)
                        <li>
                            <a href="{{ route ('cardapio.categoria',$linha->id_categoria) }}">{{ $linha->nome_categoria}}</a>
                        </li>
                        @endforeach

                    </ul>
                    <!-- FIM SUB MENU -->
                </li> <!-- FIM CARDÁPIO -->

                <li>
                    <a class="" href="{{ route ('eventos') }}">Eventos</a>
                </li>
                <li>
                    <a class="" href="{{ route ('contato') }}">Contato</a>
                </li>
            </ul>

             <!-- LOGIN -->
            <a href="#" class="login">
              <img src="{{ asset ('barista/assets/login.png') }}" alt="Login Casa do Barista">
            </a>

             <!-- Rede Social | ul>li*3>a>img -->
          
    
            <ul class="redeSocial">
                <li><a href="https://www.facebook.com/senacsaomiguelpaulista" target="_blank"><img src="{{ asset ('barista/assets/facebook-24.png') }}" alt="Logo Facebook - Casa do Barista"></a></li>
                <li><a href="https://www.instagram.com/senacsaomiguelpaulista" target="_blank"><img src="{{ asset ('barista/assets/instagram-24.png') }}" alt="Logo Instagram - Casa do Barista"></a></li>
                <li><a href="https://wa.me/551199999999" target="_blank"><img src="{{ asset ('barista/assets/whatsapp-24.png') }}" alt="Logo WhatsApp - Casa do Barista"></a></li>
            </ul>
      
         </nav>

    </div>
    </header>

    <!-- CORPO -->

