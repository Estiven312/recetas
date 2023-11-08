@extends('sistema/plantilla')

@section('contenido')
    <div class="container" id="recetas">




        <div class="row">
            <div class="col-12 titulo">
                <h2> Sistema administrativo de anuncios</h2>

            </div>

            <div class="col-12">



                <div class="row">
                    <div class="col-3">
                        <div class="contenedor">
                            <a href="/sistema/anuncio/nuevo"> Nuevo anuncio <img src="{{ asset('/img/mas.png') }}" alt="nueva"></a>
                        </div>
                    </div>
                    <div class="col-9">

                        <div class="formulario">
                            
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
                                    <th>NOMBRE</th>
                                    <th>ANUNCIO</th>
                                    <th>PAGINA</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($anuncios as $anuncio)
                                    <tr>

                                        <td><a href="/sistema/anuncio/nuevo/{{$anuncio['id']}}"><img src="{{ asset('/img/editar.png') }}" alt="editar"
                                                    width="25px"></a></td>

                                        <td>{{ htmlspecialchars_decode($anuncio['anuncio']) }}</td>
                                       


                                        <td>{{ htmlspecialchars_decode($anuncio['pagina'] )}}</td>

                                        <td><a href="/sistema/anuncio/delete/{{ $anuncio['id'] }}">
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

