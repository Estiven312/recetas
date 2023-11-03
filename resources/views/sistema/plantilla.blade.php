<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABORCULINARIO</title>
    <link rel="shortcut icon" href="/img/EmojioneTaco.png" type="image/x-icon">

    <link rel="stylesheet" href=" {{ asset('/sistema/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}" rel="preload">
   
    




</head>

<body>

    <main class="container-fluid">
        <div class="row">
            <div class="col-2 barra">
                <div class="row">
                    <div class="col-12 icono">
                        <h1>SABORCULINARIO</h1>
                    </div>

                    <div class="col-12">

                        <div class="contenedor_links">

                            <ul>
                                <li> <img src="{{ asset('/img/Home.png') }}" alt="home"><a href="">HOME</a></li>

                                <li><img src="{{ asset('/img/categoria.png') }}" alt="categorias"><a href="/sistema/categorias">CATEGORIAS</a></li>
                            

                                <li> <img src="{{ asset('/img/bandera.png') }}" alt="pasies"><a href="/sistema/paises">PAISES</a></li>
                         
                            
                                <li><img src="{{ asset('/img/Receta.png') }}" alt="Receta"><a href="recetas">RECETAS</a></li>
                       

                            
                                <li><img src="{{ asset('/img/Guia.png') }}" alt="guia"><a href="/sistema/categoria/guia"> CATEGORIA GUIAS</a></li>


                                <li><img src="{{ asset('/img/Guia.png') }}" alt="guia"><a href="/sistema/guias">GUIAS</a></li>
                            </ul>
                        </div>

                        <div class="perfil">
                            <div class="row">
                                <div class="col-2">    <img src="{{ asset('/img/knives.webp') }}" alt="cuchillo"></div>
                                <div class="col-10 nombres">
                                    <h2>Estiven Carvajal</h2>
                                   
                                </div>

                                <div class="col-12 p-3 exit">
                                   
                                    <img src="{{ asset('/img/exit.png') }}" alt="exit">
                                    
                                    <a href="/sistema/logout">Cerrar sessión</a>


                                </div>
                            </div>

                        </div>

                       
                        
                    </div>
                </div>


            </div>

            <div class=" col-12 " id="contenido">
                @yield('contenido')

            </div>
        </div>
    </main>





</body>


<script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}" lazy></script>



</html>
