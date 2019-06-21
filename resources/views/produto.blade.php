@extends('layouts.template')

@section('content')

<!-- product category -->
  <section id="aa-product-details">
    <div class="container">
	<ol class="breadcrumb">
      <li><a href="{{url('/')}}">Pagina Inicial</a></li>
      <li><a href="{{url('#')}}">{{$produto->nCat}}</a></li>
      <li><a href="{{url('#')}}">{{$produto->nSubCat}}</a></li>
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
                <!--div class="tab-pane fade " id="review">
                 <div class="aa-product-review-area">
                   <h4>2 Reviews for T-Shirt</h4>
                   <ul class="aa-review-nav">
                     <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                            </a>
                          </div>
                          <div class="media-body">
                            <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                            <div class="aa-product-rating">
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star-o"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                          </div>
                        </div>
                      </li>
                   </ul>
                   <h4>Add a review</h4>
                   <div class="aa-your-rating">
                     <p>Your Rating</p>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                     <a href="#"><span class="fa fa-star-o"></span></a>
                   </div>
                   < review form >
                   <form action="" class="aa-review-form">
                      <div class="form-group">
                        <label for="message">Your Review</label>
                        <textarea class="form-control" rows="3" id="message"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                      </div>

                      <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                   </form>
                 </div>
                </div>
              </div>
            </div>
            <Related product >
            <div class="aa-product-related-item">
              <h3>Related Products</h3>
              <ul class="aa-product-catg aa-related-item-slider">
                < start single product item >
                <li>
                  <figure>
                    <a class="aa-product-img" href="#"><img src="img/man/polo-shirt-2.png" alt="polo shirt img"></a>
                    <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                     <figcaption>
                      <h4 class="aa-product-title"><a href="#">Polo T-Shirt</a></h4>
                      <span class="aa-product-price">$45.50</span><span class="aa-product-price"><del>$65.50</del></span>
                    </figcaption>
                  </figure>
                  <div class="aa-product-hvr-content">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                  </div>
                  <oduct badge >
                  <span class="aa-badge aa-sale" href="#">SALE!</span>
                </li>
              </ul>
              < quick view modal >
              <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <div class="row">
                        < Modal view slider >
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-slider">
                            <div class="simpleLens-gallery-container" id="demo-1">
                              <div class="simpleLens-container">
                                  <div class="simpleLens-big-image-container">
                                      <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                          <img src="img/view-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                      </a>
                                  </div>
                              </div>
                              <div class="simpleLens-thumbnails-container">
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                  </a>
                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-3.png">
                                  </a>

                                  <a href="#" class="simpleLens-thumbnail-wrapper"
                                     data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                     data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                      <img src="img/view-slider/thumbnail/polo-shirt-4.png">
                                  </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        < Modal view content>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="aa-product-view-content">
                            <h3>T-Shirt</h3>
                            <div class="aa-price-block">
                              <span class="aa-product-view-price">$34.99</span>
                              <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                            <h4>Size</h4>
                            <div class="aa-prod-view-size">
                              <a href="#">S</a>
                              <a href="#">M</a>
                              <a href="#">L</a>
                              <a href="#">XL</a>
                            </div>
                            <div class="aa-prod-quantity">
                              <form action="">
                                <select name="" id="">
                                  <option value="0" selected="1">1</option>
                                  <option value="1">2</option>
                                  <option value="2">3</option>
                                  <option value="3">4</option>
                                  <option value="4">5</option>
                                  <option value="5">6</option>
                                </select>
                              </form>
                              <p class="aa-prod-category">
                                Category: <a href="#">Polo T-Shirt</a>
                              </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                              <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                              <a href="#" class="aa-add-to-cart-btn">View Details</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> /.modal-content >
                </div>< /.modal-dialog >
              </div>
              < / quick view modal -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / product category -->


@endsection
