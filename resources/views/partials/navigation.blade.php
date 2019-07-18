<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">

            <a class="navbar-brand" href="#">{{ config('app.name') }}</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    {{-- DROPDOWN --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ __("Seleccionar un idioma")}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('set_language', ['es']) }}">{{ __("Español") }}</a>
                            <a class="dropdown-item" href="{{ route('set_language', ['en']) }}">{{ __("Ingles") }}</a>
                        </div>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    
                    @include('partials.navigations.' . \App\User::navigation())

                </ul>
            </div>
        </div>
    </nav>
</header>