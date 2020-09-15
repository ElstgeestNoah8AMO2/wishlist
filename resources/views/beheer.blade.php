@extends('head')

@section('content')
    <div class="text-center">
        <h1>Wishes beheren</h1>
    </div>
    <div class="container mt-4">
        @foreach($wish as $key => $data)
            <div class="container bg-light">
                <h2>{{$data->naam}}</h2><span><a class="btn btn-warning" href="beheer?id={{$data->id}}" role="button">Delete</a></span>
            </div>
            <img src="{{$data->plaatje}}">
            <div>
                <p>{{$data->beschrijving}}</p>
                <p>{{$data->prijs}}</p>
            </div>
        @endforeach
    </div>
@endsection
