<div class="container py-3">
    <ul class="nav nav-tabs text-capitalize">
        <li class="nav-item">
            <a href="#tab1Id" class="btn btn-primary disabled">QVO</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('producto.index') }}" 
            class="nav-link {{ (request()->is('producto')) ? 'active':'' }}">productos</a>
        </li>
        @if(Session::has('auth'))
            <li class="nav-item">
                <a href="{{ route('categoria.index') }}" 
                    class="nav-link {{ (request()->is('categoria')) ? 'active':'' }}">
                    categorias
                </a>
            </li>
            @else
            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">
                    iniciar sesión
                </a>
            </li>
        @endif
        
    </ul>

    @yield('gestion')
</div>