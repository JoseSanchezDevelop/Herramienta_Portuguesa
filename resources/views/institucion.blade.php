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
                    <li class="nav-item active">
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

    <div class="d-flex container-fluid" id="banner2">

    </div>

    <div class="container-fluid py-1" id="Header_Index">
        <h1 class="mt-3" id="Titulo_Index" align="center" style="color: white;">Acerca de Nosotros</h1>
        <p align="center" style="color: white; font-size:22px; ">Nosotros como institución</p>
    </div>

    <div class=" container-fluid py-2" id="contenidoInfo">
        <div class="jumbotron bg-light mx-4 my-2" id="jumbotron1">
            <div class="row ">
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="https://www.uts.edu.co/sitio/mision-y-vision/" target="_blank">
                        <img src="img/UTS_logo.png" id="imgInfo1" alt="logo_uts" width="400px" class="responsive">
                    </a><br><br>
                    <a href="https://www.uts.edu.co/sitio/nuestros-simbolos/" target="_blank">
                        <p style="font-size:20px; color:black;">Imagen tomada de <b>Identidad institucional - Unidades
                                Tecnológicas de Santander</b>. </p>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-7 text-center ">
                    <br>
                    <h3 style="font-weight:bold;">MISIÓN</h3><br>
                    <p style="font-size:25px;">Somos como tal una entidad pública de tipo departamental. Nuestro
                        objetivo
                        es formar profesionales con sentido de pertenencia, ética, razón y pensamiento crítico junto con
                        la incentivación
                        del emprendimiento y las habilidades innovadoras por medio de técnicas de enseñanza de calidad,
                        con personal docente y administrativo
                        idoneo y totalmente capacitado en todas sus funciones para garantizar un ambiente de aprendizaje
                        y enseñanza ideal,
                        con enfoque en la investigación y desarrollo en los ámbitos socioeconómicos, científicos,
                        tecnológicos y ambientales para contribuir
                        y aportar de forma eficiente a la constitución de una mejor sociedad.</p>
                </div>



            </div>
        </div>

        <div class="jumbotron bg-light mx-4 my-2" id="jumbotron2">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-7 text-center">
                    <h3 style="font-weight:bold;">VISIÓN</h3><br>
                    <p style="font-size:25px;">Nuestra meta a futuro, es que para el año 2030, nosotros como institución
                        (Unidades Tecnológicas de Santander) logremos
                        el reconocimiento en los campos académicos nacionales e internacionales, como una institución
                        que está completamente enfocada en la transformación social,
                        realizando cambios en pro de la educación mediante la innovación y el desarrollo tecnológico,
                        donde prime la calidad y la excelencia de los procesos pedagógicos y evaluativos.</p><br>
                </div>
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="https://www.uts.edu.co/sitio/mision-y-vision/" target="_blank">
                        <img src="img/uts-vision.jpg" id="imgInfo2" alt="logo_uts" class="responsive">
                    </a>
                    <a href="https://santander.gov.co/publicaciones/8097/unidades-tecnologicas-de-santander-tendra-sede-en-el-puerto-petrolero/"
                        target="_blank">
                        <p style="font-size:20px; color:black;">Imagen tomada de <b>Unidades Tecnológicas de Santander
                                tendrá sede en el Puerto Petrolero</b>. </p>
                    </a>
                </div>
            </div>

        </div>


        <div class="jumbotron bg-light mx-4 my-2" id="jumbotron3">
            <div class="row ">
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="https://www.uts.edu.co/sitio/nuestros-simbolos/" target="_blank">
                        <img src="img/manzanaUTS.jpg" id="imgInfo3" alt="logo_uts" class="responsive">
                    </a>
                    <a href="https://www.uts.edu.co/sitio/departamentos-academicos/departamento-de-idiomas/"
                        target="_blank">
                        <p style="font-size:20px; color:black;">Imagen tomada de <b>Departamento de idiomas - Unidades
                                Tecnológicas de Santander</b>. </p>
                    </a>
                </div>

                <div class="col-12 col-md-6 col-lg-7 text-center ">
                    <br>
                    <h3 style="font-weight:bold;">IDENTIDAD INSTITUCIONAL</h3><br>
                    <p style="font-size:25px;">Con nuestros colores representamos el cambio, la energía, la seguridad y
                        el dinamismo
                        que se requieren para formar profesionales con calidad y excelencia en todas las áreas en las
                        que nos especializamos.
                        Demostramos poseer el compromiso, la entrega y la dedicación gracias a nuestra disciplina y
                        convicción en nuestros procesos académicos.
                        Siempre en evolución y en constante adaptabilidad a las necesidades del mundo actual. nos
                        dedicamos a instruir y llevar a cabo métodos de formación
                        ejemplares para los jóvenes de Santander y del mundo.</p>
                </div>



            </div>
        </div>

        <div class="jumbotron bg-light mx-4 my-2" id="jumbotron2">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-7 text-center">
                    <h3 style="font-weight:bold;">SÍMBOLO INSTITUCIONAL</h3><br>
                    <p style="font-size:25px;">El escudo que nos representa como establecimiento y entidad educativa de
                        calidad refleja los
                        valores y principios más importantes de la UTS.</p><br>
                    <p style="font-size:25px;">El libro simboliza la calidad académica.</p><br>
                    <p style="font-size:25px;">La llama refleja la persistencia y la pasión de nuestra región para
                        construir un mejor país.</p><br>
                    <p style="font-size:25px;">Nos sentimos orgullosos de nuestra gente y del trabajo que hemos
                        conseguido con cada una de las persona que forman parte de la institución.</p><br>
                </div>
                <div class="col-12 col-md-6 col-lg-5 text-center">
                    <a href="https://www.uts.edu.co/sitio/nuestros-simbolos/" target="_blank">
                        <img src="img/UTSescudo.jpg" id="imgInfo4" alt="logo_uts" class="responsive">
                    </a>
                    <a href="https://www.uts.edu.co/sitio/nuestros-simbolos/" target="_blank">
                        <p style="font-size:20px; color:black;">Imagen tomada de <b>Identidad institucional - Unidades
                                Tecnológicas de Santander</b>. </p>
                    </a>
                </div>
            </div>

        </div>


        <div class="jumbotron bg-light mx-4 my-2" id="jumbotron3">
            <div class="row ">
                <div class="col-12 col-md-6 col-lg-5 text-center map-responsive">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2354.142404774091!2d-73.12431061230929!3d7.105148259848382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e683fc8a8b0973f%3A0x5f50c91e41f0ac6e!2sUnidades%20Tecnol%C3%B3gicas%20de%20Santander!5e0!3m2!1ses!2sco!4v1673667892869!5m2!1ses!2sco"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

                </div>

                <div class="col-12 col-md-6 col-lg-7 text-center ">
                    <br>
                    <h3 style="font-weight:bold;">UBICACIÓN</h3><br>
                    <p style="font-size:25px;"><b>Dirección:</b> Av. Los Estudiantes #9-82, La Concordia, Bucaramanga,
                        Santander</p>
                </div>



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
