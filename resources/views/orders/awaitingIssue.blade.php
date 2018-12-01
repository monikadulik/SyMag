<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SyMag</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
</head>
<body>
@include('partials.header')

<div class="container">

    <div class="btn-group m-3">
        <a class="btn btn-secondary" type="button" href="{{ route('inProgress') }}">W realizacji</a>
        <a class="btn btn-secondary" type="button" href="{{ route('awaitingPayment') }}">Oczekuje na płatność</a>
        <a class="btn btn-dark" type="button" href="{{ route('awaitingIssue') }}">Oczekuje na wydanie</a>
        <a class="btn btn-secondary" type="button" href="{{ route('issued') }}">Wydano</a>
    </div>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Data zamówienia</th>
            <th scope="col">Wartość zamówienia</th>
            <th scope="col">Status realizacj</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td scope="row">{{ $loop->iteration }}</td>
                <td>{{ $order->data_zamowienia }}</td>
                <td>{{ $order->wartosc_zamowienia }}</td>
                <td>{{ $order->status_realizacji }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
