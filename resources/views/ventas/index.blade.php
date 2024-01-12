
@extends('layouts.app')

@section('content')

<div class="container">
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">        
        {{Session::get('mensaje')}}        
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Vendedor</th>
                <th>Cliente</th>
                <th>Pedido</th>
                <th>Fecha Pedido</th>
                <th>Total</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody >
            @foreach($ventas as $venta)
            <tr>
                <td>{{$venta->vendedor->name}} {{ $venta->vendedor->first_name}} {{ $venta->vendedor->second_name}}</td>
                <td>{{$venta->cliente->name}} {{ $venta->cliente->first_name}} {{ $venta->cliente->second_name}}</td>
                <td>{{$venta->order}}</td>
                <td>{{$venta->order_date}}</td>
                <td>{{$venta->total}}</td>
                <td>{{$venta->order_wrkflw}}</td>
                <td> <a href=" {{ url ('/ventas/'.$venta->id.'/edit') }} " class="btn btn-warning" > Ver Detalle </a> </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!!$ventas->links()!!}
</div>
@endsection