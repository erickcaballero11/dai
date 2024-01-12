@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Inicio') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    El presente proyecto responde al siguiente escenario:
                    <br>
                    Se desea generar un recibo de compra para los clientes en una tienda. Los clientes pueden comprar cualquiera de 5 productos en cualquier cantidad.
                    <br>
                    a)	Presente un modelo de clases para una posible base de datos (en donde se incluya lo necesario de acuerdo a la especificación previa), incluya en el modelo la cardinalidad de las relaciones (proponga de tres a cuatro atributos por tabla).
                    <br>
                    b)	Suponga que la base de datos se crea de acuerdo con su especificación (no es necesario crear la base de datos). Presente un código en PHP que permita recuperar la lista de productos de la base de datos y coloque la información en una estructura de datos (la que usted desee).
                    <br>
                    c)	Genere una vista que presente la lista de productos.
                    <br>
                    d)	Genere código en PHP (controlador) para guardar la lista de productos en un archivo JSON para poderse exportar.
                    <br>
                    e)	Genere código PHP (controlador) para producir un archivo PDF que contenga la lista de productos.
                    <br>
                    f)	Suponga que el cliente ya hizo su compra (de uno o varios productos), genere una vista que presenta una relación de lo que compro.

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
