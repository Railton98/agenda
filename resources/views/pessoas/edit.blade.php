@extends('template.app')

@section('content')
  <div class="col-md-12">
    <h3>Editar Contato</h3>
  </div>
  <div class="col-md-6 well">
    <form class="" action="{{ route('update') }}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="id" value="{{ $pessoa->id }}">
      <div class="form-group">
        <label for="nome" class="control-label col-md-12">
          Nome:
          <input type="text" name="nome" id="nome" value="{{ $pessoa->nome }}" placeholder="Digite seu Nome" class="form-control input-lg">
        </label>
      </div>
      <div class="pull-right">
        <button type="submit" class="btn btn-success btn-lg">Salvar</button>
      </div>
    </form>
  </div>
  <div class="col-md-4">
    <div class="panel panel-primary">
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
