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
                        <form action="" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div>
                                <div class="row">

                                    <div class="col-12">


                                        <select name="pais" id="pais" class="text-center">
                                            <optgroup label="Pais de origen">
                                                <option value="">Seleccionar</option>
                                                <option value="Venezolanas"
                                                    @if (isset($pais) and $pais === 'Venezolanas') {{ 'selected' }} @endif>Venezolanas
                                                </option>
                                                <option value="Colombianas"
                                                    @if (isset($pais) and $pais === 'Colombianas') {{ 'selected' }} @endif>Colombianas
                                                </option>
                                            </optgroup>
                                        </select>

                                        <select name="categoria" class="text-center" direction="down">
                                            <option value="">Seleccionar</option>
                                            <optgroup label="Recetas">

                                                <option value="Faciles"
                                                    @if (isset($nombre) and $nombre === 'Faciles') {{ 'selected' }} @endif>
                                                    Recetas Faciles</option>
                                            </optgroup>


                                            <optgroup label="Postres">
                                                <option value="Helados"
                                                    @if (isset($nombre) and $nombre == 'Helados') {{ 'selected' }} @endif>Helados
                                                </option>
                                                <option
                                                    value="Galletas"@if (isset($nombre) and $nombre === 'Galletas') {{ 'selected' }} @endif>
                                                    Galletas</option>
                                                <option
                                                    value="Pasteles"@if (isset($nombre) and $nombre === 'Pasteles') {{ 'selected' }} @endif>
                                                    Pasteles</option>
                                            </optgroup>
                                            <optgroup label="Bebidas">
                                                <option
                                                    value="Smoothies"@if (isset($nombre) and $nombre === 'Smoothies') {{ 'selected' }} @endif>
                                                    Smoothies</option>
                                                <option
                                                    value="Frappe"@if (isset($nombre) and $nombre === 'Frappe') {{ 'selected' }} @endif>
                                                    Frappe</option>
                                                <option
                                                    value="Cocteles"@if (isset($nombre) and $nombre === 'Cocteles') {{ 'selected' }} @endif>
                                                    Cocteles</option>
                                            </optgroup>
                                            <optgroup label="Ensaladas">
                                                <option
                                                    value="Dulce"@if (isset($nombre) and $nombre === 'Dulce') {{ 'selected' }} @endif>
                                                    Dulce</option>
                                                <option
                                                    value="Saludable"@if (isset($nombre) and $nombre === 'Saludable') {{ 'selected' }} @endif>
                                                    Saludable</option>
                                            </optgroup>

                                        </select>
                                    </div>
                                    <div class="col-12 spacio-but">
                                        <button type="submit">Buscar</button>

                                    </div>


                                </div>

                            </div>
                        </form>
                    </div>




                </div>

            </div>

            <div class="col-12" id="res">
                <div class="row">


                    <div class="col-md-9 col-sm-12 set-card  ">

                        <div class="row ">
                            <div class="col-md-12 col-sm-12">
                                <div class="row ">
                                    @if (isset($recetas))
                                        @foreach ($recetas as $item)
                                            <div class="col-md-4 col-sm-12 card p-3">
                                                <a href="receta/{{ $item['id'] }}">
                                                    <div class="row">
                                                        <div class="imagen-card col-md-12 ">
                                                            <img src="{{ asset('storage/' . $item['imagen']) }}" alt=" pizza"
                                                                class="img-fluid" loading="lazy">
                                                        </div>
                                                        <div class="nombre-card ">
                                                            <small>{{ $item['nombre_c'] }}</small>
                                                            <h3>{{ $item['nombre'] }}</h3>

                                                        </div>

                                                    </div>

                                                </a>
                                            </div>
                                        @endforeach
                                    @else
                                        <div class="col-12">
                                            <h2>{{ $mess }}</h2>

                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        @if (isset($recetas))
                            @if (count($recetas) >= 15)
                                <div class="col-12 text-center">
                                    <div class="spacio-but">
                                        <form action="" method="post">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="text" name="numero"
                                                value="@if (isset($numero)) {{ $numero }} @else {{ 1 }} @endif">
                                            <input type="text" name="pais"
                                                value="@if (isset($pais)) {{ $pais }} @endif">
                                            <input type="text" name="nombre"
                                                value="@if (isset($nombre)) {{ $nombre }} @endif">



                                            <button type="submit">Más recetas</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        @endif

                    </div>
                    <div class="col-md-3 col-sm-12   contenedor_anuncio p-1 ">
                        <div class="anuncio_for">
                            <?php if (isset($anuncio) and count($anuncio)>0): ?>
                            <script src="<?php echo asset($anuncio[0]['anuncio']); ?>"></script>
                            <?php endif; ?>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
