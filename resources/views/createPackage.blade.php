<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SyMag</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" type="text/css">
</head>
<body>
@include('partials.header')

<div class="container mt-3">
    <div class="row">
        <div>
            <h4 class="text-muted mb-3">Pozycje zamówienia nr: XXBC</h4>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between">
                    <div class="mr-4">
                        <h5 class="text-primary text-uppercase">nazwa produktu</h5>
                        <h6>numer katalogowy</h6>
                        <h6>kod lokalizacji</h6>
                    </div>
                    <div class="mr-4">
                        <h6>Jednostka: SZTUKI</h6>
                        <h6 class="d-inline-block mr-2">Ilosc: 3</h6>
                        <small class="text-danger d-inline-block">Brakuje towarów!</small>
                    </div>
                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-success">
                            <input type="radio" name="options" id="option1" autocomplete="off"> Spakowano
                        </label>
                        <label class="btn btn-sm btn-outline-warning active">
                            <input type="radio" name="options" id="option2" autocomplete="off"> W przygotowaniu
                        </label>
                        <label class="btn btn-sm btn-outline-danger">
                            <input type="radio" name="options" id="option3" autocomplete="off"> Problem z towarem
                        </label>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <div class="mr-4">
                        <h5 class="text-primary text-uppercase">nazwa produktu</h5>
                        <h6>numer katalogowy</h6>
                        <h6>kod lokalizacji</h6>
                    </div>
                    <div class="mr-4">
                        <h6>Jednostka: SZTUKI</h6>
                        <h6 class="d-inline-block mr-2">Ilosc: 3</h6>
                        <small class="text-danger d-inline-block">Brakuje towarów!</small>
                    </div>
                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-success">
                            <input type="radio" name="options" id="option1" autocomplete="off"> Spakowano
                        </label>
                        <label class="btn btn-sm btn-outline-warning active">
                            <input type="radio" name="options" id="option2" autocomplete="off"> W przygotowaniu
                        </label>
                        <label class="btn btn-sm btn-outline-danger">
                            <input type="radio" name="options" id="option3" autocomplete="off"> Problem z towarem
                        </label>
                    </div>
                </li>

                <li class="list-group-item d-flex justify-content-between">
                    <div class="mr-4">
                        <h5 class="text-primary text-uppercase">nazwa produktu</h5>
                        <h6>numer katalogowy</h6>
                        <h6>kod lokalizacji</h6>
                    </div>
                    <div class="mr-4">
                        <h6>Jednostka: SZTUKI</h6>
                        <h6 class="d-inline-block mr-2">Ilosc: 3</h6>
                        <small class="text-danger d-inline-block">Brakuje towarów!</small>
                    </div>
                    <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-sm btn-outline-success">
                            <input type="radio" name="options" id="option1" autocomplete="off"> Spakowano
                        </label>
                        <label class="btn btn-sm btn-outline-warning active">
                            <input type="radio" name="options" id="option2" autocomplete="off"> W przygotowaniu
                        </label>
                        <label class="btn btn-sm btn-outline-danger">
                            <input type="radio" name="options" id="option3" autocomplete="off"> Problem z towarem
                        </label>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>
</html>
