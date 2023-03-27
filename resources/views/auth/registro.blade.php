<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!--Estilo de Letra-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bgstyle.css">

    <!-- Librería Tailwind-->
    <link rel="stylesheet" href="\xampp\htdocs\laravel\HerramientaSoftwarePortugues\public\css\\tailwind.css">

    <!--ICONO PAG-->
    <link rel="shortcut icon" href="{{ asset('logoAPP-PG-DEF.png') }}">

    <!--COMPONENTE LIBRERIA NECESARIO PARA QUE EL PRELOADER FUNCIONE-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>




    <!--Scrollup-->
    <script src="js/plugins/scrollUP.js"></script>
    <script src="js/plugins/jquery.easing.js"></script>

    <title>| REGISTRO | UTS Aprendizaje</title>
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

                <h1 style="font-size: 41px; -webkit-text-stroke: 1px #A3E4D7; font-family: 'Titan One', cursive;">
                    Registro</h1>
                <p>Registrate para acceder a las actividades de prueba!</p>

            </div>

            <script>
                function confirmacion() {
                    var rta = confirm("¿Has registrado correctamente tus datos?");
                    if (rta == true) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>
            <!-- Mensaje de confirmación del de datos del form-->

            <!-- Se usa este action, con relación al archivo web.php para hacer la solicitud. -->
            <form action="{{ route('registro') }}" method="post">
                @csrf
                <!--Genera tokens de seguridad los valores del form-->
                <div class="form-group">

                    <input type="number" placeholder="Número Identificación" id="p1" name="ident"
                        value="{{ old('ident') }}" />

                    <!-- En caso de encontrar error, de acuerdo a las restricciones guardadas en el controllador
                    procederá a mostrar un mensaje de alerta que desaparecerá luego de 5 segundos con delay de 2.5 -->
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

                    <input type="text" placeholder="Ingrese su Nombre Completo" id="p1" name="name_user"
                        value="{{ old('name_user') }}" />

                    <!--  |Username alert| -->
                    @error('name_user')
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

                <div class="form-group_despl">

                    <label for="lang" style="margin-top: 10px;">Género</label>
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                        style="width: 145px; height: 18px; font-size: 14px; margin-top: 5px;"
                        name="genero">
                        <option selected>Selecciona ...</option>
                        <option value="masculino">Másculino</option>
                        <option value="femenino">Femenino</option>
                        <option value="otro">Otro...</option>
                    </select>

                    <!--  |genero alert| -->
                    @error('genero')
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

                    <input type="email" placeholder="Correo institucional" id="p1" name="email" value="{{old('email')}}"/>

                    <!--  |email alert| -->
                    @error('email')
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

                    <input type="text" placeholder="Carrera que estudia" id="p1" name="career" value="{{old('career')}}"/>

                    <!--  |career alert| -->
                    @error('career')
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

                    <input type="password" placeholder="Escribe tu contraseña" id="p1" name="password">

                    <!--  |pass alert| -->
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

                    <input type="password" placeholder="Confirma tu contraseña" id="p1" name="passconfirm">


                    <!--  |passconfirm alert| -->
                    @error('passconfirm')
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

                <div class="form-group" id="form_register">
                    
                    <a class="form-recovery" href="{{ route('login') }}">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                        &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
                        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; V O L V E R</a>
                </div>

                <div class="form-group">
                    <a type="button">
                        <button type="submit" onclick="return confirmacion()">Registrar</button>
                    </a>
                </div>



                <div class="text-center lg:text-left">

                    <!-- Botón
                    <input type="submit" value="Registrarse"
                        class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
                    -->

                </div>

                <!-- Genera tokens de seguridad los valores del form
                <div class="form-group">
                    <input type="submit" value="Registrarse" onclick="return confirmacion()">
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


    <!--JS PROPIO (!!!DEBE IR AQUÍ PARA QUE EL SCROLLUP FUNCIONE!!!)-->
    <script src="js/script.js"></script>

</body>

</html>
