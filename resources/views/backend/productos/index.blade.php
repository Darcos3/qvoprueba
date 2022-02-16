<div class="table-responsive">
    <table class="table table-sm table-hover table-bordered">
        <thead class="thead-info">
            <tr>
                <th>Id</th>
                <th>Articulo</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $art)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $art->articulo }}</td>
                    <td>{{ $art->categoria_id }}</td>
                    <td>{{ $art->precio }}</td>
                    <td>
                        <button class="btn btn-link text-danger"></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 
</div>