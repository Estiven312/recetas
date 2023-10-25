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
                        <div class="col-md-6 col-sm-12 titulo">
                            <h1>GUIA DE COMPRA</h1>
                        </div>
                        <div class="col-md-6 col-sm-12 iconos">
                            <div class="contenedor">


                                <div class="contenedor_iconos" style=" background-color:#f7e5c7 ;">
                                    <a href=""> <img src="{{ asset('/img/cuchillo.png') }}" alt="cuchillo"></a>

                                </div>
                                <div class="contenedor_iconos">
                                    <a href=""><img src="{{ asset('/img/sarten.png') }}" alt="cuchillo"></a>

                                </div>
                                <div class="contenedor_iconos">
                                    <a href=""><img src="{{ asset('/img/electrodomestico.png') }}"
                                            alt="cuchillo"></a>

                                </div>
                            </div>

                        </div>
                    </div>





                </div>
            </div>
        </div>

        <div class="col-12 ">


            <div class="row">



                <div class="col-md-9 col-sm-12 contenedor_guias">
                    <div class="row">

                        <div class="col-md-4 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>Categoria</span>
                                        <h3>Nombre de la guia</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>Categoria</span>
                                        <h3>Nombre de la guia</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>Categoria</span>
                                        <h3>Nombre de la guia</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>Categoria</span>
                                        <h3>Nombre de la guia</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>Categoria</span>
                                        <h3>Nombre de la guia</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>Categoria</span>
                                        <h3>Nombre de la guia</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>Categoria</span>
                                        <h3>Nombre de la guia</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>Categoria</span>
                                        <h3>Nombre de la guia</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 contenedor_guia  col-sm-12">
                            <div class="guia">
                                <a href="">
                                    <div class="contenedor_img">
                                        <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo">

                                    </div>
                                    <div class="contenedor_descripcion">
                                        <span>Categoria</span>
                                        <h3>Nombre de la guia</h3>

                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-3 col-sm-12 contenedor-anuncio">

                  <div class="anuncio">

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
