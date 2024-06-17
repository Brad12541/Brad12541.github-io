<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/particules.css">
    <link rel="stylesheet" href="../css/portada_carrera.css">
    <link rel="stylesheet" href="../css/carrera_descrip.css">
    <link rel="stylesheet" href="../css/tab_carreras.css">
    <link rel="stylesheet" href="../css/perfil.css">
    <link rel="icon" href="../imagenes/logo_principal.png">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            particlesJS.load('particles-js', '../js/particles.json', function() {
                console.log('particles.js loaded - callback');
            });
        });
    </script>
    <title>Metalurgia</title>
</head>

<body class="medida">
    <?php include '../vistas/menu_carreras.php'; ?>
    <section class="portada">
        <div id="particles-js"></div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide-content">
                        <div class="texto">
                            <h2 class="animate__animated animate__fadeIn">METALURGIA</h2>
                            <p class="animate__animated animate__fadeIn delay-1s">
                                El Área Académica de Metalurgia está incluida dentro de la familia
                                profesional de Minería. Esta actividad productiva involucra
                                directamente a los aspectos de Geología que determina el tipo,
                                volumen y ubicación de los yacimientos mineros, la Minería que se
                                encarga de la extracción de los minerales del suelo y la Metalurgia
                                se encarga del procesamiento y la transformación de estos minerales hasta
                                convertirlo en metales (Metalurgia Extractiva).
                                La metalurgia todavía va más allá, transforma estos metales en productos
                                acabados (Metalurgia Física o de transformación).
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Repite para otros slides -->
            </div>
            <!-- <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                 Repite para otros indicadores 
            </div>-->
        </div>
    </section>
    <br>
    <br>
    <section class="section-container">
    <div class="section-content">
        <h2 class="section-title">Descripción más amplia de la Carrera</h2>
        <p class="section-text">
            La carrera técnica en Metalurgia se define como un programa educativo especializado que prepara a los estudiantes para adquirir conocimientos y habilidades en la transformación y producción de metales. Esta disciplina abarca desde la extracción de minerales hasta la fabricación de productos metálicos mediante diversos procesos industriales. Los estudiantes aprenden sobre los principios fundamentales de la metalurgia, incluyendo técnicas avanzadas de fundición, forjado, laminado, y tratamiento térmico de metales. Además, se capacitan en el análisis y caracterización de propiedades físicas y mecánicas de los materiales metálicos, así como en el cumplimiento de normativas de calidad y seguridad en el trabajo metalúrgico. Esta formación prepara a los graduados para desempeñarse eficazmente en roles técnicos dentro de la industria metalúrgica, contribuyendo al desarrollo y mejora continua de procesos industriales relacionados con metales y aleaciones.
        </p>
    </div>
    <div class="section-image">
        <img src="../imagenes/descripcion_carreras/3.jpg" alt="Imagen representativa">
    </div>
</section>
    <br>
    <br>
    <!-- Primer_tabs_plan_de_estudios_sin_vistas -->
