<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ public_path ('style.css') }}" type="text/css">
    <title>Document</title>
</head>
<body>

<div id="page-wrap"> 
    <h2>Listado de Productos</h2>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Unidad de Medida</th>
                <th>Existencia</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody >
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->unidad}}</td>
                <td>{{number_format($producto->existencia,0)}}</td>
                <td>{{number_format($producto->precio,2)}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</body>
</html>