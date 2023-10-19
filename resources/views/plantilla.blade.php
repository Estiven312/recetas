<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <meta name="description"
        content="Recetas fáciles y deliciosas para todos los gustos. Encuentra las recetas que buscas, paso a paso y con fotos.">
    
    <link  rel="stylesheet" href="css/estilos.css" as="style" >
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" rel="preload">




</head>

<body>

    <header class="container-fluid">
        <nav class="navbar navbar-expand-md  fixed-top ">
            <div class="container-fluid">

                <a class="navbar-brand" href="#">SABORCULINARIO</a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> <img src="{{ asset('/img/justify.svg') }}" alt=""
                            width="30px"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">



                        <li class="nav-item p-2   ">
                            <div class="dropdown  ">
                                <button class="  dropdown-toggle  " type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Recetas
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Colombianas</a></li>
                                    <li><a class="dropdown-item" href="#">Venezolana</a></li>

                                </ul>
                            </div>
                        </li>
                        <li class="nav-item p-2">
                            <div class="dropdown ">
                                <button class="  dropdown-toggle " type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Postres
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Helados</a></li>
                                    <li><a class="dropdown-item" href="#">Pasteles</a></li>
                                    <li><a class="dropdown-item" href="#">Galletas</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item p-2 ">
                            <div class="dropdown  ">
                                <button class="  dropdown-toggle " type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Bebidas
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Smoothies</a></li>
                                    <li><a class="dropdown-item" href="#">Frappe</a></li>
                                    <li><a class="dropdown-item" href="#">Cocteles</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item p-2 ">
                            <div class="dropdown ">
                                <button class="  dropdown-toggle " type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Ensaldas
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Dulce</a></li>
                                    <li><a class="dropdown-item" href="#">Saluadable</a></li>

                                </ul>
                            </div>
                        </li>




                        <li class="nav-item p-2 ">
                            <div class="dropdown ">
                                <button class="  dropdown-toggle " type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Qué comprar
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Cuchillos</a></li>
                                    <li><a class="dropdown-item" href="#">Sartenes</a></li>
                                    <li><a class="dropdown-item" href="#">Eletrodomesticos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item px-2  ">
                            <a class="nav-link text-black" href="#">Recetas faciles</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="" type="submit"><img
                                src="{{ asset('/img/magnifying-glass-solid.svg') }}" alt=""
                                width="25px"></button>
                    </form>

                </div>
            </div>
        </nav>


    </header>
    <main>

        @yield('content')



    </main>
    <footer class="container-fluid">

        <div class="row">
            <div class="col-md-4 col-sm-12 text-center">

                <h2>
                    <a class="navbar-brand" href="#">SABORCULINARIO</a>
                    
                </h2>
                <h1>Recetas para todos los gustos</h1>



            </div>
            <div class="col-md-4 col-sm-12 text-left">
                <ul>
                    <li><a href="">Recetas</a></li>
                    <li><a href="">Qué comprar</a></li>
                    <li><a href="">Recetas Faciles</a></li>
                  
                   
                </ul>


            </div>
            <div class="col-md-4 col-sm-12 text-left">
                <ul>
                    <li><a href="">Términos y condiciones</a></li>
                </ul>
            </div>
    </footer>
    <script src="bootstrap/js/bootstrap.bundle.min.js" lazy></script>
</body>

</html>
