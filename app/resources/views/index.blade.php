<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Laravel</title>


</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Construtora LTDA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary" aria-current="page" href="#">Admistrador</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12">
                <div class="row">
                    <div class="col-12 col-sm-12 mb-5 mt-3">
                        <h2>Volume de concreto</h2>
                    </div>
                    <div class="col-12 col-sm-12 mb-5">
                        <h2>Tijolos por metro</h2>
                    </div>
                    <div class="col-12 col-sm-12 mb-5">
                        <h2>Metragem reboco</h2>
                    </div>
                    <div class="col-12 col-sm-12 mb-5">
                        <h2>Metragem colocação</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
