<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{__('Diamant\'s Exclusive')}}</title>
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


  </head>
  <body>
   <!-- wpf loader Two -->
    <div id="wpf-loader-two">
      <div class="wpf-loader-two-inner">
        <span>{{__('Carregando')}}</span>
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
                  <p><span class="fa fa-phone"></span>{{__(' 4002-8922')}}</p>
                </div>
                <!-- / cellphone -->
              </div>
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.html">{{__('Minha Conta')}}</a></li>
                  <li class="hidden-xs"><a href="#">{{__('Lista de Desejos')}}</a></li>
                  <li class="hidden-xs"><a href="{{url('\personalize')}}">{{__('Personalize')}}</a></li>
                  <li class="hidden-xs"><a href="{{url('/carrinho')}}">{{__('Carrinho')}}</a></li>
                  <li class="hidden-xs"><a href="{{route('register')}}">{{__('Cadastre-se')}}</a></li>
                  <li><a href="" data-toggle="modal" data-target="#login-modal">{{__('Entrar')}}</a></li>
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
                  <span class="aa-cart-title">{{__('CARRINHO')}}</span>
                  <span class="aa-cart-notify">{{__('1')}}</span>
                </a>
                <div class="aa-cartbox-summary">
                  <ul>
                    <li>
                      <a class="aa-cartbox-img" href="#"><img src="{{ URL::asset('img/produtos/anel-ouro-prata-1.jpg')}}" alt="img"></a>
                      <div class="aa-cartbox-info">
                        <h4><a href="#">{{__('Anel de Ouro e Prata')}}</a></h4>
                        <p>{{__('1 x R$1.049,97')}}</p>
                      </div>
                      <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                    </li>
                    <li>
                      <span class="aa-cartbox-total-title">
                        {{__('Total')}}
                      </span>
                      <span class="aa-cartbox-total-price">
                        {{__('R$1.049,97')}}
                      </span>
                    </li>
                  </ul>
                  <a class="aa-cartbox-checkout aa-primary-btn" href="{{url('/carrinho')}}">{{__('Finalizar')}}</a>
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
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="{{ url('list-produtos/3')}}">{{__('Alianças ')}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('list-produtos/3/3')}}">{{__('Alianças de Ouro')}}</a></li>
                  <li><a href="#">{{__('Alianças de Bodas')}}</a></li>
                  <li><a href="{{ url('list-produtos/3/5')}}">{{__('Alianças de Noivado')}}</a></li>
                  <li><a href="#">{{__('Alianças de Compromisso')}}</a></li>
                  <li><a href="#">{{__('Alianças de Aço Cirurgico')}}</a></li>
                  <li><a href="{{ url('list-produtos/3')}}">{{__('Ver Todas as Alianças')}}<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="{{ url('list-produtos/1')}}">{{__('Anéis ')}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('list-produtos/1/1')}}">{{__('Anéis de Ouro')}}</a></li>
                  <li><a href="#">{{__('Anéis com Pedras Preciosas')}}</a></li>
                  <li><a href="#">{{__('Anéis com Zircônias')}}</a></li>
                  <li><a href="#">{{__('Anéis com Diamantes')}}</a></li>
                  <li><a href="{{ url('list-produtos/1/4')}}">{{__('Anéis de Formatura')}}</a></li>
                  <li><a href="#">{{__('Anéis de Ouro Branco')}}</a></li>
                  <li><a href="#">{{__('Anéis de Prata')}}</a></li>
                  <li><a href="{{ url('list-produtos/1/6')}}">{{__('Anéis Exclusivos')}}</a></li>
                  <li><a href="#">{{__('Anéis Infantis')}}</a></li>
                  <li><a href="#">{{__('Anéis Masculinos')}}</a></li>
                  <li><a href="{{ url('list-produtos/1')}}">{{__('Ver Todos os Anéis')}}<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="{{ url('list-produtos/5')}}">{{__('Brincos ')}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">{{__('Brincos de Pedras Preciosas')}}</a></li>
                  <li><a href="{{ url('list-produtos/5/9')}}">{{__('Brincos de Ouro')}}</a></li>
                  <li><a href="#">{{__('Brincos de Prata')}}</a></li>
                  <li><a href="#">{{__('Brincos de Diamantes')}}</a></li>
                  <li><a href="#">{{__('Brincos de Argola')}}</a></li>
                  <li><a href="#">{{__('Brincos sem Pedra')}}</a></li>
                  <li><a href="#">{{__('Brincos Cartier')}}</a></li>
                  <li><a href="#">{{__('Brincos Infatis')}}</a></li>
                  <li><a href="#">{{__('Brincos Masculinos')}}</a></li>
                  <li><a href="{{ url('list-produtos/5')}}">{{__('Ver Todos os Brincos')}}<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="{{ url('list-produtos/2')}}">{{__('Colares')}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">{{__('Colares com Pedras Preciosas')}}</a></li>
                  <li><a href="#">{{__('Colares de Ouro')}}</a></li>
                  <li><a href="#">{{__('Colares de Prata')}}</a></li>
                  <li><a href="{{ url('list-produtos/2/2')}}">{{__('Colares com Diamantes')}}</a></li>
                  <li><a href="#">{{__('Colares sem Pedra')}}</a></li>
                  <li><a href="#">{{__('Colares Tradicionais')}}</a></li>
                  <li><a href="#">{{__('Correntes Masculinas')}}</a></li>
                  <li><a href="#">{{__('Colares Infatis')}}</a></li>
                  <li><a href="{{ url('list-produtos/2')}}">{{__('Ver Todos os Colares')}}<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="{{ url('list-produtos/6')}}">{{__('Relógios ')}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">{{__('Relógios com Pedras Preciosas')}}</a></li>
                  <li><a href="#">{{__('Relógios de Ouro')}}</a></li>
                  <li><a href="#">{{__('Relógios de Prata')}}</a></li>
                  <li><a href="#">{{__('Relógios de Aço')}}</a></li>
                  <li><a href="#">{{__('Relógios com Diamantes')}}</a></li>
                  <li><a href="#">{{__('Relógios Tradicionais')}}</a></li>
                  <li><a href="#">{{__('Relógios Exclusivos')}}</a></li>
                  <li><a href="{{ url('list-produtos/6/8')}}">{{__('Relógios Masculinos')}}</a></li>
                  <li><a href="{{ url('list-produtos/6')}}">{{__('Ver Todos os Relógios')}}<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="{{ url('list-produtos/4')}}">{{__('Braceletes ')}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">{{__('Braceletes com Pedras Preciosas')}}</a></li>
                  <li><a href="#">{{__('Braceletes de Ouro')}}</a></li>
                  <li><a href="#">{{__('Braceletes de Prata')}}</a></li>
                  <li><a href="#">{{__('Braceletes com Diamantes')}}</a></li>
                  <li><a href="#">{{__('Braceletes sem Pedra')}}</a></li>
                  <li><a href="#">{{__('Braceletes Tradicionais')}}</a></li>
                  <li><a href="{{ url('list-produtos/4/7')}}">{{__('Braceletes Masculinos')}}</a></li>
                  <li><a href="#">{{__('Braceletes Infatis')}}</a></li>
                  <li><a href="{{ url('list-produtos/4')}}">{{__('Ver Todos os Braceletes')}}<span class="caret"></span></a></li>
                </ul>
              </li>
              <li><a href="">{{__('Coleções ')}}<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">{{__('Coleção Inverno')}}</a></li>
                  <li><a href="#">{{__('Coleção Dia dos Pais')}}</a></li>
                  <li><a href="#">{{__('Coleção Berloques Finos')}}</a></li>
                  <li><a href="#">{{__('Coleção Dia dos Namorados')}}</a></li>
                </ul>
              </li>
              <li><a href="#">{{__('Promoções')}}</a></li>
              <li><a href="#">{{__('Novidades')}}</a></li>
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
            <h3>{{__('Cadastre-se!')}}</h3>
            <p>{{__('Se inscreva na nossa newsletter e receba todas as novidades do site antes de todo mundo!')}}</p>
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
                  <h3>{{__('Menu Principal')}}</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="{{url('/')}}">{{__('Pagina Inicial')}}</a></li>
                    <li><a href="#">{{__('Nossos Serviços')}}</a></li>
                    <li><a href="#">{{__('Nossos Produtos')}}</a></li>
                    <li><a href="#">{{__('Sobre a Loja')}}</a></li>
                    <li><a href="#">{{__('Como Comprar')}}</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>{{__('Atendimento')}}</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">{{__('Entrega')}}</a></li>
                      <li><a href="#">{{__('Devolição')}}</a></li>
                      <li><a href="#">{{__('Serviços')}}</a></li>
                      <li><a href="#">{{__('Promoções')}}</a></li>
                      <li><a href="#">{{__('Pagamento')}}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>{{__('Links Utéis')}}</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">{{__('Mapa do Site')}}</a></li>
                      <li><a href="#">{{__('Politica de Compras')}}</a></li>
                      <li><a href="#">{{__('Politica de Entrega')}}</a></li>
                      <li><a href="#">{{__('Politica de Devolução')}}</a></li>
                      <li><a href="#">{{__('Politica de Garantias')}}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>{{__('Entre em Contato')}}</h3>
                    <address>
                      <p>{{__('Rua Rangel Pestana - 87')}}<br>{{__('Centro, Jundiai-SP')}}</p>
                      <p><span class="fa fa-phone"></span>{{__('+55 (011) 4002-8922')}}</p>
                      <p><span class="fa fa-envelope"></span>{{__('exclusive@diamants.com')}}</p>
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
          <h4>{{__('Entre ou Cadastre-se')}}</h4>
          <form class="aa-login-form" action="">
            <label for="">{{__('Seu endereço de Email:')}}<span>*</span></label>
            <input type="text" placeholder="Email">
            <label for="">{{__('Senha:')}}<span>*</span></label>
            <input type="password" placeholder="Senha">
            <button class="aa-browse-btn" type="submit">{{__('Entrar')}}</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme">{{__('Lembrar de mim')}}</label>
            <p class="aa-lost-password"><a href="#">{{__('Esqueci minha senha')}}</a></p>
            <div class="aa-register-now">
              {{__('Ainda não tem uma conta?')}}<a href="{{route('register')}}">{{__('Cadastre-se Aqui!')}}</a>
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
