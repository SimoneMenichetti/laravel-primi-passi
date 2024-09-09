<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-primi-passi</title>
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header class="bg-light p-3">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Link di navigazione -->
            <nav>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contacts</a>
                    </li>
                </ul>
            </nav>
            <!-- Placeholder e Bottone Accedi -->
            <div class="d-flex align-items-center">
                <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Cerca">
                <button class="btn btn-primary" type="button">Accedi</button>
            </div>
        </div>
    </header>
    <main class="container">
        <h1>{{ $title }}</h1>
        <p>Bentornato: {{ $user['name'] }} {{ $user['surname'] }} <br>auguri! oggi compi: {{ $user['age'] }} anni!</p>

        @if (count($gifts) > 0)
            <h3>Elenco dei regali:</h3>
            <ul>
                {{-- inizializzo il foreach --}}
                @foreach ($gifts as $gift)
                    <li>{{ $gift }}</li>
                @endforeach
            </ul>
        @else
            <h4>Non ci sono regali, li hai già ritirati tutti!!</h4>
        @endif
    </main>
</body>

</html>
