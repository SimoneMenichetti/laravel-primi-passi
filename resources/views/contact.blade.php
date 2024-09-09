<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact-laravel-primi-passi</title>
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
    <h1>{{ $title }}</h1>
    <div class="container mt-5">
        <img class="image-fluid" src="https://boolean.careers/images/png/full-stack-course/wd-corso-mobile.png"
            alt="Contact immage">
    </div>

</body>

</html>
