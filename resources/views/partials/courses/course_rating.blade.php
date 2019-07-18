
<div>
    <ul class="list-inline">
        <li class="list-inline-item">
            <i class="fa fa-star {{ $course->custom_rating >= 1 ? 'text-warning' : 'text-muted' }}"></i>
        </li>
        <li class="list-inline-item">
            <i class="fa fa-star {{ $course->custom_rating >= 2 ? 'text-warning' : 'text-muted' }}"></i>
        </li>
        <li class="list-inline-item">
            <i class="fa fa-star {{ $course->custom_rating >= 3 ? 'text-warning' : 'text-muted' }}"></i>
        </li>
        <li class="list-inline-item">
            <i class="fa fa-star {{ $course->custom_rating >= 4 ? 'text-warning' : 'text-muted' }}"></i>
        </li>
        <li class="list-inline-item">
            <i class="fa fa-star {{ $course->custom_rating >= 5 ? 'text-warning' : 'text-muted' }}"></i>
        </li>
    </ul>
</div>