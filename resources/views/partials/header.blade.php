<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav-pills nav-fill">
    <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('logo.png') }}" width="60" height="30" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav mr-auto">
            <div class="dropdown px-2">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Zarządzaj magazynem
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ route('warehouse.acceptgoods') }}">Przyjęcie towaru</a>
                    <a class="dropdown-item" href="{{ route('warehouse.issuegoods') }}">Wydanie towaru</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('warehouse') }}">Pokaż stan magazynu</a>
                </div>
            </div>
            <a class="btn btn-secondary px-2" href="{{ route('inProgress') }}">Kompletacja paczki</a>
        </div>
        <a class="btn btn-light px-2 mx-1" href="{{ route('reports') }}">Raporty</a>
        <a class="btn btn-warning px-2 mx-1" href="{{ route('alerts') }}">Alerty</a>
    </div>
</nav>