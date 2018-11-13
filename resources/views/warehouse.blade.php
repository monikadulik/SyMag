<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SyMag</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
@include('partials.header')


{{--TODO -> Wczytywanie listy magazynów z bazy--}}
{{--TODO -> Wyszukiwanie według podanych argumentów--}}
<div class="container">

<div class="row mb-3 mt-3">
    <button class="btn btn-outline-dark mt-4 mr-5 h-50" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        Filtruj wyniki
    </button>
    <div class="collapse" id="collapseExample">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="warehouse">Magazyn</label>
                <select class="custom-select d-block w-100" id="warehouse">
                    <option value="">Wybierz z listy...</option>
                    <option>Magazyn 1</option>
                    <option>Magazyn 2</option>
                    <option>Magazyn 3</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="catalog-num">Numer katalogowy</label>
                <input type="text" class="form-control" id="catalog-num" placeholder="Wpisz numer..." value="">
            </div>
            <div class="col-md-4 mb-3">
                <label for="catalog-num">Szukaj według nazwy towaru</label>
                <input type="text" class="form-control" id="catalog-num" placeholder="Wpisz nazwe..." value="">
            </div>
            <button class="btn btn-primary col-md-3 ml-3 h-50" type="submit">Szukaj</button>
        </div>
    </div>
</div>

    <p>- Warehouse View  -</p>

</div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
