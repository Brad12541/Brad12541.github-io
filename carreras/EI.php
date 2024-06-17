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
    <title>Electricidad Industrial</title>
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
                            <h2 class="animate__animated animate__fadeIn">ELECTRICIDAD INDUSTRIAL</h2>
                            <p class="animate__animated animate__fadeIn delay-1s">
                            La Carrera Profesional de Electricidad Industrial trata sobre el suministro, la instalación, el control, la automatización y el mantenimiento de los sistemas eléctricos y de las máquinas, equipos, dispositivos y accesorios eléctricos, que se emplean en los sistemas productivos. Los profesionales de esta carrera atienden a las empresas e instituciones de los diferentes sectores tanto de producción como de servicios, ejecutando proyectos que mejoren las actividades de las mismas con seguridad y calidad. Es así, que la carrera de Electrotecnia Industrial está creada para formar profesionales que atiendan dichos requerimientos del mercado laboral.
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
            La carrera técnica en Electricidad Industrial se define como un programa educativo especializado que prepara a los estudiantes para trabajar en el diseño, instalación, mantenimiento y reparación de sistemas eléctricos utilizados en entornos industriales. Este programa combina conocimientos teóricos y prácticos en electricidad y electrónica, enfocándose en la aplicación de tecnologías avanzadas como PLCs y sistemas de automatización para optimizar procesos industriales. Los graduados adquieren competencias técnicas clave para garantizar el funcionamiento seguro y eficiente de equipos eléctricos en diversas industrias, contribuyendo significativamente al desarrollo y operación efectiva de las infraestructuras industriales modernas.
        </p>
    </div>
    <div class="section-image">
        <img src="../imagenes/descripcion_carreras/11.jpg" alt="Imagen representativa">
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
                <p>D1935-3-001</p>
                <p><b>Carrera profesional:</b></p>
                <p>Electrotecnia Industrial</p>
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
                    <h4><b>INSTALACIÓN Y MANTENIMIENTO DE SISTEMAS ELÉCTRICOS</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Planificar, organizar, proyectar, supervisar y ejecutar el montaje, instalación y mantenimiento de sistemas eléctricos.</p>
                </div>
                <div class="tab-pane fade" id="first-profile" role="tabpanel" aria-labelledby="first-profile-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>MANTENIMIENTO DE MÁQUINAS Y EQUIPOS ELÉCTRICOS</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Planificar, organizar, proyectar, supervisar y ejecutar el montaje, instalación y mantenimiento de las máquinas y equipos eléctricos.</p>
                </div>
                <div class="tab-pane fade" id="first-contact" role="tabpanel" aria-labelledby="first-contact-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>AUTOMATIZACIÓN DE SISTEMAS ELÉCTRICOS INDUSTRIALES</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Planificar, organizar, proyectar, supervisar y ejecutar la automatización de sistemas eléctricos industriales.</p>
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
        <div id="seccion2" class="contenido-seccion" style="background-image: url('../imagenes/descripcion_carreras/12.jpg');">
            <div class="container">
                <div class="col-md-6">
                    <div class="texto-acerca-de">
                        <h3>Perfil Profesional</h3>
                        <p class="lead">
                        <b>Competencia General:</b>
                        <br>
                        Planificar, organizar, proyectar, supervisar y ejecutar el montaje e instalación, mantenimiento y automatización de líneas de energía, tableros, instrumentos, máquinas y controles eléctricos, siguiendo normas técnicas de seguridad y control de calidad establecidas.
                        <br>
                        <b>Capacidades Profesionales:</b>
                        <br>
                        Capacidades técnico transformadoras.
                        <br>
                        Capacidades de organización.
                        <br>
                        Capacidades de cooperación y comunicación.
                        <br>
                        Capacidades de contingencias.
                        <br>
                        Capacidades de responsabilidad y autonomía.
                        </p>
                        </p>
                        <h3>Oportunidades Laborales</h3>
                        <p>
                        La asimilación progresiva de las innovaciones tecnológicas como parte de la modernización de las empresas para lograr ser más competitivas.
                        <br>
                        Hace previsible que el mercado laboral requiera profesionales especializados que permitan orientar el trabajo de servicio y técnico productivas específicas de manera eficiente.
                        <br>
                        La polivalencia de este profesional se encuentra en el dominio de las distintas áreas de esta especialidad.
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
            </ul>
            <div class="tab-content" id="mySecondTabContent">
                <div class="tab-pane fade show active" id="second-home" role="tabpanel" aria-labelledby="second-home-tab">
                    <h5><b>INSTALACIÓN Y MANTENIMIENTO DE SISTEMAS ELÉCTRICOS</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Fundamentos de Electrotecnia (7h/6c)
                    <br>
                    Mecánica Básica (4h/3c)
                    <br>
                    Instalaciones Eléctricas I (7h/5c)
                    <br>
                    Dispositivos Electrónicos(4h/3c)
                    <br>
                    Instalaciones Eléctricas II (5h/4c)
                    <br>
                    Montaje e Instalación de Sub-estaciones (4h/3c)
                    <br>
                    Distribución de Baja y Media Tensión (4h/3c)
                    <br>
                    Equipos e Instrumentos de Medición (4h/3c)
                    <br>
                    Proyecto de Mantenimiento de Sistemas Eléctricos (3h/3c)
                    <br>
                    </p>
                </div>
                <div class="tab-pane fade" id="second-profile" role="tabpanel" aria-labelledby="second-profile-tab">
                    <h5><b>MANTENIMIENTO DE MÁQUINAS Y EQUIPOS ELÉCTRICOS</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Tecnología de Materiales (2h/2c)
                    <br>
                    Máquinas Eléctricas (8h/6c)
                    <br>
                    Generación y Transmisión de Energía Eléctrica (6h/4c)
                    <br>
                    Instalación de Máquinas Eléctricas (6h/4c)
                    <br>
                    Rebobinado de Máquinas Eléctricas (8h/6c)
                    <br>
                    Mantenimiento de Sistemas y Equipos Eléctricos (8h/6c)
                    <br>
                    Electrónica de Potencia (4h/3c)
                    <br>
                    Proyecto de Máquinas y Equipos (4h/3c)
                    <br>
                    </p>
                </div>
                <div class="tab-pane fade" id="second-contact" role="tabpanel" aria-labelledby="second-contact-tab">
                    <h5><b>AUTOMATIZACIÓN DE SISTEMAS ELÉCTRICOS INDUSTRIALES</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Sistema de Control Automático (4h/3c)
                    <br>
                    Electrónica de Potencia Aplicada (6h/4c)
                    <br>
                    Electroneumática y Electrohidráulica (6h/4c)
                    <br>
                    Tableros de Control y Mando Automático (8h/6c)
                    <br>
                    Controlador Lógico Programable y Periféricos (9h/7c)
                    <br>
                    Mantenimiento de Sistema de Control Automático (5h/4c)
                    <br>
                    Instrumentación y Control de Procesos Industriales (5h/4c)
                    <br>
                    Proyecto de Sistema de Automatización Industrial (4h/3c)
                    <br>
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