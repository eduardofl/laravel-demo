@extends('layouts.app')

@section('content')
    <div class="card" style="margin-bottom: 12px;">
        <div class="row" style="padding: 12px;">
            <h1 class="col-md-8">{{$fazenda->Nome}}</h1>
            <div class="col-md-4" style="text-align: right;"><a href="/fazendas/{{$fazenda->CodFazenda}}/edit" class="btn btn-primary">Editar Fazenda</a></div>
        </div>
        <div style="padding-bottom: 12px;">
            <div class="col-12"><span>Telefone : {{$fazenda->Telefone}}</span></div>
            <div class="col-12"><span>CNPJ : {{$fazenda->CNPJ}}</span></div>
        </div>
    </div>
    <div class="card" style="padding: 12px;">
        <h3>Lista de animais da fazenda</h3>
        <ul class="list-group">
            <li class="list-group-item">Animal 1</li>
            <li class="list-group-item">Animal 2</li>
            <li class="list-group-item">Animal 3</li>
        </ul>
    </div>
@endsection