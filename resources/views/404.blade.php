@extends('layouts.template')

@section('content')

<!-- 404 error section -->
  <section id="aa-error">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-error-area">
            <h2>{{__('404')}}</h2>
            <span>{{__('Ops! Pagina não encontrada.')}}</span>
            <p>{{__('Nos desculpe pelo transtorno. Talvez a pagina que esteja procurando não exista mais. Verifique sua busca e tente novamente.')}}</p>
            <a href="{{url('/')}}">{{__('Ir Para Pagina Inicial')}}</a>
          </div>
        </div>
      </div>
    </div>
  </section>
 <!-- / 404 error section -->


@endsection