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
    <title>ELECTRÓNICA INDUSTRIAL</title>
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
                            <h2 class="animate__animated animate__fadeIn">ELECTRÓNICA INDUSTRIAL</h2>
                            <p class="animate__animated animate__fadeIn delay-1s">
                            Debido a los avances tecnológicos la electrónica industrial ha tomado un 
                            papel muy importante en la vida diaria del usuario final, cuando estamos 
                            conduciendo un vehículo, cuando estamos en frente a nuestras computadoras, 
                            cuando estamos en un hospital o en oficinas privadas o públicas, podemos 
                            interactuar con la electrónica el cual estudia y emplea sistemas que utiliza 
                            gran diversidad de conocimientos en materiales y dispositivos para construir
                             y diseñar circuitos electrónicos que ayuden a realizar trabajos forzados para 
                             el Hombre.
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
            La carrera técnica en Electrónica Industrial se define como un programa educativo especializado que prepara a los estudiantes para convertirse en técnicos expertos en el diseño, instalación, mantenimiento y reparación de sistemas electrónicos utilizados en entornos industriales. Este programa combina conocimientos teóricos sólidos con habilidades prácticas en electrónica aplicada, automatización y control de procesos industriales, enfocándose en la integración de tecnologías avanzadas como PLCs, sistemas de control numérico, y sensores para optimizar la eficiencia y la seguridad en las operaciones industriales. Los estudiantes de esta carrera adquieren competencias esenciales para realizar tareas de diagnóstico, reparación y mejora continua de sistemas electrónicos industriales complejos. Además, se forman en el cumplimiento de normativas de seguridad y estándares de calidad, asegurando el funcionamiento confiable de equipos y sistemas electrónicos en diferentes sectores industriales como manufactura, energía, automatización y robótica.
        </p>
    </div>
    <div class="section-image">
        <img src="../imagenes/descripcion_carreras/23.jpg" alt="Imagen representativa">
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
                <p>C1833-2-001</p>
                <p><b>Carrera profesional:</b></p>
                <p>Electrónica Industrial</p>
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
            </ul>
            <div class="tab-content" id="myFirstTabContent">
                <div class="tab-pane fade show active" id="first-home" role="tabpanel" aria-labelledby="first-home-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>INSTALACIÓN Y MANTENIMIENTO DE SISTEMAS ELÉCTRICOS Y ELECTRÓNICOS</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Brindar asistencia en la implementación y operación del sistema de alimentación eléctrica, de acuerdo a los niveles de eficiencia de operación establecidos, sistema de gestión de riesgos, continuidad del servicio, estándares de seguridad y normativa vigente.</p>
                </div>
                <div class="tab-pane fade" id="first-profile" role="tabpanel" aria-labelledby="first-profile-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>DISEÑO Y OPERACIÓN DE SISTEMAS ELÉCTRICOS Y ELECTRÓNICOS</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Instalar elementos de conducción de energía eléctrica y de comunicaciones, equipos eléctricos y electrónicos de configuración básica en las edificaciones e industrias, de acuerdo al diseño y planos eléctricos, tipos de energía, demanda de carga eléctrica, manuales de fabricantes, arquitectura de circuitos de alimentación eléctrica, estándares de seguridad y normativa vigente.</p>
                </div>
                <div class="tab-pane fade" id="first-contact" role="tabpanel" aria-labelledby="first-contact-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>SISTEMAS DE AUTOMATIZACIÓN Y POTENCIA</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Implementar sistemas electrónicos programables que soportan los procesos industriales y de servicios, de acuerdo a los requerimientos funcionales, uso eficiente de la energía, optimización de procesos, estándares de seguridad y normativa vigente.</p>
                </div>
                <div class="tab-pane fade" id="first-modulo4" role="tabpanel" aria-labelledby="first-contact-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>SISTEMAS DE CONTROL DE PROCESOS, REDES Y COMUNICACIONES INDUSTRIALES</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Instalar elementos de conducción de energía eléctrica y de comunicaciones, equipos eléctricos y electrónicos de configuración básica en las edificaciones e industrias, de acuerdo al diseño y planos eléctricos, tipos de energía, demanda de carga eléctrica, manuales de fabricantes, arquitectura de circuitos de alimentación eléctrica, estándares de seguridad y normativa vigente</p>
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
        <div id="seccion2" class="contenido-seccion" style="background-image: url('../imagenes/descripcion_carreras/24.jpeg');">
            <div class="container">
                <div class="col-md-6">
                    <div class="texto-acerca-de">
                        <h3>Perfil Profesional</h3>
                        <p class="lead">
                        “El egresado del Programa de Estudios de ELECTRÓNICA INDUSTRIAL es un Profesional Técnico competente para velar por la continua operación de los sistemas electrónicos – eléctricos, propone soluciones a problemas que se genera al momento de la producción en cualquier empresa, mediante la instalación, configuración, programación y mantenimiento de equipos electrónicos, utilizando herramientas, instrumentos y softwares electrónicos de última generación, todos esto respetando los estándares de seguridad y normativa vigente, desempeñándose de manera colaborativa y relacionándose en su ámbito laboral bajo principios éticos y morales.”
                        </p>
                        <h3>Oportunidades Laborales</h3>
                        <p>
                        Empresas Mineras
                        <br>
                        Hospitales
                        <br>
                        Empresas de telecomunicaciones
                        <br>
                        Empresas Radiales y televisivas
                        <br>
                        Gobierno Regionales
                        <br>
                        Servicio de Soporte Técnico
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
                <p>Electrónica Industrial</p>
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
            </ul>
            <div class="tab-content" id="mySecondTabContent">
                <div class="tab-pane fade show active" id="second-home" role="tabpanel" aria-labelledby="second-home-tab">
                    <h5><b>INSTALACIÓN Y MANTENIMIENTO DE SISTEMAS ELÉCTRICOS Y ELECTRÓNICOS</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Electrótecnia General (6h/4c)
                    <br>
                    Electrónica Analógica (5h/3c)
                    <br>
                    circuitos Digitales I (6h/4c)
                    <br>
                    Instalaciones Elécticas (4h/3c)
                    <br>
                    Cálculo Electrónico I (3h/2c)
                    <br>
                    EFSRT (4h/2c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-profile" role="tabpanel" aria-labelledby="second-profile-tab">
                    <h5><b>DISEÑO Y OPERACIÓN DE SISTEMAS ELÉCTRICOS Y ELECTRÓNICOS</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Circuitos Digitales II (6h/4c)
                    <br>
                    Intalación y Mntenimiento de Sistema Electrónicos(6h/4c)
                    <br>
                    Máquinas y Tableros Industriales(7h/4c)
                    <br>
                    Cálculo Electrónico II (3h/2c)
                    <br>
                    EFSRT(4h/2c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-contact" role="tabpanel" aria-labelledby="second-contact-tab">
                    <h5><b>SISTEMAS DE AUTOMATIZACIÓN Y POTENCIA</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Microcontroladores I (7h/5c)
                    <br>
                    Controlador Lógico Programable I (7h/5c)
                    <br>
                    Instrumentación Industrial(5h/3c)
                    <br>
                    Electrónica de potencia(4h/3c)
                    <br>
                    Macrocontroladores II (7h/5c)
                    <br>
                    Controlador Lógico Programables II (7h/5c)
                    <br>
                    Control Electrónico de Motores(4h/3c)
                    <br>
                    Sistema de Mando Neumático e Hidráulico (6h/4c)
                    <br>
                    Internet de las Cosas Industrial(3h/2c)
                    <br>
                    EFSRT (8h/4c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-modulo4" role="tabpanel" aria-labelledby="second-contact-tab">
                    <h5><b>SISTEMAS DE CONTROL DE PROCESOS, REDES Y COMUNICACIONES INDUSTRIALES</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Taller Electrónico I (6h/4c)
                    <br>
                    Fundamentos Robótica (5h/3c)
                    <br>
                    Cableado Estructurado y Fundamentos de Redes (6h/4c)
                    <br>
                    Sistema de Comunicación I (5h/3c)
                    <br>
                    Control de Procesos Industriales (5h/3c)
                    <br>
                    Taller Electrónico II (6h/4c)
                    <br>
                    Redes Industriales(6h/4c)
                    <br>
                    Sistema de Comunicaación II (6h/4c)
                    <br>
                    Domótica(5h/3c)
                    <br>
                    Diseño y acabado de Productos Electrónicos (4h/3c)
                    <br>
                    EFST(8h/4c)
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