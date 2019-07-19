<div class="col-md-2">
    {{-- USANDO POLÍTICAS DE ACCESO PARA LOS CURSOS --}}
    @auth
        @can('opt_for_course', $course)
            @can('subscribe', \App\Course::class)
                <a href="#" class="btn btn-primary btn-block py-3">
                    <i class="fa fa-bolt"></i> {{ __("Comprar plan") }}
                </a>
            @else
                @can('inscribe', $course)
                    <a href="#" class="btn btn-primary btn-block py-3">
                        <i class="fa fa-bolt"></i> {{ __("Inscribirme al curso") }}
                    </a>
                @else
                    <a href="#" class="btn btn-primary btn-block py-3" disabled>
                        <i class="fa fa-bolt"></i> {{ __("Inscrito") }}
                    </a>
                @endcan
            @endcan
        @else
            <a href="#" class="btn btn-primary btn-block py-3" disabled>
                <i class="fa fa-user"></i> {{ __("Administrar Curso") }}
            </a>            
        @endcan
    @else
        <a href="{{ route('login') }}" class="btn btn-primary btn-block py-3" disabled>
            <i class="fa fa-user"></i> {{ __("Acceder") }}
        </a>
    @endauth
</div>