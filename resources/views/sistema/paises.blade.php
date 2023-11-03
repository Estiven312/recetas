@extends('sistema/plantilla')

@section('contenido')
    <div class="container" id="recetas">




        <div class="row">
            <div class="col-12 titulo">
                <h2> Sistema administrativo de  paises</h2>

            </div>

            <div class="col-12">



                <div class="row">
                    <div class="col-3">
                        <div class="contenedor">
                            <a href="/sistema/pais/nuevo"> Nuevo pais <img src="{{ asset('/img/mas.png') }}" alt="nueva"></a>
                        </div>
                    </div>
                    <div class="col-9">

                        <div class="formulario">
                            <form action="" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="text">
                                <button class="" type="submit"><img
                                        src="{{ asset('/img/magnifying-glass-solid.svg') }}" alt=""
                                        width="25px"></button>
                            </form>
                        </div>
                    </div>

                    <div class="col-12">

                        @if (isset($alerta))
                            {{ $alerta }}
                        @endif
                    </div>
                    <div class="col-12 contenedor_tabla">
                        <table class="table">


                            <thead>

                                <tr>
                                    <th></th>
                                    <th>Pais</th>
                                   
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paises as $pais)
                                    <tr>

                                        <td><a href="/sistema/pais/nuevo/{{$pais['id']}}"><img src="{{ asset('/img/editar.png') }}" alt="editar"
                                                    width="25px"></a></td>

                                        <td>{{ htmlspecialchars_decode($pais['pais']) }}</td>


                                       

                                        <td><a href="/sistema/paises/{{ $pais['id'] }}">
                                                <img src="{{ asset('/img/borrar.png') }}" alt="editar" width="25px"></a>
                                            </a></td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

