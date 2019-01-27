@extends('layout')

@section('content')

    <div class="container text-center mt-10rem">
        <h5 class="">Błąd! Nie możesz wydać towaru, którego nie ma na stanie!</h5>
        <a href="/warehouse/issuegoods" class="btn btn-lg btn-success m-3 col-md-2">Ponów próbę</a>
        <a href="/warehouse" class="btn btn-lg btn-danger m-3 col-md-2">Anuluj</a>
    </div>

@endsection