@extends('layout', [ 'title' => 'Выбор места' ])

@section('content')

    <form action="/select" method="post">
        @csrf
        <select name="id">
            <option value="">--select--</option>
            @foreach ($places as $place)
                <option value="{{$place->id}}">{{$place->name}}</option>
            @endforeach
        </select>

        <input type="submit">
    </form>

    @include('errorsMessage')
    
@endsection