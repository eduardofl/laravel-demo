@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <h1>Editar Fazenda</h1>

    <!-- Exibe erros caso sejam retornados na request -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <span>Houveram erros ao editar a fazenda:</span><br/>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <!-- Formulário de edição da fazenda -->
    {!! Form::open(['action' => ['FazendasController@update', $fazenda->CodFazenda], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nome', 'Nome')}}
            {{Form::text('nome', $fazenda->Nome, ['class' => 'form-control', 'placeholder' => 'Nome da fazenda'])}}
        </div>
        <div class="form-group">
            {{Form::label('cnpj', 'Cnpj')}}
            {{Form::text('cnpj', $fazenda->CNPJ, ['class' => 'form-control', 'placeholder' => 'CNPJ'])}}
        </div>
        <div class="form-group">
            {{Form::label('telefone', 'Telefone')}}
            {{Form::text('telefone', $fazenda->Telefone, ['class' => 'form-control', 'placeholder' => '(XX) XXXX-XXXX'])}}
        </div>
        <div class="row" style="text-align: right;">
            <div class="col"></div>
            <div class="col-md-4 col-sm-12 col-xs-12" >
                <a href="/fazendas" class="btn btn-secondary">Voltar</a>
                {{Form::hidden('_method','PUT')}}
                {{Form::submit('Criar Fazenda', ['class'=>'btn btn-primary'])}}
            </div>
            
        </div>
    {!! Form::close() !!}
</div>
@endsection