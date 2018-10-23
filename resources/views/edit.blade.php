@extends('template')

@section ('title', 'edit page')

@section('content')
    {!! Form::model($prod, ['method' => 'PATCH', 'route' => ['production.update', $prod->id]]) !!}
        <div class="col-md-9">
            {!! Form::label('name', 'Введите имя товара') !!}
        </div>
        <div class="col-md-9">
            {!! Form::text('name', null, ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9">
            {!! Form::label('text', 'Введите описание товара') !!}
        </div>
        <div class="col-md-9">
            {!! Form::textarea('text', null, ['class' =>'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
    @isset($prod -> path_photo)
            <div class="col-md-9">
                Старое фото
                <img src="{{asset('/storage/'.$prod -> path_photo)}}" class="img-fluid" width=120 height=240>
            </div>
    @endisset
    </div>
    <div class="form-group">
        <div class="col-md-3">
            {!! Form::label('image', 'Выбери новую фотографию:') . Form::file('image',['class' => 'form-control'])!!}
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-9">
            {!! Form::label('price', 'Введите цену товара') !!}
        </div>
        <div class="col-md-9">
            {!! Form::text('price', null, ['class' =>'form-control']) !!}
        </div>
        <div class="col-md-9 col-md-offset-9">
            {!! Form::submit('edit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}



@endsection

