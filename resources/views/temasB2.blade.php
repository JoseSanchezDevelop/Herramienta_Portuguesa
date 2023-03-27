<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="Description" content="Enter your description here"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!--Estilo de Letra-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Ropa+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        
        <!--ICONO PAG-->
        <link rel="shortcut icon" href="{{ asset('logoAPP-PG-DEF.png') }}" >

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
                    <img src="img/brasil-bandera.png" id="imgTemarios" alt="bandera_brasil" width="220px" class="responsive my-3 ">
                </div>
                <div class="col-12 col-md-6 col-lg-8">
                    <h1 class="mt-3" id="Titulo_Index" align="center" style="color: white; font-size:100px;">TEMAS NIVEL 4</h1>
                    <p align="center" style="color: white; font-size:30px; ">Nivel Intermedio Portugués</p>
                </div>
            </div>
            
        </div>

        <div class="container-fluid">

            <h2 style="font-weight:bold" class="my-4 text-center">TIEMPO EN PORTUGUÉS</h2><br>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-9 ">
                        <p style="font-size:25px;">Para poder indicar unidades de tiempo es necesario saber como expresarlas, escribirlas y pronunciarlas, ya que son realmente útiles para 
                        poder comunicar periodos importantes y horas. En esta sección encontrarás un listado de términos concisos sobre como expresar periodos de tiempo prolongados, 
                        festivos y de cómo realizar preguntas básicas sobre la hora y pegueños eventos.<br><br>

                        Para poder escuchar la pronunciación de las palabras que se encuentran en la imagen, puedes reproducir la pista de audio que se encuentra debajo de las imágenes de esta sección.
                        Recuerda que en estas lecciones se ven los aspectos y temas generales, por lo tanto, profundizar y estudiar es tu responsabilidad si deseas aprender portugués de forma fluida,
                        la disciplina y constancia nos ayudan a lograr nuestros objetivos. 

                        <br><br>
                        <b>O Tempo</b> = El Tiempo <br>
                        <b>O relógio</b> = (o reloj/ el reloj) <br>
                        <b>Segundo</b> = segundo <br>
                        <b>Minuto</b> = Minuto <br>
                        <b>Hora</b> = Hora <br>
                        <b>Dia</b> = día <br>
                        <b>Semana</b> = Semana <br>
                        <b>Fim de semana</b> = Fin de semana <br>
                        <b>Mês</b> = Mes <br>
                        <b>Ano</b> = Año <br>
                        </p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img src="img/Tiempo1Portugues.png" id="imgTiempo1" alt="tiempo_portugues" class="responsive">
                    <img src="img/Tiempo2Portugues.png" id="imgTiempo2" alt="tiempo_portugues" class="responsive">
                    <a href="https://www.youtube.com/watch?v=kt-BDkxcuqk" target="_blank">
                        <p style="font-size:20px; color:black;">Imágenes tomadas de <b>Clase de Portugués - Las horas</b>. </p>
                    </a>
                    <audio controls src="mp3/PORTUGUES-Tiempo1.1.mp3"></audio>
                </div>
            </div>

        </div>
            
        <br><br>

        <div class="container-fluid" style="background-color:#F8F8F8">
        
            <br><br>

            

            <div class="row">
                <div class="col-12 col-md-6 col-lg-3 text-center">
                    <img src="img/Tiempo3Portugues.png" id="imgTiempo3" alt="tiempo_portugues" class="responsive">
                    <img src="img/Tiempo4Portugues.png" id="imgTiempo4" alt="tiempo_portugues" class="responsive">
                    <a href="https://www.youtube.com/watch?v=kt-BDkxcuqk" target="_blank">
                        <p style="font-size:20px; color:black;">Imágenes tomadas de <b>Clase de Portugués - Las horas</b>. </p>
                    </a>
                    <audio controls src="mp3/PORTUGUES-Tiempo1.2.mp3"></audio>
                </div>
                <div class="col-12 col-md-6 col-lg-9 ">
                    <p style="font-size:25px;">Por otra parte, en esta sección, la cual es complementaria con el tiempo en portugués, podrás observar como se escriben y exprean las horas de forma específica,
                    junto con su respectiva traducción para que puedas repasar y estudiar de manera clara y concisa el cómo decir horas determinadas en portugués. <br><br>

                    Puedes escuchar la pronunciación de las palabras en el listado en el audio que se encuentra bajo las imágenes y su referencia.
                    </p>
                </div>
            </div> 
            
            <br><br>

        </div>

        <div class="container-fluid">

            <h2 style="font-weight:bold" class="my-4 text-center">NÚMEROS ORDINALES EN PORTUGUÉS</h2><br>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-7 ">
                        <p style="font-size:25px;">En ese apartado veremos como tal los <b>NÚMEROS ORDINALES</b> en el idioma <b>PORTUGUÉS</b>, los cuales se utilizan para 
                        ordenar términos, objetos, personas y acontecimientos entre otros, de forma secuencial y específica. Cabe resaltar que los númeors ordinales varían en 
                        género y enumeración. <br><br>

                        En las imágenes podrás encontrar los números ordinales con su respectiva traducción y bajo estas un audio con su pronunciación fonética 
                        en portugués.
                        </p>
                </div>
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <img src="img/ordinales1Portugues.png" id="imgOrdinales1" alt="ordinales_portugues" class="responsive">
                    <img src="img/ordinales2Portugues.png" id="imgOrdinales2" alt="ordinales_portugues" class="responsive">
                    <img src="img/ordinales3Portugues.png" id="imgOrdinales3" alt="ordinales_portugues" class="responsive">
                    <img src="img/ordinales4Portugues.png" id="imgOrdinales4" alt="ordinales_portugues" class="responsive">
                    <a href="https://profebr.blogspot.com/2018/06/ordinais.html" target="_blank">
                        <p style="font-size:20px; color:black;">Imágenes tomadas de <b>HABLEMOS DE PORTUGUÉS DE BRASIL: Números Ordinales</b>. </p>
                    </a>
                    <audio controls src="mp3/PORTUGUES-NumOrdinales.mp3"></audio>
                </div>
            </div>

        </div>
            
        <br><br>

        <div class="container-fluid" style="background-color:#F8F8F8">
        
            <br>

            <h2 style="font-weight:bold" class="my-4 text-center">VOCABULARIO EN PORTUGUÉS</h2>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <img src="img/vocabularioPortugues.png" id="imgVoc" alt="voc_portugues" class="responsive">
                    <a href="https://ar.pinterest.com/pin/476748310550753963/" target="_blank">
                        <p style="font-size:20px; color:black;">Imagen tomada de <b>Pin en Aprender portugués / Língua Portuguesa</b>. </p>
                    </a>
                    <audio controls src="mp3/PORTUGUES-Voc2.mp3"></audio>
                </div>
                <div class="col-12 col-md-6 col-lg-7 ">
                    <p style="font-size:25px;">Aquí encontrarás un pequeño listado de unas de las palabras más comunes y básicas del portugués para así aprender,
                    repasar y estudiar el vocabulario de dicha lengua para fines prácticos y útiles de aprendizaje. <br><br>

                    En el audio que se encuentra bajo la imagen podrás escuchar la pronunciación fonética de las palabras contenidas en el listado.
                    </p>
                </div>
            </div> 
        
            <br><br>

        </div>

        <div class="container-fluid">

            <h2 style="font-weight:bold" class="my-4 text-center">MIEMBROS DE LA FAMILIA EN PORTUGUÉS</h2><br>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-7 ">
                        <p style="font-size:25px;">Aquí encontrarás una lista general, clara y concisa de como se expresan, escriben y pronuncian los miembros de la familia en el 
                        idioma portugués. No obstante, estas son otras palabras para expresar miembros de la familia más extensos que no se encuentran en la imagen: <br><br>

                        <b>Padrasto</b> = Padrastro <br>
                        <b>Madrasta</b> = Madrastra <br>
                        <b>Neto</b> = Nieto <br>
                        <b>Neta</b> = Nieta <br>
                        <b>Garoto</b> = chico <br>
                        <b>Garota</b> = chica <br>
                        <b>Sogro</b> = Suegro <br>
                        <b>Sogra</b> = Suegra <br>

                        <br><br>
                        En el audio que se encuentra bajo la imagen podrás escuchar la pronunciación fonética de las palabras en esta sección.
                        </p>
                </div>
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <img src="img/familiaPortugues.jpg" id="imgFamilia" alt="familia_portugues" class="responsive">
                    <a href="https://cerebralia.com/portugues/vocabulario/familia" target="_blank">
                        <p style="font-size:20px; color:black;">Imagen tomada de <b>🥇【 VOCABULARIO DE LA FAMILIA EN PORTUGUÉS 】✔️</b>. </p>
                    </a>
                    <audio controls src="mp3/PORTUGUES-Familia.mp3"></audio>
                </div>
            </div>

        </div>
            
        <br><br>

        <div class="container-fluid" style="background-color:#F8F8F8">
        
            <br>

            <h2 style="font-weight:bold" class="my-4 text-center">CONSEJOS DE FONÉTICA EN PORTUGUÉS</h2><br>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <img src="img/PORTUGUES-Consejos8.jpg" id="imgPCF8" alt="consejo_portugues" class="responsive">
                    
                    <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 12</b>. </p>
        
                
                </div>
                <div class="col-12 col-md-6 col-lg-7 ">
                    <p style="font-size:25px;"><b>8.</b> Cuando la letra <b>S</b> es inicial en una palabra, seguida de una vocal y antecedida por consonante, su pronunciación será 
                    la misma que en español. Por ejemplo:<br><br>
                    
                    <b>S</b>andra(Sandra), <b>s</b>elva(selva), <b>s</b>ítio(lugar), <b>s</b>ola(único/suela), <b>s</b>ó(solo), inver<b>s</b>o(contrarrestar), en<b>s</b>opado(estofado), in<b>s</b>ano(loco), ar<b>s</b>enal(arsenal), <b>s</b>usto(susto) </p>

                    <audio controls src="mp3/PORTUGUES-Consejos8.1.mp3"></audio><br><br>
                
                    <p style="font-size:25px;"> Sin embargo, la <b>S</b> simple intervocal tiene el sonido de la <b>[ Z ]</b>: <br>
                    a<b>s</b>a(ala), mú<b>s</b>ica(música), te<b>s</b>oura(tijeras), u<b>s</b>ura(usura), ca<b>s</b>a(casa), mi<b>s</b>ericórdia(compasión), blu<b>s</b>a(camisa), fi<b>s</b>ioterapia(fisioterapia) </p>

                    <audio controls src="mp3/PORTUGUES-Consejos8.2.mp3"></audio><br><br>
                
                    <p style="font-size:25px;">la <b>SS</b> intervocal es suave, igual al sonido de la <b>ç</b>: <br>
                    a<b>ss</b>ado(asar), pa<b>ss</b>eio(recorrido), a<b>ss</b>íduo(asiduo), pe<b>ss</b>oas(gente), a<b>ss</b>unto(tema en cuestion/asunto), pe<b>ss</b>oalmente(personalmente). 
                    </p>

                    <audio controls src="mp3/PORTUGUES-Consejos8.3.mp3"></audio><br><br>
                </div>
            </div> 
        
            <br><br>

        </div>

        <div class="container-fluid">

            <br><br>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-7 ">
                        <p style="font-size:25px;"><b>9.</b> la <b>Cedilla</b> es un signó gráfico que acompaña la letra <b>C (ç)</b>, utilizado antes de las vocales 
                        <b>A, O y U</b>. Su pronunciación es similar a la pronunciación de la <b>[ S ]</b> en español. <br><br>

                        can<b>ç</b>ão(canción), a<b>ç</b>ão(acción), a<b>ç</b>ougue(carnicería), esperan<b>ç</b>a(esperanza), crian<b>ç</b>a(niño), ra<b>ç</b>a(raza), bagun<b>ç</b>a(lío), pregui<b>ç</b>a(pereza), seguran<b>ç</b>a(seguridad), a<b>ç</b>o(acero).
                        </p>
                        <audio controls src="mp3/PORTUGUES-Consejos9.mp3"></audio>
                </div>
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <img src="img/PORTUGUES-Consejos9.jpg" id="imgPCF9" alt="consejo_portugues" class="responsive">
                    
                    <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 13</b>. </p>

                    
                </div>
            </div>

        </div>
            
        <br><br>

        <!--FOOTER-->
        <footer class="container-fluid bg-dark py-5 " align="center">
            
            <a href="https://www.uts.edu.co/sitio/" target="_blank">
                <img src="img/UTSescudo.jpg" alt="Escudo_Uts" width="120px" style="border:1px solid black; border-radius: 10px;">
                <h2 class="mt-4" style="color:white;">TODOS LOS DERECHOS RESERVADOS UNIDADES TECNOLÓGICAS DE SANTANDER</h2>
            </a>
            <a href="https://www.google.com/maps/place/Unidades+Tecnol%C3%B3gicas+de+Santander/@7.1049697,-73.1243264,18z/data=!4m12!1m6!3m5!1s0x8e683fc8a8b0973f:0x5f50c91e41f0ac6e!2sUnidades+Tecnol%C3%B3gicas+de+Santander!8m2!3d7.1049884!4d-73.1238068!3m4!1s0x8e683fc8a8b0973f:0x5f50c91e41f0ac6e!8m2!3d7.1049884!4d-73.1238068" target="_blank">
                <h3 class="mt-1" style="color:white;">BUCARAMANGA, SANTANDER</h3>
            </a>    
                <h4 class="mt-1" style="color:white;">2023</h4>
            

        </footer>

        <!--JS PROPIO (!!!DEBE IR AQUÍ PARA QUE EL SCROLLUP FUNCIONE!!!)-->
        <script src="js/script.js"></script>
        
    </body>
</html>