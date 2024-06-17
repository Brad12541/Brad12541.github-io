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
    <title>Mecanica de Producción Industrial</title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            particlesJS.load('particles-js', '../js/particles.json', function() {
                console.log('particles.js loaded - callback');
            });
        });
    </script>
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
                            <h2 class="animate__animated animate__fadeIn">MECANICA DE PRODUCCIÓN INDUSTRIAL</h2>
                            <p class="animate__animated animate__fadeIn delay-1s">
                            El estudiante de Mecánica de Producción se va formando en cinco módulos 
                                técnicos específicos, los cuales son ascendentes en conocimiento técnico 
                                estándar, cumpliendo normas de seguridad, eficiencia y pro actividad.
                                Sus habilidades se van solidificando en nuestros talleres equipados 
                                consiguiendo destrezas operativas con criterios técnicos y sentido común, 
                                preservando nuestra naturaleza. Asequibles a la adaptación en los centros 
                                de trabajo con visión de emprendimiento.
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
            La carrera técnica en Mecánica de Producción Industrial se define como un programa educativo enfocado en la formación integral de profesionales especializados en el diseño, implementación, mantenimiento y optimización de sistemas mecánicos utilizados en procesos industriales. Este programa combina conocimientos teóricos y prácticos en áreas fundamentales como la mecánica aplicada, la automatización industrial y la gestión de la producción, preparando a los estudiantes para desempeñarse eficazmente en roles clave dentro de entornos industriales diversos. Los graduados adquieren habilidades técnicas avanzadas que les permiten contribuir significativamente a la eficiencia operativa, la mejora continua de procesos y el cumplimiento de estándares de calidad y seguridad en la industria.
        </p>
    </div>
    <div class="section-image">
        <img src="../imagenes/electricidad_industrial/princiapl.jpg" alt="Imagen representativa">
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
                <p>J2663-3-003</p>
                <p><b>Carrera profesional:</b></p>
                <p>Mecanica de Producción Industrial</p>
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
                <li class="nav-item" role="presentation">
                    <button class="nav-link animate__animated animate__zoomIn" id="first-contact-tab" data-bs-toggle="tab" data-bs-target="#first-modulo4" type="button" role="tab" aria-controls="first-contact" aria-selected="false">Modulo IV</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link animate__animated animate__zoomIn" id="first-contact-tab" data-bs-toggle="tab" data-bs-target="#first-modulo5" type="button" role="tab" aria-controls="first-contact" aria-selected="false">Modulo V</button>
                </li>
            </ul>
            <div class="tab-content" id="myFirstTabContent">
                <div class="tab-pane fade show active" id="first-home" role="tabpanel" aria-labelledby="first-home-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>DISEÑO MECÁNICO</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Diseñar elementos mecánicos y maquinas considerando las normas técnicas.</p>
                </div>
                <div class="tab-pane fade" id="first-profile" role="tabpanel" aria-labelledby="first-profile-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>TECNOLOGÍA DE LA SOLDADURA</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Recuperar y construir piezas mecánicas y estructuras mediante el proceso de soldadura, considerando las normas de seguridad y cuidado del medio ambiente.</p>
                </div>
                <div class="tab-pane fade" id="first-contact" role="tabpanel" aria-labelledby="first-contact-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>MECANIZADO CON MAQUINAS HERRAMIENTAS</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Fabricar elementos mecánicos y maquinas, garantizando la calidad del producto.</p>
                </div>
                <div class="tab-pane fade" id="first-modulo4" role="tabpanel" aria-labelledby="first-contact-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>MATRICERIA Y FUNDICIÓN</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Diseñar y fabricar elementos mecánicos a través de la fundición y matriceria para la producción en serie considerando normas técnicas.</p>
                </div>
                <div class="tab-pane fade" id="first-modulo5" role="tabpanel" aria-labelledby="first-contact-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>MANTENIMIENTO MECÁNICO</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Planificar, organizar, ejecutar y supervisar el mantenimiento mecánico eléctrico.</p>
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
        <div id="seccion2" class="contenido-seccion" style="background-image: url('../imagenes/descripcion_carreras/10.jpg');">
            <div class="container">
                <div class="col-md-6">
                    <div class="texto-acerca-de">
                        <h3>Perfil Profesional</h3>
                        <p class="lead">
                        Planifica, coordina, supervisa y evalúa el proceso de producción en una planta industrial. Promociona el control de calidad de las materias primas, dispositivos, componentes, procesos y resultados del trabajo en las diferentes áreas de producción o mantenimiento. Prepara y verifica el correcto funcionamiento de los equipos y sistemas a utilizarse en el proceso de construcción, montaje o mantenimiento preventivo y correctivo. Aplica técnicas de seguridad e higiene industrial y protección ambiental. Aplica el inglés técnico, para interpretar manuales y otro tipo de documentación técnica propias de sus labores.
                        </p>
                        <h3>Oportunidades Laborales</h3>
                        <p>
                        <b>Por su formación el profesional técnico en Mecánica de Producción está en capacidad de desempeñarse en:</b>
                        <br>
                        Industrias de Metal Mecánica.
                        <br>
                        Talleres de servicio de mecanizado convencional y de CNC.
                        <br>
                        Empresas de diseño asistido por computadora y fabricación de elementos mecánicos.
                        <br>
                        Talleres de mantenimiento de maquinarias y equipos industriales, en los diversos sectores, agrícolas, alimentaria, agroindustrial, hospitalaria, civil, marítima etc.
                        <br>
                        Compañías mineras en el área de mantenimiento mecánico y Maestranza.
                        <br>
                        Microempresario de empresas Metal-mecánica.
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
                <p>Diseño y Programación Web</p>
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
                <li class="nav-item" role="presentation">
                    <button class="nav-link animate__animated animate__zoomIn" id="second-contact-tab" data-bs-toggle="tab" data-bs-target="#second-modulo4" type="button" role="tab" aria-controls="second-contact" aria-selected="false">MÓDULO IV</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link animate__animated animate__zoomIn" id="second-contact-tab" data-bs-toggle="tab" data-bs-target="#second-modulo5" type="button" role="tab" aria-controls="second-contact" aria-selected="false">MÓDULO V</button>
                </li>
            </ul>
            <div class="tab-content" id="mySecondTabContent">
                <div class="tab-pane fade show active" id="second-home" role="tabpanel" aria-labelledby="second-home-tab">
                    <h5><b>DISEÑO MECÁNICO</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Dibujo técnico (4h/3c)
                    <br>
                    Materiales Industriales(3h/2c)
                    <br>
                    Mecánica de Banco(7h/5c)
                    <br>
                    Maquinas Básicas(4h/3c)
                    <br>
                    Dibujo Asistido por ordenador(4h/3c)
                    <br>
                    Calculo de elementos de Maquinas(3h/2c)
                    <br>
                    </p>
                </div>
                <div class="tab-pane fade" id="second-profile" role="tabpanel" aria-labelledby="second-profile-tab">
                    <h5><b>TECNOLOGÍA DE LA SOLDADURA</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Dibujo y Cálculo de la Soldadura (3h/2c)
                    <br>
                    Soldadura Oxigas (5h/4c)
                    <br>
                    Soldadura Eléctrica (6h/4c)
                    <br>
                    Soldadura Mixta (3h/2c)
                    <br>
                    </p>
                </div>
                <div class="tab-pane fade" id="second-contact" role="tabpanel" aria-labelledby="second-contact-tab">
                    <h5><b>MECANIZADO CON MÁQUINAS HERRAMIENTAS</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Maquinas Convencionales I (12h/9c)
                    <br>
                    Maquinas Convencionales II (12h/9c)
                    <br>
                    Maquinas Especiales(5h/4c)
                    <br>
                    Máquinas de Control Numérico Computarizado (7h/5c)
                    <br>
                    Técnicas de Producción I (5h/4c)
                    <br>
                    Técnicas de Producción II (5h/4c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-modulo4" role="tabpanel" aria-labelledby="second-contact-tab">
                    <h5><b>MATRICERIA Y FUNDICIÓN</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Modelería y Fundición (7h/5c)
                    <br>
                    Moldes Permanentes (5h/4c)
                    <br>
                    Matrices de Chapas (8h/6c)
                    <br>
                    Tratamientos Térmicos (4h/3c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-modulo5" role="tabpanel" aria-labelledby="second-contact-tab">
                    <h5><b>MANTENIMIENTO MECÁNICO</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Gestión del Mantenimiento (2h/2c)
                    <br>
                    Seguridad e Higiene Industrial (2h/2c)
                    <br>
                    Mantenimiento Mecánico (8h/6c)
                    <br>
                    Automatización (8h/6c)
                    <br>
                    Mantenimiento Eléctrico (3h/2c)
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