@extends('layout')

@section('content')

    <div class="container mt-3">
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
                                <h5 class="mr-2">Ilosc: {{$order_item->ilosc}}</h5>
                                {{--@if($order_item->ilosc_na_stanie < $order_item->ilosc)--}}
                                {{--<small class="text-danger">Brakuje towarów!</small>--}}
                                {{--@endif--}}
                            </div>
                            {{--<div class="btn-group-vertical btn-group-toggle" data-toggle="buttons"--}}
                            {{--id="stateof-{{ $loop->index }}">--}}
                            {{--<label class="btn btn-sm btn-outline-success">--}}
                            {{--<input type="radio" name="ready" id="ready">Spakowano--}}
                            {{--</label>--}}
                            {{--<label class="btn btn-sm btn-outline-warning active">--}}
                            {{--<input type="radio" name="waiting" id="waiting">W przygotowaniu--}}
                            {{--</label>--}}
                            {{--<label class="btn btn-sm btn-outline-danger">--}}
                            {{--<input type="radio" name="issue" id="issue"--}}
                            {{--autocomplete="off"> Problem z towarem--}}
                            {{--</label>--}}
                            {{--</div>--}}
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

                @if($order->status_realizacji == 'W REALIZACJI')
                    <form method="post" action="{{ route('packed') }}">
                        @csrf
                        <div class="text-center m-5">
                            <input type="hidden" name="order_id" id="order_id" value="{{$order->id}}">
                            <button type="submit" class="btn btn-primary">Przekaż paczkę do wydania</button>
                        </div>
                    </form>
                @elseif($order->status_realizacji == 'CZEKA NA WYDANIE')
                    <form method="post" action="{{ route('pass') }}">
                        @csrf
                        <div class="text-center m-5">
                            <input type="hidden" name="order_id" id="order_id" value="{{$order->id}}">
                            <button type="submit" class="btn btn-primary">Wydaj paczkę</button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>


@endsection