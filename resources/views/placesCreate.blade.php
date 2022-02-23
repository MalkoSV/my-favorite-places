@extends('layout', [ 'title' => 'Ввод нового места' ])

@section('content')

    <form action="/places/create" method="post">
        @csrf
        Тип: <select name="type_id">
            <option value="">--select--</option>
            @foreach ($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
            @endforeach
        </select>
        Название: <input type="text" name="name" size="30" value={{ old('name') }}>
        Описание: <input type="text" name="description" size="70" value={{ old('description') }}>

        <input type="submit">
    </form>

    @include('errorsMessage')

@endsection