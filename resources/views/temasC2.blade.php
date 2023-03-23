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


    <div class="container-fluid py-1" id="Header_Index">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-4 text-center">
                <img src="img/brasil-bandera.png" id="imgTemarios" alt="bandera_brasil" width="220px"
                    class="responsive my-3 ">
            </div>
            <div class="col-12 col-md-6 col-lg-8">
                <h1 class="mt-3" id="Titulo_Index" align="center" style="color: white; font-size:100px;">TEMAS NIVEL 6
                </h1>
                <p align="center" style="color: white; font-size:30px; ">Nivel Avanzado Portugués</p>
            </div>
        </div>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">SIGNOS DEL ZODIACO EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">En este apartado específico podrás conocer como tal la temática relacionada a
                    los signos del zodiaco en portugués, desde
                    escritura y estructura gramatical hasta la pronunciación fonética de los signos listados en la
                    imagen. <br><br>

                    En la pista de audio que se encuentra bajo la imagen puedes escuchar la pronunciación fonética de
                    las palabras en el listado.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-SignosZod.jpg" id="imgZodiaco" alt="zodiaco_portugues" class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 21</b>. </p>
                <audio controls src="mp3/PORTUGUES-Zodiaco.mp3"></audio>
            </div>
        </div>

    </div>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br><br>

        <h2 style="font-weight:bold" class="my-4 text-center">MODISMOS EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Modismos1.jpg" id="imgModismos" alt="modismos_portugues" class="responsive">
                <a href="https://www.pinterest.cl/pin/pin-en-instagram-info--275071489730946252/" target="_blank">
                    <p style="font-size:20px; color:black;">Imágenes tomadas de <b>Pin en instagram info</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Modismos.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">Cuando se desea expresar alguna idea o situación por medio de refranes o
                    dichos puedes utilizar las siguientes estructruas gramaticales en
                    portugués: <br><br>

                    <b>- Comprar gato por lebre. </b> (Que te den gato por liebre), <b>significado:</b> que te engañen.
                    <br><br>

                    <b>- Fazer alguém de gato e sapato. </b> (Hacer de alguien gato y zapato), <b>significado:</b> jugar
                    con las emociones o humillar a alguien. <br><br>

                    <b>- Matar dois coelhos com uma tacada / cajadada só</b> (Matar dos conejos de una tacada),
                    <b>equivalente:</b> matar dos pájaros de un tiro. <br><br>

                    <b>- Cavalo dado não se olha os dentes. Equivalente:</b> a caballo regalado no se le miran los
                    dientes. <br><br>

                    <b>- Andar com o nariz empinado. </b> (Caminar con la nariz alta), <b>significado:</b> ser
                    prepotente. <br><br>

                    <b>- Acertar na mosca. </b> (dar a la mosca.), <b>Equivalente:</b> dar en el clavo. <br><br>

                    <b>- Procurar pelo em ovo. </b> (buscar un pelo en un huevo), <b>significado:</b> buscar problemas
                    donde no los hay. <br><br>

                    <b>- Chutar o pau da barraca. </b> (darle una patada al palo que sujeta la tienda),
                    <b>equivalente:</b> tirar la toalla. <br><br>

                    <b>- Enfiar o pé na jaca. </b> (meter el pie en la jaca), <b>significado:</b> emborracharse
                    muchísimo hasta que sea un desastre. <br><br>

                    <b>- Quebrar o galho. </b> (romper la rama), <b>significado:</b> hacerle un pequeño favor a alguien,
                    normalmente a un amigo. <br><br>

                    <b>- Cara de pau. </b> (cara de madera), <b>significado:</b> una persona desvergonzada. <br><br>

                    <b>- Encher linguiça. </b> (rellenar una salchicha), <b>significado:</b> hablar mucho sin decir
                    realmente nada. <br><br>

                    <b>- Bater as botas. </b> (sacudir las botas), <b>equivalente:</b> estirar la pata.
                </p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">VOCABULARIO DE APOYO TELEFÓNICO EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>fone</b> = teléfono. <br>
                    <b>trote</b> = llamada de broma. <br>
                    <b>deixar recado</b> = deja un mensaje. <br>
                    <b>fora do gancho</b> = fuera del ganch. <br>
                    <b>a cobrar</b> = para recoger. <br>
                    <b>discar</b> = marcar. <br>
                    <b>engano</b> = error. <br>
                    <b>orelhão</b> = teléfono público. <br>
                    <b>ligação</b> = enlace / llamada <br>
                    <b>desligar</b> = apagar. <br>
                    <b>ligação cruzada</b> = enlace / llamada cruzado(a) <br>
                    <b>ligação interurbana (DDD)</b> = llamada de larga distancia. <br>
                    <b>ligação internacional (DDI)</b> = llamada internacional. <br>
                    <b>bater o telefone na cara de alguém</b> = golpear el teléfono en la cara de alguien. <br>
                    <b>atender</b> = reunirse. <br>
                    <b>viva-voz</b> = voz viva. <br>
                    <b>cair a ligação</b> = dejar la llamada. <br>
                    <b>estar ocupado</b> = estar ocupado. <br>
                    <b>lista telefônica</b> = lista telefónica. <br>
                    <b>cartão telefônico</b> = tarjeta telefónica. <br><br>

                    <b>PRÁCTICA OPCIONAL</b> <br><br>

                    Elige tres de las situaciones de abajo y converse con un amigo o colega. <br><br>

                    - Llama a un amigo con el fin de pactar una cena, una reunión. <br>
                    - Llamada cruzada. <br>
                    - Hacer una llamada de broma. <br>
                    - Dejar un mensaje a alguien con la secretaria electrónica. <br>
                    - LLamar a un pariente / familiar que esté viviendo en Brasil con el fin de que el le cuente como es
                    su vida. <br><br><br>

                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-VocApoyo.jpg" id="imgVocApoyo" alt="apoyo_portugues" class="responsive">

                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 61</b>. </p>
                <audio controls src="mp3/PORTUGUES-VocApoyo4.mp3"></audio>
            </div>
        </div>

    </div>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br><br>

        <h2 style="font-weight:bold" class="my-4 text-center">CONSEJOS DE FONÉTICA EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos12.jpg" id="imgPCF12" alt="consejos_portugues" class="responsive">
                <p style="font-size:20px">Imágenes tomadas del libro <b>O Brasil é AQUI P1, 2011, páginas 53 y 54</b>.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>12.</b> Las letras <B>T + i</B> serán pronunciadas y tendrán el sonido de
                    <b>/ CHI /</b> en español: <br><br>

                    <b>Ti</b>ago(Tiago), Ta<b>ti</b>ana(Tatiana), <b>ti</b>o(tio), <b>tí</b>mido(tímido),
                    mar<b>tí</b>rio(martirio), ar<b>ti</b>go(artículo), men<b>ti</b>ra(mentir), <b>ti</b>nta(tinta).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos12.1.mp3"></audio><br><br>

                <p style="font-size:25px;">
                    <b>11.1</b> Las letras <b>T + e y + es</b> en las sílabas finales también serán pronunciadas con el
                    sonido de la <b>/ CHI /</b> en español: <br><br>

                    geralmen<b>te</b>(normalmente), an<b>tes</b>(antes), pen<b>te</b>(peine), den<b>te</b>(dientes),
                    lei<b>te</b>(leche), quen<b>te</b>(caliente), pon<b>te</b>(puente),
                    presen<b>te</b>(regalo/presente), sen<b>te</b>(sentir), visitan<b>tes</b>(visitantes),
                    fren<b>te</b>(al frente/de frente/ parte delantera), for<b>te</b>(fuerte),
                    somen<b>te</b>(solo/solamente), gen<b>te</b>(gente), duran<b>te</b>(durante),
                    fon<b>tes</b>(fuentes), paren<b>tes</b>(parientes), doen<b>te</b>(enfermo).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos12.2.mp3"></audio><br><br>

                <p style="font-size:25px;">
                    <b>12.1</b> Las letras <b>D + i</b> serán pronunciadas con el sonido de la <b>/ DYI /</b> en
                    español: <br><br>

                    <b>Di</b>ana(Diana), <b>di</b>cas(consejos/pistas), <b>di</b>amante(diamante),
                    <b>di</b>nheiro(dinero).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos12.3.mp3"></audio><br><br>

                <p style="font-size:25px;">
                    <b>12.1</b> Las letras <b>D + e y + es</b> serán pronunciadas con el sonido de la <b>/ DYI /</b> en
                    español al estar al final de las palabras: <br><br>

                    igualda<b>de</b>(igualdad), universida<b>de</b>(universidad), fidelida<b>de</b>(fidelidad),
                    sauda<b>de</b>(desaparecidos), felicida<b>de</b>(felicidad), lealda<b>de</b>(lealtad),
                    on<b>de</b>(donde), verda<b>de</b>(verdad), virtu<b>de</b>(virtud), po<b>de</b>(él puede/poder),
                    cida<b>de</b>(ciudad), ida<b>de</b>(edad/años).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos12.4.mp3"></audio><br><br>

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
