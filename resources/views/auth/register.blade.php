@extends('layouts.template')

@section('content')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
  <img src="{{URL::asset('img/banners/cadastre-se-1.jpg')}}" alt="cadsatre-se">
  <div class="aa-catg-head-banner-area">
   <div class="container">
    <div class="aa-catg-head-banner-content">
      <h2>{{__('Entre ou Registre-se')}}</h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">{{__('Pagina Inicial')}}</a></li>
        <li class="active">{{__('Cadastro')}}</li>
      </ol>
    </div>
   </div>
 </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="aa-myaccount">
 <div class="container">
   <div class="row">
     <div class="col-md-12">
      <div class="aa-myaccount-area">
          <div class="row">
            <div class="col-md-6">
              <div class="aa-myaccount-login">
              <h2>{{__('Entre')}}</h2>
               <form action="" class="aa-login-form">
                <label for="">{{__('Email')}}<span>*</span></label>
                 <input type="text" placeholder="Endereço de E-mail">
                 <label for="">{{__('Senha')}}<s0pan>*</span></label>
                  <input type="password" placeholder="Senha">
                  <button type="submit" class="aa-browse-btn">{{__('Entrar')}}</button>
                  <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme">{{__('Lembrar-me')}}</label>
                  <p class="aa-lost-password"><a href="#">{{__('Esqueci minha senha')}}</a></p>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="aa-myaccount-register">
               <h2>{{__('Cadastre-se')}}</h2>
               <form action="{{route('register')}}" method="post" class="aa-login-form">
                 {{csrf_field()}}
                  <label for="nome">{{__('Nome Completo')}}<span>*</span></label>
                  <input name="nome"type="text" id="nome" required class="@error('nome') is-invalid @enderror">
                  <label for="cpf">{{__('CPF')}}<span>*</span></label>               
                  <input type="text" name="cpf" placeholder="Apenas Números" required>
                  <label for="sexo">{{__('Sexo')}}<span>*</span></label>
                  <select name="sexo">
                    <option>M</option>
                    <option>F</option>
                  </select>
                  <label for="dtNasc">{{__('Data de Nascimento')}}<span>*</span></label>
                  <input type="date" required name="dtNasc">                
                  <hr>
                  <h4>Endereço:</h4>
                  <label for="cd-titulo">{{__('Nome endereço')}}<span>*</span></label>
                  <input name="cd-titulo" type="text" placeholder="Ex. Casa, Apartamento">                  
                  <label for="cd-cep">{{__('CEP')}}<span>*</span></label>
                  <input type="text" name="cd-cep" placeholder="00000-000" style="width: 145px; margin-right: 150px;">
                  <label for="cd-estado">{{__('Estado')}}<span>*</span></label>
                  <select name="estado">
                    <option value="AC">{{__('AC')}}</option>
                    <option value="AL">{{__('AL')}}</option>
                    <option value="AM">{{__('AM')}}</option>
                    <option value="AP">{{__('AP')}}</option>
                    <option value="BA">{{__('BA')}}</option>
                    <option value="CE">{{__('CE')}}</option>
                    <option value="DF">{{__('DF')}}</option>
                    <option value="ES">{{__('ES')}}</option>
                    <option value="GO">{{__('GO')}}</option>
                    <option value="MA">{{__('MA')}}</option>
                    <option value="MG">{{__('MG')}}</option>
                    <option value="MS">{{__('MS')}}</option>
                    <option value="MT">{{__('MT')}}</option>
                    <option value="PA">{{__('PA')}}</option>
                    <option value="PB">{{__('PB')}}</option>
                    <option value="PE">{{__('PE')}}</option>
                    <option value="PI">{{__('PI')}}</option>
                    <option value="PR">{{__('PR')}}</option>
                    <option value="RJ">{{__('RJ')}}</option>
                    <option value="RN">{{__('RN')}}</option>
                    <option value="RO">{{__('RO')}}</option>
                    <option value="RR">{{__('RR')}}</option>
                    <option value="RS">{{__('RS')}}</option>
                    <option value="SC">{{__('SC')}}</option>
                    <option value="SE">{{__('SE')}}</option>
                    <option value="SP">{{__('SP')}}</option>
                    <option value="TO">{{__('TO')}}</option>
                  </select>
                  <label for="cd-cidade">{{__('Cidade')}}<span>*</span></label>
                  <input type="text" name="cd-cidade" placeholder="" style="width: 188px; margin-right: 80px;">
                  <label for="cd-bairro">{{__('Bairro')}}<span>*</span></label>
                  <input type="text" name="cd-bairro" placeholder="" style="width: 140px;">
                  <label for="cd-endereco">{{__('Endereço')}}<span>*</span></label>
                  <input type="text" name="cd-endereco" placeholder="" style="width: 235px; margin-right: 80px;">
                  <label for="cd-nro">{{__('Nº')}}<span>*</span></label>
                  <input type="text" name="cd-nro" placeholder="" style="width: 100px;">
                  <label for="cd-compl">{{__('Complemento')}}<span>*</span></label>
                  <input type="text" name="cd-compl" placeholder="Apto nº, etc" style="width: 188px; margin-right: 40px;">
                  <label for="cel">{{__('Celular')}}<span>*</span></label>
                  <input type="text" name="cel" placeholder="" style="width: 120px;">                   
                  <hr>
                  <h4>Dados de Acesso:</h4>
                  <label for="email">{{__('Email')}}<span>*</span></label>
                  <input name="email" type="text" placeholder="Endereço de Email">
                  <label for="senha">{{__('Senha')}}<span>*</span></label>
                  <input name="senha" type="password" placeholder="Senha">
                  <button type="submit" class="aa-browse-btn">{{__('Cadastrar')}}</button>
                </form>
              </div>
            </div>
          </div>
       </div>
     </div>
   </div>
 </div>
</section>
<!-- / Cart view section -->

@endsection
