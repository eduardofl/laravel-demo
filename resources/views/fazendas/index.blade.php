@extends('layouts.app')

@section('content')
    <div class="row">
        <h1 class="col-md-10">Fazendas</h1>
        <div class="col-md-2" style="text-align: right;"><a href="/fazendas/create" class="btn btn-primary">Nova Fazenda</a></div>
    </div>
    

    @if(count($fazendas) > 0)
        <ul class="list-group">
            @foreach($fazendas as $fazenda)
                <li class="list-group-item">
                    <a href="/fazendas/{{$fazenda->CodFazenda}}" style="text-decoration: none; color: #666;">{{$fazenda->Nome}}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Não há fazendas cadastradas</p>
    @endif
@endsection