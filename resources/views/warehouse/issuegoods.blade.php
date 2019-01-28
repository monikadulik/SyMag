@extends('layout')

@section('content')
    <div class="container">
        <h5 class="m-4">Wydanie towaru</h5>

        @if($errors->any())
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif

        <div class="card border-dark p-5">
            <form method="post" action="{{ route('warehouse.issuegoods') }}">

                @csrf

                <div class="form-group d-flex">
                    <label class="col-md-4" for="warehouse">Magazyn wydający towar</label>
                    <select class="custom-select {{ $errors->has('warehouse') ? 'border-danger' : '' }}"
                            id="warehouse" name="warehouse" required>
                        <option value="">Wybierz z listy...</option>
                        @foreach($warehouses as $warehouse)
                            <option value="{{ $warehouse->id }}">{{ $warehouse->nazwa }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" for="catalogNumber">Numer katalogowy</label>
                    <input type="text" class="form-control {{ $errors->has('catalogNumber') ? 'border-danger' : '' }}"
                           id="catalogNumber" name="catalogNumber" value="{{old('catalogNumber')}}" placeholder="Podaj numer katalogowy..." required>
                </div>
                <div class="form-group d-flex">
                    <label class="col-md-4" for="quantity">Wydawana ilość</label>
                    <input type="text" class="form-control {{ $errors->has('quantity') ? 'border-danger' : '' }}"
                           id="quantity" name="quantity" value="{{old('quantity')}}" placeholder="Podaj ilość..." required>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary">Podsumowanie wydania</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>$('#warehouse').val({{ old('warehouse') }}).change();</script>
@endsection