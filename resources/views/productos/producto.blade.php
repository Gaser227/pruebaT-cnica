<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Lista de Productos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar Producto</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre Producto</th>
                            <th>Precio</th>
                            <th>Stock</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <td>{{ $producto->nombreProducto }}</td>
                                <td>{{ $producto->precio }}</td>
                                <td>{{ $producto->stock }}</td>
                                <td>{{ $producto->categoria->nombreCategoria }}</td>
                                <td>
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
                                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-secondary" style="width: 20%; height: 50px;">
                    <a href="{{ route('index') }}" style="display: block; width: 100%; height: 100%;" class="w3-col s4 w3-btn text-white">Regresar</a>
                </button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>