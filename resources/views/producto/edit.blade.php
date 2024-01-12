@extends('layouts.app')

@section('content')

<div class="container">
    <form method="post" action="{{url ('/producto/'.$producto->id )}}">
    @csrf
    {{ method_field('PATCH')}}
    @include('producto.form', ['modo'=>'Editar'])  
    </form>
</div>
@endsection