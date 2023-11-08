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
                           
                        </div>
                    </div>

                    <div class="col-12 p-3">

                        @if (isset($alerta))
                        <div class="alert alert-warning" role="alert">
                            {{ $alerta }}
                        </div>
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

