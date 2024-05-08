<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Tecnica</title>
    <!-- Incluir estilos Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @if(isset($categoria))
                <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                @else
                <form action="{{ route('categorias.store') }}" method="POST">
                    @csrf
                @endif
                    <div class="form-group">
                        <label for="nombreCategoria">Nombre:</label>
                        <input type="text" class="form-control" name="nombreCategoria" id="nombreCategoria" value="{{ $categoria->nombreCategoria ?? '' }}" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea class="form-control" name="descripcion" id="descripcion" required>{{ $categoria->descripcion ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn btn-secondary" style="width: 100%; height: 50px;">
                                <a href="{{ route('categorias') }}" style="display: block; width: 100%; height: 100%;" class="text-white">Regresar</a>
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
