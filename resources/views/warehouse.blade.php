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

<div class="row m-3">
    <button class="btn btn-outline-dark mr-4 h-50" type="button" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false">
        Filtruj wyniki
    </button>
    <div class="collapse" id="collapseFilter">
        <form method="get" action="{{ route('warehouse.search') }}">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <label for="warehouse">Magazyn</label>
                    <select class="custom-select d-block w-100" id="warehouse" name="warehouse">
                        <option value="">Wybierz z listy...</option>
                        @foreach($warehouses as $warehouse)
                            <option value="{{ $warehouse->id }}">{{ $warehouse->nazwa }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="catalog-num">Szukaj według nazwy towaru</label>
                    <input type="text" class="form-control" id="comm-name" name="comm-name" placeholder="Wpisz nazwe..." value="">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="catalog-num">Numer katalogowy</label>
                    <input type="text" class="form-control" id="catalog-num" name="catalog-num" placeholder="Wpisz numer..." value="">
                </div>
                <button class="btn btn-primary col-md-3 ml-3 h-50" type="submit">Szukaj</button>
            </div>
        </form>
    </div>
</div>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Numer katalogowy</th>
        <th scope="col">Nazwa</th>
        <th scope="col">Cena jednostkowa</th>
        <th scope="col">Na stanie</th>
        <th scope="col">Jednostka miary</th>
        <th scope="col">Kod lokalizacji</th>
        <th scope="col">Id magazynu</th>
    </tr>
    </thead>
    <tbody>
    @foreach($commodities as $commodity)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $commodity->numer_katalogowy }}</td>
            <td>{{ $commodity->nazwa }}</td>
            <td>{{ $commodity->cena_jednostkowa }}</td>
            <td>{{ $commodity->ilosc_na_stanie }}</td>
            <td>{{ $commodity->jednostka_miary }}</td>
            <td>{{ $commodity->kod_lokalizacji }}</td>
            <td>{{ $commodity->id_magazynu }}</td>
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
