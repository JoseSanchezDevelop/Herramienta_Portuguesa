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
                        <a type="button" class="nav-link lead" href="{{ route('iniciar') }}"
                            style="font-size:25px;">Prueba Diagnóstica</a>
                    </li>



                </ul>
            </div>

        </div>

    </nav>

    <div class="d-flex container-fluid" id="banner3">

    </div>

    <div class="container-fluid py-1" id="Header_Index">
        <h1 class="mt-3" id="Titulo_Index" align="center" style="color: white;">Contenido del Curso</h1>
        <p align="center" style="color: white; font-size:22px; ">Conoce nuestro contenido y temas de estudio</p>
    </div>

    <div class="d-flex container-fluid py-2" id="contenido">
        <div class="jumbotron jumbotron-fluid bg-light mx-4 my-2" id="jumbotronPlanCurso1">
            <div class="container text-center ">

                <br><br>
                <img src="img/lingua-portuguesa.jpg" id="imgPA1" alt="PortuguesA1" width="460px" class="responsive">
                <a href="https://www.fundacaotelefonicavivo.org.br/noticias/5-roteiros-de-estudos-para-o-dia-mundial-da-lingua-portuguesa/"
                    target="_blank">
                    <p style="font-size:14px; color:black;">Imagen tomada de <b>5 roteiros de estudos para o Dia Mundial
                            da Língua Portuguesa</b>. </p>
                </a>
                <h2 style="font-weight: bold;">TEMARIO NIVEL 1</h2><br>
                <p style="font-size:20px; margin-bottom:27px;">En este listado encontrarás los temas, información y
                    lecciones <br> relacionadas a el nivel A1 de Portugués. <br>
                    <b>Nivel Básico Principiante.</b>
                </p><br>
                <a href="/temasA1">
                    <h5 id="btnPlanCurso1">Ver Contenido</h5>
                </a>

            </div>
        </div>

        <div class="jumbotron jumbotron-fluid bg-light mx-4 my-2" id="jumbotronPlanCurso2">
            <div class="container text-center">

                <img src="img/Portugues2.png" id="imgPA2" alt="PortuguesA2" width="450px" class="responsive">
                <a href="https://www.institutotecnologico.es/curso/676/PORTUGUES-PARA-DEPENDIENTES-DE-COMERCIO-NIVEL-A1/"
                    target="_blank">
                    <p style="font-size:14px; color:black;">Imagen tomada de <b>Portugues para dependientes de
                            comercio. nivel a1</b>. </p>
                </a>
                <h2 style="font-weight: bold;">TEMARIO NIVEL 2</h2><br>
                <p style="font-size:20px;">En este listado encontrarás los temas, información y lecciones <br>
                    relacionadas a el nivel A2 de Portugués. <br>
                    <b>Nivel Básico Intermedio.</b>
                </p><br>
                <a href="/temasA2">
                    <h5 id="btnPlanCurso2">Ver Contenido</h5>
                </a>

            </div>

        </div>

        <div class="jumbotron jumbotron-fluid bg-light mx-4 my-2" id="jumbotronPlanCurso3">
            <div class="container text-center">

                <img src="img/Portugues3.jpg" id="imgPB1" alt="PortuguesB1" width="400px" class="responsive">
                <a href="https://es.wikihow.com/decir-palabras-y-frases-comunes-en-portugu%C3%A9s" target="_blank">
                    <p style="font-size:14px; color:black;">Imagen tomada de <b>Cómo decir palabras y frases comunes en
                            portugués</b>. </p>
                </a>
                <h2 style="font-weight: bold;">TEMARIO NIVEL 3</h2><br>
                <p style="font-size:20px;">En este listado encontrarás los temas, información y lecciones <br>
                    relacionadas a el nivel B1 de Portugués. <br>
                    <b>Nivel Intermedio.</b>
                </p><br>
                <a href="/temasB1">
                    <h5 id="btnPlanCurso2">Ver Contenido</h5>
                </a>

            </div>

        </div>

        <div class="jumbotron jumbotron-fluid bg-light mx-4 my-2" id="jumbotronPlanCurso4">
            <div class="container text-center">

                <img src="img/Portugues4.jpg" id="imgPB2" alt="PortuguesB2" width="400px" class="responsive">
                <a href="https://es.wikihow.com/hablar-portugu%C3%A9s" target="_blank">
                    <p style="font-size:14px; color:black;">Imagen tomada de <b>Cómo hablar portugués</b>. </p>
                </a>
                <h2 style="font-weight: bold;">TEMARIO NIVEL 4</h2><br>
                <p style="font-size:20px;">En este listado encontrarás los temas, información y lecciones <br>
                    relacionadas a el nivel B2 de Portugués. <br>
                    <b>Nivel Intermedio Avanzado.</b>
                </p><br>
                <a href="/temasB2">
                    <h5 id="btnPlanCurso2">Ver Contenido</h5>
                </a>

            </div>

        </div>

        <div class="jumbotron jumbotron-fluid bg-light mx-4 my-2" id="jumbotronPlanCurso5">
            <div class="container text-center">

                <img src="img/Portugues5.jpg" id="imgPC1" alt="PortuguesC1" width="400px" class="responsive">
                <a href="https://es.wikihow.com/decir-palabras-y-frases-comunes-en-portugu%C3%A9s" target="_blank">
                    <p style="font-size:14px; color:black;">Imagen tomada de <b>Cómo decir palabras y frases comunes en
                            portugués</b>. </p>
                </a>
                <h2 style="font-weight: bold;">TEMARIO NIVEL 5</h2><br>
                <p style="font-size:20px;">En este listado encontrarás los temas, información y lecciones <br>
                    relacionadas a el nivel C1 de Portugués. <br>
                    <b>Nivel Avanzado 1.</b>
                </p><br>
                <a href="/temasC1">
                    <h5 id="btnPlanCurso2">Ver Contenido</h5>
                </a>

            </div>

        </div>

        <div class="jumbotron jumbotron-fluid bg-light mx-4 my-2" id="jumbotronPlanCurso5">
            <div class="container text-center">

                <img src="img/Portugues6.jpg" id="imgPC2" alt="PortuguesC1" width="400px" class="responsive">
                <a href="https://es.wikihow.com/hablar-portugu%C3%A9s" target="_blank">
                    <p style="font-size:14px; color:black;">Imagen tomada de <b>Cómo hablar portugués</b>. </p>
                </a>
                <h2 style="font-weight: bold;">TEMARIO NIVEL 6</h2><br>
                <p style="font-size:20px;">En este listado encontrarás los temas, información y lecciones <br>
                    relacionadas a el nivel C2 de Portugués. <br>
                    <b>Nivel Avanzado 2.</b>
                </p><br>
                <a href="/temasC2">
                    <h5 id="btnPlanCurso2">Ver Contenido</h5>
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
