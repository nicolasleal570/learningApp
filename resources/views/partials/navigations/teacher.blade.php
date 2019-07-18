@include('partials.navigations.partials.student_actions')
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        {{ __("Control de Cursos")}}
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">{{ __("Cursos desarrollados por mi") }}</a>
        <a class="dropdown-item" href="#">{{ __("Crear Curso") }}</a>
    </div>
</li>
@include('partials.navigations.logged')