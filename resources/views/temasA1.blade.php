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
                    <li class="nav-item ">
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
                <h1 class="mt-3" id="Titulo_Index" align="center" style="color: white; font-size:100px;">TEMAS NIVEL 1
                </h1>
                <p align="center" style="color: white; font-size:30px; ">Nivel Básico Portugués</p>
            </div>
        </div>

    </div>


    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">ABECEDARIO EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">Con base en el Acuerdo Ortográfico de la Lengua Portuguesa de 1990, el
                    alfabeto portugués consta de 26 letras. Las letras K, W e Y son letras extranjeras introducidas al
                    idioma. <br>
                    Otro aspecto a tener en cuenta son los acentos que se deben de entonar según los símbolos
                    linguísticos que tienen algunas letras.<br><br>
                    En el audio que se encuentra al pie de la imagen podrás escuchar la pronunciación fonética de cada
                    letra del alfabeto en portugués.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/abecedarioPortugues.jpg" id="imgABC" alt="abecedario_portugues" class="responsive">
                <a href="https://proyectoeducere.wordpress.com/2019/08/05/curso-basico-de-portugues-o-alfabeto/"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Curso Básico de Portugués: O
                            alfabeto</b>. </p>
                </a>
                <audio controls src="mp3/abc-portugues-pronunciacion.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <h2 style="font-weight:bold" class="my-4 text-center">ACENTOS EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/Acentos-Portugues.png" id="imgAcentos1" alt="acentos_portugues" class="responsive">
                <a href="https://www.passeidireto.com/arquivo/91698751/acento-assento-portugues" target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>acento-assento-português -
                            Português</b>. </p>
                </a>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>á Acento Agudo = </b> Indica un sonido abierto, que una vocal es cerrada,
                    con tono elevado, que es largo o que la sílaba está acentuda.<br>
                    <b>à Acento Grave = </b> No cambia el sonido de la vocal. Indica la contracción de 2 palabras, se
                    usa para indicar énfasis o una pronunciación especial.<br>
                    <b>ã Acento Til = </b> Sonido nasal. Conocido también como virgulilla, indica una pronunciación más
                    nasal.<br>
                    <b>â Acento Circunflexo = </b> Sonido nasal. Indica que la vocal tiene un sonido largo.<br>
                    <b>ç Cedilla = </b> Aunque no es un acento, indica un sonido equivalente a la S.
                </p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">EXPRESIONES COTIDIANAS EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">Entre las expresiones cotidianas más básicas y generales del protugués,
                    podemos encontrar saludos, preguntas sencillas y despedidas.<br><br>
                    En el audio que se encuentra al pie de la imagen podrás escuchar la pronunciación fonética de
                    algunas de las expresiones cotidianas más usadas en portugués.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/ExpresionesCotidianas1-Portugues.png" id="imgExpCot1" alt="ExpCot_portugues"
                    class="responsive">
                <a href="https://es.scribd.com/document/451062535/Tutorial-De-Las-Presentaciones-en-portugues#"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Tutorial de Las Presentaciones en
                            Portugués</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-ExpresionesCotidianas.mp3"></audio>
            </div>
        </div>

        <br><br>

    </div>


    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <h2 style="font-weight:bold" class="my-4 text-center">FRASES ÚTILES EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/FrasesUtiles-Portugues.png" id="imgFrasesUtiles" alt="frasesUtiles_portugues"
                    class="responsive">
                <a href="https://es.scribd.com/document/451062535/Tutorial-De-Las-Presentaciones-en-portugues#"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Tutorial de Las Presentaciones en
                            Portugués</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-FrasesUtiles.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">En esta sección encontrarás algunas palabras que te pueden ser útiles a la
                    hora de realizar o pedir indicaciones de manera sencilla en portugués, con su respectiva traducción
                    y pronunciación.<br><br>
                    En la pista de audio debajo de la imagen podras escuchar la pronunciación de las frases que se
                    aprecian en el listado.</p>
            </div>
        </div>

        <br><br>

    </div>


    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">SALUDOS EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-9 ">
                <p style="font-size:25px;">A continuación te presentamos una lista de saludos y expresiones genrales
                    para poder entablar una pequeña conversación en portugués.<br><br>
                    En el audio que se encuentra al pie de la imagen podrás escuchar la pronunciación fonética de las
                    palabras en el listado.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <img src="img/Saludos1-Portugues.png" id="imgSaludos1" alt="Saludos1_portugues" class="responsive">
                <img src="img/Saludos2-Portugues.png" id="imgSaludos2" alt="Saludos2_portugues"
                    class="responsive"><br><br>
                <a href="https://www.pinterest.es/lpezcaballero/portugu%C3%AAs/" target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>270 ideas de Português en 2023 |
                            palabras en portugues, lengua portuguesa, idioma portugues</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Saludos.mp3"></audio>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br>

        <h2 style="font-weight:bold" class="my-4 text-center">DESPEDIDAS EN PORTUGUÉS</h2>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/Despedidas1-Portugues.png" id="imgDespedidas" alt="despedidas_portugues"
                    class="responsive">
                <a href="https://twitter.com/SotakyOficial" target="_blank">
                    <p style="font-size:20px; color:black;">Imagen tomada de <b>Sotaky (@SotakyOficial) / Twitter</b>.
                    </p>
                </a>
                <audio controls src="mp3/PORTUGUES-DespedidasFormales.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">Sirven para cerrar una conversación de forma adecuada y pertinente, son
                    parte del vocabulario básico y son fáciles de aprender.<br><br>
                    En la pista de audio debajo de la imagen podras escuchar la pronunciación de las frases que se
                    aprecian en el listado.</p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">CONSEJOS DE FONÉTICA EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>1.</b> Cuando la vocal <b>E</b> se encuentre al final de las palabras, se
                    debe pronunciar como una <b>[ i ]</b>. Por ejemplo: <br>
                    Alic<b>e</b>(Alicia), Lilian<b>e</b>(Liliana), Simon<b>e</b>(Simone), alfac<b>e</b>(lechuga),
                    alegr<b>e</b>(feliz), crem<b>e</b>(crema), del<b>e</b>(su), doc<b>e</b>(caramelo),
                    grand<b>e</b>(grande), nom<b>e</b>(nombre), sobrenom<b>e</b>(apellido).</p>
                <audio controls src="mp3/PORTUGUES-Consejos1.1.mp3"></audio><br><br>
                <p style="font-size:25px;">Sin embargo, si esa vocal se encuentra acentuada, su pronunciación será
                    distinta (se pronunciará como la <b>E</b> con el acento gráfico correspondiente): <br>
                    Pel<b>é</b>(Piel), cad<b>ê</b>(Dónde está), Tom<b>é</b>(a mi), p<b>é</b>(pie), voc<b>ê</b>(usted),
                    caf<b>é</b>(café), ip<b>ê</b>(ipe), f<b>é</b>(fe).</p>
                <audio controls src="mp3/PORTUGUES-Consejos1.2.mp3"></audio><br><br>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos1.png" id="imgPCF1" alt="consejos1_portugues" class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 11</b>. </p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos2.png" id="imgPCF2" alt="consejos2_portugues" class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 11</b>. </p>

            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>2.</b> Cuando la vocal <b>O</b> esta al final de las palabras, será
                    pronunciada como <b>[ u ]</b>. Por ejemplo: <br>
                    sapat<b>o</b>(zapato), Lobat<b>o</b>(Lobato|hombre-lobo), segur<b>o</b>(seguro), barc<b>o</b>(bote),
                    prat<b>o</b>(plato), cont<b>o</b>s(cuentos), famos<b>o</b>s(famoso), fat<b>o</b>(hecho),
                    gat<b>o</b>(gato), muit<b>o</b>(mucho), port<b>o</b>(puerto)</p>
                <audio controls src="mp3/PORTUGUES-Consejos2.1.mp3"></audio>
                <p style="font-size:25px;">Sin embargo, si esa vocal se encuentra acentuada, se pronunciará diferente
                    (se pornunciará como la <b>O</b> con el acento gráfico correspondiente): <br>
                    Macei<b>ó</b>(Maceió), carimb<b>ó</b>(estampilla), cip<b>ó</b>(enredadera), d<b>ó</b>(del),
                    jil<b>ó</b>(berenjena escarlata), p<b>ó</b>(polvo), vov<b>ó</b>(abuelo), vov<b>ô</b>(abuelo|abuela)
                </p>
                <audio controls src="mp3/PORTUGUES-Consejos2.2.mp3"></audio>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <br><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>3.</b> El sonido de la <b>J(y) - Jota</b> es diferente en portugués, por
                    ejemplo:<br>
                    <b>J</b>udite(Judith), <b>J</b>uliana(Juliana), <b>J</b>oel(Joel), <b>j</b>antar(cena),
                    <b>j</b>untos(juntos), <b>j</b>anela(ventana), <b>j</b>aneiro(enero), <b>j</b>ovem(joven),
                    <b>j</b>ogo(juego), <b>j</b>ustamente(precisamente), <b>j</b>oia(joya), <b>j</b>usto(justo),
                    <b>j</b>ornal(periódico), <b>j</b>ustiça(justicia), <b>j</b>ardim(jardín),
                    acara<b>j</b>é(acarajé|plato o receta tradicional).
                </p>
                <audio controls src="mp3/PORTUGUES-Consejos3.mp3"></audio><br><br>
                <br><br>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos3.png" id="imgPCF3" alt="consejos3_portugues" class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 11</b>. </p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos4.png" id="imgPCF4" alt="consejos4_portugues" class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 11</b>. </p>

            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>4.</b> Los dígrafos son dos letras, que unidas representan un solo sonido
                    o valor fonético.<br>
                    El sonido de <b>lh (li)</b>. <br>
                    o<b>lh</b>ar(mirar), verme<b>lh</b>a(rojo), me<b>lh</b>or(mejor), fi<b>lh</b>ote(cachorro),
                    ove<b>lh</b>a(oveja), fo<b>lh</b>a(lámina), ju<b>lh</b>o(julio), maravi<b>lh</b>a(maravilloso),
                    ve<b>lh</b>a(antiguo), ore<b>lh</b>a(oído), pi<b>lh</b>a(pila|batería).</p>
                <audio controls src="mp3/PORTUGUES-Consejos4.1.mp3"></audio>
                <p style="font-size:25px;">El sonido de <b>nh (ñ)</b>. <br>
                    se<b>nh</b>or(señor), cami<b>nh</b>o(camino), gali<b>nh</b>a(gallina), ju<b>nh</b>o(junio),
                    ni<b>nh</b>o(niño), ma<b>nh</b>ã(mañana), pamo<b>nh</b>a(engañar), mi<b>nh</b>a(mía),
                    ma<b>nh</b>a(mañana), enge<b>nh</b>eiro(ingeniero).</p>
                <audio controls src="mp3/PORTUGUES-Consejos4.2.mp3"></audio>
                <p style="font-size:25px;">El sonido de <b>ch (sh)</b>. <br>
                    a<b>ch</b>ar(pensar), <b>ch</b>eiro(oler), <b>ch</b>inelo(chancletas), ca<b>ch</b>orro(cachorro),
                    <b>ch</b>uva(lluvia), <b>ch</b>á(té), en<b>ch</b>ente(inundación), <b>ch</b>iclete(chicle),
                    <b>ch</b>ocolate(chocolate), <b>ch</b>u<b>ch</b>u(chayote).
                </p>
                <audio controls src="mp3/PORTUGUES-Consejos4.3.mp3"></audio>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <br><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>5.</b> La letra <b>L</b> al final de las sílabas se pronuncia como <b>[ u
                        ]</b>, por ejemplo:<br>
                    A<b>l</b>berto(Alberto), Brasi<b>l</b>(Brasil), Gabrie<b>l</b>(Gabriel), Gera<b>l</b>do(Gerardo),
                    Isabe<b>l</b>(Isabel), ane<b>l</b>(anillo), me<b>l</b>(miel), alugue<b>l</b>(renta),
                    fa<b>l</b>ta(falta|ausencia), a<b>l</b>to(alto|elevado), a<b>l</b>manaque(almanaque|calendario),
                    principa<b>l</b>(principal), fina<b>l</b>(final|último), casa<b>l</b>(pareja), ca<b>l</b>ma(calmar),
                    anima<b>l</b>(animal), latera<b>l</b>(lado), sina<b>l</b>(señal), pape<b>l</b>(papel).</p>
                <audio controls src="mp3/PORTUGUES-Consejos5.mp3"></audio><br><br>
                <br><br>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos5.png" id="imgPCF5" alt="consejos5_portugues" class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 12</b>. </p>
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
