@extends('plantilla')
@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/estilosVistaRecetas.css') }} ">
@endsection

@section('content')
    <div class="container-fluid " id="vistaReceta">



        <div class="row">
            <div class="col-12 espacio   text-center">

            </div>

            <div class="col-12 principal p-1">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="contenedor">
                            <h2>{{ $receta[0]['nombre'] }}</h2>
                            <p>{{ $receta[0]['descripcion'] }}</p>
                        </div>





                    </div>

                    <div class="col-md-5  col-sm-12">

                        <img src="{{ asset('storage/' . $receta[0]['imagen']) }}" alt=" pizza" loading="lazy">


                    </div>
                </div>
            </div>

            <div class="col-12 p-0 m-0">


                <div class="contenedor_card  ">
                    @foreach ($adicionales as $item)
                        <article class="card">
                            <img src="{{ asset('storage/' . $item['nombre']) }}" alt=" pizza" loading="lazy">

                        </article>
                    @endforeach
                </div>

            </div>

            <div class="col-md-9 col-sm-12">

                <div class="row">






                    <div class="col-12 pt-5">
                        <div class="row">
                            <div class="col-md-8  info  ">


                                <div class="">
                                    <h2> Tiempo de Preparación:</h2>
                                    <p>{{ $receta[0]['tiempo'] }}</p>

                                </div>
                                <div>
                                    <h2>Rinde para:</h2>
                                    <p>{{ $receta[0]['rinde'] }}</p>

                                </div>




                            </div>

                        </div>
                    </div>

                    <div class="col-12 contenedor_ingredientes">
                        <div class="row">



                            <div class="col-md-12 col-sm-12 lst_ingredientes">
                                <h2>INGREDIENTES</h2>
                                <div>
                                    <ul>
                                        <?php print $ingredientes; ?>


                                    </ul>
                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="col-12 contenedor_intrucciones">





                        <div class="row">

                            <div class="col-md-12 col-sm-12 intrucciones">
                                <h2>INSTRUCCIONES</h2>

                                <ol>
                                    <?php print $instrucciones; ?>
                                </ol>


                            </div>


                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="contenedor-iframe">
                            <iframe src="{{ $receta[0]['video'] }}" title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>



                </div>
            </div>


            <div class="col-md-3 col-sm-12 contenedor_anuncio">

                <div class="anun">

                    <div class="color">
                        <?php if (isset($anuncio) and count($anuncio)>0): ?>
                        <script src="<?php echo asset($anuncio[0]['anuncio']); ?>"></script>
                        <?php endif; ?>
 


                    </div>
                </div>







            </div>



            <div class="col-12 contenedor_similares ">
                <div class="titulo">
                    <h2>RECETAS SIMILARES</h2>

                </div>


                <div class="row contenedor-2">

                    @foreach ($similares as $item)
                        <div class="col-md-4 col-sm-12">
                            <div class="similares">
                                <a href="/receta/{{ $item['id'] }}">
                                    <div class="row  ">



                                        <div class="col-6">

                                            <img src="{{ asset('storage/' . $item['imagen']) }}" alt=" pizza"
                                                class="img-fluid" loading="lazy">

                                        </div>
                                        <div class="col-6 p-4">
                                            <small>{{ $item['categoria'] }}</small>

                                            <h3>{{ $item['nombre'] }}</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </div>
    </div>
@endsection
