@extends('plantilla')

@section('estilos')
    <link rel="stylesheet" href="{{asset('css/vistaGuia.css')}}">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 espacio">

            </div>
            <div class="col-12  ">
                <div class="titulo">
                    <h3>{{$guia[0]['nombre']}}</h3>
                </div>

            </div>


            <div class="col-12 ">
                <div class="info">
                    <span>Guia de compra</span>

                    <span>|</span>
                   <!-- <span>
                        Estiven Carvajal
                    </span>
                    <span>|</span>-->
                    <span>{{$guia[0]['fecha']}}</span>
                </div>
                <div class="imagen">

                    <img src="{{ asset('storage/' . $guia['imagen']) }}" alt="{{$guia[0]['nombre']}}" loading="lazy">
                </div>

            </div>


            <div class="col-md-9 col-sm-12">
                <div class="articulo">
                    <?php print htmlspecialchars_decode( $guia[0]['guia']) ?>
                </div>




            </div>


            <div class="col-md-3 col-sm-12 contenedor">

                <div class="anuncio">
                    <?php if (isset($anuncio) and count($anuncio)>0): ?>
                            <script src="<?php echo asset($anuncio[0]['anuncio']); ?>"></script>
                            <?php endif; ?>
                </div>



            </div>

            <div class="col-12">
                <div class="similares">
                    <div class="row contenedor_guias">
                        <div class="col-12">
                            <h2>GUÍAS SIMILARES</h2>
                        </div>

                        @foreach($similares as $item)
                        <div class="col-md-3 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="/guia/{{$item['id']}}">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('storage/' . $item['imagen']) }}" alt="cuchillo" loading="lazy">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>{{$categor}}</span>
                                        <h3>{{$item['nombre']}}</h3>

                                    </div>
                                </a>
                            </div>
                        </div>


                        @endforeach


                        
                     




                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection
