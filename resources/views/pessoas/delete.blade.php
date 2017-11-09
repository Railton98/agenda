@extends('template.app')

@section('content')

  <div class="col-md-6 well">
    <div class="col-md-12">
      <h3>Deseja Realmente Excluir?</h3>
      <div class="pull-left">
        <a class="btn btn-default btn-lg" href="{{ route('home') }}">
          <span class="glyphicon glyphicon-chevron-left"><b> Cancelar</b></span>
        </a>
      </div>
      <div class="pull-right">
        <a class="btn btn-danger btn-lg" href="{{ route('destroy', $pessoa->id) }}">
          <span class="glyphicon glyphicon-remove"><b> Excluir</b></span>
        </a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        {{$pessoa->nome}}
      </div>
      <div class="panel-body">
        @foreach ($pessoa->telefone as $telefone)
          <p><strong>Telefone: </strong>({{ $telefone->ddd }}) {{ $telefone->telefone }}</p>
        @endforeach
      </div>
    </div>
  </div>

@endsection
