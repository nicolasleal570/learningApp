<div class="bg-dark">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="jumbotron jumbotron-fluid bg-dark">
                    <div class="d-flex text-center text-white align-items-center">
                        {{-- IMG COURSE --}}
                        <div class="col-md-5">
                            <img src="{{ $course->pathAttachment() }}" alt="{{ $course->name }}" class="img-fluid">
                        </div>

                        {{-- COURSE INFO --}}
                        <div class="col-md-5 text-left">
                            <h1>{{ __("Curso") }}: {{ $course->name }}</h1>
                            <h4>{{ __("Profesor") }}: {{ $course->teacher->user->name }}</h4>
                            <h4>{{ __("Categoría") }}: {{ $course->category->name }}</h4>
                            <h6>{{ __("Publicado en") }}: {{ $course->created_at->format('d M Y') }}</h6>
                            <h6>{{ __("Última actualización") }}: {{ $course->updated_at->format('d M Y') }}</h6>
                            <h6>{{ __("Estudiantes inscritos") }}: {{ $course->students_count }}</h6>
                            <h6>{{ __("Número de reseñas") }}: {{ $course->reviews_count }}</h6>
                            @include('partials.courses.course_rating')
                        </div>

                        {{-- ACTION BUTTON COURSE --}}
                        @include('partials.courses.action_button')

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>