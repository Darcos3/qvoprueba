@extends('layouts.app')
@extends('layouts.nav')

@section('gestion')
    <div class="container py-5 text-center">
        @if(isset($category))
            <h3>Actualizar categoria</h3>
        @else
            <h3>Nueva categoria</h3>
        @endif
        @if(isset($category))
            <form action="{{ route('categoria.update', $category) }}" method="post">
            @method('PUT')
        @else
            <form action="{{ route('categoria.store') }}" method="post">
        @endif
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control mb-3" name="categoria" id="categoria" placeholder="Ingrese el nombre de la categoría" value="{{ old('categoria') ?? @$category->categoria }}">
                @error('categoria')
                    <p class="text-danger">Agregue el nombre de la categoría</p>
                @enderror
            </div>
            <div class="mb-3">
                <textarea cols="3" class="form-control mb-3" name="descripcion" id="descripcion" placeholder="descripción">{{ old('descripcion') ?? @$category->descripcion }}</textarea>
                @error('descripcion')
                    <p class="text-danger">
                        Agregue la descripción de la categoría<br>
                        Máximo 50 carácteres.
                    </p>
                @enderror
            </div>
            
            @if(isset($category))
                <button type="submit" class="btn btn-block btn-warning">Actualizar categoría</button> 
            @else
                <button type="submit" class="btn btn-block btn-info">Guardar categpría</button> 
            @endif
            
        </form>

    </div>
@endsection