@extends('sistema/plantilla')





@section('contenido')
    <div class="container " id="nueva">

        <div class="row">

            <div class="col-12 p-5">

                <h1>NUEVA RECETA</h1>
            </div>

            <div class="col-12">

                @if (isset($alerta))
                    <div class="alert alert-warning" role="alert">
                        {{ $alerta }}
                    </div>
                @endif
            </div>

            @if (isset($receta))
                <div class="col-6">
                    <h2>IMAGÉN PRICIPAL</h2>
                    <img src="{{ asset('/files/' . $receta[0]['imagen']) }}" alt="{{ $receta[0]['nombre'] }}" width="400px "
                        height="400px"><br>
                </div>
            @endif

            @if (isset($imgs))
                <div class="col-6">
                    <h2>IMAGENES ADICIONALES</h2>
                    <div class="row">

                        @foreach ($imgs as $img)
                            <div class="col-6 p-1">
                                <img src="{{ asset('/files/' . $img['nombre']) }}" alt="" width="200px "
                                    height="200px">
                            </div>
                        @endforeach

                    </div>


                </div>
            @endif






            <div class="col-12">


                <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="row">


                        <div class="col-6 nombre">
                            <label for="">Nombre de la receta</label>
                            <textarea id="" placeholder="Escribe aquí el nombre" name="nombre" direction="ltr"required>
@if (isset($receta))
{{ htmlspecialchars_decode($receta[0]['nombre']) }}
@endif
</textarea>

                        </div>
                        <div class="col-3">
                            <label for=""></label>

                            <select name="lts_categoria" id="" required>
                                <option value="">Categoria</option>
                                @if (isset($categorias))
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria['id'] }} "
                                            @if (isset($receta) and $receta[0]['categoria_id'] == $categoria['id']) {{ 'selected' }} @endif>
                                            {{ $categoria['nombre'] }}</option>
                                    @endforeach
                                @endif



                            </select>

                        </div>
                        <div class="col-3">
                            <label for=""></label>

                            <select name="lts_pais" id="" required>
                                <option value="">Pais</option>
                                @if (isset($paises))
                                    @foreach ($paises as $pais)
                                        <option value="{{ $pais['id'] }}"
                                            @if (isset($receta) and $receta[0]['pais_id'] == $pais['id']) {{ 'selected' }} @endif>
                                            {{ $pais['pais'] }}</option>
                                    @endforeach
                                @endif
                            </select>

                        </div>
                        <div class="col-12">
                            <label for="">Descripción</label>
                            <textarea required id="" placeholder="Escribe aquí la decripción" name="descripcion" required>
@if (isset($receta))
{{ htmlspecialchars_decode($receta[0]['descripcion']) }}
@endif
</textarea>


                        </div>

                        <div class="pt col-4">

                            <label for="">Tiempo de preparación</label>
                            <input type="text" name="tiempo" required
                                value="@if (isset($receta)) {{ htmlspecialchars_decode($receta[0]['tiempo']) }} @endif">
                        </div>
                        <div class=" pt col-4">

                            <label for="">Para cuatas personas alcanza</label>
                            <input type="text" name="alcanza" required
                                value="@if (isset($receta)) {{ htmlspecialchars_decode($receta[0]['rinde']) }} @endif">
                        </div>
                        <div class=" pt col-4">

                            <label for="">Imagen principal</label>
                            <input type="file" name="principal">
                        </div>
                        <div class=" pt col-6 ">
                            <Label>Imagenes complementarias</Label>
                            <input type="file" name="complementarias[]" multiple>
                        </div>



                        <div class=" pt col-6">
                            <label for=""> Url del Video</label>
                            <input type="text" name="video" required
                                value="@if (isset($receta)) {{ htmlspecialchars_decode($receta[0]['video']) }} @endif">
                        </div>

                        <div class=" pt col-6">
                            <label for="">Ingredientes</label>
                            <textarea id="" placeholder="Escribe aquí el nombre" style="min-height: 500px" name="ingredientes" required>
@if (isset($receta))
{{ htmlspecialchars_decode($receta[0]['ingredientes']) }}
@endif
</textarea>
                        </div>
                        <div class="col-6  pt">
                            <label for="">Instrucciones</label>
                            <textarea id="" placeholder="Escribe aquí el nombre" style="min-height: 500px" name="instrucciones" required>
@if (isset($receta))
{{ htmlspecialchars_decode($receta[0]['instrucciones']) }}
@endif
</textarea>
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

@section('boostrap')
    <script src="../bootstrap/js/bootstrap.bundle.min.js" lazy></script>
@endsection
