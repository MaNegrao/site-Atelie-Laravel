<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Diamant's Exclusive</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('img/favicon.png') }}" type="image/x-icon"/>
    <!-- Font awesome -->
    <link href="{{ URL::asset('css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="{{ URL::asset('css/jquery.smartmenus.bootstrap.css') }}" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/jquery.simpleLens.css') }}">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/slick.css') }}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/nouislider.css') }}">
    <!-- Theme color -->
    <link id="switcher" href="{{ URL::asset('css/theme-color/default-theme.css') }}" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!-- Top Slider CSS -->
    <link href="{{ URL::asset('css/sequence-theme.modern-slide-in.css') }}" rel="stylesheet" media="all">

    <!-- Main style sheet -->
    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>




    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>
  <body>
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">
      <div class="wpf-loader-two-inner">
        <span>Carregando</span>
      </div>
    </div>
    <!-- / wpf loader Two -->
  <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->


  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <div class="aa-header-top-left">
                <!-- start cellphone -->
                <div class="cellphone hidden-xs">
                  <p><span class="fa fa-phone"></span> 4002-8922</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.html">Minha Conta</a></li>
                  <li class="hidden-xs"><a href="wishlist.html">Lista de Desejos</a></li>
                  <li class="hidden-xs"><a href="#">Personalize</a></li>
                  <li class="hidden-xs"><a href="cart.html">Carrinho</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">Entrar</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="{{url('/')}}"><img src="{{ URL::asset('img/logo.png') }}" alt="logo img"></a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
               <!-- cart box -->
              <div class="aa-cartbox">
                <a class="aa-cart-link" href="#">
                  <span class="fa fa-shopping-basket"></span>
                  <span class="aa-cart-title">CARRINHO</span>
                  <span class="aa-cart-notify">2</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">Product Name</a></h4>
                        <p>1 x $250</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                      <span class="aa-cartbox-total-price">
                        $500
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Finalizar</a>
                </div>
              </div>
              <!-- / cart box -->
              <!-- search box -->
              <div class="aa-search-box">
                <form action="">
                  <input type="text" name="" id="" placeholder="O que procura hoje?">
                  <button type="submit"><span class="fa fa-search"></span></button>
                </form>
              </div>
              <!-- / search box -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="#">Alianças <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Alianças de Ouro</a></li>
                  <li><a href="#">Alianças de Bodas</a></li>
                  <li><a href="#">Alianças de Noivado</a></li>
                  <li><a href="#">Alianças de Compromisso</a></li>
                  <li><a href="#">Alianças de Aço Cirurgico</a></li>
                  <li><a href="#">Ver Todas as Alianças<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="#">Anéis <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Anéis com Pedras Preciosas</a></li>
                  <li><a href="#">Anéis com Zircônias</a></li>
                  <li><a href="#">Anéis com Diamantes</a></li>
                  <li><a href="#">Anéis de Formatura</a></li>
                  <li><a href="#">Anéis de Ouro Branco</a></li>
                  <li><a href="#">Anéis de Prata</a></li>
                  <li><a href="#">Anéis Colecionavéis</a></li>
                  <li><a href="#">Anéis Infantis</a></li>
                  <li><a href="#">Anéis Masculinos</a></li>
                  <li><a href="#">Ver Todos os Anéis<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="#">Brincos <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Brincos de Pedras Preciosas</a></li>
                  <li><a href="#">Brincos de Ouro</a></li>
                  <li><a href="#">Brincos de Prata</a></li>
                  <li><a href="#">Brincos de Diamantes</a></li>
                  <li><a href="#">Brincos de Argola</a></li>
                  <li><a href="#">Brincos sem Pedra</a></li>
                  <li><a href="#">Brincos Cartier</a></li>
                  <li><a href="#">Brincos Infatis</a></li>
                  <li><a href="#">Brincos Masculinos</a></li>
                  <li><a href="#">Ver Todos os Brincos<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="#">Correntes <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Correntes com Pedras Preciosas</a></li>
                  <li><a href="#">Correntes de Ouro</a></li>
                  <li><a href="#">Correntes de Prata</a></li>
                  <li><a href="#">Correntes com Diamantes</a></li>
                  <li><a href="#">Correntes sem Pedra</a></li>
                  <li><a href="#">Correntes Tradicionais</a></li>
                  <li><a href="#">Correntes Masculinas</a></li>
                  <li><a href="#">Correntes Infatis</a></li>
                  <li><a href="#">Ver Todos as Correntes<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="#">Relógios <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Relógios com Pedras Preciosas</a></li>
                  <li><a href="#">Relógios de Ouro</a></li>
                  <li><a href="#">Relógios de Prata</a></li>
                  <li><a href="#">Relógios de Aço</a></li>
                  <li><a href="#">Relógios com Diamantes</a></li>
                  <li><a href="#">Relógios Tradicionais</a></li>
                  <li><a href="#">Relógios Exclusivos</a></li>
                  <li><a href="#">Relógios Masculinos</a></li>
                  <li><a href="#">Ver Todos os Relógios<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="#">Braceletes <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Braceletes com Pedras Preciosas</a></li>
                  <li><a href="#">Braceletes de Ouro</a></li>
                  <li><a href="#">Braceletes de Prata</a></li>
                  <li><a href="#">Braceletes com Diamantes</a></li>
                  <li><a href="#">Braceletes sem Pedra</a></li>
                  <li><a href="#">Braceletes Tradicionais</a></li>
                  <li><a href="#">Braceletes Masculinos</a></li>
                  <li><a href="#">Braceletes Infatis</a></li>
                  <li><a href="#">Ver Todos os Braceletes<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="">Coleções <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Coleção Inverno</a></li>
                  <li><a href="#">Coleção Dia dos Pais</a></li>
                  <li><a href="#">Coleção Berloques Finos</a></li>
                  <li><a href="#">Coleção Dia dos Namorados</a></li>
                </ul>
              </li>
              <li><a href="#">Promoções</a></li>
              <li><a href="#">Novidades</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  </section>

    @yield('content')


