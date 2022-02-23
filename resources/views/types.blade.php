@extends('layout', [ 'title' => 'Типы любимых мест' ])

@section('content')

    <table>
        <tr>
            <th>Номер</th>
            <th>Тип</th>
        </tr>
        @foreach ($types as $type)
            <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->name }}</td>
            </tr>
        @endforeach
    </table>

@endsection