<div class="table-responsive">
    <table class="table table-sm table-hover table-bordered">
        <thead class="thead-info">
            <tr>
                <th>Id</th>
                <th>Categoria</th>
                <th>Descripción</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $cat)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $cat->categoria }}</td>
                    <td>{{ $cat->descripcion }}</td>
                    <td>
                    
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
</div>