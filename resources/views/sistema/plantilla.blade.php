<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>



    <link rel="stylesheet" href="../sistema/admin.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" rel="preload">




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
                            
                                <li><img src="{{ asset('/img/Receta.png') }}" alt="Receta"><a href="">RECETAS</a></li>
                       

                                <li><img src="{{ asset('/img/Postre.png') }}" alt="Postre"><a href="">POSTRES</a></li>
                            

                                <li> <img src="{{ asset('/img/Bebida.png') }}" alt="Bebida"><a href="">BEBIDAS</a></li>
                         

                                <li><img src="{{ asset('/img/Ensalada.png') }}" alt="ensalada"><a href="">ENSALADAS</a></li>
                          
                                <li><img src="{{ asset('/img/Guia.png') }}" alt="guia"><a href="">GUIAS</a></li>
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
                                    <button>Cerrar sessión</button>


                                </div>
                            </div>

                        </div>

                       
                        
                    </div>
                </div>


            </div>

            <div class="col-9">
                @yield('contenido')

            </div>
        </div>
    </main>





</body>
<script src="../bootstrap/js/bootstrap.bundle.min.js" lazy></script>

</html>
