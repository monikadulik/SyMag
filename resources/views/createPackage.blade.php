@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 order-md-1 mt-2">
                <h4 class="text-muted mb-3 ml-2">Pozycje zamówienia nr: {{ $order->id }}</h4>
                <ul class="list-group">

                    @foreach( $order_items as $order_item)

                        <li class="list-group-item d-flex justify-content-between">
                            <div class="mr-4 col-md-5">
                                <small class="text-muted">Nazwa towaru</small>
                                <h5 class="text-primary text-uppercase">{{ $order_item->nazwa }}</h5>
                                <small class="text-muted">Numer katalogowy</small>
                                <h6>{{ $order_item->numer_katalogowy }}</h6>
                                <small class="text-muted">Kod lokalizacji</small>
                                <h6>{{ $order_item->kod_lokalizacji }}</h6>
                            </div>
                            <div class="mr-4 mt-4">
                                <h6>Jednostka: {{ $order_item->jednostka_miary }}</h6>
                                <h5 class="d-inline-block mr-2">Ilosc: {{$order_item->ilosc}}</h5>
                                {{--<small class="text-danger d-inline-block">Brakuje towarów!</small>--}}
                            </div>
                            <div class="btn-group-vertical btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-sm btn-outline-success">
                                    <input type="radio" name="options" id="option1" autocomplete="off"> Spakowano
                                </label>
                                <label class="btn btn-sm btn-outline-warning active">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> W przygotowaniu
                                </label>
                                <label class="btn btn-sm btn-outline-danger">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> Problem z towarem
                                </label>
                            </div>
                        </li>
                    @endforeach

                </ul>
            </div>



            <div class="col-md-4 order-md-2 mt-2">
                <h4 class="text-muted ml-2 mb-3">Dane adresowe</h4>

                <ul class="list-group">
                    <li class="list-group-item">
                        <div>
                            <h6 class="my-0">{{ $contractor->nazwa }}</h6>
                            <small class="text-muted">Nazwa kontrahenta</small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div>
                            <h6 class="my-0">{{ $contractor->adres1 }}</h6>
                            <h6 class="my-0">{{ $contractor->adres2 }}</h6>
                            <small class="text-muted">Adres wysyłki</small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div>
                            <h6 class="my-0">{{ $contractor->adres_email }}</h6>
                            <small class="text-muted">Adres e-mail</small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div>
                            <h6 class="my-0">{{ $contractor->telefon }}</h6>
                            <small class="text-muted">Telefon kontaktowy</small>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div>
                            <h6 class="my-0">{{ $order->sposob_dostawy }}</h6>
                            <small class="text-muted">Wybrany sposób dostawy</small>
                        </div>
                    </li>
                </ul>

            </div>
        </div>
    </div>
@endsection