<!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Cadastre-se!</h3>
            <p>Se inscreva na nossa newsletter e receba todas as novidades do site antes de todo mundo!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Digite seu E-mail">
              <input type="submit" value="Cadastrar">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->

  <!-- footer -->
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Menu Principal</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="{{url('/')}}">Pagina Inicial</a></li>
                    <li><a href="#">Nossos Serviços</a></li>
                    <li><a href="#">Nossos Produtos</a></li>
                    <li><a href="#">Sobre a Loja</a></li>
                    <li><a href="#">Como Comprar</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Atendimento</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Entrega</a></li>
                      <li><a href="#">Devolição</a></li>
                      <li><a href="#">Serviços</a></li>
                      <li><a href="#">Promoções</a></li>
                      <li><a href="#">Pagamento</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Links Utéis</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Mapa do Site</a></li>
                      <li><a href="#">Politica de Compras</a></li>
                      <li><a href="#">Politica de Entrega</a></li>
                      <li><a href="#">Politica de Devolução</a></li>
                      <li><a href="#">Politica de Garantias</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Entre em Contato</h3>
                    <address>
                      <p>Rua Rangel Pestana - 87<br>Centro, Jundiai-SP</p>
                      <p><span class="fa fa-phone"></span>+55 (011) 4002-8922</p>
                      <p><span class="fa fa-envelope"></span>exclusive@diamants.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-instagram"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Developed by<a href="http://www.github.com/MaNegrao/"> Matheus Negrão</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Entre ou Cadastre-se</h4>
          <form class="aa-login-form" action="">
            <label for="">Seu endereço de Email:<span>*</span></label>
            <input type="text" placeholder="Email">
            <label for="">Senha:<span>*</span></label>
            <input type="password" placeholder="Senha">
            <button class="aa-browse-btn" type="submit">Entrar</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme">Lembrar de mim</label>
            <p class="aa-lost-password"><a href="#">Esqueci minha senha</a></p>
            <div class="aa-register-now">
              Ainda não tem uma conta?<a href="{{url('/cadastro')}}">Cadastre-se Aqui!</a>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>  <!-- jQuery library -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ URL::asset('js/bootstrap.js') }}"></script>
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="{{ URL::asset('js/jquery.smartmenus.js') }}"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="{{ URL::asset('js/jquery.smartmenus.bootstrap.js') }}"></script>
  <!-- To Slider JS -->
  <script src="{{ URL::asset('js/sequence.js') }}"></script>
  <script src="{{ URL::asset('js/sequence-theme.modern-slide-in.js') }}"></script>
  <!-- Product view slider -->
  <script type="text/javascript" src="{{ URL::asset('js/jquery.simpleGallery.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.simpleLens.js') }}"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="{{ URL::asset('js/slick.js') }}"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="{{ URL::asset('js/nouislider.js') }}"></script>
  <!-- Custom js -->
  <script src="{{ URL::asset('js/custom.js') }}"></script>

  </body>
</html>
