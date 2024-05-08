<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($producto) ? 'Editar Producto' : 'Crear Producto' }}</title>
    <!-- Incluir estilos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if(isset($producto))
                <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                    @method('PUT')
                @else
                <form action="{{ route('productos.store') }}" method="POST">
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="nombreProducto">Nombre:</label>
                        <input type="text" class="form-control" name="nombreProducto" id="nombreProducto" value="{{ $producto->nombreProducto ?? '' }}" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" name="precio" id="precio" step="0.01" value="{{ $producto->precio ?? '' }}" required>
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock:</label>
                        <input type="number" class="form-control" name="stock" id="stock" value="{{ $producto->stock ?? '' }}" required>
                    </div>
                    <div class="form-group">
                        <label for="categoria_id">Categoría:</label>
                        <select class="form-control" name="categoria_id" id="categoria_id" required>
                            @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}" {{ isset($producto) && $producto->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombreCategoria }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ isset($producto) ? 'Actualizar' : 'Guardar' }}</button>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn btn-secondary" style="width: 100%; height: 50px;">
                                <a href="{{ route('productos') }}" style="display: block; width: 100%; height: 100%;" class="text-white">Regresar</a>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Incluir scripts de Bootstrap (jQuery y Popper.js) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
