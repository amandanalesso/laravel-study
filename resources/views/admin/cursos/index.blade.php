@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de cursos</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Imagem</th>
            <th>Publicado</th>
            <th>Ação</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $regitro)
            <tr>
              <td>{{ $regitro->id }}</td>
              <td>{{ $regitro->titulo }}</td>
              <td>{{ $regitro->descricao }}</td>
              <td><img width="120" src="{{asset($regitro->imagem)}}" alt="{{ $regitro->titulo }}" /></td>
              <td>{{ $regitro->publicado }}</td>
              <td>
                <a class="btn deep-orange" href="{{ route('admin.cursos.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.cursos.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.cursos.adicionar') }}">Adicionar</a>

    </div>

  </div>




@endsection
