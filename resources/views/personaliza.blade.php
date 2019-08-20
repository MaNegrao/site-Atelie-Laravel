@extends('layouts.template')

@section('content')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
  <img src="{{URL::asset('img/banners/personalize.png')}}" alt="personalize">
  <div class="aa-catg-head-banner-area">
   <div class="container">
    <div class="aa-catg-head-banner-content">
      <h2>{{__('Jóias Personalizadas')}}</h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">{{__('Pagina Inicial')}}</a></li>
        <li class="active">{{__('Personalize')}}</li>
      </ol>
    </div>
   </div>
 </div>
</section>
<!-- / catg header banner section -->


<!-- start contact section -->
 <section id="aa-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="aa-contact-area">
           <div class="aa-contact-top">
       		<h2>{{__('Personalize do seu Jeito!')}}</h2>            
             <p>{{__('Aqui você pode encomendar uma joia do jeito que você quiser, deixando sua marca em todos os detalhes, da escolha do material ao acabamento. Você pode personalizar uma de nossas jóias do seu jeito ou criar algo totalmente exclusivo para você.')}}</p>
           </div>
           <!-- Contact address -->
           <div class="aa-contact-address">
             <div class="row">
               <div class="col-md-8">
                 <div class="aa-contact-address-left">
                   <form class="comments-form contact-form" action="">
                   	<div class="row">
                   		<div class="col-md-6">
                   			<div class="form-group">
	                   			<select name="mat" class="form-control">
	                   				<option selected disabled>{{__('Matéria Prima')}}</option>
				                    <option value="Ouro Amarelo">{{__('Ouro Amarelo')}}</option>
				                    <option value="Ouro Branco">{{__('Ouro Branco')}}</option>
				                    <option value="Ouro Rosé">{{__('Ouro Rosé')}}</option>
				                    <option value="Prata">{{__('Prata')}}</option>
				                    <option value="Aço Cirurgico">{{__('Aço Cirurgico')}}</option>
				                    <option value="Couro">{{__('Couro')}}</option>
				                </select>
                   			</div>
                   		</div>
                   		<div class="col-md-6">
                   			<div class="form-group">
                   				<select name="tipo" class="form-control">
	                   				<option selected disabled>{{__('Gema')}}</option>
				                    <option value="">{{__('Diamante')}}</option>
				                    <option value="">{{__('Esmeralda')}}</option>
				                    <option value="">{{__('Rubi')}}</option>
				                    <option value="">{{__('Zirconia')}}</option>
				                    <option value="">{{__('Nenhuma')}}</option>
				                    <option value="">{{__('Jade')}}</option>
				                </select>
                   			</div>
                   		</div>
                   </div>
                   <div class="row">
                   	   	<div class="col-md-6">
                   			<div class="form-group">
                   				<select name="tipo" class="form-control">
	                   				<option selected disabled>{{__('Tipo de Joia')}}</option>
				                    <option value="">{{__('Aliança')}}</option>
				                    <option value="">{{__('Anel')}}</option>
				                    <option value="">{{__('Brinco')}}</option>
				                    <option value="">{{__('Colar')}}</option>
				                    <option value="">{{__('Bracelete')}}</option>
				                    <option value="">{{__('Relógio')}}</option>
				                </select>
                   			</div>
                   		</div>
                   		<div class="col-md-6">
                   			<div class="form-group">
                   				<select name="tipo" class="form-control">
	                   				<option selected disabled>{{__('Categoria da Joia')}}</option>
				                    <option value="">{{__('Casamento')}}</option>
				                    <option value="">{{__('Formatura')}}</option>
				                    <option value="">{{__('Presente')}}</option>
				                    <option value="">{{__('Formal')}}</option>
				                    <option value="">{{__('Conjunto')}}</option>
				                </select>
                   			</div>
                   		</div>
                   	</div>                	                   	
                   	<div class="row">
                   		<div class="col-md-6">
                   			<div class="form-group">
                   				<select name="tipo" class="form-control" required>
	                   				<option selected disabled>{{__('Acabamento')}}</option>
				                    <option value="">{{__('Perolado')}}</option>
				                    <option value="">{{__('Fosco')}}</option>
				                    <option value="">{{__('Frisado')}}</option>
				                    <option value="">{{__('Liso')}}</option>
				                    <option value="">{{__('Chanfrado')}}</option>
				                </select>
                   			</div>
                   		</div>
                   		<div class="col-md-6">
	                    	<div class="form-group">
	                    		<label for="arquivo" class="custom-file-upload"><span class="fa fa-upload"></span> {{__('Envie uma Imagem ou documento com esboço para facilitar')}}<input type="file" name="arquivo" id="arquivo" class="form-control" value="Envie uma imagem"></label>
	                    	</div>
	                    </div>
	                </div>
	                <div class="row">
                   		<div class="col-md-6">
                   			<div class="form-group">
	                   			<label><input type="radio" name="joia" value="site" id="jSite">Joia do Site </label>&emsp;
	                   			<label><input type="radio" name="joia" value="exclusiva" id="jExclusiva" checked>Joia Exclusiva</label>            			
                   			</div>
                   		</div>
                   		<div class="col-md-6">
                   			<div class="form-group">
                   				<input type="text" name="idProduto" id="idProduto" disabled placeholder="ID Produto" class="form-control">
                   			</div>
                   		</div>
                   	</div>
                   	<div class="row">                    
	                    <div class="col-md-12"> 
	                    	<div class="form-group">                       
	                      		<textarea class="form-control" rows="3" placeholder="Digite aqui o máximo de detalhes possíveis sobre sua jóia:"></textarea>
	                      	</div>
	                    </div>
                    </div>
                    <div class="row">
                    	<div class="col-md-8">
                    		<div class="form-group">
                    			<label><input type="checkbox" name="selpropia" id="selpropia">Deseja utilizar alguma matéria prima ou gema própia?</label>
                    		</div>                 			
                      	</div>
                      	<div class="col-md-4">
                    		<div class="form-group">
                    			<input type="text" name="propia" id="propia" class="form-control" placeholder="Qual?" disabled>
                    		</div>                 			
                      	</div>
                    </div>
                    <button style="width: 450px;" class="aa-secondary-btn">{{__('Finalizar Encomenda')}}</button>
                  </form>
                 </div>
               </div>
               <div class="col-md-4">
                 <div class="aa-contact-address-right">
                   <address>
                     <h4>{{__('Diamant\'s Exclusive!')}}</h4>
                     <p>{{__('Se você preferir pode vir até nossa loja e encomendar sua jóia exclusiva na hora!')}}</p>
                     <p><span class="fa fa-map-marker"></span>{{__('Rua Rangel Pestana - 87, Centro | Jundiai-SP')}}</p>
                     <p><span class="fa fa-phone"></span>{{__('+55 (011) 4002-8922')}}</p>
                     <p><span class="fa fa-envelope"></span>{{__('exclusive@diamants.com')}}</p>
                   </address>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>

@endsection