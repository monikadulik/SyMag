@extends('layout')

@section('content')

    <div class="container">
        <h5 class="m-4">Edycja alertu</h5>
        <div class="card border-dark p-5">
            <form method="post" action="{{ route('alerts.edit') }}">
                @csrf
                <p>Numer katalogowy produktu: {{ $commodity->numer_katalogowy }}</p>
                <p>Nazwa magazynu: {{ $commodity->kod_lokalizacji }}</p>

                <input type="hidden" id="comm_id" name="comm_id" value="{{ $commodity->id }}">
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="alertMax" name="alertMax"
                           @if($commodity->czy_ostrzegac_o_nadmiarze) checked="" @endif
                           onchange="document.getElementById('maxAm').disabled = !this.checked;
                                     document.getElementById('maxAm').value = '';">
                    <label class="form-check-label" for="alertMax">Ostrzegaj o nadmiarze towaru</label>
                </div>
                <div class="form-group ml-4 mr-4">
                    <label for="maxAm">Maksymalna ilość:</label>
                    <input type="text" class="form-control form-control-sm col-md-3 d-inline"
                           id="maxAm" name="maxAm" placeholder="Podaj ilość..."
                           @if(!$commodity->czy_ostrzegac_o_nadmiarze) disabled value=""
                           @else value="{{ $commodity->max_ilosc }}"
                           @endif>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="alertMin" name="alertMin"
                           @if($commodity->czy_ostrzegac_o_niedomiarze) checked="" @endif
                           onchange="document.getElementById('minAm').disabled = !this.checked;
                                     document.getElementById('minAm').value = '';">
                    <label class="form-check-label" for="alertMin">Ostrzegaj o niskich ilościach towaru</label>
                </div>
                <div class="form-group ml-4 mr-4">
                    <label for="minAm">Minimalna ilość:</label>
                    <input type="text" class="form-control form-control-sm col-md-3 d-inline"
                           id="minAm" name="minAm" placeholder="Podaj ilość..."
                           @if(!$commodity->czy_ostrzegac_o_niedomiarze) disabled value=""
                            @else value="{{ $commodity->min_ilosc }}"
                            @endif>
                </div>


                <button type="submit" class="btn btn-primary ml-8rem">Zapisz</button>

            </form>
            <form method="post" action="{{ route('alerts.delete') }}">
                @csrf
                <input type="hidden" name="comm_id" value="{{ $commodity->id }}">
                <button class="btn btn-danger move-up" type="submit">Usuń alert</button>
            </form>
        </div>
    </div>
@endsection