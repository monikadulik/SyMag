@extends('layout')

@section('content')
    <div class="container">
        <h5 class="m-4">Przyjęcie towaru</h5>
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
            </form>
        </div>
    </div>
@endsection