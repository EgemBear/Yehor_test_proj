@extends('template')

@section ('title', 'Редактирование')

@section('content')
    <table>
        <tr><th>id</th>
            <th>name</th>
            <th>text</th>
            <th>price</th>
        <tr>
            <td>{!!  $product-> id!!}</td>
            <td>{!!  $product->name!!}</td>
            <td>{!!  $product->text!!}</td>
            <td>{!!  $product->price!!}</td>
        </tr>
    </table>
@endsection