@extends('layouts.template')

@section('content')

<!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    @if($prodCat == null && $prodSubCat == null)
      <img src="{{URL::asset('img/banners/banner-Anéis.png')}}" alt="anéis">
    @else
      <img src="{{URL::asset('img/banners/banner-'. $prodCat->nome . '.png')}}" alt="$prodCat->nome">
    @endif
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        @if($prodCat == null && $prodSubCat == null)         
          <h2>{{__('Produtos')}}</h2>
        @elseif($prodCat != null && $prodSubCat == null)
          <h2>{{$prodCat->nome}}</h2>
        @elseif($prodSubCat != null)
          <h2>{{$prodSubCat->nome}}</h2>
        @endif
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">{{__('Pagina Inicial')}}</a></li>
          @if($prodCat == null && $prodSubCat == null)         
            <li><a class="active" href="{{url('/list-produtos')}}">{{__('Produtos')}}</a></li>
          @elseif($prodCat != null && $prodSubCat == null)
            <li><a href="{{url('/list-produtos')}}">{{__('Produtos')}}</a></li>
            <li><a class="active" href="{{url('/list-produtos/' . $prodCat->idCat)}}">{{$prodCat->nome}}</a></li>         
          @elseif($prodSubCat != null)
            <li><a href="{{url('/list-produtos')}}">{{__('Produtos')}}</a></li>
            <li><a href="{{url('/list-produtos/' . $prodCat->idCat)}}">{{$prodCat->nome}}</a></li>
            <li><a class="active" href="{{url('/list-produtos/' . $prodCat->idCat .'/'. $prodSubCat->idSubCat)}}">{{$prodSubCat->nome}}</a></li>
          @endif
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
                <form action="" class="aa-sort-form">
                  <label for="">{{__('Ordenar por')}}</label>
                  <select name="">
                    <option value="1" selected="Default">{{__('Padrão')}}</option>
                    <option value="2">{{__('Nome')}}</option>
                    <option value="3">{{__('Preço')}}</option>
                    <option value="4">{{__('Mais Relevantes')}}</option>
                  </select>
                </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
                @foreach($produtos as $produto)
                <li>
                  <figure>
                    <a class="aa-product-img" href="{{route('produto.show', $produto->idProduto)}}"><img src="{{URL::asset('img/produtos/' . $produto->img)}}" alt="{{$produto->des}}" style="width: 280px; height: 300px;"></a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Comprar</a>
                    <figcaption>
                      <h4 class="aa-product-title">{{str_limit($produto->nome, 20)}}<a href="{{route('produto.show', $produto->idProduto)}}"></a></h4>
                        @if($produto->promoDesc != 0)
                          <span class="aa-product-price"><del>R$ {{number_format($produto->val, 2,',','.')}}</del></span><span class="aa-product-price" style="color:red;">&emsp;R$ {{number_format(($produto->val-$produto->promoDesc), 2,',','.')}}</span>
                        @else
                          <span class="aa-product-price">R$ {{number_format($produto->val, 2,',','.')}}</span>
                        @endif
                      <p class="aa-product-descrip">{{$produto->des}}</p>
                    </figcaption>
                  </figure>                         
                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Favoritar"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Detalhes" data-toggle="modal" data-target="#quick-view-modal-{{$produto->idProduto}}"><span class="fa fa-search"></span></a>                            
                  </div>
                  <!-- product badge -->
                  @if($produto->qtd == 0)
                    <span class="aa-badge aa-hot" href="#">{{__('Indisponivel')}}</span>
                  @elseif($produto->promoDesc != 0)
                    <span class="aa-badge aa-sold-out">{{$produto->promoPor}}% DE DESCONTO!</span>
                  @else
                    <span class="aa-badge aa-sale" href="#">{{__('Disponivel')}}</span>
                  @endif
                </li>
                @endforeach
                <!-- start single product item -->    
              </ul>
              <!-- quick view modal -->
              <div id="quick-view">
                @foreach($produtos as $produto)                  
                <div class="modal fade" id="quick-view-modal-{{$produto->idProduto}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">                      
                      <div class="modal-body">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div class="row">
                          <!-- Modal view slider -->
                          <div class="col-md-6 col-sm-6 col-xs-12">                              
                            <div class="aa-product-view-slider">                                
                              <div class="simpleLens-gallery-container" id="demo-1">
                                <div class="simpleLens-container">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" data-lens-image="{{URL::asset('img/produtos/large/' . $produto->img)}}" href="{{route('produto.show', $produto->idProduto)}}">
                                            <img src="{{URL::asset('img/produtos/' . @$produto->img)}}" class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                                <div class="simpleLens-thumbnails-container">
                                  <a data-big-image="{{ URL::asset('img/produtos/' . $produto->img)}}" data-lens-image="{{ URL::asset('img/produtos/large/' . $produto->img)}}" class="simpleLens-thumbnail-wrapper" href="#">
                                    <img src="{{ URL::asset('img/produtos/thumb/' . $produto->img)}}">
                                  </a>
                                  @if($produto->img2 != null)
                                    <a data-big-image="{{ URL::asset('img/produtos/' . $produto->img2)}}" data-lens-image="{{ URL::asset('img/produtos/large/' . $produto->img2)}}" class="simpleLens-thumbnail-wrapper" href="#">
                                      <img src="{{ URL::asset('img/produtos/thumb/' . $produto->img2)}}">
                                    </a>
                                  @endif
                                  @if($produto->img3 != null)
                                    <a data-big-image="{{ URL::asset('img/produtos/' . $produto->img3)}}" data-lens-image="{{ URL::asset('img/produtos/large/' . $produto->img3)}}" class="simpleLens-thumbnail-wrapper" href="#">
                                      <img src="{{ URL::asset('img/produtos/thumb/' . $produto->img3)}}">
                                    </a>
                                  @endif                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- Modal view content -->
                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="aa-product-view-content">
                              <h3>{{str_limit($produto->nome, 20)}}</h3>
                              <div class="aa-price-block">
                                @if($produto->promoDesc != 0)
                                  <span class="aa-product-price"><del>R$ {{number_format($produto->val, 2,',','.')}}</del></span><br><span class="aa-product-price" style="color:red;">R$ {{number_format(($produto->val-$produto->promoDesc), 2,',','.')}}</span>
                                @else
                                  <span class="aa-product-price">R$ {{number_format($produto->val, 2,',','.')}}</span>
                                @endif
                              </div>
                              <p class="aa-product-avilability">{{__('Disponibilidade')}}:
                                  <span>
                                    @if($produto->qtd > 0)
                                      {{__('Em estoque!')}}
                                    @else
                                      {{__('Indisponivel!')}}
                                    @endif
                                  </span>
                                </p>
                              <p>{{$produto->des}}</p>
                              <h4>{{__('Tamanho')}}</h4>
                              <div class="aa-prod-view-size">
                                <a href="#">{{__('15')}}</a>
                                <a href="#">{{__('16')}}</a>
                                <a href="#">{{__('17')}}</a>
                                <a href="#">{{__('18')}}</a>
                              </div>
                              <div class="aa-prod-quantity">
                                <form action="">
                                  <h3>{{__('Quantidade:')}}</h3>
                                  @if($produto->qtd > 15)
                                  <select id="" name="">
                                    <option selected="1" value="0">1</option>
                                    @for($i = 1; $i < 16; $i++)
                                      <option value="{{$i}} " >{{$i}}</option>
                                    @endfor
                                  </select>
                                  @else
                                  <select id="" name="">
                                    <option selected="1" value="0">1</option>
                                    @for($i = 1; $i < $produto->qtd+1; $i++)
                                      <option value="{{$i}} " >{{$i}}</option>
                                    @endfor
                                  </select>
                                  @endif
                                </form>
                                <p class="aa-prod-category">
                                </p>
                              </div>
                              <div class="aa-prod-view-bottom">
                                <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>{{__('Comprar')}}</a>
                                <a href="{{route('produto.show', $produto->idProduto)}}" class="aa-add-to-cart-btn">{{__('Ver Produto')}}</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>                        
                    </div><!-- /.modal-content -->
                  </div><!-- /.modal-dialog -->
                </div>
                @endforeach
              </div>
              <!-- / quick view modal -->   
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                <ul class="pagination">
                  <li>
                    <a href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li><a href="#">1</a></li>
                  <li>
                    <a href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
          <aside class="aa-sidebar">
            <div class="aa-sidebar-widget">
              <h3>{{__('Categoria')}}</h3>
              <ul class="aa-catg-nav">
                <li><a href="{{ url('list-produtos/1/1')}}">{{__('Anéis de Ouro')}}</a></li>
                <li><a href="{{ url('list-produtos/2/2')}}">{{__('Colares com Diamantes')}}</a></li>
                <li><a href="{{ url('list-produtos/3/3')}}">{{__('Alianças de Ouro')}}</a></li>
                <li><a href="{{ url('list-produtos/1/4')}}">{{__('Anéis de Formatura')}}</a></li>
                <li><a href="{{ url('list-produtos/3/5')}}">{{__('Alianças de Noivado')}}</a></li>
                <li><a href="{{ url('list-produtos/1/6')}}">{{__('Anéis Exclusivos')}}</a></li>
                <li><a href="{{ url('list-produtos/4/7')}}">{{__('Braceletes Masculinos')}}</a></li>
                <li><a href="{{ url('list-produtos/6/8')}}">{{__('Relógios Masculinos')}}</a></li>
              </ul>
            </div>
            <div class="aa-sidebar-widget">
              <h3>{{__('Material')}}</h3>
              <div class="tag-cloud">
                <a href="#">{{__('Ouro')}}</a>
                <a href="#">{{__('Ouro Rosé')}}</a>
                <a href="#">{{__('Ouro Branco')}}</a>
                <a href="#">{{__('Prata')}}</a>
                <a href="#">{{__('Couro')}}</a>
                <a href="#">{{__('Aço Cirurgico')}}</a>
              </div>
            </div>
            <div class="aa-sidebar-widget">
              <h3>{{__('Pedras')}}</h3>
              <div class="tag-cloud">
                <a href="#">{{__('Jade')}}</a>
                <a href="#">{{__('Rubi')}}</a>
                <a href="#">{{__('Diamante')}}</a>
                <a href="#">{{__('Topazio')}}</a/>
                <a href="#">{{__('Esmeralda')}}</a>
                <a href="#">{{__('Zirconia')}}</a>
                <a href="#">{{__('Quartzo')}}</a>
              </div>
            </div>
            <div class="aa-sidebar-widget">
              <h3>{{__('Segmento')}}</h3>
              <div class="tag-cloud">
                <a href="#">{{__('Feminino')}}</a>
                <a href="#">{{__('Masculino')}}</a>
                <a href="#">{{__('Unisex')}}</a>
                <a href="#">{{__('Infantil')}}</a>
              </div>
            </div>
            <div class="aa-sidebar-widget">
              <h3>{{__('Tamanho')}}</h3>
              <div class="tag-cloud">
                <a href="#">{{__('15')}}</a>
                <a href="#">{{__('16')}}</a>
                <a href="#">{{__('17')}}</a>
                <a href="#">{{__('18')}}</a>
                <a href="#">{{__('19')}}</a>
              </div>
            </div>
            <div class="aa-sidebar-widget">
              <h3>{{__('Preço')}}</h3>              
              <ul class="aa-catg-nav">
                <li><a href="#"></a>{{__('Abaixo de R$100')}}</li>             
                <li><a href="#">{{__('R$100 - R$500')}}</a></li>
                <li><a href="#">{{__('R$1000 - R$2000')}}</a></li>
                <li><a href="#">{{__('R$2000 - R$3000')}}</a></li>
                <li><a href="#">{{__('R$3000 - R$4000')}}</a></li>
                <li><a href="#">{{__('R$4000 - R$5000')}}</a></li>
                <li><a href="#">{{__('Acimda de R$5000')}}</a></li>
              </ul>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->

@endsection