<div id="seccion1" class="container my-3">
    <div class="row">
        <!-- Columna del título, ahora primero -->
        <div class="col-md-3 align-self-center border">
            <div class="p-3">
                <h3 class="titulo text-center">MÓDULOS PROFESIONALES</h3>
                <p><b>Código de la carrera profesional:</b></p>
                <p>No esta adecuado</p>
                <p><b>Carrera profesional:</b></p>
                <p>Metalurgia</p>
                <p><b>Nivel de formación:</b></p>
                <p>Técnico-Profesional</p>
            </div>
        </div>
        <!-- Columna de los tabs -->
        <div class="col-md-9 border">
            <ul class="nav nav-tabs justify-content-start" id="myFirstTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active animate__animated animate__zoomIn" id="first-home-tab" data-bs-toggle="tab" data-bs-target="#first-home" type="button" role="tab" aria-controls="first-home" aria-selected="true">Modulo I</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link animate__animated animate__zoomIn" id="first-profile-tab" data-bs-toggle="tab" data-bs-target="#first-profile" type="button" role="tab" aria-controls="first-profile" aria-selected="false">Modulo II</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link animate__animated animate__zoomIn" id="first-contact-tab" data-bs-toggle="tab" data-bs-target="#first-contact" type="button" role="tab" aria-controls="first-contact" aria-selected="false">Modulo III</button>
                </li>
            </ul>
            <div class="tab-content" id="myFirstTabContent">
                <div class="tab-pane fade show active" id="first-home" role="tabpanel" aria-labelledby="first-home-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>TÉCNICAS DE CONMINUCIÓN EN MINERALES</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Realizar y controlar los procesos de reducción de tamaño y clasificación de los minerales, bajo normas de correcta operación y seguridad.</p>
                </div>
                <div class="tab-pane fade" id="first-profile" role="tabpanel" aria-labelledby="first-profile-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>PROCESAMIENTO DE MINERALES</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Realizar y controlar el procesamiento de minerales (concentración por flotación, magnetismo, eléctrica y gravimetría) para la obtención del concentrado, controlar el proceso de eliminación/recuperación de aguas y lixiviación de minerales bajo normas de correcta operación y seguridad.</p>
                </div>
                <div class="tab-pane fade" id="first-contact" role="tabpanel" aria-labelledby="first-contact-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>CONTROL DE CALIDAD EN LOS PROCESOS METALÚRGICOS</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Aplica los principios del control de calidad en los procesos metalúrgicos: procesamiento de minerales, hidrometalurgia, pirometalurgia, metalurgia física y materiales, bajo normas de calidad, medio ambiente, seguridad y salud ocupacional.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin_primer_tabs -->
    <br>
    <br>
    <br>
    <!-- Informacion_mas_imagen1_sin vistas -->
    <section id="acerca-de">
        <div id="seccion2" class="contenido-seccion" style="background-image: url('../imagenes/descripcion_carreras/5.jpg');">
            <div class="container">
                <div class="col-md-6">
                    <div class="texto-acerca-de">
                        <h3>Perfil Profesional</h3>
                        <p class="lead">
                        Realizar y controlar los procesos de conminución (chancado, molienda), procesamiento de minerales (concentración), disposición de relaves, hidrometalurgia, pirometalurgia y metalurgia de la transformación y materiales, con el cumplimiento de las normas de calidad, medio ambiente y salud ocupacional.
                        </p>
                        <h3>Oportunidades Laborales</h3>
                        <p>
                        <b>Por su formación el profesional técnico en Metalurgia está en capacidad de desempeñarse en:</b>
                        <br>
                        Plantas Concentradoras de minerales polimetálicos: Pb, Cu, Zn, Mo, Sn, y otros.
                        <br>
                        Plantas Concentradoras de minerales auríferos.
                        <br>
                        Plantas siderúrgicas Y de refinación de metales.
                        <br>
                        Laboratorios Químicos (análisis de minerales), Laboratorios Mineralúrgicos (análisis e investigación de soporte de Plantas de Procesamiento) y Laboratorios Metalúrgicos (análisis e investigación de soporte para Metalurgia Física).
                        <br>
                        Plantas de Lixiviación de minerales: Cu, Au, Plantas de fundición y moldeo entre muchos más.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fin_informacion_sin_vistas -->
    <br>
    <br>
    <br>
    <br>
    <!-- Segundo_tabs_plan_de_estudios_sin_vistas -->
