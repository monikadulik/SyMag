@extends('layout')

@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="card badge-secondary badge-pill">
                    <h5 class="pt-3">Ilość towarów</h5>
                    <hr class="border-white">
                    <div class="card-body">
                        @foreach($warehouses as $warehouse)
                            <div class="row">
                                <div class="col-md-6">{{$warehouse->nazwa}}</div>
                                <div class="col-md-6">
                                    {{\App\Commodity::where('id_magazynu','=',$warehouse->id)->sum('ilosc_na_stanie')}}
                                </div>
                            </div>
                        @endforeach
                        <hr class="border-white">
                        <p>Łącznie: {{\App\Commodity::sum('ilosc_na_stanie')}}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card badge-primary badge-pill">
                    <h5 class="pt-3">Wartość towarów</h5>
                    <hr class="border-white">
                    <div class="card-body">
                        @foreach($warehouses as $warehouse)
                            <div class="row">
                                <div class="col-md-6">{{$warehouse->nazwa}}</div>
                                <div class="col-md-6">
                                    {{number_format(\App\Commodity::where('id_magazynu','=',$warehouse->id)
                                    ->sum(DB::raw('ilosc_na_stanie * cena_jednostkowa')),2)}}zł
                                </div>
                            </div>
                        @endforeach
                        <hr class="border-white">
                        <p>
                            Łącznie: {{number_format(\App\Commodity::sum(DB::raw('ilosc_na_stanie * cena_jednostkowa')),2)}}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="card badge-success badge-pill">
                    <h5 class="pt-3">Liczba alertów</h5>
                    <hr class="border-white">
                    <div class="card-body">
                        @foreach($warehouses as $warehouse)
                            <div class="row">
                                <div class="col-md-6">{{$warehouse->nazwa}}</div>
                                <div class="col-md-6">
                                    {{\App\Commodity::where('id_magazynu','=',$warehouse->id)
                                    ->sum(DB::raw('czy_ostrzegac_o_nadmiarze + czy_ostrzegac_o_niedomiarze'))}}
                                </div>
                            </div>
                        @endforeach
                        <hr class="border-white">
                        <p>
                            Łącznie: {{\App\Commodity::sum(DB::raw('czy_ostrzegac_o_nadmiarze + czy_ostrzegac_o_niedomiarze'))}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-8 text-center">
                <div class="card p-2 badge-warning badge-pill">
                    <h5 class="pt-3">Kontrahenci o największej wartości zamówień</h5>
                    <hr class="border-white">
                    <div class="row mb-2">
                        @foreach($best_val_contractors as $best_contractor)
                            <div class="col-md-4">{{ \App\Contractor::find($best_contractor)->nazwa }}</div>
                                <div class="col-md-8">
                                    łączna wartość zamówień:
                                    {{ \App\Order::where('id_kontrahenta','=',$best_contractor)
                                    ->sum(DB::raw('wartosc_zamowienia')) }}
                                </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card p-2 badge-info badge-pill">
                    <h5 class="pt-3">Średnia ilość</h5>
                    <h5>pozycji w zamówieniu</h5>
                    <hr class="border-white">
                        <p>{{ $avg }}</p>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4 text-center">
                <div class="card p-2 badge-danger badge-pill">
                    <h5 class="pt-3">Najpopularniejszy</h5>
                    <h5>sposób dostawy</h5>
                    <hr class="border-white">
                    <p>{{ $delivery }}</p>
                </div>
            </div>
            <div class="col-md-8 text-center">
                <div class="card p-2 badge-dark badge-pill">
                    <h5 class="pt-3">Kontrahenci o największej ilości zamówień</h5>
                    <hr class="border-white">
                    <div class="row mb-2">
                        @foreach($best_comm_contractors as $best_comm_contractor)
                            <div class="col-md-4">{{ \App\Contractor::find($best_comm_contractor)->nazwa }}</div>
                            <div class="col-md-8">
                                łączna liczba zamówień:
                                {{ \App\Order::where('id_kontrahenta','=',$best_comm_contractor)->count() }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
