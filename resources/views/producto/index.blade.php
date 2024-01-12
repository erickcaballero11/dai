
@extends('layouts.app')

@section('content')

<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">        
        {{Session::get('mensaje')}}        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    
    <a href=" {{ url('producto/create')}}" class= "btn btn-success"> Registrar nuevo producto </a> 
    
    <a href="{{ url('/descargar-arreglo') }}" class="btn btn-primary">Descargar listado en JSON</a>
    
    <a href=" {{ url('producto/pdf')}}" class= "btn btn-success"> Exportar PDF </a> 
    <br><br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Unidad de Medida</th>
                <th>Existencia</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody >
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->name}}</td>
                <td>{{$producto->description}}</td>
                <td>{{$producto->unit}}</td>
                <td>{{number_format($producto->stock,0)}}</td>
                <td>{{number_format($producto->price,2)}}</td>
                <td> <a href=" {{ url ('/producto/'.$producto->id.'/edit') }} " class="btn btn-warning" > Editar </a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!!$productos->links()!!}
</div>
@endsection