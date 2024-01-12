
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
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>RFC</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody >
            @foreach($clientes as $cliente)
            <tr>
                <td>{{$cliente->name}}</td>
                <td>{{$cliente->first_name}}</td>
                <td>{{$cliente->second_name}}</td>
                <td>{{$cliente->rfc}}</td>
                <td>{{$cliente->phone}}</td>
                <td>{{$cliente->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!!$clientes->links()!!}
</div>
@endsection