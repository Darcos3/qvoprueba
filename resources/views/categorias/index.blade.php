@extends('layouts.app')
@extends('layouts.nav')

@section('gestion')
    <div class="container py-5">
        <div class="row">
            <div class="col-md-10">
                <h3>Categorias</h3>
                <h6>Gestión de categorías</h6>
            </div>
            <div class="col-md-2 text-right">
                <a class="btn btn-primary btn-sm text-capitalize" href="{{ route('categoria.create') }}">nueva categoría</a>
            </div>
            <hr>
        </div>
        <div class="table-responsive">
            @if(Session::has('msg'))
                <div class="alert alert-info my-5 text-capitalize">
                    {{ Session::get('msg') }}
                </div>
            @endif
            <table class="table table-hover table-bordered table-sm text-normal">
                <thead>
                    <tr>
                        <th>No</th>
                        {{-- <th>Cod</th> --}}
                        <th>categoria</th>
                        <th>descripcion</th>
                        @if(Session::has('auth'))
                            <th>opciones</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach( $categorias as $cat)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            {{-- <td>{{ $cat->id }}</td> --}}
                            <td class="text-capitalize">{{ $cat->categoria }}</td>
                            <td class="text-capitalize">{{ $cat->descripcion }}</td>
                            @if(Session::has('auth'))
                                <td>
                                    <button type="button" class="btn btn-info btn-sm"  data-bs-toggle="modal" data-bs-target="#cat{{ $cat->id }}"><small>Ver</small></button>
                                    
                                    <div class="modal fade" id="cat{{ $cat->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detalles de la categoría</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5 class="text-uppercase">{{ $cat->categoria }}</h5>
                                                    <p class="text-capitalize">
                                                        {{ $cat->descripcion }}<br>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                    <a class="btn btn-warning btn-sm" href="{{ route('categoria.edit', $cat) }}"><small>Editar</small></a>    
                                    <form method="post" action="{{ route('categoria.destroy', $cat) }}" class="d-inline">
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
                            {{ $categorias->links('pagination::bootstrap-4') }}
                        </td>                        
                    </tr>
                </tfoot>
            </table>

            
        </div>
    </div>
@endsection