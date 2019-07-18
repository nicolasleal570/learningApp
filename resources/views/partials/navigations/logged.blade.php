<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        {{ auth()->user()->name }}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a href="" class="dropdown-item">{{ __("Mi perfil") }}</a>
        <hr>
        @include('partials.navigations.partials.loggout_link')
    </div>
</li>