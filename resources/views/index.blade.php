@extends('head')

@section('content')
    <div class="text-center">
        <h1 class="pt-4">Welkom op Wishlist!</h1>
    </div>
    <div class="container mt-4">
        @foreach($wish as $key => $data)
        <div class="container bg-light">
            <h2>{{$data->naam}}</h2>
        </div>
        <img src="{{$data->plaatje}}">
        <div>
            <p>{{$data->beschrijving}}</p>
            <p>{{$data->prijs}}</p>
            <a href="{{$data->link}}">Link</a>
        </div>
        <br>
        @endforeach
    </div>
@endsection
