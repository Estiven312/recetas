@extends('plantilla')




@section('content')

    <div class="container-fluid">


        <div class="row ba">

            <div class="col-md-7 col-sm-12 text-center contenedor-padre">
                <div class="contenedor">
                    <div class="fondo">

                    </div>

                    <div class="imagen">
                        <img src="{{ asset('/img/pizza.webp') }}" alt=" pizza" class="img-fluid" loading="lazy">
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-sm-12">

                <div class="contenedor-padre">
                    <div class="contenedor-descripcion">
                        <div class="descripcion">
                            <h3>Pizza Mediterránea</h3>
                            <p>Inspirada en los sabores de la región mediterránea, esta pizza presenta ingredientes
                                como
                                aceitunas, tomates, albahaca y aceite de oliva.</p>

                            <a href="" class="btn">Leer más</a>

                        </div>


                    </div>

                </div>




            </div>
            <div class="col-md-2  col-sm-12">
                <div class="contenedor-anuncio  ">
                    <div class="p-5  anuncion-1  ">
                        <h2 class="">Anuncio</h2>
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
                            <div class="col-md-4 col-sm-12 card p-3">
                                <a href="">
                                    <div class="row">
                                        <div class=" col-7 imagen-card">
                                            <img src="{{ asset('/img/pizza.webp') }}" alt=" pizza" class="img-fluid" loading="lazy">
                                            

                                        </div>
                                        <div class=" col-5 nombre-card">
                                            <small>Categoria</small>
                                            <h3>Mini descripción</h3>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12 card p-3">
                                <a href="">
                                    <div class="row">
                                        <div class=" col-7 imagen-card">
                                            <img src="https://www.allrecipes.com/thmb/Mex8wWBHeDIqHv6NqzadZ3Bq_2Q=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(947x747:949x749):format(webp)/8604735_ButternutSquashSoupII4x3-280ceb074dff4a73829a9c5df5514d50.jpg"
                                                alt=" pizza" class="img-fluid" loading="lazy">
                                           

                                        </div>
                                        <div class=" col-5 nombre-card">
                                            <small>Categoria</small>
                                            <h3>Mini descripción</h3>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12 card p-3">
                                <a href="">
                                    <div class="row">
                                        <div class=" col-7 imagen-card">
                                            <img src="https://www.allrecipes.com/thmb/YbzD-Wr2fl3sUJJKZlkM1jGFSsY=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(992x0:994x2):format(webp)/4557541-21604073f2774e89b532193821d6cd9c.jpg"
                                                alt=" pizza" class="img-fluid" loading="lazy">
                                           

                                        </div>
                                        <div class=" col-5 nombre-card">
                                            <small>Categoria</small>
                                            <h3>Mini descripción</h3>

                                        </div>

                                    </div>

                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12 card p-3">
                                <a href="">
                                    <div class="row">
                                        <div class=" col-7 imagen-card">
                                            <img src="https://www.allrecipes.com/thmb/AxPono3CZzZSEoKAPr1mtYR2duE=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(2261x1159:2263x1161):format(webp)/4568800_PumpkinTurkeyChili4x3-755f582c41154ef5b784c4b96eb698a9.jpg"
                                                alt=" pizza" class="img-fluid" loading="lazy">
                                           

                                        </div>
                                        <div class=" col-5 nombre-card">
                                            <small>Categoria</small>
                                            <h3>Mini descripción</h3>

                                        </div>

                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12 card p-3">
                                <a href="">
                                    <div class="row">
                                        <div class=" col-7 col-sm-7  imagen-card">
                                            <img src="https://www.allrecipes.com/thmb/qNzFHG6xwLRbQYOqjrW12MoAcWk=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(999x0:1001x2):format(webp)/4642945-peposa-dellimpruneta-tuscan-black-pepper-beef-Chef-John-1x1-1-d7fd8eead1674ab2948a51b4dd48116f.jpg"
                                                alt=" pizza" class="img-fluid" loading="lazy">
                                            
                                        </div>
                                        <div class="  col-5 col-sm-5  nombre-card">
                                            <small>Categoria</small>
                                            <h3>Mini descripción</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-12 card p-3">
                                <a href="">
                                    <div class="row">
                                        <div class=" col-7 imagen-card">
                                            <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                                alt=" pizza" class="img-fluid" loading="lazy">
                                           
                                        </div>
                                        <div class=" col-5 nombre-card">
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
            <div class="col-12 bg-beige text-center">
                <p>anuncio, todo el ancho de la pagina </p>
            </div>
        </div>
    </div>
    <div class="container-fluid  back_color  m-0">
        <div class="row">
            <div class="col-12 back_titulo">
                <h2>NUEVAS RECETAS</h2>
            </div>
            <div class="col-12 text-center back_icono">
                <img src="{{ asset('/img/chevron-double-down.svg') }}" alt="" width="180px">
            </div>
            <div class="col-12 contenedorCard  text-center">
                <div class=" cards ">
                    <div class="p-4 cont-recetas text-center">
                        <img src="{{ asset('/img/pizza.webp') }}" alt=" pizza"class="img-fluid" loading="lazy">
                        <div class="cont-recetas-menor">
                            <h2>Nombre</h2>
                            <p>Inspirada en los sabores de la región mediterránea, esta pizza presenta
                                ingredientes
                                como
                                aceitunas, tomates, albahaca y aceite de oliva.</p>
                            <a href="">Leer</a>
                        </div>
                    </div>
                </div>
                <div class=" cards ">
                    <div class="p-4 cont-recetas text-center">
                        <img src="https://www.allrecipes.com/thmb/AxPono3CZzZSEoKAPr1mtYR2duE=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(2261x1159:2263x1161):format(webp)/4568800_PumpkinTurkeyChili4x3-755f582c41154ef5b784c4b96eb698a9.jpg"
                            alt=" pizza" class="img-fluid">
                        <div class="cont-recetas-menor">
                            <h2>Nombre</h2>
                            <p>Inspirada en los sabores de la región mediterránea, esta pizza presenta
                                ingredientes
                                como
                                aceitunas, tomates, albahaca y aceite de oliva.</p>
                            <a href="">Leer</a>
                        </div>
                    </div>
                </div>
                <div class=" cards  ">
                    <div class="p-4 cont-recetas text-center">
                        <img src="https://www.allrecipes.com/thmb/qNzFHG6xwLRbQYOqjrW12MoAcWk=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(999x0:1001x2):format(webp)/4642945-peposa-dellimpruneta-tuscan-black-pepper-beef-Chef-John-1x1-1-d7fd8eead1674ab2948a51b4dd48116f.jpg"
                            alt=" pizza" class="img-fluid" loading="lazy">
                        <div class="cont-recetas-menor">
                            <h2>Nombre</h2>
                            <p>Inspirada en los sabores de la región mediterránea, esta pizza presenta
                                ingredientes
                                como
                                aceitunas, tomates, albahaca y aceite de oliva.</p>
                            <a href="">Leer</a>
                        </div>
                    </div>
                </div>
                <div class="  cards ">
                    <div class="p-4 cont-recetas text-center">
                        <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                            alt=" pizza" class="img-fluid">
                        <div class="cont-recetas-menor" loading="lazy">
                            <h2>Nombre</h2>
                            <p>Inspirada en los sabores de la región mediterránea, esta pizza presenta
                                ingredientes
                                como
                                aceitunas, tomates, albahaca y aceite de oliva.</p>
                            <a href="">Leer</a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
