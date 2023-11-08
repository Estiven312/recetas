@extends('sistema/plantilla')





@section('contenido')
    <div class="container " id="nueva">

        <div class="row">

            <div class="col-12 p-5">

                <h1>NUEVO ANUNCIO</h1>
            </div>

            <div class="col-12">

                @if (isset($alerta))
                    <div class="alert alert-warning" role="alert">
                        {{ $alerta }}
                    </div>
                @endif
            </div>

            <div class="col-12">


                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">


                        <div class="col-9 nombre">
                            <label for="">Anuncio</label>
                            <textarea id="" placeholder="Pon aquí  el script del  anuncio" name="anuncio" direction="ltr"required>
@if (isset($anuncio))
{{ htmlspecialchars_decode($anuncio['anuncio']) }}
@endif
</textarea>

                        </div>


                        <div class="col-3">
                            <label for="">Descripción</label>

                            <select name="lst_pagina" id="">


                                <option value="" selected>Selecciona</option>
                                <option value="Home" @if (isset($anuncio) and $anuncio['pagina'] === 'Home') {{ 'selected' }} @endif>Home
                                </option>
                                <option value="Recetas" @if (isset($anuncio) and $anuncio['pagina'] === 'Recetas') {{ 'selected' }} @endif>
                                    Recetas</option>
                                <option value="VistaRecetas" @if (isset($anuncio) and $anuncio['pagina'] === 'VistaRecetas') {{ 'selected' }} @endif>
                                    VistaReceta</option>
                                <option value="Guias" @if (isset($anuncio) and $anuncio['pagina'] === 'Guia') {{ 'selected' }} @endif>
                                    Guias</option>


                                <option value="vistaGuia" @if (isset($anuncio) and $anuncio['pagina'] === 'vistaGuia') {{ 'selected' }} @endif>
                                    VistaGuia</option>

                                    <option value="auto" @if (isset($anuncio) and $anuncio['pagina'] === 'auto') {{ 'selected' }} @endif>
                                        Auto</option>
                            </select>



                        </div>










                        <div class="col-12">
                            <div class="contenedor_button">
                                <button type="submit">Guardar</button>
                            </div>
                        </div>



                    </div>





                </form>
            </div>
        </div>
    </div>
@endsection
