@extends('sistema/plantilla')

@section('contenido')
    <div class="container">

        <div class="row">

            <div class="col-12 p-5">
                <h2>RECETA DESTACADA</h2>
            </div>

            <div class="col-12 p-5 nombre_receta">
                @if (isset($destacada))
                    <h2>{{ $destacada['nombre'] }}</h2>
                @endif
            </div>

            <div class="col-6 imagen">

                @if (isset($destacada))
                    <img src="{{ asset('/files/' . $destacada['imagen']) }}" alt="{{ $destacada['nombre'] }}"><br>
                @endif


            </div>
            <div class="col-6 centrar">
                @if (isset($destacada))
                <div>
                    <p> visitas {{ $destacada['visitas'] }} </p>
                </div>
                <div>
                    <p> Creada {{ $destacada['fecha'] }} </p>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
