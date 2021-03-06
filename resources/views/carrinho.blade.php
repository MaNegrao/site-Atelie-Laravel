@extends('layouts.template')

@section('content')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
  <img src="{{URL::asset('img/banners/cart.jpg')}}" alt="fashion img">
  <div class="aa-catg-head-banner-area">
   <div class="container">
    <div class="aa-catg-head-banner-content">
      <h2>{{__('Carrinho')}}</h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">{{__('Pagina Inicial')}}</a></li>
        <li class="active">{{__('Carrinho')}}</li>
      </ol>
    </div>
   </div>
 </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th>{{__('Imagem')}}</th>
                        <th>{{__('Produto')}}</th>
                        <th>{{__('Preço')}}</th>
                        <th>{{__('Quantidade')}}</th>
                        <th>{{__('Total')}}</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="{{URL::asset('img/produtos/thumb/anel-ouro-prata-1.jpg')}}" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#">{{__('Anel de Ouro e Prata')}}</a></td>
                        <td>{{__('R$1.049,97')}}</td>
                        <td><input class="aa-cart-quantity" type="number" value="1"></td>
                        <td>{{__('R$1.049,97')}}</td>
                      </tr>
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                          <div class="aa-cart-coupon">
                            <input class="aa-coupon-code" type="text" placeholder="Coupom">
                            <input class="aa-cart-view-btn" type="submit" value="Aplicar Cupom">
                          </div>
                          <input class="aa-cart-view-btn" type="submit" value="Atualizar Carrinho">
                        </td>
                      </tr>
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>{{__('Total do Carrinho')}}</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>{{__('Subtotal')}}</th>
                     <td>{{__('R$1.049,97')}}</td>
                   </tr>
                   <tr>
                     <th>{{__('Total')}}</th>
                     <td>{{__('R$1.049,97')}}</td>
                   </tr>
                 </tbody>
               </table>
               <a href="#" class="aa-cart-view-btn">{{__('Finalizar')}}</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

 <!-- / Cart view section -->

@endsection