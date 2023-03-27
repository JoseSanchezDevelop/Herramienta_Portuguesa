<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--Estilo de Letra-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bgstyle.css">

    <!--ICONO PAG-->
    <link rel="shortcut icon" href="{{ asset('logoAPP-PG-DEF.png') }}">

    <!--COMPONENTE LIBRERIA NECESARIO PARA QUE EL PRELOADER FUNCIONE-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <!--Scrollup-->
    <script src="js/plugins/scrollUP.js"></script>
    <script src="js/plugins/jquery.easing.js"></script>

    <title>| LOGIN | UTS Aprendizaje</title>
</head>

<body>

    <!--PRELOAD-->
    <div id="preload">

        <div id="porcentajeCarga">0%</div>

        <div id="lineaCarga">

            <div id="rellenoCarga"></div>

        </div>

        <div id="estadoCarga"></div>

    </div>

    <!--MENU INICIO-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-top border-bottom sticky-top menuNav">

        <div class="container">
            <a class="navbar-brand" href="/index">
                <img src="logoAPP-PG-DEF.png" alt="Logo" width="130px">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link lead" href="/index" style="font-size:25px;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lead" href="/institucion" style="font-size:25px;">Institución</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lead" href="/plancurso" style="font-size:25px;">Contenido</a>
                    </li>
                    <li class="nav-item active">
                        <a type="button" class="nav-link lead" href="{{ route('login') }}"
                            style="font-size:25px;">Prueba Diagnóstica</a>
                    </li>

                </ul>
            </div>

        </div>

    </nav>

    <center>
        <div class="form-Bg">

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Titan+One&display=swap');

                #p1::placeholder {
                    color: black;
                }
            </style>

            <div class="form-header">

                <h1 style="font-size: 41px; -webkit-text-stroke: 1px #A3E4D7; font-family: 'Titan One', cursive;">Pon a
                    prueba tu portugués</h1>
                <p>Mejora tus habilidades con nosotros!</p>
                <h2>↓ Inicia sesión aquí ↓</h2>

            </div>

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!--Genera tokens de seguridad los valores del form-->

                <!--Mensaje de validación desde el controlador 'LoginController.php'-->
                @if (session('mensaje'))
                    <script>
                        $(document).ready(function() {
                            setTimeout(function() {
                                $(".content").fadeOut(2500);
                            }, 5000);

                        });
                    </script>
                    <p class="alert alert-warning content p-3 mb-2 bg-warning text-dark" role="alert"
                        style="margin-top: 0%; margin-bottom: 6%!important"> {{ session('mensaje') }}
                    </p>
                @endif

                <div class="form-group">

                    <input type="number" placeholder="Número Identificación" id="p1" name="ident" />
                    <!-- El type number se agrega para identifiacar que tipo de carácter estará propuesto a digitarse en la interfaz -->

                    <!--  |ident alert| -->
                    @error('ident')
                        <script>
                            $(document).ready(function() {
                                setTimeout(function() {
                                    $(".content").fadeOut(2500);
                                }, 5000);

                            });
                        </script>
                        <p class="text-decoration-underline alert alert-warning content" role="alert"
                            style="margin-top: 3%; margin-bottom: 0%; width: 310px"> {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="form-group">

                    <input type="password" placeholder="Contraseña" id="p1" name="password" />

                    <!--  |password alert| -->
                    @error('password')
                        <script>
                            $(document).ready(function() {
                                setTimeout(function() {
                                    $(".content").fadeOut(2500);
                                }, 5000);

                            });
                        </script>
                        <p class="text-decoration-underline alert alert-warning content" role="alert"
                            style="margin-top: 3%; margin-bottom: 0%; width: 310px"> {{ $message }}
                        </p>
                    @enderror

                </div>

                <div class="form-group">
                    <input class="inp-cbx" id="cbx" type="checkbox" style="display: none" name="remember" />
                    <label class="cbx" for="cbx">
                        <span>
                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                            </svg>
                        </span>
                        <span>Recuerdame</span>
                    </label>
                    <abbr title="¿No tienes cuenta aún?, registrate aquí.">
                        <a class="form-recovery" href="{{ route('registro') }}">R E G I S T R A R S E</a>
                    </abbr>
                </div>

                <div class="form-group">
                    <a type="button">
                        <button type="submit">Iniciar</button>
                    </a>
                </div>

                <!--
                <div class="text-center lg:text-left">
                    <input type="submit" value="Iniciar Sesión"
                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">

                </div>
-->

            </form>
        </div>

        <div class="animation-area">
            <ul class="box-area">
                <li class="fa fa-plus"></li>
                <li></li>
                <li class="fa fa-plus"></li>
                <li></li>
                <li class="fa fa-plus"></li>
                <li></li>
                <li class="fa fa-plus"></li>
                <li></li>
                <li class="fa fa-plus"></li>
                <li></li>
            </ul>
        </div>
        </div>
    </center>
    <!--

   

        <! --JS PROPIO (!!!DEBE IR AQUÍ PARA QUE EL SCROLLUP FUNCIONE!!!)-->
    <script src="js/script.js"></script>

</body>

</html>
