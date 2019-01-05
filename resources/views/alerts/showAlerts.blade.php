@extends('layout')

@section('content')

    <div class="row ml-5 mt-3">
        <div class="col-md-7 order-md-0 mt-4">
            <form method="get" action="{{ route('alerts.search') }}">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Wyszukaj alert:</span>
                    </div>
                    <input value="" type="text" class="form-control" id="cat_num" name="cat_num" placeholder="Numer katalogowy...">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="submit">Szukaj</button>
                    </div>
                </div>
            </form>

            <div class="row justify-content-between m-3">
                @if($cat_num != '' )
                    <h5 class="text-muted">Założone alerty dla {{ $cat_num }}</h5>
                    <a class="btn btn-danger" type="button" href="{{ route('alerts') }}">Usuń filtrowanie</a>
                @else
                    <h5 class="text-muted">Założone alerty</h5>
                @endif
            </div>

            <div class="overflow-1">
                @foreach($alerted_commodities as $commodity)
                    <div class="card mb-2 p-3">
                        <div class="row">
                            <div class="col-md-6 mr-auto">
                                <div>Numer katalogowy: {{ $commodity->numer_katalogowy }}</div>
                                <div>Nazwa towaru: {{ $commodity->nazwa }}</div>
                            </div>
                            <button class="btn btn-sm btn-outline-info h-75 mr-1" type="button" data-toggle="collapse"
                                    data-target="#info{{ $loop->index }}">Info
                            </button>
                            <form method="post" action="{{ route('alerts.delete') }}">
                                @csrf
                                <input type="hidden" name="comm_id" value="{{ $commodity->id }}">
                                <button class="btn btn-sm btn-outline-danger h-75 mr-1" type="submit">Usuń</button>
                            </form>
                            <a class="btn btn-sm btn-outline-dark h-75 mr-2" href="/alerts/{{ $commodity->id }}">Edytuj</a>
                        </div>
                        <div class="collapse" id="info{{ $loop->index }}">
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <small class="text-muted">Magazyn:</small>
                                    <div class="d-inline">{{ $commodity->kod_lokalizacji }}</div>
                                </div>
                                <div class="col-md-4">
                                    <small class="text-muted">Na stanie:</small>
                                    <div class="d-inline">{{ $commodity->ilosc_na_stanie }}</div>
                                </div>
                            </div>
                            <div class="row">
                                @if($commodity->czy_ostrzegac_o_niedomiarze)
                                    <div class="col-md-4">
                                        <small class="text-danger">Minimalna ilość:</small>
                                        <div class="d-inline">{{ $commodity->min_ilosc }}</div>
                                    </div>
                                @else
                                    <div class="col-md-4">
                                        <p></p>
                                    </div>
                                @endif
                                @if($commodity->czy_ostrzegac_o_nadmiarze)
                                    <div class="col-md-4">
                                        <small class="text-success">Maksymalna ilość:</small>
                                        <div class="d-inline">{{ $commodity->max_ilosc }}</div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        {{-----------------------------------------------------------------------------------------------------------}}


        <div class="col-md-4 order-md-1">
            <div class="row m-3 justify-content-between">
                @if($cat_num != '' )
                    <h5 class="text-muted">Ostrzeżenia dla {{ $cat_num }}</h5>
                @else
                    <h5 class="text-muted">Ostrzeżenia</h5>
                    <a href="{{ route('alerts.create') }}" class="btn btn-sm btn-primary" type="button">Dodaj alert</a>
                @endif
            </div>

            <div class="overflow-2">
                @foreach($alerted_commodities as $alert)
                    @if( $alert->czy_ostrzegac_o_nadmiarze && ( $alert->ilosc_na_stanie > $alert->max_ilosc ) )
                        <div class="card border-warning mb-2 p-3 shadow-sm">
                            <h6 class="text-danger text-center">NADMIAR TOWARU</h6>
                            <hr class="m-1">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="my-0">{{ $alert->numer_katalogowy }}</h6>
                                    <small class="text-muted">Numer katalogowy</small>
                                </div>
                                <div>
                                    <h6 class="my-0">{{ $alert->kod_lokalizacji }}</h6>
                                    <small class="text-muted">Magazyn</small>
                                </div>
                            </div>
                            <div>
                                <h6 class="my-0">{{ $alert->nazwa }}</h6>
                                <small class="text-muted">Nazwa towaru</small>
                            </div>
                            <div class="d-flex justify-content-around pt-1">
                                <h6>maksimum: {{ $alert->max_ilosc }}</h6>
                                <h6>na stanie: {{ $alert->ilosc_na_stanie }}</h6>
                            </div>
                        </div>
                    @endif
                    @if( $alert->czy_ostrzegac_o_niedomiarze && ( $alert->ilosc_na_stanie < $alert->min_ilosc ) )
                        <div class="card border-warning mb-2 p-3 shadow-sm">
                            <h6 class="text-center text-danger">BRAKI W TOWARZE</h6>
                            <hr class="m-1 mb-2">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6 class="my-0">{{ $alert->numer_katalogowy }}</h6>
                                    <small class="text-muted">Numer katalogowy</small>
                                </div>
                                <div>
                                    <h6 class="my-0">{{ $alert->kod_lokalizacji }}</h6>
                                    <small class="text-muted">Magazyn</small>
                                </div>
                            </div>
                            <div>
                                <h6 class="my-0">{{ $alert->nazwa }}</h6>
                                <small class="text-muted">Nazwa towaru</small>
                            </div>
                            <div class="d-flex justify-content-around pt-1">
                                <h6>minimum: {{ $alert->min_ilosc }}</h6>
                                <h6>na stanie: {{ $alert->ilosc_na_stanie }}</h6>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection