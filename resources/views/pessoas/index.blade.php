@extends('template.app')

@section('content')
  <div class="">
      @foreach ($pessoas as $pessoa)
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              {{$pessoa->nome}}
              <a href="{{route('delete', $pessoa->id)}}" class="btn btn-sm btn-danger pull-right">
                <span class="glyphicon glyphicon-trash"></span>
              </a>
              <a href="{{route('edit', $pessoa->id)}}" class="btn btn-sm btn-info pull-right">
                <span class="glyphicon glyphicon-pencil"></span>
              </a>
            </div>
            <div class="panel-body">
              @foreach ($pessoa->telefone as $telefone)
                <p><strong>Telefone: </strong>({{ $telefone->ddd }}) {{ $telefone->telefone }}</p>
              @endforeach
            </div>
          </div>
        </div>
    @endforeach
  </div>
@endsection
