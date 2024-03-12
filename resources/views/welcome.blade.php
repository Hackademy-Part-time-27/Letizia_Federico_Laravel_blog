<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/css_homepage.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-danger">
    <div class="container mt-5">
        <h1 class="text-center">Benvenuto</h1>
    </div>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container mx-auto text-center">
            <ul class="navbar-nav mr-auto mx-auto text-center">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('contatti') }}">Contatti</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('chi-sono') }}">Chi Sono</a>
                </li>
            </ul>
        </div>
    </nav>
</body>
</html>
