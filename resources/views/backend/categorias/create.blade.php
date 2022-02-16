    <div class="container mt-5">
        <div class="col-md-6">
            {{-- <form action="{{ route('/categorias/create') }}" method="post"> --}}
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Categoria</label>
                    <input type="text" class="form-control" name="categoria" id="categoria" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                    <label for="">Descripción</label>
                    <input type="text" class="form-control" name="descripcion" id="descripcion" aria-describedby="helpId" placeholder="">
                </div>
                <button type="submit" class="btn btn-block btn-success">Guardar Categoría</button>
            </form>
        </div>
    </div>