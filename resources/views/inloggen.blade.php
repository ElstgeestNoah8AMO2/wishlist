@extends('head')

@section('content')
    <div class="text-center">
        <h1 class="pt-4">Inloggen</h1>
    </div>
    <br>
    <div class="container mt-4 text-center">
        <form method="post" action="inloggen">
            <span>Username</span>
            <input name="usernaam" type="text">
            <br>
            <span>Password</span>
            <input name="password" type="password">
            <br>
            <br>
            <input value="Inloggen" type="submit">
        </form>
    </div>
@endsection
