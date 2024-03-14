<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi sono</title>
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

    <div class="container mt-5 text-center">
        <h1 class="text-center">Chi sono</h1>
        <h3 class="text-center pb-5">Ciao, sono un appassionato di programmazione</h3>
        <div class="bg-primary-subtle border border-primary border border-5 mt-5">
            <h4 class="fs-3 my-5">Ecco la mia storia</h4>
            <p class="fs-5 pb-5 px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur culpa ullam ratione dicta! Libero sequi perferendis illum repudiandae? Quas ipsum minima veritatis cupiditate doloribus blanditiis voluptas, officia deserunt eaque quia quasi quidem perferendis expedita beatae eveniet ea possimus distinctio repellendus tempora iure voluptate magni! Aspernatur magni blanditiis sint suscipit! Reprehenderit autem fugit molestiae. Exercitationem ab repudiandae atque veniam expedita consectetur dolores, suscipit fugit minus quis aperiam esse neque quos eligendi soluta blanditiis eos eius natus tempore perspiciatis? Ipsam nihil dicta voluptate ex rem doloribus praesentium itaque eligendi commodi, numquam, doloremque dignissimos dolore? Amet dignissimos porro nulla? Ea voluptatem commodi ab.</p>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
