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
                 {{csrf_field()}}
                  <label for="cd-nome">Nome Completo<span>*</span></label>
                  <input name="cd-nome"type="text" name="nome">
                  <label for="cd-cpf">CPF<span>*</span></label>
                  <input type="text" name="cd-cpf" placeholder="Apenas Números">
                  <label for="cd-sexo">Sexo<span>*</span></label>
                  <select name="cd-sexo">
                    <option>M</option>
                    <option>F</option>
                  </select>
                  <label for="cd-dtnasc">Data de Nascimento:<span>*</span></label>
                  <input type="date" name="cd-dtnasc">
                  <hr>
                  <h4>Endereço:</h4>
                  <label for="cd-titulo">Nome endereço<span>*</span></label>
                  <input name="cd-titulo" type="text" placeholder="Ex. Casa, Apartamento">                  
                  <label for="cd-cep">CEP<span>*</span></label>
                  <input type="text" name="cd-cep" placeholder="00000-000" style="width: 145px; margin-right: 150px;">
                  <label for="cd-estado">Estado<span>*</span></label>
                  <select name="cd-estado">
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
                  <label for="cd-cidade">Cidade<span>*</span></label>
                  <input type="text" name="cd-cidade" placeholder="" style="width: 188px; margin-right: 80px;">
                  <label for="cd-bairro">Bairro<span>*</span></label>
                  <input type="text" name="cd-bairro" placeholder="" style="width: 140px;">
                  <label for="cd-endereco">Endereço<span>*</span></label>
                  <input type="text" name="cd-endereco" placeholder="" style="width: 235px; margin-right: 80px;">
                  <label for="cd-nro">Nº<span>*</span></label>
                  <input type="text" name="cd-nro" placeholder="" style="width: 100px;">
                  <label for="cd-compl">Complemento<span>*</span></label>
                  <input type="text" name="cd-compl" placeholder="Apto nº, etc" style="width: 188px; margin-right: 40px;">
                  <label for="cd-celul">Celular<span>*</span></label>
                  <input type="text" name="cd-celul" placeholder="" style="width: 120px;">                  
                  <hr>
                  <h4>Dados de Acesso:</h4>
                  <label for="cd-email">Email<span>*</span></label>
                  <input name="cd-email" type="text" placeholder="Endereço de Email">
                  <label for="cd-senha">Senha<span>*</span></label>
                  <input name="cd-senha" type="password" placeholder="Senha">
                  <label for="cd-senhac">Confirme a Senha<span>*</span></label>
                  <input name="cd-senhac" type="password" placeholder="Senha">
                  <button type="submit" class="aa-browse-btn">Cadastrar</button>
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
