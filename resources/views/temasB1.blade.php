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


    <div class="container-fluid py-1" id="Header_Index">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <img src="img/brasil-bandera.png" id="imgTemarios" alt="bandera_brasil" width="220px"
                    class="responsive my-3 ">
            </div>
            <div class="col-12 col-md-6 col-lg-8">
                <h1 class="mt-3" id="Titulo_Index" align="center" style="color: white; font-size:100px;">TEMAS NIVEL 3
                </h1>
                <p align="center" style="color: white; font-size:30px; ">Nivel Intermedio Portugués</p>
            </div>
        </div>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">DIAS Y MESES EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-9 ">
                <p style="font-size:25px;">Otros detalles a resaltar en el vocabulario básico e intermedio en portugués
                    son como tal la pronunciación y escritura de los días y meses.
                    En español estamos familiarizados con un nombre específico para cada día de la semana <b>(Lunes,
                        Martes, Miercoles, Jueves, Viernes, Sábado y Domingo)</b>, sin embargo,
                    En portugués los días se clasifican en feiras, siendo estos <b>Segunda-Feira, Terça-Feira,
                        Quarta-Feira, Quinta-Feira y Sexta-Feira</b> a excepción del <b>Sábado y Domingo</b>,
                    los cuales permanecen igual en ambos idiomas.<br><br>

                    En el caso de los meses, su escritura y pronunciación son muy similares, presentando algunos cambios
                    y variaciones entre el español y el portugués, siendo estos (los meses):<br>
                    <b>Janeiro(Enero)</b>, <b>Fevereiro(Febrero)</b>, <b>Março(Marzo)</b>, <b>Abril(Abril)</b>,
                    <b>Maio(Mayo)</b>, <b>Junho(Junio)</b>, <b>Julho(Julio)</b>
                    <b>Agosto(Agosto)</b>, <b>Setembro(Septembro)</b>, <b>Outubro(Octubre)</b>,
                    <b>Novembro(Noviembre)</b>, <b>Dezembro(Diciembre)</b>. <br><br>

                    La pronunciación de los días y meses se encuentra en la pista de audio bajo las imágenes de esta
                    sección.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <img src="img/diasPortugues.png" id="imgDias" alt="dias_portugues" class="responsive">
                <img src="img/mesesPortugues.png" id="imgMeses" alt="meses_portugues" class="responsive">
                <a href="https://luciaorcasberro.wordpress.com/2012/12/04/dias-y-meses-dias-e-meses/" target="_blank">
                    <p style="font-size:20px; color:black;">Imágenes tomadas de <b>Días y Meses / Dias e Meses |
                            Português & Español</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-DiasMeses.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <h2 style="font-weight:bold" class="my-4 text-center">VERBO SER Y ESTAR EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/verboSerEstarPortugues.jpg" id="imgSer" alt="ser_portugues" class="responsive">
                <a href="https://aprendeportuguesfacil.blogspot.com/2012/10/verbos-ser-estar-ter-y-haver-presente.html"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Aprende Portugués Fácil: Verbos ser,
                            estar, ter y haver. Presente do indicativo</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-VerboSer.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">Tanto en portugués como en español, el verbo ser y estar tiene multiples
                    conjugaciones dependiendo del pronombre personal con el que se aplique,
                    siendo esta una forma de expresar ideas con coherencia en base a puntos de vista y personas
                    involucradas (el, ella, ellos). Por lo tanto, en el listado que se encuentra
                    en la imagen se pueden apreciar los tipos de verbos <b>(ser, estar, tener y haber)</b>, con sus
                    respectivos pronombres personales en portugués. <br><br>

                    En el audio que se encuentra debajo de la imagen puedes escuchar la pronunciación fonética de cada
                    verbo ser y estar.</p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">ADJETIVOS EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">Cumplen la función de modificar siempre a un sustantivo para dar una
                    descripción más
                    específica u orientada en ciertos casos, en la lista de la imagen encontraras los 15 adjetivos más
                    usados en español
                    con su respectiva traducción y pronunciación.<br><br>

                    Dicha pronunciación en portugués se encuentra debajo de la lista de los adjetivos más usados.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/adjetivos1Portugues.jpg" id="imgAdjetivos" alt="adjetivos_portugues"
                    class="responsive">
                <a href="https://www.laspalabrasysussecretos.com/2018/03/12-imagenes-para-aprender-vocabulario-en-portugues.html"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Las palabras y sus secretos : 12
                            imágenes para aprender vocabulario en portugués</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Adjetivos.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <h2 style="font-weight:bold" class="my-4 text-center">TIEMPOS VERBALES EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/verbosPresentePortugues.png" id="imgPresente" alt="presente_portugues"
                    class="responsive">
                <a href="https://hablamossle.com/como-conjugar-el-presente-en-portugues/" target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Cómo conjugar el presente en portugués
                            - Hablamossle ❤️ 💚</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Presente.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>PRESENTE:</b> Se usa en sucesos que están pasando en la actualidad,
                    leyes físicas o realidades que son siempre válidas, como una "norma" familiar, sucesos en el futuro
                    que es seguro que ocurran y describir hechos históricos.<br><br>

                    Tal como se aprecia en el listado, existen 3 tipos de conjugaciones en base a la terminación del
                    verbo en cuestión, las cuales son: <br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN AR:</b> Cuando un verbo termina en <b>AR</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>O</b>, <b>AS</b>, <b>A</b>, <b>AMOS</b>, <b>AIS</b>, <b>AM</b> con base en el
                    pronombre respectivamente.<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN ER:</b> Cuando un verbo termina en <b>ER</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>O</b>, <b>ES</b>, <b>E</b>, <b>EMOS</b>, <b>EIS</b>, <b>EM</b> con base en el
                    pronombre respectivamente.<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN IR:</b> Cuando un verbo termina en <b>IR</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>IO</b>, <b>IS</b>, <b>I</b>, <b>IMOS</b>, <b>IDES</b>, <b>IEM</b> con base en
                    el pronombre respectivamente.<br><br>
                </p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <br><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>PASADO:</b> Se emplea y utiliza para describir acciones, sucesos o
                    acontecimientos que ya han pasado. Cuenta con 6 tipos de conjugaciones, las cuales son: <br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN AR:</b> Cuando un verbo termina en <b>AR</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>EI</b>, <b>OU</b>, <b>AMOS</b>, <b>ARAM</b> con base en el pronombre
                    respectivamente.<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN ER:</b> Cuando un verbo termina en <b>ER</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>I</b>, <b>EU</b>, <b>EMOS</b>, <b>ERAM</b> con base en el pronombre
                    respectivamente.<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN IR:</b> Cuando un verbo termina en <b>IR</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>I</b>, <b>IU</b>, <b>IMOS</b>, <b>IRAM</b> con base en el pronombre
                    respectivamente.<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN AIR:</b> Cuando un verbo termina en <b>AR</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>I</b>, <b>IU</b>, <b>IMOS</b>, <b>IRAM</b> con base en el pronombre
                    respectivamente.<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN GAR:</b> Cuando un verbo termina en <b>ER</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>GUEI</b>, <b>GOU</b>, <b>GAMOS</b>, <b>GARAM</b> con base en el pronombre
                    respectivamente.<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN CAR:</b> Cuando un verbo termina en <b>IR</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>QUEI</b>, <b>COU</b>, <b>CAMOS</b>, <b>CARAM</b> con base en el pronombre
                    respectivamente.<br><br>

                    Las conjugaciones anteriores solo aplican para verbos regulares. La pronunciación de las palabras en
                    las imágenes se encuentran en
                    la pista de sonido bajo estas.
                </p>

                <a href="https://rioandlearn.com/es/preterito-perfecto-en-portugues/" target="_blank">
                    <p style="font-size:25px; color:black;">aquí encontraras un listado de <b>VERBOS REGULARES E
                            IRREGULARES</b> en pasado en portugués.</p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/pasado1Portugues.png" id="imgP1" alt="pasado_portugues" class="responsive">
                <img src="img/pasado2Portugues.png" id="imgP2" alt="pasado_portugues" class="responsive">
                <a href="https://rioandlearn.com/es/verbos-regulares-en-portugues/" target="_blank">
                    <p style="font-size:20px; color:black;">Imágenes tomadas de <b>Verbos Regulares en Portugués - Rio
                            & Learn</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Pasado.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/futuro1Portugues.jpg" id="imgF1" alt="futuro_portugues" class="responsive">
                <img src="img/futuro2Portugues.jpg" id="imgF2" alt="futuro_portugues" class="responsive">
                <a href="https://co.pinterest.com/pin/348888302389674806/" target="_blank">
                    <p style="font-size:20px; color:black;">Imágenes tomadas de <b>Futuro simple de indicativo |
                            Futuro, Português, Verbos</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Futuro.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>FUTURO:</b> Se utiliza para expresar acciones, situaciones o
                    acontecimientos que pasarán en el futuro, cuenta con 3 conjugaciones para verbos regulares que son
                    las siguientes:<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN AR:</b> Cuando un verbo termina en <b>AR</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>AREI</b>, <b>ARÁ</b>, <b>AREMOS</b>, <b>ARÃO</b> con base en el pronombre
                    respectivamente.<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN ER:</b> Cuando un verbo termina en <b>ER</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>EREI</b>, <b>ERÁ</b>, <b>EMOS</b>, <b>ERÃO</b> con base en el pronombre
                    respectivamente.<br><br>

                    <b>CONJUGACIÓN AL TERMINAR EN IR:</b> Cuando un verbo termina en <b>IR</b>, se conjuga cambiando la
                    terminación y
                    reemplazandola por <b>IREI</b>, <b>IRÁ</b>, <b>IREMOS</b>, <b>IRÃO</b> con base en el pronombre
                    respectivamente.<br><br>

                </p>
                <a href="https://rioandlearn.com/es/futuro-en-portugues/" target="_blank">
                    <p style="font-size:25px; color:black;">aquí encontraras un listado de <b>VERBOS REGULARES E
                            IRREGULARES</b> en futuro en portugués.</p>
                </a>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">CONSEJOS DE FONÉTICA EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>6.</b> Una nasalización corresponde a los casos en donde una vocal es
                    precedida por una <b>consonante nasal [m, n]</b> en la
                    misma sílaba o vocales que lleven el acento til(ã). En estos casos, el sonido nasal ocurre en
                    cualquier acento de el Portugués de Brasil. Por ejemplo:<br><br>

                    Mari<b>an</b>a(Mariana), c<b>am</b>a(cama), <b>An</b>a(Ana), s<b>am</b>ba(samba),
                    b<b>an</b>da(banda), toc<b>an</b>do(jugando), m<b>an</b>ta(manta/cobija), t<b>am</b>pa(cubrir),
                    l<b>âm</b>pada(lámpara), mud<b>an</b>ça(mudanza/trasteo/cambio),
                    s<b>em</b>(sin que), b<b>em</b>(bien), t<b>am</b>b<b>ém</b>(además), s<b>om</b>(sonido),
                    c<b>om</b>(con), t<b>om</b>(tono), s<b>im</b>(sí), f<b>im</b>(el fin), m<b>un</b>do(mundo),
                    f<b>un</b>do(antecedentes), coraç<b>ão</b>(corazón),
                    m<b>ão</b>(mano), m<b>ãe</b>(mamá/madre), estaç<b>ão</b>(estación), estaç<b>õe</b>s(estaciones),
                    c<b>ão</b>(perro), c<b>ãe</b>s(perros), uni<b>ão</b>(unidad), avi<b>ão</b>(avión),
                    irm<b>ã</b>(hermana).
                </p>
                <audio controls src="mp3/PORTUGUES-Consejo6.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos6.png" id="imgPCF6" alt="consejos_portugues" class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 12</b>. </p>

            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos7.png" id="imgPCF7" alt="consejos_portugues" class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 12</b>. </p>

            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>7.</b> cuando la <b>R</b> es simple e intervocal, tiene el mismo valor
                    fonético que en español. Por ejemplo:<br><br>

                    Cuando una palabra empieza por <b>R</b> su pronunciación es la de la <b>J</b> en español:<br>
                    <b>R</b>enata(Renata), <b>R</b>odrigo(Rodrigo), <b>R</b>oma(Roma), <b>R</b>oberto(Roberto),
                    <b>R</b>onaldo(Ronaldo), <b>R</b>osália(Rosalia), <b>R</b>osa(Rosa), <b>R</b>ogério(Rogelio),
                    <b>R</b>io de Janeiro(Rio de Janeiro), Is<b>r</b>ael(Israel), Hen<b>r</b>ique(Henrique),
                    <b>r</b>ato(ratón), <b>r</b>oupa(ropa), en<b>r</b>olar(rizo), <b>r</b>ainha(reina),
                    <b>r</b>aiva(furia), <b>r</b>asgou(renta),
                    <b>r</b>osa(rosado), <b>r</b>ei(rey), <b>r</b>esto(descanso), <b>r</b>ua(calle),
                    <b>r</b>egião(región), <b>r</b>edonda(ronda), <b>r</b>io(río), <b>r</b>iacho(riachuelo/corriente),
                    <b>r</b>ussos(rusos), <b>r</b>ede(red).
                </p>
                <audio controls src="mp3/PORTUGUES-Consejo7.1.mp3"></audio>

                <p style="font-size:25px;">Cuando hay <b>RR</b> su pronunciación será igual a la <b>J</b> en
                    español:<br>
                    ca<b>rr</b>o(auto), ma<b>rr</b>om(marrón), ca<b>rr</b>oça(vagón), i<b>rr</b>itado(irritado),
                    cacho<b>rr</b>o(cachorro), ho<b>rr</b>oroso(horrible), ho<b>rr</b>ível(horrible),
                    na<b>rr</b>ar(narrar/contar), e<b>rr</b>o(error), co<b>rr</b>er(correr).</p>
                <audio controls src="mp3/PORTUGUES-Consejo7.2.mp3"></audio>
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
