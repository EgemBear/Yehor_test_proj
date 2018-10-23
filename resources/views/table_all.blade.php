

@extends('template')

@section('content')
    <div>
        <table>
            <tr><th>id</th>
                <th>name</th>
                <th>text</th>
                <th>price</th>
                <th>photo</th>
            </tr>
            @foreach  ($production as $product)
            <tr>
                <td>{{ $product -> id}}</td>
                <td>{{ $product->name}}</td>
                <td>{{ $product->text}}</td>
                <td>{{ $product->price}}</td>
                <td>@isset($product -> path_photo)
                    <img src="{{asset('/storage/'.$product -> path_photo)}}" class="img-fluid" width=120 height=240>
                    @endisset
                </td>
                <td><a href="/production/{{ $product -> id}}/edit" class= "btn btn-primary">Редактировать</a></td>
                <td>{!! Form::open(['method' => 'DELETE', 'route' => array('production.destroy', $product->id)]) !!}
                    {!! Form::submit('Удалить', ['class' => 'btn btn-danger']);!!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </table>
    </div>

@endsection
