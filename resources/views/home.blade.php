@extends('layouts.app')

@section('jumbotron')
    @include('partials.jumbotron', [
        "title" => __("Accede ahora mismo a cualquier curso"),
        "description" => __("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia optio,  ab fugit sit sunt               repudiandae dicta tempore distinctio repellat debitis ipsum laudantium quibusdam maiores nisi!"),
        "icon" => "th"
    ])
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
            @forelse ($courses as $course)

                @include('partials.courses.card_course')

            @empty
            <div class="alert alert-dark">
                <h2>{{ __("No hay cursos disponibles") }}</h2>
            </div>
            @endforelse

        </div>
    </div>

    <div class="row justify-content-center">
        {{ $courses->links() }}
    </div>
</div>
@endsection