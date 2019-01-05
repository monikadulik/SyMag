@extends('layout')

@section('content')

    <div class="container">
        <h5 class="m-4">Nowy alert</h5>
        <div class="card border-dark p-5">
            <form method="post" action="{{ route('alerts.create') }}">

                @csrf

                <div class="form-group">
                    <label for="catalogNumber">Numer katalogowy produktu</label>
                    <input type="text" class="form-control" id="catalogNumber" name="catalogNumber" placeholder="Podaj numer katalogowy...">
                </div>
                <div class="form-group">
                    <label for="warehouse">Magazyn</label>
                    <select class="custom-select d-block w-100" id="warehouse" name="warehouse">
                        <option value="">Wybierz z listy...</option>
                        @foreach($warehouses as $warehouse)
                            <option value="{{ $warehouse->id }}">{{ $warehouse->nazwa }}</option>
                        @endforeach
                    </select>
                    <small id="warehouse" class="form-text text-muted">Podaj tylko wtedy, gdy chcesz założyć alert dla konkretnego magazynu</small>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="alertMax"
                           onchange="document.getElementById('maxAm').disabled = !this.checked;
                                     document.getElementById('maxAm').value = '';">
                    <label class="form-check-label" for="alertMax">Ostrzegaj o nadmiarze towaru</label>
                </div>
                <div class="form-group ml-4 mr-4">
                    <label for="maxAm">Maksymalna ilość:</label>
                    <input type="text" class="form-control form-control-sm col-md-3 d-inline" id="maxAm" name="maxAm" placeholder="Podaj ilość..." disabled="">
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="alertMin"
                           onchange="document.getElementById('minAm').disabled = !this.checked;
                                     document.getElementById('maxAm').value = '';">
                    <label class="form-check-label" for="alertMin">Ostrzegaj o niskich ilościach towaru</label>
                </div>
                <div class="form-group ml-4 mr-4">
                    <label for="minAm">Minimalna ilość:</label>
                    <input type="text" class="form-control form-control-sm col-md-3 d-inline" id="minAm" name="minAm" placeholder="Podaj ilość..." disabled="">
                </div>
                <button type="submit" class="btn btn-primary">Utwórz</button>
            </form>
        </div>
    </div>
@endsection