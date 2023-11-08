@extends('plantilla')
@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
@endsection




@section('content')


    <div class="container-fluid">


        <div class="row ba">

            <div class="col-md-7 col-sm-12 text-center contenedor-padre">
                <div class="contenedor">
                    <div class="fondo">

                    </div>

                    <div class="imagen">
                        <img src="{{ asset('/files/' . $destacada['imagen']) }}" alt=" {{ $destacada['nombre'] }}" loading="lazy">
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-sm-12">

                <div class="contenedor-padre">
                    <div class="contenedor-descripcion">
                        <div class="descripcion">
                            <h3>{{ $destacada['nombre'] }}</h3>
                            <p>{{ $destacada['descripcion'] }}</p>

                            <a href="/receta/{{ $destacada['id'] }}" class="btn">Leer más</a>

                        </div>


                    </div>

                </div>




            </div>
            <div class="col-md-2  col-sm-12">
                <div class="contenedor-anuncio  ">
                    <div class="p-5  anuncion-1  ">
                        <?php if (isset($anuncio) and count($anuncio)>0): ?>
                        <script src="<?php echo asset($anuncio[0]['anuncio']); ?>"></script>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-12 set-card">
                <div class="text-center titulo-card">

                    <h3> RECETAS DESTACADAS </h3>
                </div>
                <div class="row ">
                    <div class="col-12">

                        <div class="row">

                            @foreach ($mas_destacadas as $key => $item)
                                <div class="col-md-4 col-sm-12 card p-3">
                                    <a href="/receta/{{ $item['id'] }}">
                                        <div class="row">
                                            <div class=" col-7 imagen-card">
                                                <img src="{{ asset('/files/' . $item['imagen']) }}"
                                                    alt=" {{ $item['nombre'] }}" loading="lazy">


                                            </div>
                                            <div class=" col-5 nombre-card">
                                                <small>{{ $item['categoria'] }}</small>
                                                <h3>{{ $item['nombre'] }}</h3>

                                            </div>

                                        </div>

                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 bg-beige text-center">
                <?php if (isset($anuncio) and count($anuncio)>0): ?>
                            <script src="<?php echo asset($anuncio[0]['anuncio']); ?>"></script>
                            <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid  back_color  m-0">
        <div class="row">
            <div class="col-12 back_titulo">
                <h2>NUEVAS RECETAS</h2>
            </div>
            <div class="col-12 text-center back_icono">
                <img src="{{ asset('/img/chevron-double-down.svg') }}" alt="" width="180px" loading="lazy">
            </div>
            <div class="col-12 contenedorCard  text-center">

                @foreach ($nuevas as $key => $item)
                    <div class=" cards ">
                        <div class="p-4 cont-recetas text-center">

                            <img src="{{ asset('/files/' . $item['imagen']) }}" alt=" {{ $item['nombre'] }} "
                                class="img-fluid" loading="lazy">
                            <div class="cont-recetas-menor">
                                <h2>{{ $item['nombre'] }}</h2>
                                <p>{{ $lista[$key] }}</p>
                                <a href="/receta/{{ $item['id'] }}">Leer</a>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </div>
@endsection
