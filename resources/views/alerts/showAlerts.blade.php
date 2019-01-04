@extends('layout')

@section('content')

    <div class="row ml-5 mt-3">
        <div class="col-md-7 order-md-0 mt-4">
            <form action="GET">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Wyszukaj alert:</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Numer katalogowy...">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button">Szukaj</button>
                    </div>
                </div>
            </form>

            <h5 class="text-muted m-3">Założone alerty</h5>
            <div class="card mb-3 p-3">
                <div class="row">
                    <div class="col-md-6 mr-auto">
                        <div>Numer katalogowy: XXXXX</div>
                        <div>Nazwa towaru: Nazwa</div>
                    </div>
                    <button class="btn btn-sm btn-outline-info h-75 mr-1" type="button" data-toggle="collapse" data-target="#info">Info</button>
                    <button class="btn btn-sm btn-outline-danger h-75 mr-1" type="button">Usuń</button>
                    <button class="btn btn-sm btn-outline-dark h-75 mr-2" type="button">Edytuj</button>

                </div>
                <div class="collapse" id="info">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-muted">Magazyn:</small>
                            <div class="d-inline">MAG-SOS-1</div>
                        </div>
                        <div class="col-md-4">
                            <small class="text-muted">Na stanie:</small>
                            <div class="d-inline">70</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-danger">Minimalna ilość:</small>
                            <div class="d-inline">50</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-muted">Magazyn:</small>
                            <div class="d-inline">MAG-KAT-1</div>
                        </div>
                        <div class="col-md-4">
                            <small class="text-muted">Na stanie:</small>
                            <div class="d-inline">70</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-danger">Minimalna ilość:</small>
                            <div class="d-inline">50</div>
                        </div>
                        <div class="col-md-4">
                            <small class="text-success">Maksymalna ilość:</small>
                            <div class="d-inline">500</div>
                        </div>
                    </div>
                </div>
            </div>




            <div class="card mb-3 p-3">
                <div class="row">
                    <div class="col-md-6 mr-auto">
                        <div>Numer katalogowy: XXXXX</div>
                        <div>Nazwa towaru: Nazwa</div>
                    </div>
                    <button class="btn btn-sm btn-outline-info h-75 mr-1" type="button" data-toggle="collapse" data-target="#info">Info</button>
                    <button class="btn btn-sm btn-outline-danger h-75 mr-1" type="button">Usuń</button>
                    <button class="btn btn-sm btn-outline-dark h-75 mr-2" type="button">Edytuj</button>

                </div>
                <div class="collapse" id="info">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-muted">Magazyn:</small>
                            <div class="d-inline">MAG-SOS-1</div>
                        </div>
                        <div class="col-md-4">
                            <small class="text-muted">Na stanie:</small>
                            <div class="d-inline">70</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-danger">Minimalna ilość:</small>
                            <div class="d-inline">50</div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-muted">Magazyn:</small>
                            <div class="d-inline">MAG-KAT-1</div>
                        </div>
                        <div class="col-md-4">
                            <small class="text-muted">Na stanie:</small>
                            <div class="d-inline">70</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <small class="text-danger">Minimalna ilość:</small>
                            <div class="d-inline">50</div>
                        </div>
                        <div class="col-md-4">
                            <small class="text-success">Maksymalna ilość:</small>
                            <div class="d-inline">500</div>
                        </div>
                    </div>
                </div>
            </div>





        </div>

        <div class="col-md-4 order-md-1">
            <div class="row m-3 justify-content-between">
            <h5 class="text-muted">Ostrzeżenia</h5>

            <a href="{{ route('alerts.create') }}" class="btn btn-sm btn-primary" type="button">Dodaj alert</a>
            </div>
            <div class="card border-warning mb-3 p-3 shadow-sm">
                <div>
                    <h6 class="my-0">XXMDA</h6>
                    <small class="text-muted">Numer katalogowy</small>
                </div>

                <div>
                    <h6 class="my-0">Nazwa</h6>
                    <small class="text-muted">Nazwa towaru</small>
                </div>
                <div>
                    <h6 class="my-0">MAG-SOS-1</h6>
                    <small class="text-muted">Magazyn</small>
                </div>
            </div>
            <div class="card border-warning mb-3 p-3 shadow-sm">
                <div>
                    <h6 class="my-0">XXMDA</h6>
                    <small class="text-muted">Numer katalogowy</small>
                </div>

                <div>
                    <h6 class="my-0">Nazwa</h6>
                    <small class="text-muted">Nazwa towaru</small>
                </div>
                <div>
                    <h6 class="my-0">MAG-SOS-1</h6>
                    <small class="text-muted">Magazyn</small>
                </div>
            </div>
        </div>
    </div>
@endsection