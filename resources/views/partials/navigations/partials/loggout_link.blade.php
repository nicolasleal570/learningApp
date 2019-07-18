<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit()">
    {{ __("Cerrar Sesión") }}
</a>
<form action="{{ route('logout') }}" method="POST" syle="display: none;" id="logout-form">
    @csrf
</form>