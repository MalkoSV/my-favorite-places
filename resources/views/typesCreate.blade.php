@extends('layout', [ 'title' => 'Ввод типа любимого места' ])

@section('content')

    <form action="/types/create" method="post">
        @csrf
        Тип достопримечательности: <input type="text" name="name">
        <button type="submit">send</button>
    </form>

    @include('errorsMessage')

@endsection