@extends('layouts.template')

@section('content')

<!-- product category -->
  <section id="aa-product-details">
    <div class="container">
	<ol class="breadcrumb">
      <li><a href="{{url('/')}}">Pagina Inicial</a></li>
      <li><a href="{{url('/list-produtos/' . $produto->cat)}}">{{$produto->nCat}}</a></li>
      <li><a href="{{url('/list-produtos/' . $produto->cat .'/'. $produto->subCat)}}">{{$produto->nSubCat}}</a></li>
      <li class="active">{{$produto->nome}}</li>
    </ol>
      <div class="row">
        <div class="col-md-12">
          <div class="aa-product-details-area">
            <div class="aa-product-details-content">
              <div class="row">
                <!-- Modal view slider -->
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="aa-product-view-slider">
                    <div id="demo-1" class="simpleLens-gallery-container">
                      <div class="simpleLens-container">
                        <div class="simpleLens-big-image-container"><a data-lens-image="{{URL::asset('img/produtos/large/' . $produto->img)}}" class="simpleLens-lens-image"><img src="{{ URL::asset('img/produtos/' . $produto->img)}}" class="simpleLens-big-image"></a></div>
                      </div>
                      <div class="simpleLens-thumbnails-container">
                        @if($produto->promoDesc != 0)
                            <span class="aa-badge aa-sold-out">{{$produto->promoPor}}% DE DESCONTO!</span>
                        @endif
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
                <div class="col-md-7 col-sm-7 col-xs-12">
                  <div class="aa-product-view-content">

                    <h2>{{$produto->nome}}</h2>
                    <h4 class="aa-product-avilability">Disponibilidade:
                      @if($produto->qtd != 0)
                        Em estoque!
                      @else
                        Indisponivel!
                      @endif
                    </h4>
                    <div class="aa-price-block">
                        @if($produto->promoDesc != 0)
                          <span class="aa-product-price"><del>R$ {{number_format($produto->val, 2,',','.')}}</del></span><span class="aa-product-price" style="color:red;">&emsp;R$ {{number_format(($produto->val-$produto->promoDesc), 2,',','.')}}</span>
                        @else
                          <span class="aa-product-price">R$ {{number_format($produto->val, 2,',','.')}}</span>
                        @endif
                      <!--span class="aa-view-price">R$ {{number_format($produto->val, 2,',','.')}}</span-->
                    </div>

                        <div class="">
                          <div class="aa-prod-view-size">
                          <h3>Tamanho: </h3>
                          <a href="#">S</a>
                          <a href="#">M</a>
                          <a href="#">L</a>
                          <a href="#">XL</a>
                        </div>
                        <div class="aa-prod-quantity">
                          <form action="">
                          	<h3>Quantidade:</h3>
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
                        </div>
                      </div>
                    <div class="aa-prod-view-bottom">
                      <a class="aa-add-to-cart-btn" href="#">Comprar</a>
                      <a class="aa-add-to-cart-btn" href="#">Adicionar aos Favoritos</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="aa-product-details-bottom">
              <ul class="nav nav-tabs" id="myTab2">
                <li><a href="#description" data-toggle="tab">Descrição do Produto</a></li>
                <li><a href="#" data-toggle="tab">Reviews</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <ul>
                    <li><label>Descrição: </label><span>{{$produto->des}}</span></li>
                    <li><label>Categoria: </label><span>{{$produto->nCat}}</span></li>
                    <li><label>Material Utilizado:</label><span>{{$produto->mater}}</span></li>
                    <li><label>Acabamento:</label><span>{{$produto->acab}}</span></li>
                    <li><label>Peso aproximado:</label><span>{{$produto->peso}}g</span></li>
                    @if($produto->pedra != null)
                      <li><label>Pedra:</label><span>{{$produto->pedra}}</span></li>
                    @endif
                  </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->


@endsection
