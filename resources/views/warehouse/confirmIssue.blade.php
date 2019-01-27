@extends('layout')

@section('content')
    <div class="container">
        <h5 class="m-5 text-center">Podsumowanie wydania</h5>
        <table class="table table-bordered col-md-7">
            <tbody>
            <tr>
                <td>Magazyn wydający towar:</td>
                <td>{{ $commodity->kod_lokalizacji }}</td>
            </tr>
            <tr>
                <td>Numer katalogowy:</td>
                <td>{{ $commodity->numer_katalogowy }}</td>
            </tr>
            <tr>
                <td>Nazwa towaru:</td>
                <td>{{ $commodity->nazwa }}</td>
            </tr>
            <tr>
                <td>Ilość towaru na stanie:</td>
                <td>{{ $commodity->ilosc_na_stanie }}</td>
            </tr>
            <tr>
                <td>Wydawana ilość:</td>
                <td>{{ $issued_quantity }}</td>
            </tr>
            <tr>
                <td>Jednostka:</td>
                <td>{{ $commodity->jednostka_miary }}</td>
            </tr>
            <tr>
                <td>Cena katalogowa za jednostke towaru:</td>
                <td>{{ $commodity->cena_jednostkowa }}zł</td>
            </tr>
            <tr>
                <td>Wartość wydawanego towaru: </td>
                <td>{{ $commodity->cena_jednostkowa * $issued_quantity }}zł</td>
            </tr>
            </tbody>
        </table>

        <form method="post" action="{{ route('warehouse.confissue') }}">
            @csrf
            <input type="hidden" value="{{$commodity->id}}" name="commodity_id">
            <input type="hidden" value="{{$issued_quantity}}" name="issued_quantity">

            <div class="text-center mt-5">
                <button type="submit" class="btn btn-primary">Potwierdź wydanie</button>
            </div>
        </form>
    </div>
@endsection