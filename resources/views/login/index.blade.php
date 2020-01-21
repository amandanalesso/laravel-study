@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

 <div class="container">
    <h3 class="center">Entrar</h3>
     <form class="input-field col s6 m4" action="{{route('site.login.entrar')}}" method="post" >
        {{ csrf_field() }}

        <div class="input-field">
            <input type="text" name="email" >
            <label>E-mail</label>
          </div>
          <div class="input-field">
            <input type="password" name="senha" >
            <label>Senha</label>
          </div>
        <button class="btn deep-purple darken-2">Entrar</button>
      </form>
    </div>
  </div>


@endsection