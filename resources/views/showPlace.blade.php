@extends('layout', [ 'title' => $place->name ])

@section('content')

    <p>{{ $place->description }}</p>

    @foreach( $pictures as $picture)
        <a href={{$picture->link}}><img src={{$picture->link}} width="200"></a>
        <p>{{$picture->created_at}}</p>
    @endforeach

@endsection