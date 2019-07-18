<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        {{ __("Administrar")}}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">{{ __("Administrar Cursos") }}</a>
        <a class="dropdown-item" href="#">{{ __("Administrar Estudiantes") }}</a>
        <a class="dropdown-item" href="#">{{ __("Administrar Profesores") }}</a>
    </div>
</li>
@include('partials.navigations.logged')