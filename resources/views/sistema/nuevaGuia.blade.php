@extends('sistema/plantilla')

   
    


@section('contenido')
    <div class="container " id="nueva">

        <div class="row">

            <div class="col-12 p-5">

                <h1>NUEVA GUÍA</h1>
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


                        <div class="col-7 nombre">
                            <label for="">Nombre de guía</label>
                            <textarea id="" placeholder="Escribe aquí el nombre" name="nombre"  direction="ltr"required >@if(isset($guia)){{htmlspecialchars_decode($guia[0]['nombre'])}}@endif</textarea>

                        </div>
                        <div class="col-5">
                            <label for=""></label>

                            <select name="lts_categoria" id="" required>
                                <option value="">Categoria</option>
                                @if (isset($categorias))
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria['id'] }} "  @if(isset($guia)  and $guia[0]['categoria_id']==$categoria['id']   ){{'selected'}}@endif     >{{ $categoria['nombre'] }}</option>
                                    @endforeach
                                @endif



                            </select>

                        </div>
                       
                        <div class="col-12">
                            <label for="">Descripción</label>
                            <textarea   required id="" placeholder="Escribe aquí la decripción" name="descripcion" required>@if(isset($guia)){{$guia[0]['descripcion']}}@endif</textarea>

                          
                        </div>

                       
                        <div class=" pt col-4">
                            <label for="">Imagen principal</label>
                            <input type="file" name="principal" >
                        </div>

                        <!--<div class=" pt col-6 ">
                            <Label>Imagenes complementarias</Label>
                            <input type="file" name="complementarias[]" multiple >
                        </div>-->



                     

                        <div class=" pt col-12">
                            <label for="">Guia</label>
                            <textarea id="" placeholder="Escribe aquí el contenido de la guía" style="min-height: 500px" name="guia" required>@if(isset($guia)){{ htmlspecialchars_decode($guia[0]['guia'])}}@endif</textarea>
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
