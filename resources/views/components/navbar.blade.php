<div>
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
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle fs-5 text-white font-weight-bold" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item  font-weight-bold" href="{{ route('creaArticoli') }}">Crea Articolo</a></li> 
                    <li><a class="dropdown-item" href="{{ route('articoliAuth')}}">Gestione articoli</a></li>
                    <li><hr class="dropdown-divider"></a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li> 
                </ul>
            </li>
            </ul>
                   
            
        </div>
    </nav>
</div>