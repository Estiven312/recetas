<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SABORCULINARIO</title>
    
    <meta name="description"
        content="Recetas fáciles y deliciosas para todos los gustos. Encuentra las recetas que buscas, paso a paso y con fotos.">

        <link rel="shortcut icon" href="{{asset('img/EmojioneTaco.png')}}" type="image/x-icon">
        
    @yield('estilos')

    
   
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}" rel="preload">




</head>

<body>

    <header class="container-fluid">
        <nav class="navbar navbar-expand-md  fixed-top ">
            <div class="container-fluid">

                <a class="navbar-brand" href="/">SABORCULINARIO</a>


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
                                    <li><a class="dropdown-item" href="/recetas?pais=Colombianas">Colombianas</a></li>
                                    <li><a class="dropdown-item" href="/recetas?pais=Venezolanas">Venezolanas</a></li>

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
                                    <li><a class="dropdown-item" href="/recetas?pagina=Helados">Helados</a></li>
                                    <li><a class="dropdown-item" href="/recetas?pagina=Pasteles">Pasteles</a></li>
                                    <li><a class="dropdown-item" href="/recetas?pagina=Galletas">Galletas</a></li>
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
                                    <li><a class="dropdown-item" href="/recetas?pagina=Smoothies">Smoothies</a></li>
                                    <li><a class="dropdown-item" href="/recetas?pagina=Frappe">Frappe</a></li>
                                    <li><a class="dropdown-item" href="/recetas?pagina=Cocteles">Cocteles</a></li>
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
                                    <li><a class="dropdown-item" href="/recetas?pagina=Dulce">Dulce</a></li>
                                    <li><a class="dropdown-item" href="/recetas?pagina=Saludable">Saludable</a></li>

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
                                    <li><a class="dropdown-item" href="guias?categoria=Cuchillos">Cuchillos</a></li>
                                    <li><a class="dropdown-item" href="guias?categoria=Sartenes">Sartenes</a></li>
                                    <li><a class="dropdown-item" href="guias?categoria=Electrodomesticos">Eletrodomesticos</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item px-2  ">
                            <a class="nav-link text-black" href="/recetas?pagina=Faciles">Recetas faciles</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="" type="submit"><img src="{{ asset('/img/magnifying-glass-solid.svg') }}"
                                alt="" width="25px"></button>
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
                    <a class="navbar-brand" href="/">SABORCULINARIO</a>

                </h2>
               



            </div>
            <div class="col-md-4 col-sm-12 text-left">
                <div class="row">

              <div class="col-md-4 col-sm-6" >
                <ul>
                    <li><a href="/recetas?pagina=Faciles">Recetas Faciles</a></li>
                    

                   


                </ul>
                <ul>
                    <li><a href="recetas?pagina=Helados">Helados</a></li>
                    <li><a href="recetas?pagina=Pasteles">Pasteles</a></li>
                    <li><a href="/recetas?pagina=Galletas">Galletas</a></li>
                 


                </ul>
              </div>
               <div class="col-md-4 col-sm-6">
              
                <ul>
                    <li><a href="/recetas?pagina=Smoothies">Smoothies</a></li>
                    <li><a href="/recetas?pagina=Frappe">Frappe</a></li>
                    <li><a href="/recetas?pagina=Cocteles">Cocteles</a></li>
                   


                </ul>

               </div>

               <div class="col-md-4 col-sm-6">
              
                <ul>
                    <li><a href="/recetas?pagina=Dulces">Ensaladas Dulces</a></li>
                    <li><a href="/recetas?pagina=Saludables">Ensaladas Saludables</a></li>
                </ul>
               </div>
               
                
              
            </div>


            </div>
            <div class="col-md-4 col-sm-12 text-left">
                <ul>
                    <li><a href="">©SABORCULINARIO Todos los derechos reservados</a></li>
                </ul>
            </div>
    </footer>

</body>
<script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js')}}" ></script>

</html>
