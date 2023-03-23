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

    <!--ICONO PAG-->
    <link rel="shortcut icon" href="{{ asset('logoAPP-PG-DEF.png') }}">

    <!--COMPONENTE LIBRERIA NECESARIO PARA QUE EL PRELOADER FUNCIONE-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


    <!--Scrollup-->
    <script src="js/plugins/scrollUP.js"></script>
    <script src="js/plugins/jquery.easing.js"></script>


    <title>UTS Aprendizaje</title>
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
                    <li class="nav-item active">
                        <a class="nav-link lead" href="/index" style="font-size:25px;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lead" href="/institucion" style="font-size:25px;">Institución</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lead" href="/plancurso" style="font-size:25px;">Contenido</a>
                    </li>
                    <li class="nav-item">
                        <a type="button" class="nav-link lead" href="{{ route('login') }}"
                            style="font-size:25px;">Prueba Diagnóstica</a>
                    </li>

                </ul>
            </div>

        </div>

    </nav>

    <div class="d-flex container-fluid" id="banner1">

    </div>

    <div class="container-fluid py-1" id="Header_Index">
        <h1 class="mt-3" id="Titulo_Index" align="center" style="color: white;">Aprende Portugués con Nosotros</h1>
        <hr>
        <p align="center" style="color: white; font-size:22px; ">Sin límites, de forma clara y concisa.</p>
    </div>

    <div class="d-flex container-fluid py-2" id="contenido">
        <div class="jumbotron jumbotron-fluid bg-light mx-4 my-2" id="jumbotron1">
            <div class="container text-center ">
                <img src="img/uts_edificio.jpg" id="imgIndex1" alt="edificio_img" class="responsive">
                <a href="https://www.vanguardia.com/area-metropolitana/bucaramanga/otorgan-y-renuevan-registros-a-las-uts-en-bucaramanga-NE431249"
                    target="_blank">
                    <p style="font-size:18px; color:black;">Imagen tomada de <b>Vanguardia, Otorgan y renuevan registros
                            a las UTS, en Bucaramanga</b>. </p>
                </a>
                <h3 style="margin-top:10px;"><b>Unidades Tecnológicas de Santander.</b></h3>
                <p style="font-size:22px; margin-bottom:27px;">Somos enseñanza, aprendizaje y excelencia en educación
                    superior. <br>
                    Contamos con una amplia adaptabilidad y versatilidad en las áreas de tecnologías e ingenierías, <br>
                    si deseas saber más revisa la <b>Información</b> acerca de nuestro perfil como institución.</p>
                <a href="/institucion">
                    <h5 id="btnIndex1">Ver más</h5>
                </a>

            </div>
        </div>

        <div class="jumbotron jumbotron-fluid bg-light mx-4 my-2" id="jumbotron2">
            <div class="container text-center">
                <img src="img/Aprender.jpg" id="imgIndex2" alt="aprender_img" class="responsive">
                <a href="https://www.elfrente.com.co/web/index.php?ecsmodule=frmstasection&ida=57&idb=95&idc=49089"
                    target="_blank">
                    <p style="font-size:18px; color:black;">Imagen tomada de <b>EL FRENTE, Consejos de la UTS que
                            comparte método de aprendizaje para los docentes</b>. </p>
                </a>
                <h3><b>Aprende con nosotros.</b></h3>
                <p style="font-size:22px;">Con educación de calidad, con los mejores en la innovación y tecnología.
                    <br>
                    aprenderás de manera efectiva y clara todo lo que necesitas saber sobre <b>Portugués</b><br>
                    con nuestros <b>Contenidos</b> y <b>Lecciones.</b></p>
                <a href="{{ route('login')}}">
                    <h5 id="btnIndex2">Ver más</h5>
                </a>
            </div>
        </div>


    </div>



    <!--FOOTER-->
    <footer class="container-fluid bg-dark py-5 " align="center">

        <a href="https://www.uts.edu.co/sitio/" target="_blank">
            <img src="img/UTSescudo.jpg" alt="Escudo_Uts" width="120px"
                style="border:1px solid black; border-radius: 10px;">
            <h2 class="mt-4" style="color:white;">TODOS LOS DERECHOS RESERVADOS UNIDADES TECNOLÓGICAS DE SANTANDER
            </h2>
        </a>
        <a href="https://www.google.com/maps/place/Unidades+Tecnol%C3%B3gicas+de+Santander/@7.1049697,-73.1243264,18z/data=!4m12!1m6!3m5!1s0x8e683fc8a8b0973f:0x5f50c91e41f0ac6e!2sUnidades+Tecnol%C3%B3gicas+de+Santander!8m2!3d7.1049884!4d-73.1238068!3m4!1s0x8e683fc8a8b0973f:0x5f50c91e41f0ac6e!8m2!3d7.1049884!4d-73.1238068"
            target="_blank">
            <h3 class="mt-1" style="color:white;">BUCARAMANGA, SANTANDER</h3>
        </a>
        <h4 class="mt-1" style="color:white;">2023</h4>


    </footer>


    <!--JS PROPIO (!!!DEBE IR AQUÍ PARA QUE EL SCROLLUP FUNCIONE!!!)-->
    <script src="js/script.js"></script>


</body>

</html>
