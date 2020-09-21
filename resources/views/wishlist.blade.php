@extends('head')

@section('content')
<div>
    <form method="POST" action="wishlist">
        @csrf
        <ul class="list-group list-group-flush">
            <li class="list-item">
                <span>Naam</span>
                <input name="naam" type="text">
            </li>
            <li class="list-item">
                <span>Plaatje</span>
                <input name="plaatje" type="text">
            </li>
            <li class="list-item">
                <span>Beschrijving</span>
                <input name="beschrijving" type="text">
            </li>
            <li class="list-item">
                <span>Prijs</span>
                <input name="prijs" type="number">
            </li>
            <li class="list-item">
                <span>Link</span>
                <input name="prijs" type="text">
            </li>
            <li class="list-item">
                <input type="submit" value="Confirm">
            </li>
        </ul>
    </form>
</div>
@endsection
