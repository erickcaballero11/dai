
@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
    <div class="card-header">
        <b>Detalle Venta {{ $venta->order}}</b>
    </div>
    <div class="card-body">
        <h5 class="card-title">Cliente: {{$venta->cliente->name}} {{ $venta->cliente->first_name}} {{ $venta->cliente->second_name}}  &emsp; &emsp;&emsp; &emsp;<b> Total:  {{number_format($venta->total,0)}}  </b></h5>
        <h5 class="card-title">  Vendedor: {{$venta->cliente->name}} {{ $venta->cliente->first_name}} {{ $venta->cliente->second_name}} &emsp; &emsp;&emsp; &emsp; Fecha Compra: {{date('d-m-y',strtotime($venta->order_date))}}
        &emsp; &emsp;&emsp; &emsp; Estatus Compra:   {{$venta->order_wrkflw}}      </h5>
        
    </div>
</div>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody >
            @foreach($venta->productos as $producto)
            <tr>
                <td>{{$producto->producto->name}}</td>
                <td>{{$producto->producto->description}}</td>
                <td>{{$producto->quantity}}</td>
                <td>{{number_format($producto->unit_value)}}</td>
                <td>{{number_format($producto->total,0)}}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
@endsection