@extends('plantilla')

@section('estilos')
    <link rel="stylesheet" href="css/compras.css" as="style">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-12 primera_seccion">
                <div class="row">
                    <div class="col-12 espacio">

                    </div>

                    <div class="col-12">

                        <div class="row">
                            <div class="col-md-12 col-sm-12 titulo">
                                <div class="contenedor_borde">
                                    <h1>GUÍAS DE COMPRA</h1>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 iconos">
                                <div class="contenedor ">


                                    <div class="contenedor_iconos " style=" ">
                                        <a href="guias?categoria=Loza">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="{{ asset('/img/plato.png') }}" alt="cuchillo" loading="lazy">

                                                </div>
                                                <div class="col-12">
                                                    <p>Loza</p>

                                                </div>
                                            </div>
                                        </a>



                                    </div>
                                    <div class="contenedor_iconos ">

                                        <a href="guias?categoria=Cuchillos">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="{{ asset('/img/cuchillo.png') }}" alt="cuchillo"
                                                        loading="lazy">

                                                </div>
                                                <div class="col-12">
                                                    <p>Cuchillos</p>

                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                    <div class="contenedor_iconos">
                                        <a href="guias?categoria=Sartenes">

                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="{{ asset('/img/sarten.png') }}" alt="cuchillo" loading="lazy">

                                                </div>
                                                <div class="col-12">
                                                    <p>Sartenes</p>

                                                </div>
                                            </div>

                                        </a>
                                    </div>
                                    <div class="contenedor_iconos ">

                                        <a href="guias?categoria=Electrodomesticos">
                                            <div class="row">
                                                <div class="col-12">
                                                    <img src="{{ asset('/img/electrodomestico.png') }}" alt="cuchillo"
                                                        loading="lazy">

                                                </div>
                                                <div class="col-12">
                                                    <p>Electrodomesticos</p>


                                                </div>
                                            </div>

                                        </a>
                                    </div>

                                </div>

                            </div>
                        </div>





                    </div>
                </div>
            </div>

            <div class="col-12 ">


                <div class="row">


                    @if (count($guias) > 0)
                        <div class="col-md-9 col-sm-12 contenedor_guias">
                            <div class="row">

                                @foreach ($guias as $guia)
                                    <div class="col-md-3 contenedor_guia  col-sm-12">
                                        <div class="guia">
                                            <a href="/guia/{{ $guia['id'] }}">
                                                <div class="contenedor_img">
                                                    <img src="{{ asset('/files/' . $guia['imagen']) }}" alt="cuchillo"
                                                        loading="lazy">

                                                </div>
                                                <div class="contenedor_descripcion">
                                                    <span>{{ $nombre }}</span>
                                                    <h3>{{ $guia['nombre'] }}</h3>

                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-12 contenedor-anuncio">

                            <div class="anuncio">
                                <?php if (isset($anuncio) and count($anuncio)>0): ?>
                                <script src="<?php echo asset($anuncio[0]['anuncio']); ?>"></script>
                                <?php endif; ?>

                            </div>
                        </div>

                        <div class="col-12 text-center">
                            @if (isset($guias) and count($guias) == 15)
                                <div class="spacio-but">
                                    <form action="" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <input type="hidden" name="numero"
                                            value="@if (isset($numero)) {{ $numero }} @else {{ 1 }} @endif">



                                        <button type="submit">MÁS GUIAS</button>
                                    </form>
                                </div>
                            @endif
                        </div>
                </div>
            @endif
            </div>
        </div>
    </div>
@endsection