<div id="seccion3" class="container my-3">
    <div class="row">
        <!-- Columna del título -->
        <div class="col-md-3 align-self-center border">
            <div class="p-3">
            <h2>PLAN DE ESTUDIOS</h2>
                <p>Módulos I, II , III</p>
                <p><b>Carrera profesional:</b></p>
                <p>Metalurgia</p>
                <p><b>Nivel de formación:</b></p>
                <p>Técnico-Profesional</p>
                <p><b>Unidades Didácticas</b></p>
                <p><b>Horas/Créditos</b></p>
            </div>
        </div>
        <!-- Columna de los tabs -->
        <div class="col-md-9 border">
            <ul class="nav nav-tabs" id="mySecondTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active animate__animated animate__zoomIn" id="second-home-tab" data-bs-toggle="tab" data-bs-target="#second-home" type="button" role="tab" aria-controls="second-home" aria-selected="true">MÓDULO I</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link animate__animated animate__zoomIn" id="second-profile-tab" data-bs-toggle="tab" data-bs-target="#second-profile" type="button" role="tab" aria-controls="second-profile" aria-selected="false">MÓDULO II</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link animate__animated animate__zoomIn" id="second-contact-tab" data-bs-toggle="tab" data-bs-target="#second-contact" type="button" role="tab" aria-controls="second-contact" aria-selected="false">MÓDULO III</button>
                </li>
            </ul>
            <div class="tab-content" id="mySecondTabContent">
                <div class="tab-pane fade show active" id="second-home" role="tabpanel" aria-labelledby="second-home-tab">
                    <h5><b>TÉCNICAS DE CONMINUCIÓN EN MINERALES</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Geometalurgia y Mineralogía Aplicada (4h/3c)
                    <br>
                    Dibujo Técnico Metalúrgico(4h/3c)
                    <br>
                    Manejo de Pulpas(4h/3c)
                    <br>
                    Analisis Metalurgico de Minerales I(4h/3c)
                    <br>
                    Introducción a la Metalurgia(2h/2c)
                    <br>
                    Trituración y Tamizaje de Minerales(4h/3c)
                    <br>
                    Molienda y clasificación de Minerales (4h/3c)
                    <br>
                    Gestión en Mantenimiento(4h/3c)
                    <br>
                    Análisis Metalúrgico de Minerales II(4h/3c)
                    <br>
                    Diseño Metalúrgico por Ordenador(4h/3c)
                    <br>
                    Soldadura de Mantenimiento (4h/3c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-profile" role="tabpanel" aria-labelledby="second-profile-tab">
                    <h5><b>PROCESAMIENTO DE MINERALES</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Concentración de Minerales I(6h/5c)
                    <br>
                    Resistencia de Materiales(4h/3c)
                    <br>
                    Fisicoquimica Metalúrgica(4h/3c)
                    <br>
                    Analisis Metalúrgico de Minerales III(5h/4c)
                    <br>
                    Tecnología Básica de Procesos Metalúrgicos(3h/2c)
                    <br>
                    Concentración de Minerales II (6h/5c)
                    <br>
                    Hidrometalurgia(6h/5c)
                    <br>
                    Diseño de Plantas Metalúrgicas I (4h/3c)
                    <br>
                    Balances Metalúrgicos(4h/3c)
                    <br>
                    Manejo de Residuos Minero Metalúrgicos (4h/3c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-contact" role="tabpanel" aria-labelledby="second-contact-tab">
                    <h5><b>CONTROL DE CALIDAD EN LOS PROCESOS METALÚRGICOS</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Pirometalurgia(4h/3c)
                    <br>
                    Análisis Metalúrgico Instrumental(4h/3c)
                    <br>
                    Metalurgia Física y Corrosión(4h/3c)
                    <br>
                    Control y Automatización de Procesos(4h/3c)
                    <br>
                    Diseño de Plantas Metalúrgicas II(4h/3c)
                    <br>
                    Hornos Metalúrgicos(4h/3c)
                    <br>
                    Investigaciones Metalúrgicas Experimentales(6h/5c)
                    <br>
                    Electrometalurgia(5h/4c)
                    <br>
                    Manejo de Software Metalúrgico(4h/3c)
                    <br>
                    Joyería Industrial(4h/3c)
                    <br>
                    Gestión de la Producción y Calidad en Minería(4h/3c)
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
    <br>
    <br>
    <?php include '../vistas/footer1.php'; ?>
</body>

</html>