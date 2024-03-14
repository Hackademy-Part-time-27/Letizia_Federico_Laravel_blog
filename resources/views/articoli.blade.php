<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .navbar-nav .nav-item {
            margin-right: 30px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container mx-auto text-center">
            <ul class="navbar-nav mx-auto text-center">
                <li class="nav-item">
                    <a class="nav-link fs-5 text-white font-weight-bold" href="{{ route('homepage') }}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 text-white font-weight-bold" href="{{ route('contatti') }}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 text-white font-weight-bold" href="{{ route('chi-sono') }}">Chi Sono</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 text-white font-weight-bold" href="{{ route('articoli') }}">Articoli</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="text-center">Articoli</h1>
        @if(empty($articoli))
            <p>Nessun articolo disponibile</p>
        @else
            @foreach($articoli as $key => $articolo)
                <div class="card mt-5 bg-primary p-1">
                    <div class="card-body text-center  py-5 bg-primary-subtle">
                        <h5 class="card-title">{{ $articolo['title'] }}</h5>
                        <p class="card-text">Categoria: {{ $articolo['category'] }}</p>
                        <p class="card-text">{{ $articolo['description'] }}</p>
                        <a href="{{ route('articolo', ['id' => $key]) }}" class="btn btn-primary">Leggi articolo</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
