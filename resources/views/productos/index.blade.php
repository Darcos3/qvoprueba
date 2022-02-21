@extends('layouts.app')
@extends('layouts.nav')

@section('gestion')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10">
                <h3>Productos</h3>
                <h6>Gestión de productos</h6>
            </div>
            <div class="col-md-2 text-right">
                <a class="btn btn-primary btn-sm text-capitalize" href="{{ route('producto.create') }}">nuevo producto</a>
            </div>
            <hr>
        </div>
    
        <div class="table-responsive">   
            @if(Session::has('msg'))
                <div class="alert alert-info my-5 text-capitalize">
                    {{ Session::get('msg') }}
                </div>
            @endif         
            <table class="table table-hover table-bordered table-sm">
                <thead class="text-capitalize">
                    <tr>
                        <th>no</th>
                        <th>producto</th>
                        <th>descripcion</th>
                        <th>categoria</th>
                        <th>precio</th>
                        <th>cantidad</th>
                        @if(Session::has('auth'))
                            <th>opciones</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach( $productos as $prod)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td class="text-capitalize">{{ $prod->articulo }}</td>
                            <td class="text-capitalize">{{ $prod->descripcion }}</td>
                            <td>
                                {{-- {{ $prod->categoria }} --}}
                                {{ $prod->id_categoria }}
                            </td>
                            <td>{{ $prod->precio }}</td>
                            <td>{{ $prod->cantidad }}</td>
                            
                            @if(Session::has('auth'))
                                <td>
                                    <button type="button" class="btn btn-info btn-sm"  data-bs-toggle="modal" data-bs-target="#prod{{ $prod->id }}"><small>Ver</small></button>
                                    <div class="modal fade" id="prod{{ $prod->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detalles del producto</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="text-uppercase">{{ $prod->articulo }}</h5>
                                                    <p class="text-capitalize">
                                                        {{ $prod->descripcion }}<br>
                                                        Categoria: {{ $prod->id_categoria }}
                                                        {{-- $prod->categoria --}}<br>
                                                        Precio: ${{ $prod->precio }}<br>
                                                        Cantidad: {{ $prod->cantidad }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>   
                                    <a class="btn btn-warning btn-sm" href="{{ route('producto.edit', $prod) }}"><small>Editar</small></a>    
                                    <form method="post" action="{{ route('producto.destroy', $prod) }}" class="d-inline">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger btn-sm" type="submit">
                                            <small>Eliminar</small>
                                        </button>    
                                    </form>
                                </td>
                            @endif
                        </tr> 
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td class="text-center" colspan="5">
                            {{ $productos->links('pagination::bootstrap-4') }}
                        </td>                        
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection