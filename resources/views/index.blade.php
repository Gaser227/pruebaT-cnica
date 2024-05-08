<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba Tecnica</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="w3-half mt-5 text-center">
        <h1 class="w3-text-dark" style="font-size: 30px;">Bienvenido a la página principal</h1>
    </div>
    
    <div class="w3-col s12 mt-5" style="width: 100%; height:45%; display: flex; justify-content: space-around;">
        <div id="MenuCategorias" class="w3-col s4 w3-btn" style="width: 20%; height:20%; background:white; margin:auto; margin-left:auto;opacity: 0.7; border-radius:15px;">
            <a href="{{ route('categorias') }}" >
                <img src="{{ asset('img/categoria.png') }}" class="img-fluid w-50" style="margin:px">
                <div class="w3-bar-item">
                    <p>Menú de Categorías</p>
                </div>
            </a>
        </div>
        <div id="MenuProductos" class="w3-col s4 w3-btn" style="width: 20%; height:20%; background:white; margin:auto; margin-left:15px;opacity: 0.7; border-radius:15px;">
            <a href="{{ route('productos') }}" >
                <img src="img/producto.png" class="img-fluid w-50" style="margin:px">
                <div class="w3-bar-item">
                    <p>Menú de Productos</p>
                </div>
            </a>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>