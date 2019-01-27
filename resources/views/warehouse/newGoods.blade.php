@extends('layout')

@section('content')
    <div class="container">
        <h5 class="m-4">Przyjęcie towaru</h5>
        <div class="card border-dark p-5">
            <form method="post" action="{{ route('warehouse.confacceptNew') }}">

                @csrf

                <input type="hidden" id="warehouse" name="warehouse" value="{{ $warehouse_id }}">
                <input type="hidden" id="catalogNumber" name="catalogNumber" value="{{ $catalog_number }}">
                <div class="form-group d-flex">
                    <label class="col-md-4">Magazyn przyjmujący towar</label>
                    <input type="text" class="form-control"
                           value="{{ \App\Warehouse::find($warehouse_id)->nazwa }}" disabled readonly>
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" >Numer katalogowy</label>
                    <input type="text" class="form-control" value="{{ $catalog_number }}" disabled readonly>
                </div>

                <div class="form-group d-flex">
                    <label class="col-md-4" for="name">Nazwa</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Podaj nazwę towaru..." >
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" for="quantity">Przyjmowana ilość</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Podaj przyjmowaną ilosć..." v>
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" for="price">Cena jednostkowa za towar</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="Podaj cenę...">
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" for="unit">Jednostka miary</label>
                    <select class="custom-select" id="unit" name="unit">
                        <option value="">Wybierz jednostkę miary...</option>
                        <option value="SZTUKI">sztuki</option>
                        <option value="KG">kg</option>
                        <option value="TONY">tony</option>
                        <option value="LITRY">litry</option>
                        <option value="METRY">metry</option>
                        <option value="METRY2">metry kwadratowe</option>
                        <option value="METRY3">metry sześcienne</option>
                    </select>
                </div>

                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary">Zatwierdź</button>
                </div>
            </form>
        </div>
    </div>
@endsection