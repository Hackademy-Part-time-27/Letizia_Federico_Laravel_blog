<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary d-flex">
        <div class="container mx-auto">
            <ul class="navbar-nav mx-auto ">
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
                @auth
                    <ul class="navbar-nav ms-auto dropdown-menu-end bg-primary-subtle text-end">
                        
                        <li class=" nav-item dropdown dropdown-menu-end text-end">
                            <a class="nav-link text-end dropdown-toggle fs-5 font-weight-bold dropdown-menu-end" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               {{ auth()->user()->email }}</a>
                            <ul class="dropdown-menu dropdown-menu-end ms-auto" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item  font-weight-bold" href="{{ route('creaArticoli') }}">Crea Articolo</a></li> 
                                <li><a class="dropdown-item" href="{{ route('articoliAuth')}}">Gestione articoli</a></li>
                                <li><a class="dropdown-item" href="{{ route('categories.store')}}">Gestione Categorie</a></li>
                                <li><hr class="dropdown-divider"></a></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item">esci</button>
                                    </form>
                                </li> 
                            </ul>
                        
                        </li> 
                    </ul>
                @else
                <li class="nav-item">
                    <a class="nav-link fs-5 text-white font-weight-bold" href="/register">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5 text-white font-weight-bold" href="/login">accedi</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
</div>