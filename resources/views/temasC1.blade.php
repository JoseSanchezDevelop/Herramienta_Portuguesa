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
                <h1 class="mt-3" id="Titulo_Index" align="center" style="color: white; font-size:100px;">TEMAS NIVEL 5
                </h1>
                <p align="center" style="color: white; font-size:30px; ">Nivel Avanzado Portugués</p>
            </div>
        </div>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">ALIMENTOS EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">En esta sección, veremos como tal todo lo relacionado a los alimentos,
                    vegetales, postres y condimentos en portugués con el fin de
                    aumentar y expandir el vocabulario en este idioma. <br><br>

                    <b>O Arroz</b> = El Arroz<br>
                    <b>O Açúcar</b> = El Azúcar<br>
                    <b>A Batata frita</b> = La Papa Frita<br>
                    <b>O Cereal</b> = El Cereal<br>
                    <b>O Chocolate em pó</b> = El Chocolate en Polvo<br>
                    <b>O Presunto</b> = El Jamón<br>
                    <b>A Gemada</b> = El Ponche de Huevo<br>
                    <b>O Leite</b> = La Leche<br>
                    <b>A Manteiga</b> = La Manteca <br>
                    <b>A Margarina</b> = La Margarina <br>
                    <b>O Macarrão</b> = La Pasta<br>
                    <b>O ovo</b> = El Huevo <br>
                    <b>O Pão</b> = El Pan <br>
                    <b>O Queijo</b> = El Queso <br>
                    <b>A Pipoca</b> = La Crispeta / Palomitas de Maíz <br>
                    <b>A Ambrosia</b> = La Ambrosía <br>
                    <b>O Beijinho</b> = El Beso <br>
                    <b>O Bolo</b> = La Torta <br>
                    <b>O Brigadeiro</b> = El Brigader <br>
                    <b>A Cocada</b> = La Cocada <br>
                    <b>O flã</b> = El Flan <br>
                    <b>O Picolé</b> = La Paleta <br>
                    <b>O Quindim</b> = El Quindim <br>
                    <b>O Rocambole</b> = El Roscón <br>
                    <b>O Sorvete</b> = El Helado <br><br>

                    Puedes escuchar la pronunciación fonética de los alimentos en el audio que se encuentra debajo de
                    las imágenes y su respectiva referencia.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Alimentos1.jpg" id="imgAlimentos1" alt="alimentos_portugues" class="responsive">
                <img src="img/PORTUGUES-Alimentos2.jpg" id="imgAlimentos2" alt="alimentos_portugues" class="responsive">
                <p style="font-size:20px">Imágenes tomadas del libro <b>O Brasil é AQUI P1, 2011, página 55</b>. </p>
                <audio controls src="mp3/PORTUGUES-CV1.mp3"></audio>
            </div>
        </div>

    </div>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br><br>



        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Alimentos3.jpg" id="imgAlimentos3" alt="alimentos_portugues"
                    class="responsive">
                <img src="img/PORTUGUES-Alimentos4.jpg" id="imgAlimentos4" alt="alimentos_portugues"
                    class="responsive">
                <p style="font-size:20px">Imágenes tomadas del libro <b>O Brasil é AQUI P1, 2011, páginas 53 y 54</b>.
                </p>
                <audio controls src="mp3/PORTUGUES-CV2.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>O Açafrão</b> = El Azafrán <br>
                    <b>O Alho</b> = El Ajo <br>
                    <b>O Alecrim</b> = El Romero <br>
                    <b>O Azeite</b> = El Aceite de Oliva <br>
                    <b>O Azeite de Dendê</b> = El Aceite de Palma <br>
                    <b>A Cebola</b> = La cebolla <br>
                    <b>A Cebolinha</b> = Las Cebolletas <br>
                    <b>O Coentro</b> = El Cilantro <br>
                    <b>A Hortelã</b> = La Menta <br>
                    <b>O Ketchup</b> = El Ketchup <br>
                    <b>O Manjericão</b> = La Albahaca <br>
                    <b>A Maionese</b> = La Mayonesa <br>
                    <b>A Mostarda</b> = La Mostaza <br>
                    <b>A Noz-moscada</b> = La Nuez Moscada <br>
                    <b>O Óleo</b> = El Aceite <br>
                    <b>A Pimenta</b> = El Chile <br>
                    <b>O Sal</b> = La sal <br>
                    <b>A Salsa</b> = El Perejil <br>
                    <b>O Shoyu (Molho de soja)</b> = Salsa de Soya <br>
                    <b>O Vinagre</b> = El Vinagre <br>
                    <b>A Abóbora</b> = La Calabaza <br>
                    <b>A Abobrinha</b> = El Calabacín <br>
                    <b>A Alface</b> = La Lechuga <br>
                    <b>O Aipo ou Salsão</b> = El Apio <br>
                    <b>A Berinjela</b> = La Berenjena <br>
                    <b>A Beterraba</b> = La Remolacha <br>
                    <b>A Cenoura</b> = La Zanahoria <br>
                    <b>O Chuchu</b> = El Chayote <br>
                    <b>O Cogumelo</b> = El Hongo <br>
                    <b>A Couve</b> = La Col <br>
                    <b>A Couve-flor</b> = La Coliflor <br>
                    <b>A Ervilha</b> = El Guisante <br>
                    <b>O Espinafre</b> = La Espinaca <br>
                    <b>O Inhame</b> = El Ñame <br>
                    <b>O Jiló</b> = La Berenjena <br>
                    <b>A Mandioca</b> = La Yuca <br>
                    <b>O Milho</b> = El Maíz <br>
                    <b>O Palmito</b> = El Corazón de Palma <br>
                    <b>O Pepino</b> = El Pepino <br>
                    <b>O Pimentão</b> = El Pimiento <br>
                    <b>O Quiabo</b> = La Okra <br>
                    <b>O Rabanete</b> = El Rábano <br>
                    <b>O Repolho</b> = La Col / Repollo <br>
                    <b>O Tomate</b> = El Tomate <br>
                    <b>A Vagem</b> = La Vaina <br><br>

                    En la pista de audio que se encuentra bajo las imágenes puedes escuchar la pronunciació de las
                    palabras listadas.
                </p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">ROPA EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">En este apartado podrás observar tanto la escritura como la traducción y la
                    pronunciación fonética de algunas prendas de vestir en
                    portugués. <br><br>

                    <b>A Saia</b> = La Falda <br>
                    <b>As Calças</b> = Los Pantalones <br>
                    <b>O Casaco</b> = El Abrigo <br>
                    <b>O Colete</b> = El Chaleco <br>
                    <b>O Sobretudo</b> = El Abrigo <br>
                    <b>O Biquini</b> = El Biquini <br>
                    <b>O Cachecol</b> = La Bufanda <br>
                    <b>A Camiseta</b> = La Camiseta <br>
                    <b>A Camisa</b> = La Camisa <br>
                    <b>As Meias</b> = Las Medias / Calcetines <br>
                    <b>A Gravata</b> = La Corbata <br>
                    <b>As Botas</b> = Las Botas <br>
                    <b>O Suéter</b> = El Sueter / Abrigo <br>
                    <b>Os Chinelos</b> = Las Sandalias / Chanclas <br>
                    <b>Os Sapatos</b> = Los Zapatos <br><br>

                    Debajo de las imágenes encontrarás un audio donde puedes escuchar la pronunciación fonética de las
                    palabras que se encuentran en esta sección.
                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/ropaPortugues.jpg" id="imgRopa" alt="ropa_portugues" class="responsive">
                <a href="https://cerebralia.com/portugues/vocabulario/la-ropa" target="_blank">
                    <p style="font-size:20px; color:black;">Imágenes tomadas de <b>🥇【 VOCABULARIO DE LA ROPA EN
                            PORTUGUÉS 】✔️</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Ropa.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br><br>

        <h2 style="font-weight:bold" class="my-4 text-center">OBJETOS EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/objetosPortugues.png" id="imgObjetos" alt="objetos_portugues" class="responsive">
                <a href="https://www.twinkl.com.mx/resource/pt-t-c-7081-vocabulario-ilustrado-de-objetos-de-sala-de-aula-vocabulario-ilustrado-portuguese-portugues"
                    target="_blank">
                    <p style="font-size:20px; color:black;">Imágenes tomadas de <b>Vocabulário ilustrado de objetos de
                            sala de aula - Twinkl</b>. </p>
                </a>
                <audio controls src="mp3/PORTUGUES-Objetos.mp3"></audio>
            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">Para ampliar tu vocabulario en aspectos cotidianos, verás a continuación un
                    listado de palabras que contienen algunos objetos de un aula de clases,
                    donde encontrarás la escritura, traducción y pronunciación de dichas palabras en portugués. <br><br>

                    <b>Porta</b> = Puerta <br>
                    <b>Cadeira</b> = Silla <br>
                    <b>Mesa</b> = Mesa <br>
                    <b>Vestiário</b> = Perchero <br>
                    <b>Janela</b> = Ventana <br>
                    <b>Lixo</b> = Basura <br>
                    <b>Quadro Interativo</b> = Tablero Interactivo <br>
                    <b>Papel</b> = Papel <br>
                    <b>Computador</b> = Computador <br>
                    <b>Quadro</b> = Tablero <br>
                    <b>Livro</b> = Libro <br>
                    <b>Caderno de Exercicios</b> = Cuaderno de Ejercicios <br>
                    <b>Tesouras</b> = Tijeras <br>
                    <b>Canetas</b> = plumas / boligrafos / Lapiceros <br>
                    <b>Lápis</b> = lápiz <br>
                    <b>Prateleira</b> = Estante <br>
                    <b>Tinta</b> = Tinta <br>
                    <b>Borrocha</b> = Goma de borrar <br>
                    <b>Pincel</b> = Pincel <br>
                    <b>Gavetas</b> = Cajones <br><br>

                    Debajo de la imagen encontrarás un audio donde puedes escuchar la pronunciación fonética de las
                    palabras que se encuentran en esta sección.
                </p>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <h2 style="font-weight:bold" class="my-4 text-center">PROFESIONES EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;">En este módulo, el vocabulario de apoyo y aprendizaje corresponde como tal a
                    las profesiones en portugués, aquí encontrarás desde un listado con palabras
                    relacionadas al tema anteriormente dicho hasta la traducción y pronunciación fonética de las mismas.
                    <br><br>

                    <b>Advogado</b> = Abogado <br>
                    <b>Administrador</b> = Administrador <br>
                    <b>Analista Financeiro</b> = Analista Financiero <br>
                    <b>Agrônomo</b> = Agrónomo <br>
                    <b>Alfaiate</b> = Sastre <br>
                    <b>Arqueólogo</b> = Arqueólogo <br>
                    <b>Arquiteto</b> = Arquitecto <br>
                    <b>Ator / Atriz</b> = Actor / Actriz <br>
                    <b>Barbeiro</b> = Barbero <br>
                    <b>Bombeiro</b> = Bombero <br>
                    <b>Cabeleireira</b> = Peluquera / peluquero <br>
                    <b>Cantor(a)</b> = Cantante <br>
                    <b>Carteiro</b> = Cartero <br>
                    <b>Cientista</b> = Científico <br>
                    <b>Cobrador de Ônibus</b> = Cobrador de Bus <br>
                    <b>Comerciante</b> = Comerciante <br>
                    <b>Costureira</b> = Modista / Costurera <br>
                    <b>Contador</b> = Contador <br>
                    <b>Coveiro</b> = Sepulturero <br>
                    <b>Cozinheira</b> = Cocinera <br>
                    <b>Dentista</b> = Dentista <br>
                    <b>Despachante</b> = Agente de Carga / Empacador <br>
                    <b>Dona-de-casa</b> = Ama de casa <br>
                    <b>Economista</b> = Economista <br>
                    <b>Eletricista</b> = Electricista <br>
                    <b>Encanador</b> = Fontanero <br>
                    <b>Enfermeiro</b> = Enfermero <br>
                    <b>Engenheiro</b> = Ingeniero <br>
                    <b>Escritor</b> = Escritor <br>
                    <b>Farmacêutico</b> = Farmacéutico <br>
                    <b>Faxineira</b> = Aseadora / Señora de la Limpieza <br>
                    <b>Fotógrafo</b> = Fotógrafo <br>
                    <b>Garçom (Garçonete)</b> = Mesero / Mesera <br>
                    <b>Gerente</b> = Gerente <br>
                    <b>Goleiro</b> = Portero de Futbol <br>
                    <b>Jardineiro</b> = Jardinero <br>
                    <b>Jogador de Futebol</b> = Jugador de Futbol <br>
                    <b>Jornaleiro</b> = Vendedor de Periódicos <br>
                    <b>Jornalista</b> = Periodista <br>
                    <b>Locutor</b> = Locutor <br>
                    <b>Marceneiro</b> = Carpintero <br>
                    <b>Mecânico</b> = Mecánico <br>
                    <b>Motorista / Chofer</b> = Conductor / Chofer <br>
                    <b>Médico</b> = Médico <br>
                    <b>Moto Boy</b> = Motociclista / Mensajero <br>
                    <b>Músico</b> = Músico <br>
                    <b>Office Boy</b> = Oficinista <br>
                    <b>Pedreiro</b> = Albañil / Obrero <br>
                    <b>Piloto</b> = Piloto <br>
                    <b>Pintor</b> = Pintor <br>
                    <b>Policial</b> = Policía <br>
                    <b>Porteiro</b> = Portero <br>
                    <b>Psicólogo</b> = Psicólogo <br>
                    <b>Psiquiatra</b> = Psiquiatra <br>
                    <b>Professor</b> = Profesor <br>
                    <b>Publicitário</b> = Publicista <br>
                    <b>Reciclador / Catador</b> = Reciclador / Recolector de Reciclaje <br>
                    <b>Sapateiro</b> = Zapatero <br>
                    <b>Veterinário</b> = Veterinario <br>
                    <b>Vendedor</b> = Vendedor <br><br>

                    En la pista de audio que se encuentra al pie de la imagen podrás escuchar la pronunciación de todas
                    las palabras que se encuentran en este segmento.


                </p>
            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Profesiones.jpg" id="imgProfesiones" alt="profesiones_portugues"
                    class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 40</b>. </p>
                <audio controls src="mp3/PORTUGUES-Profesiones.mp3"></audio>
            </div>
        </div>

    </div>

    <br><br>

    <div class="container-fluid" style="background-color:#F8F8F8">

        <br><br>

        <h2 style="font-weight:bold" class="my-4 text-center">CONSEJOS DE FONÉTICA EN PORTUGUÉS</h2><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos10.jpg" id="imgPCF10" alt="consejos_portugues" class="responsive">
                <p style="font-size:20px">Imagen tomada del libro <b>O Brasil é AQUI P1, 2011, página 13</b>. </p>

            </div>
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>10.</b> la <b>Z</b> tiene un sonido fricativo fuerte. la <b>Z</b>, al
                    inicio de las palabras y cuando es intervocal tiene un sonido
                    semejante al inglés, más al final de las palabras es suave, tiene un sonido semejante a la <b>S</b>
                    en español. <br><br>

                    <b>Z</b>ero(cero), a<b>z</b>eite(aceite de oliva), co<b>z</b>inha(cocina), a<b>z</b>ar(mala suerte),
                    <b>z</b>ebra(cebra), feli<b>z</b>(feliz), rapa<b>z</b>(chico).
                </p>
                <audio controls src="mp3/PORTUGUES-Consejos10.mp3"></audio>
            </div>
        </div>

        <br><br>

    </div>

    <div class="container-fluid">

        <br><br>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-7 ">
                <p style="font-size:25px;"><b>11.</b> Letra <b>X</b>: <br><br>

                    <b>11.1</b> Al iniciar una palabra y después de la letra <b>N</b> tiene el sonido de <b>/ SH /</b>.
                    <br>
                    <b>x</b>ícara(taza), <b>x</b>arope(jarabe), en<b>x</b>ada(azada/azadón), en<b>x</b>ame(enjambre),
                    en<b>x</b>aqueca(migraña/jaqueca), en<b>x</b>aguar(enjuagar), en<b>x</b>ugar(seco/secar),
                    en<b>x</b>ergar(para ver), <b>x</b>ará(homónimo/tocallo/que tiene el mismo nombre).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos11.1.mp3"></audio><br><br>

                <p style="font-size:25px;"><b>11.2</b> Al final de las palabras tiene sonido de <b>/ KS /</b>. <br>
                    xero<b>x</b>(fotocopia), tóra<b>x</b>(tórax), láte<b>x</b>(látex), fa<b>x</b>(fax).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos11.2.mp3"></audio><br><br>

                <p style="font-size:25px;"><b>11.3</b> Al final de las sílabas tiene sonido de <b>/ S /</b>. <br>
                    e<b>x</b>cursão(excursión), e<b>x</b>cluir(excluir/eliminar), e<b>x</b>periência(experiencia),
                    e<b>x</b>pressão(expresión), e<b>x</b>traordinário(extraordinario),
                    e<b>x</b>travagante(extravagante), e<b>x</b>tra(extra), se<b>x</b>to(sexto), te<b>x</b>to(texto).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos11.3.mp3"></audio><br><br>

                <p style="font-size:25px;"><b>11.4</b> Cuando la <b>X</b> es intervocal, podrá tener cuatro
                    pronunciaciones: <br><br>

                    <b>a)</b> Con el sonido de <b>/ Z /</b>. <br>
                    e<b>x</b>agero(exagerar), e<b>x</b>ecutar(correr), e<b>x</b>emplo(ejemplo), e<b>x</b>igir(demanda).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos11.4.1.mp3"></audio><br><br>

                <p style="font-size:25px;"><b>b)</b> Con el sonido de <b>/ SH /</b>. <br>
                    ta<b>x</b>a(índice), li<b>x</b>o(basura), lu<b>x</b>o(lujo), me<b>x</b>er(mezclar),
                    ei<b>x</b>o(eje), bru<b>x</b>a(bruja), bai<b>x</b>o(bajo), cai<b>x</b>a(caja/cajero),
                    pei<b>x</b>e(pez), amei<b>x</b>a(ciruela), pai<b>x</b>ão(pasión), quei<b>x</b>o(barbilla).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos11.4.2.mp3"></audio><br><br>

                <p style="font-size:25px;"><b>c)</b> Con el sonido de <b>/ KS /</b>. <br>
                    fi<b>x</b>o(fijo), tá<b>x</b>i(taxi), flu<b>x</b>o(flujo), o<b>x</b>igênio(oxígeno),
                    tó<b>x</b>ico(tóxico), ne<b>x</b>o(nexo), a<b>x</b>ila(axila), a<b>x</b>ioma(axioma),
                    se<b>x</b>o(sexo), fle<b>x</b>ão(flexión), refle<b>x</b>o(reflexión).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos11.4.3.mp3"></audio><br><br>

                <p style="font-size:25px;"><b>c)</b> Con el sonido de <b>/ S /</b>. <br>
                    má<b>x</b>imo(máximo), pró<b>x</b>imo(próximo), trou<b>x</b>e(trajo), au<b>x</b>ílio(ayuda).
                </p>

                <audio controls src="mp3/PORTUGUES-Consejos11.4.4.mp3"></audio><br><br>

            </div>
            <div class="col-12 col-md-6 col-lg-5 text-center">
                <img src="img/PORTUGUES-Consejos11.1.jpg" id="imgPCF11" alt="ordinales_portugues"
                    class="responsive">
                <img src="img/PORTUGUES-Consejos11.2.jpg" id="imgPCF11" alt="ordinales_portugues"
                    class="responsive">
                <p style="font-size:20px">Imágenes tomadas del libro <b>O Brasil é AQUI P1, 2011, páginas 13 y 14</b>.
                </p>

            </div>
        </div>

    </div>

    <br><br>

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
