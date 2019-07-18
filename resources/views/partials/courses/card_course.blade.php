<div class="col-sm-4 col-md-4">
    <div class="card post mb-4">
        {{-- POST TITLE --}}
        <div class="post-img-content">
            <img src="{{ $course->pathAttachment() }}" alt="{{ $course->name }}" class="card-img-top" /> 
            <h5 class="post-title">
                <b>{{ $course->name }}</b>
            </h5>
        </div>

        {{-- POST BODY --}}
        <div class="card-body">
            <hr>
            <div class="row justify-content-center">
                @include('partials.courses.course_rating')
            </div>
            <hr>
            <small class="text-muted">{{ $course->created_at->diffForHumans() }}</small> <span class="badge badge-primary">{{ $course->category->name }}</span>
            <p> {{ str_limit($course->description, 100) }} </p>
            <a href="#" class="btn btn-primary btn-sm mt-3"> {{ __("Leer más")}} </a>
        </div>

    </div>
</div>