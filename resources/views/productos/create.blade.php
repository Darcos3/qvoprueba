@extends('layouts.app')
@extends('layouts.nav')
@section('gestion')
    <div class="container py-5 text-center">
        @if(isset($product))
            <h3>Actualizar producto</h3>
        @else
            <h3>Nuevo producto</h3>
        @endif
        @if(isset($product))
            <form action="{{ route('producto.update', $product) }}" method="post">
            @method('PUT')
        @else
            <form action="{{ route('producto.store') }}" method="post">
        @endif
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control mb-3" name="articulo" id="articulo" placeholder="Ingrese el nombre del producto" value="{{ old('articulo') ?? @$product->articulo }}">
                @error('articulo')
                    <p class="text-danger">Agregue el nombre del producto</p>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-group">
                  <select class="form-control text-capitalize" name="id_categoria" id="id_categoria">
                    <option>Seleccione una categoría</option>
                    @foreach( $categorias as $cat )
                        <option value="{{ $cat->id }}" class="text-capitalize">{{ $cat->categoria }}</option>
                    @endforeach
                  </select>
                </div>
                @error('id_categoria')
                    <p class="text-danger">Agregue la categoria del producto</p>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <input type="number" class="form-control mb-3" name="precio" id="precio" placeholder="Ingrese el precio del producto" value="{{ old('precio') ?? @$product->precio }}">
                </div>
                @error('precio')
                    <p class="text-danger">Agregue la categoria del producto</p>
                @enderror
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <input type="number" class="form-control mb-3" name="cantidad" id="cantidad" placeholder="Ingrese la cantidad del producto" value="{{ old('cantidad') ?? @$product->cantidad }}">
                </div>
                @error('cantidad')
                    <p class="text-danger">Agregue la categoria del producto</p>
                @enderror
            </div>
            <div class="mb-3">
                <textarea cols="3" class="form-control mb-3" name="descripcion" id="descripcion" placeholder="descripción">{{ old('descripcion') ?? @$product->descripcion }}</textarea>
                @error('descripcion')
                    <p class="text-danger">
                        Agregue la descripción del producto<br>
                        Máximo 50 carácteres.
                    </p>
                @enderror
            </div>
            
            @if(isset($product))
                <button type="submit" class="btn btn-block btn-warning">Actualizar producto</button> 
            @else
                <button type="submit" class="btn btn-block btn-primary">Guardar producto</button> 
            @endif
            
        </form>

    </div>
@endsection