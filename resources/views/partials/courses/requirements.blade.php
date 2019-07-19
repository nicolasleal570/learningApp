<ul class="list-group">
    <li class="list-group-item active">Requisitos para tomar el Curso</li>
    @forelse ($requirements as $requirement)
        <li class="list-group-item">{{ $requirement->requirement }}</li>
    @empty
        <div class="alert alert-dark">
            <i class="fa fa-into-circle"></i>
            <p>{{ __("No se han determinado metas para este curso") }}</p>
        </div>
    @endforelse
</ul>