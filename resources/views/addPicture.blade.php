@extends('layout', [ 'title' => 'Добавление картинки' ])

@section('content')
    @csrf
    <ul>
        <form action="/places/{{$id}}/photos/add" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image"><br><br>
            <input type="submit">
        </form>
    </ul>

    @include('errorsMessage')

@endsection