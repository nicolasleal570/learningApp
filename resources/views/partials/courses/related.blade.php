<div class="row justify-content-center mb-4">
    <div class="col-md-12">
        <h2>{{ __("Cursos Relacionados") }}</h2>
    </div>
</div>
<div class="row justify-content-center">
    @forelse ($related as $relatedCourse)
        
        @include('partials.courses.card_course', ['course' => $relatedCourse])

    @empty
        <div class="alert alert-dark">
            <p>{{ __("No hay cursos relacionados a este.") }}</p>
        </div>
    @endforelse
</div>