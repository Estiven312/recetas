@extends('sistema/plantilla')

@section('contenido')
    <div class="container" id="recetas">




        <div class="row">
            <div class="col-12 titulo">
                <h2> Sistema administrativo de categorias</h2>

            </div>

            <div class="col-12">



                <div class="row">
                    <div class="col-3">
                        <div class="contenedor">
                            <a href="/sistema/categoria/nueva"> Nueva Categoria <img src="{{ asset('/img/mas.png') }}" alt="nueva"></a>
                        </div>
                    </div>
                    <div class="col-9">

                        
                    </div>

                    <div class="col-12 p-5">
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
                                    <th>NOMBRE</th>
                                   
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $categoria)
                                    <tr>

                                        <td><a href="/sistema/categorias/nueva/{{$categoria['id']}}"><img src="{{ asset('/img/editar.png') }}" alt="editar"
                                                    width="25px"></a></td>

                                        <td>{{ htmlspecialchars_decode($categoria['nombre']) }}</td>


                                       

                                        <td><a href="/sistema/categorias/{{ $categoria['id'] }}">
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

