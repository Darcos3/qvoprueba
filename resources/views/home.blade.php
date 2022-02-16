@extends('layouts.app')

@section('content')
<div class="container">
    <ul class="nav nav-tabs" id="navId">
        <li class="nav-item">
            <a href="#tab1Id" class="nav-link disabled">Prueba QVO</a>
        </li>
        <li class="nav-item">
            <a href="#vercategorias" class="nav-link active text-capitalize" id="categorias" data-toggle="pill" role="tab" aria-controls="pills-home" aria-selected="true">categorías</a>
        </li>
        <li class="nav-item">
            <a href="#nuevacategoria" class="nav-link text-capitalize" id="newcategorias" data-toggle="pill" role="tab" aria-controls="pills-home" aria-selected="true">nueva categoría</a>
        </li>
        <li class="nav-item">
            <a href="#verproductos" class="nav-link text-capitalize" id="productos" data-toggle="pill" role="tab" aria-controls="pills-home" aria-selected="true">productos</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link btn btn-danger text-capitalize">cerrar sesión</a>
        </li>
    </ul>
    
    <div class="tab-content mt-5">
        <div class="tab-pane fade show active" id="vercategorias" role="tabpanel" role="tabpanel" aria-labelledby="pills-home-tab">
            <h4 class="mb-3">Categorías</h4>
            {{-- @include('backend.categorias.index') --}}
            {{-- @include('backend.categorias.create') --}}
        </div>
        <div class="tab-pane fade show" id="verproductos" role="tabpanel" role="tabpanel" aria-labelledby="pills-home-tab">
            <h4 class="mb-3">Productos</h4>
            @include('backend.productos.index')
        </div>
        <div class="tab-pane fade show active" id="nuevacategoria" role="tabpanel" role="tabpanel" aria-labelledby="pills-home-tab">
            <h4 class="mb-3">Nueva Categoría</h4>
            @include('backend.categorias.create')
            {{-- @include('backend.categorias.create') --}}
        </div>
    </div>
    
    <script>
        $('#navId a').click(e => {
            e.preventDefault();
            $(this).tab('show');
        });
    </script>
</div>

@endsection
