@extends('plantilla')

@section('estilos')
    <link rel="stylesheet" href="css/estilos.css" as="style">
@endsection

@section('content')
    <div class="container-fluid" id="recetas">
        <div class="row">
            <div class="col-12 filtro text-center  pb-5">
                <h1>Encuentra la receta perfecta para tu paladar</h1>

                <div class=" row">
                    <div class="col-12">
                        <div>
                            <div class="row">
                                <div class="col-12">

                                    <select name="pais" id="pais" class="text-center">
                                        <optgroup label="Pais de origen">
                                            <option value="" selected>Pais de origen</option>
                                            <option value="venezolanas">Venezolanas</option>
                                            <option value="colombianas">Colombianas</option>
                                        </optgroup>
                                    </select>

                                    <select name="lstRecetas " class="text-center" direction="down">
                                        <option value="" selected false>Recetas</option>
                                        <optgroup label="Postres">
                                            <option value="helados">Helados</option>
                                            <option value="galletas">Galletas</option>
                                            <option value="pasteles">Pasteles</option>
                                        </optgroup>
                                        <optgroup label="Bebidas">
                                            <option value="smoothies">Smoothies</option>
                                            <option value="frappe">Frappe</option>
                                            <option value="cocteles">Cocteles</option>
                                        </optgroup>
                                        <optgroup label="Ensaladas">
                                            <option value="dulce">Dulce</option>
                                            <option value="saludable">Saludable</option>
                                        </optgroup>

                                    </select>
                                </div>
                                <div class="col-12 spacio-but">
                                    <button>Buscar</button>
                                </div>
                            </div>

                        </div>

                    </div>




                </div>

            </div>

            <div class="col-12">
                <div class="row">

                    <div class="col-12 text-center">
                        <p>anuncio</p>
                    </div>
                    <div class="col-12 set-card  ">

                        <div class="row ">
                            <div class="col-md-9 col-sm-12">
                                <div class="row ">
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card col-md-12 ">
                                                    <img src="{{ asset('/img/pizza.webp') }}" alt=" pizza"
                                                        class="img-fluid">
                                                </div>
                                                <div class="nombre-card ">
                                                    <small>Categoria</small>
                                                    <h3>Nombre</h3>

                                                </div>

                                            </div>

                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/Mex8wWBHeDIqHv6NqzadZ3Bq_2Q=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(947x747:949x749):format(webp)/8604735_ButternutSquashSoupII4x3-280ceb074dff4a73829a9c5df5514d50.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">


                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Nombre</h3>

                                                </div>

                                            </div>

                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/YbzD-Wr2fl3sUJJKZlkM1jGFSsY=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(992x0:994x2):format(webp)/4557541-21604073f2774e89b532193821d6cd9c.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Nombre</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/AxPono3CZzZSEoKAPr1mtYR2duE=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(2261x1159:2263x1161):format(webp)/4568800_PumpkinTurkeyChili4x3-755f582c41154ef5b784c4b96eb698a9.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Mini descripción</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/qNzFHG6xwLRbQYOqjrW12MoAcWk=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(999x0:1001x2):format(webp)/4642945-peposa-dellimpruneta-tuscan-black-pepper-beef-Chef-John-1x1-1-d7fd8eead1674ab2948a51b4dd48116f.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Mini descripción</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Mini descripción</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Mini descripción</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Mini descripción</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Mini descripción</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Mini descripción</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Mini descripción</h3>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-12 card p-3">
                                        <a href="">
                                            <div class="row">
                                                <div class="imagen-card">
                                                    <img src="https://www.allrecipes.com/thmb/H8ggg7V9AfxXv4hx9iHsllMGjaw=/364x242/filters:no_upscale():max_bytes(150000):strip_icc():focal(1023x0:1025x2):format(webp)/8120851-2a5e454168814051b5558c9cee7e4a60.jpg"
                                                        alt=" pizza" class="img-fluid" loading="lazy">
                                                </div>
                                                <div class="nombre-card">
                                                    <small>Categoria</small>
                                                    <h3>Mini descripción</h3>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-12   contenedor_anuncio p-1 ">
                                <div class="anuncio_for">

                                </div>
                                

                            </div>

                        </div>
                        <div class="col-12 text-center">
                            <div class="spacio-but">


                                <button>Mostrar más</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>



    </div>
@endsection
