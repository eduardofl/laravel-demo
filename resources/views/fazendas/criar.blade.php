@extends('layouts.app')

@section('content')
    <h1>Criar Fazenda</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <span>Houveram erros ao criar a fazenda:</span><br/>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    {!! Form::open(['action' => 'FazendasController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('nome', 'Nome')}}
            {{Form::text('nome', '', ['class' => 'form-control', 'placeholder' => 'Nome da fazenda'])}}
        </div>
        <div class="form-group">
            {{Form::label('cnpj', 'Cnpj')}}
            {{Form::text('cnpj', '', ['class' => 'form-control', 'placeholder' => 'CNPJ'])}}
        </div>
        <div class="form-group">
            {{Form::label('telefone', 'Telefone')}}
            {{Form::text('telefone', '', ['class' => 'form-control', 'placeholder' => '(XX) XXXX-XXXX'])}}
        </div>
        <div class="row" style="text-align: right;">
            <div class="col"></div>
            <div class="col-md-4 col-sm-12 col-xs-12" >
                <a href="/fazendas" class="btn btn-secondary">Voltar</a>
                {{Form::submit('Criar Fazenda', ['class'=>'btn btn-primary'])}}
            </div>
            
        </div>
        
    {!! Form::close() !!}
@endsection