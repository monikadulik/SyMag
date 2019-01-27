@extends('layout')

@section('content')
    <div class="container">
        <h5 class="m-4">Przyjęcie towaru</h5>
        <div class="card border-dark p-5">
            <form method="post" action="{{ route('warehouse.acceptgoods') }}">

                @csrf

                <div class="form-group d-flex">
                    <label class="col-md-4" for="warehouse">Magazyn przyjmujący towar</label>
                    <select class="custom-select" id="warehouse" name="warehouse">
                        <option value="">Wybierz z listy...</option>
                        @foreach($warehouses as $warehouse)
                            <option value="{{ $warehouse->id }}">{{ $warehouse->nazwa }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" for="catalogNumber">Numer katalogowy</label>
                    <input type="text" class="form-control" id="catalogNumber" name="catalogNumber" placeholder="Podaj numer katalogowy...">
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary">Zatwierdź</button>
                </div>
            </form>
        </div>
    </div>
@endsection