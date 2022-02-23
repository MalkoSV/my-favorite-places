@extends('layout', [ 'title' => 'Список любимых мест' ])

@section('content')

    <table>
        <tr>
            <th>Номер</th>
            <th>Название</th>
            <th>Тип</th>
        </tr>
        @foreach ($places as $place)
            <tr>
                <td>{{ $place->id }}</td>
                <td><a href="/places/{{$place->id}}">{{ $place->name }}</a></td>
                <td>{{ \App\Models\Type::where('id', $place->type_id)->value('name') }}</td>
            </tr>
        @endforeach
    </table>

@endsection