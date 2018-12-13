@extends('layout')

@section('content')
    <div class="container">
        <div class="row m-3">
            <button class="btn btn-outline-dark mr-4 h-50" type="button" data-toggle="collapse"
                    data-target="#collapseFilter" aria-expanded="false">
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
                            <label for="catalog-num">Nazwa towaru</label>
                            <input type="text" class="form-control" id="comm-name" name="comm-name"
                                   placeholder="Wpisz nazwe..." value="">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="catalog-num">Numer katalogowy</label>
                            <input type="text" class="form-control" id="catalog-num" name="catalog-num"
                                   placeholder="Wpisz numer..." value="">
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
                    <td scope="row">{{ ($commodities ->currentpage()-1) * $commodities->perpage() + $loop->index+1 }}</td>
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

        <div class="d-flex">
            <div class="mx-auto">
                {{ $commodities->links() }}
            </div>
        </div>
    </div>
@endsection
