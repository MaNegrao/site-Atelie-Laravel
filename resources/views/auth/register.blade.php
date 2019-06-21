@extends('includes.template')

@section('content')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
  <img src="img/cadastre-se-1.jpg" alt="fashion img">
  <div class="aa-catg-head-banner-area">
   <div class="container">
    <div class="aa-catg-head-banner-content">
      <h2>Entre ou Registre-se</h2>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}">Pagina Inicial</a></li>
        <li class="active">Cadastro</li>
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
              <h2>Entre</h2>
               <form action="" class="aa-login-form">
                <label for="">Email<span>*</span></label>
                 <input type="text" placeholder="Endereço de E-mail">
                 <label for="">Senha<span>*</span></label>
                  <input type="password" placeholder="Senha">
                  <button type="submit" class="aa-browse-btn">Entrar</button>
                  <label class="rememberme" for="rememberme"><input type="checkbox" id="rememberme">Lembrar-me</label>
                  <p class="aa-lost-password"><a href="#">Esqueci minha senha</a></p>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="aa-myaccount-register">
               <h2>Cadastre-se</h2>
               <form action="{{route('register')}}" method="post" class="aa-login-form">
                 @csrf
                  <label for="nome">{{__('Nome Completo')}}<span>*</span></label>
                  <input name="nome"type="text" id="nome" required class="@error('nome') is-invalid @enderror">
                  <label for="cpf">{{__('CPF')}}<span>*</span></label>               
                  <input type="text" name="cpf" placeholder="Apenas Números">
                  <label for="sexo">{{__('Sexo')}}<span>*</span></label>
                  <select name="sexo">
                    <option>M</option>
                    <option>F</option>
                  </select>
                  <label for="dtNasc">{{__('Data de Nascimento')}}<span>*</span></label>
                  <input type="date" name="dtNasc">                
                  <hr>
                  <h4>Endereço:</h4>
                  <label for="cd-titulo">{{__('Nome endereço')}}<span>*</span></label>
                  <input name="cd-titulo" type="text" placeholder="Ex. Casa, Apartamento">                  
                  <label for="cd-cep">{{__('CEP')}}<span>*</span></label>
                  <input type="text" name="cd-cep" placeholder="00000-000" style="width: 145px; margin-right: 150px;">
                  <label for="cd-estado">{{__('Estado')}}<span>*</span></label>
                  <select name="estado">
                    <option value="AC">AC</option>
                    <option value="AL">AL</option>
                    <option value="AM">AM</option>
                    <option value="AP">AP</option>
                    <option value="BA">BA</option>
                    <option value="CE">CE</option>
                    <option value="DF">DF</option>
                    <option value="ES">ES</option>
                    <option value="GO">GO</option>
                    <option value="MA">MA</option>
                    <option value="MG">MG</option>
                    <option value="MS">MS</option>
                    <option value="MT">MT</option>
                    <option value="PA">PA</option>
                    <option value="PB">PB</option>
                    <option value="PE">PE</option>
                    <option value="PI">PI</option>
                    <option value="PR">PR</option>
                    <option value="RJ">RJ</option>
                    <option value="RN">RN</option>
                    <option value="RO">RO</option>
                    <option value="RR">RR</option>
                    <option value="RS">RS</option>
                    <option value="SC">SC</option>
                    <option value="SE">SE</option>
                    <option value="SP">SP</option>
                    <option value="TO">TO</option>
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
