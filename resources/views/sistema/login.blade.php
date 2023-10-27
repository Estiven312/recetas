<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>



    <link rel="stylesheet" href="../sistema/login.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" rel="preload">




</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class=" contenedor_login">
                    <div class="login">
                        <form action="" method="post">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="row">

                                <div class="col-12 centrar">
                                    <img src="{{ asset('/img/user.svg') }}" alt="user">
                                </div>

                                <div class="col-12">
                                    @if (isset($alerta) &&  $alerta)
                                        <div class="alert alert-danger">
                                            {{ $alerta }}
                                        </div>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <label for="">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>

                                <div class="col-12">
                                    <label for="">Password</label>
                                    <input type="password" name="" id="" class="form-control" required>
                                </div>

                                <div class="col-12 olvide">
                                    <a href="">Olvidé mi contraseña</a>
                                </div>

                                <div class="col-12 centrar">
                                    <button class="btn">Entrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>
<script src="../bootstrap/js/bootstrap.bundle.min.js" lazy></script>

</html>
