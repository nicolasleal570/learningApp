<ul class="list-group">
    <li class="list-group-item active">Metas del Curso</li>
    @forelse ($goals as $goal)
        <li class="list-group-item">{{ $goal->goal }}</li>
    @empty
        <div class="alert alert-dark">
            <i class="fa fa-into-circle"></i>
            <p>{{ __("No se han determinado metas para este curso") }}</p>
        </div>
    @endforelse
</ul>