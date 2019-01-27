@extends('layout')

@section('content')

    <div class="container text-center mt-10rem">
        <h5 class="">Taki alert nie istnieje. Czy chcesz utworzyć teraz nowy alert?</h5>
        <a href="/alerts/new" class="btn btn-lg btn-success m-3 col-md-2">Tak</a>
        <a href="/alerts" class="btn btn-lg btn-danger m-3 col-md-2">Nie</a>
    </div>

@endsection