@extends('sistema/plantilla')

   
    


@section('contenido')
    <div class="container " id="nueva">

        <div class="row">

            <div class="col-12 p-5">

                <h1>NUEVA CATEGORIA</h1>
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


                       

                        <div class="pt col-6 p-5">

                            <label for="">Nombre</label>
                            <input type="text" name="nombre" required  value="@if(isset($categoria)){{$categoria['nombre']}}@endif">
                        </div>
                       
                        <div class="col-12 p-5">
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
