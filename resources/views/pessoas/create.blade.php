@extends('template.app')

@section('content')
  <div class="col-md-12">
    <h3>NOVO CONTATO</h3>
  </div>

  <div class="col-md-6 well">
    <form class="" action="{{ route('cadastro') }}" method="post">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="nome" class="control-label col-md-12">
          Nome:
          <input type="text" name="nome" id="nome" placeholder="Digite seu Nome" class="form-control input-lg">
        </label>
      </div>
      <div class="form-group">
        <label for="ddd" class="control-label col-md-4">
          DDD:
          <input type="text" name="ddd" id="ddd" placeholder="Digite o DDD" class="form-control input-lg">
        </label>
      </div>
      <div class="form-group">
        <label for="telefone" class="control-label col-md-12">
          Telefone:
          <input type="text" name="telefone" id="telefone" placeholder="Digite seu Telefone" class="form-control input-lg">
        </label>
      </div>
      <div class="pull-right">
        <button type="submit" class="btn btn-success btn-lg">Salvar</button>
      </div>
    </form>
  </div>
@endsection
