@extends('template')

@section ('title', 'Create page')

@section('content')
    id = {{ $product->id}}
    {!! Form::open(array('route' => 'production.store'))!!}
    <div class="form-group">
        <div class="col-md-3">
            {!! Form::label('name', 'Введите имя товара') !!}
        </div>
        <div class="col-md-9">
            {!! Form::text('name', '{{ $product->name}}', ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            {!! Form::label('text', 'Введите описание товара') !!}
        </div>
        <div class="col-md-9">
            {!! Form::textarea('text','{{ $product->text}}', ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-3">
            {!! Form::label('price', 'Введите цену товара') !!}
        </div>
        <div class="col-md-9">
            {!! Form::text('price','{{ $product->price}}', ['class' =>'form-control']) !!}
        </div>
        <div class="col-md-3 col-md-offset-9">
            {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
    @endsection
