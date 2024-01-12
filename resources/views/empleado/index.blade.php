
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
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Número de empleado</th>
            </tr>
        </thead>
        <tbody >
            @foreach($empleados as $empleado)
            <tr>
                <td>{{$empleado->name}}</td>
                <td>{{$empleado->first_name}}</td>
                <td>{{$empleado->second_name}}</td>
                <td>{{$empleado->employee_num}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!!$empleados->links()!!}
</div>
@endsection