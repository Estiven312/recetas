@extends('plantilla')
@section('estilos')
    <link rel="stylesheet" href="css/estilosVistaRecetas.css">
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
                            <h2>Pizza Mediterranea</h2>
                            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem
                                Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un
                                impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de
                                textos y los mezcló de tal manera que logró hacer un libro de textos especimen.</p>
                        </div>


                    </div>

                    <div class="col-md-5  col-sm-12">

                        <img src="{{ asset('/img/pizza.webp') }}" alt=" pizza">


                    </div>
                </div>
            </div>

            <div class="col-12 p-0 m-0">


                <div class="contenedor_card  ">

                    <article class="card">
                        <img src="{{ asset('/img/pizza.webp') }}" alt=" pizza">

                    </article>
                    <article class="card">
                        <img src="{{ asset('/img/pizza.webp') }}" alt=" pizza">

                    </article>


                </div>

            </div>

            <div class="col-md-9 col-sm-12">

                <div class="row">






                    <div class="col-12 pt-5">
                        <div class="row">
                            <div class="col-md-8  info  ">

                                <div class="">
                                    <h2> Tiempo de Preparación:</h2>
                                    <p>1.5h</p>

                                </div>
                                <div>
                                    <h2>Rinde para:</h2>
                                    <p>4 Porciones cada porcion de 250gr </p>

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
                                        <li>
                                            Agua
                                        </li>
                                        <li>
                                            Sal
                                        </li>
                                        <li>
                                            Azúcar
                                        </li>
                                        <li>
                                            Harina
                                        </li>
                                        <li>
                                            Leche
                                        </li>
                                        <li>
                                            Huevos
                                        </li>

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
                                    <li>Precalentar el horno a 375 grados Fahrenheit.</li>
                                    <li>En una olla grande, cocinar la carne molida a fuego medio, revolviendo
                                        ocasionalmente,
                                        hasta
                                        que esté dorada.</li>
                                    <li>Agregar la cebolla y el ajo a la olla y cocinar, revolviendo ocasionalmente, durante
                                        5
                                        minutos más.</li>
                                    <li>Agregar los tomates enlatados, la salsa de tomate y 1/2 cucharadita de sal a la
                                        olla.
                                        Llevar
                                        a ebullición, luego bajar el fuego y dejar hervir a fuego lento durante 15 minutos.
                                    </li>
                                    <li>En un molde para hornear de 9x13 pulgadas, colocar una capa de láminas de lasagna.
                                    </li>
                                    <li>Verter la mitad de la salsa de carne sobre las láminas de lasagna.</li>
                                    <li>Cubrir con 1/2 taza de queso mozzarella rallado.</li>
                                    <li>Repetir las capas, terminando con una capa de láminas de lasagna.</li>
                                    <li>Cubrir con el queso parmesano rallado restante.</li>
                                    <li>Hornear durante 30 minutos, o hasta que la salsa esté burbujeante y el queso esté
                                        derretido
                                        y dorado.</li>
                                </ol>


                            </div>


                        </div>
                    </div>
                    <div class="col-12 ">
                        <div class="contenedor-iframe">
                            <iframe src="https://www.youtube.com/embed/DOJaGdGoTVo?si=hT9mqPs-9BQm0h1k"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen loading="lazy"></iframe>
                        </div>
                    </div>



                </div>
            </div>


            <div class="col-md-3 col-sm-12 contenedor_anuncio">

                <div class="anun">

                    <div class="color">

                    </div>
                </div>







            </div>



            <div class="col-12 contenedor_similares ">
                <div class="titulo">
                    <h2>RECETAS SIMILARES</h2>

                </div>


                <div class="row contenedor-2">

                    <div class="col-md-4 col-sm-12">
                        <div class="similares">
                            <a href="">
                                <div class="row  ">



                                    <div class="col-7">

                                        <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                            alt=" pizza" class="img-fluid" loading="lazy">

                                    </div>
                                    <div class="col-5">
                                        <small>Ensalada</small>

                                        <h3>Nombre</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="similares">
                            <a href="">
                                <div class="row  ">



                                    <div class="col-7">

                                        <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                            alt=" pizza" class="img-fluid" loading="lazy">

                                    </div>
                                    <div class="col-5">
                                        <small>Ensalada</small>

                                        <h3>Nombre</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="similares">
                            <a href="">
                                <div class="row  ">



                                    <div class="col-7">

                                        <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                            alt=" pizza" class="img-fluid" loading="lazy">

                                    </div>
                                    <div class="col-5">
                                        <small>Ensalada</small>

                                        <h3>Nombre</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="similares">
                            <a href="">
                                <div class="row  ">

                                    <div class="col-7">

                                        <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                            alt=" pizza" class="img-fluid" loading="lazy">

                                    </div>
                                    <div class="col-5">
                                        <small>Ensalada</small>

                                        <h3>Nombre</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="similares">
                            <a href="">
                                <div class="row  ">



                                    <div class="col-7">

                                        <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                            alt=" pizza" class="img-fluid" loading="lazy">

                                    </div>
                                    <div class="col-5">
                                        <small>Ensalada</small>

                                        <h3>Nombre</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="similares">
                            <a href="">
                                <div class="row  ">



                                    <div class="col-7">

                                        <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                            alt=" pizza" class="img-fluid" loading="lazy">

                                    </div>
                                    <div class="col-5">
                                        <small>Ensalada</small>

                                        <h3>Nombre</h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
