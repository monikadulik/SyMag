@extends('layout')

@section('content')
    <div class="container">
        <h5 class="m-4">Przyjęcie towaru</h5>
        <div class="card border-dark p-5">
            <form method="post" action="{{ route('warehouse.confacceptAdd') }}">

                @csrf

                <input type="hidden" id="comm_id" name="comm_id" value="{{ $commodity->id}}">
                <div class="form-group d-flex">
                    <label class="col-md-4">Magazyn przyjmujący towar</label>
                    <input type="text" class="form-control"
                           value="{{ \App\Warehouse::find($commodity->id_magazynu)->nazwa }}" disabled readonly>
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" >Numer katalogowy</label>
                    <input type="text" class="form-control" value="{{ $commodity->numer_katalogowy }}" disabled readonly>
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" for="name">Nazwa towaru</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $commodity->nazwa }}" disabled readonly>
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" for="name">Jednostka miary</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $commodity->jednostka_miary }}" disabled readonly>
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" for="quantity">Przyjmowana ilość</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Podaj przyjmowaną ilosć..." v>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary">Zatwierdź</button>
                </div>
            </form>
        </div>
    </div>
@endsection