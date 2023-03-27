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
                    <li class="nav-item">
                        <a class="nav-link lead" href="/index" style="font-size:25px;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lead" href="/institucion" style="font-size:25px;">Institución</a>
                    </li>
                    <li class="nav-item active">
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

    <!--
        <div class="d-flex container-fluid" id="banner1">
            
        </div>
        -->



    <div class="container-fluid py-1" id="Header_Index">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <img src="img/brasil-bandera.png" id="imgTemarios" alt="bandera_brasil" width="220px"
                    class="responsive my-3 ">
            </div>
            <div class="col-12 col-md-6 col-lg-8">
                <h1 class="mt-3" id="Titulo_Index" align="center" style="color: white; font-size:100px;">TEMAS NIVEL 2
                </h1>
                <p align="center" style="color: white; font-size:30px; ">Nivel Básico Portugués</p>
            </div>
        </div>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">NÚMEROS EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">En esta lección se verán los términos básicos del portugués, como los
                    números, preposiciones, pronombres, conectores, colores, animales, partes del cuerpo y frutas. Los
                    números son una unidad de medida importante para expresar la cantidad de algún objeto o ser en
                    específico, y así determinar con exactitud un valor con base en la observación.<br><br>
                    En el listado que aparece en la imagen podrás apreciar como se escriben como tal los números en este
                    idioma (portugués). <br><br>
                    y del mismo modo podrás escuchar la pronunciación fonética de cada número en el audio al pie de la
                    imagen.<br>
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/numerosPortugues.jpg" id="imgNumeros" alt="numeros_portugues" class="responsive">
                <a href="https://hablamossle.com/numeros-en-portugues-aprende-a-contar/" target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Números en portugués, aprende a contar
                            um, dois, três - Hablamossle</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Numeros.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <h2 style="font-weight:bold" class="my-4 text-center">PREPOSICIONES EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/preposicionPortugues.png" id="imgPreposiciones" alt="preposiciones_portugues"
                    class="responsive">
                <a href="https://mundohispanico2.blogspot.com/2018/05/los-articulos-preposicion-articulo.html"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>MUNDOHISPANICO2 : GRAMÁTICA:
                            PREPOSICIÓN + ARTÍCULO - LAS CONTRACCIONES</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Preposiciones.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">He aquí algunos ejemplos de las preposiciones básicas en portugués, junto
                    con su traducción directa para generar una mayor comprensión y aprendizaje. <br><br>
                    En el audio que se encuentra al pie de la imagen podrás escuchar su pronunciación fonética.</p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">PRONOMBRES EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">Los pronombres personales son de gran importancia a la hora de establecer
                    una comunicación coherente y acertada, por lo tanto, es importante saber su clasificación,
                    traducción y pronunciación para no dejar lugar a ambiguedades.<br><br>
                    En el audio que se encuentra al pie de la imagen podrás escuchar como se pronuncian los pronombres
                    personales en portugués.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/pronombresPortugues.jpg" id="imgPronombres" alt="pronombres_portugues"
                    class="responsive">
                <a href="https://co.pinterest.com/pin/148689225178031994/?amp_client_id=CLIENT_ID%28_%29&mweb_unauth_id=%7B%7Bdefault.session%7D%7D&simplified=true"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Pronombres personales | Espanhol,
                            Português, Imagens do google</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Pronombres.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <h2 style="font-weight:bold" class="my-4 text-center">CONECTORES EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/conectoresPortugues1.png" id="imgConectores1" alt="conectores1_portugues"
                    class="responsive">
                <a href="https://co.pinterest.com/pin/117726977746930050/" target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Conectores mais usados em espanhol.
                            #espanhol #dicasdeespanhol #conectoresespanhol #português #aprenderportug… | Espanhol,
                            Palavras e</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Conectores.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">Los conectores, tal como su nombre lo indica, tienen la función de enlazar y
                    conectar palabras con el propósito de formar frases coherentes para transmitir información, ideas y
                    conocimientos, siendo esto regla general en todos los idiomas.<br><br>
                    Puedes escuchar la pronunciación de cada uno de los conectores en la lista reproduciendo la pista de
                    sonido debajo de la imagen.</p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">COLORES EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">La forma en la cual se nombran los pigmentos. En la imagen aparece una lista
                    de los colores básicos en portugués, si deseas, puedes escuchar su pronunciación en la pista de
                    sonido adjuntada bajo esta misma (la imagen).<br><br>
                    La <b>R</b> en portugués se pronuncia como una <b>J</b> siempre que empiece una palabra o se
                    encuentre <b>RR</b>.<br>
                    La <b>X</b> en portugués se pronuncia como <b>SH</b>.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/coloresPortugues.jpg" id="imgColores" alt="colores_portugues" class="responsive">
                <a href="https://espanholnorio.wordpress.com/2015/06/28/cores-de-espanhol-para-portugues/"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Cores – Idioma Brasil – Português para
                            estrangeiros</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Colores.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <h2 style="font-weight:bold" class="my-4 text-center">ANIMALES EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/animalesPortugues.png" id="imgAnimales" alt="animales_portugues" class="responsive">
                <a href="https://www.laspalabrasysussecretos.com/2018/03/12-imagenes-para-aprender-vocabulario-en-portugues.html"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Las palabras y sus secretos : 12
                            imágenes para aprender vocabulario en portugués</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Animales.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">En este segmento verás una lista de animales junto con su escritura y
                    pronunciación en portugués. Recuerda que si quieres aprender bien debes escribir, leer, escuchar y
                    pensar en portugués,
                    ya que el motivo de este plan de curso es dar herramientas y consejos generales para aprender de
                    manera más sencilla el idioma. Lo que quiere decir que es
                    tu decisión y responsabilidad avanzar y mejorar.</p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">PARTES DEL CUERPO EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">En este segmento podrás revisar tanto la escritura como fonética de las
                    partes del cuerpo en el idioma portugués, junto con una traducción y un audio para fines de
                    aprendizaje. <br><br>
                    puedes escuchar su pronunciación en la pista de sonido adjuntada bajo la lista de palabras.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/cuerpoPortugues.jpg" id="imgCuerpo" alt="cuerpo_portugues" class="responsive">
                <a href="https://www.laspalabrasysussecretos.com/2018/03/12-imagenes-para-aprender-vocabulario-en-portugues.html"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Las palabras y sus secretos : 12
                            imágenes para aprender vocabulario en portugués</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Cuerpo.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <h2 style="font-weight:bold" class="my-4 text-center">FRUTAS EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/frutasPortugues.jpg" id="imgFrutas" alt="frutas_portugues" class="responsive">
                <a href="https://co.pinterest.com/pavlovagb/portuguese/" target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>32 ideas de Portuguese | palabras en
                            portugues, lengua portuguesa, portugues aprender</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Frutas.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">A continuación en esta sección encontrarás los nombres, escritura,
                    traducción y pronunciación de las frutas en portugués. <br><br>
                    puedes escuchar la pronunciación de las palabras en la pista de sonido adjuntada bajo la imagen.</p>
            </div>
        </div>

        <br><br>

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
