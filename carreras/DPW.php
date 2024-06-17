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
    <title>Diseño y programación web</title>
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
                            <h2 class="animate__animated animate__fadeIn">DISEÑO Y PROGRAMACIÓN WEB</h2>
                            <p class="animate__animated animate__fadeIn delay-1s">
                                El técnico en Diseño y Programación fortalece la imagen de su institución o empresa a través de páginas web.
                                En Desarrollo de aplicaciones web, se utilizan lenguajes como HTML, CSS y JS, y 
                                se integran recursos multimedia y gráficos optimizados para crear sitios web 
                                adaptativos ("Responsive Design").
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
        La carrera técnica en Diseño y Programación Web es un programa educativo que prepara a los estudiantes para crear y mantener sitios web y aplicaciones web interactivas. Combina principios de diseño gráfico, experiencia de usuario (UX), y habilidades de programación para formar profesionales capaces de desarrollar soluciones digitales atractivas y funcionales. Los egresados aprenden a utilizar diversas tecnologías y lenguajes de programación como HTML, CSS, JavaScript, PHP, y Python, así como herramientas de diseño y metodologías ágiles de gestión de proyectos. Esta carrera ofrece una sólida formación tanto en la parte visual y estética del diseño web como en la implementación técnica y funcional de los proyectos, capacitando a los estudiantes para desempeñarse en roles como desarrolladores web, diseñadores UX/UI, y gestores de proyectos digitales.
        </p>
    </div>
    <div class="section-image">
        <img src="../imagenes/descripcion_carreras/15.jpeg" alt="Imagen representativa">
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
                <p>Diseño y Programación Web</p>
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
                    <h4><b>DISEÑO WEB Y APLICACIONES MULTIMEDIA</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Diseñar la presentación, animación, organización y navegación de los contenidos y servicios web, de acuerdo a las demandas del negocio, buenas prácticas de diseño, técnicas de diseño web, usabilidad y experiencia del usuario objetivo.</p>
                </div>
                <div class="tab-pane fade" id="first-profile" role="tabpanel" aria-labelledby="first-profile-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>APLICACIONES WEB</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Desarrollar la construcción de programas de los sistemas de información, de acuerdo al diseño funcional, estándares internacionales de TI, buenas prácticas de programación y políticas de seguridad de la organización.</p>
                </div>
                <div class="tab-pane fade" id="first-contact" role="tabpanel" aria-labelledby="first-contact-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>INTEGRACIÓN DE APLICACIONES WEB Y MÓVILES</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Desarrollar las pruebas integrales de los sistemas de información y servicios de TI en la fase de implantación, de acuerdo al diseño funcional, buenas prácticas de TI y políticas de seguridad de la organización.</p>
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
        <div id="seccion2" class="contenido-seccion">
            <div class="container">
                <div class="col-md-6">
                    <div class="texto-acerca-de">
                        <h3>Perfil Profesional</h3>
                        <p class="lead">
                            Instruye a usuarios finales sobre el uso de los nuevos recursos informáticos, y de las
                            Tecnologías de la información y comunicación TIC.
                            Construye Software multiplataforma. Analiza, diseña y administra sistemas de gestión de base
                            de datos.
                            Realiza diseños y animaciones gráficas según los requerimientos de la empresa.
                            Analiza y diseño aplicaciones web considerando requerimientos del sitio web y la empresa e
                            implementa aplicaciones móviles y animaciones con contenidos propios de la empresa.
                        </p>
                        <h3>Oportunidades Laborales</h3>
                        <p>
                            Entidades financieras, bancarias, cajas municipales, cooperativas de ahorro y crédito y
                            Pymes.
                            Ministerios, Gobiernos Regionales y Municipales.
                            Instituciones públicas y privadas.
                            Empresas a nivel local, regional y nacional
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
                    <h5><b>DISEÑO WEB Y APLICACIONES MULTIMEDIA</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                        Diseño y Maquetación Web (6h/4c)
                        <br>
                        Fundamentos de Diseño Gráfico (5h/3c)
                        <br>
                        Herramientas multimedia (4h/3c)
                        <br>
                        Introducción a la Programación (4h/3c)
                        <br>
                        Redes e Internet (4h/3c)
                        <br>
                        Arquitectura de Entorno Web (7h/4c)
                        <br>
                        Administración de Páginas Web (6h/4c)
                        <br>
                        Animación Gráfica (5h/3c)
                        <br>
                        Hojas de Cálculo (5h/3c)
                        <br>
                        Unidades Didácticas Empleabilidad
                        Comunicación Efectiva (4h/3c)
                        <br>
                        Tecnologías de la Información (3h/2c)
                        <br>
                        Inglés (4h/3c)
                        <br>
                        Cultura Física y Deportiva (3h/2c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-profile" role="tabpanel" aria-labelledby="second-profile-tab">
                    <h5><b>APLICACIONES WEB</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                        Taller de Programación Web (7h/4c)
                        <br>
                        Base de Datos (4h/3c)
                        <br>
                        Lenguaje de Programación (8h/5c)
                        <br>
                        Requerimientos de Software (4h/3c)
                        <br>
                        Pruebas de Software (4h/3c)
                        <br>
                        Diseño de Software (3h/2c)
                        <br>
                        Integración y Testeo (3h/2c)
                        <br>
                        Desarrollo Web (8h/5c)
                        <br>
                        Arquitectura de Soluciones Web (8h/5c)
                        <br>
                        Administración de Base de Datos (5h/4c)
                        <br>
                        Unidades Didácticas Empleabilidad
                        Solución de problemas (3h/2c)
                        <br>
                        Investigación e Innovación (3h/2c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-contact" role="tabpanel" aria-labelledby="second-contact-tab">
                    <h5><b>INTEGRACIÓN DE APLICACIONES WEB Y MÓVILES</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                        Pruebas de Calidad de Software (6h/4c)
                        <br>
                        Pruebas de Sitios Web (4h/3c)
                        <br>
                        Servidores Web (5h/3c)
                        <br>
                        Gestión de Contenidos (6h/4c)
                        <br>
                        Fundamentos de Aplicaciones Móviles (6h/4c)
                        <br>
                        Proyecto de Aplicación Profesional (4h/3c)
                        <br>
                        Integración de Aplicaciones Web y Móviles (7h/4c)
                        <br>
                        Programación de Aplicaciones Web y Móviles (5h/3c)
                        <br>
                        Seguridad en Aplicaciones Web y Móvil (4h/3c)
                        <br>
                        Marketing Digital (3h/2c)
                        <br>
                        Comercio Electrónico (4h/3c)
                        <br>
                        Unidades Didácticas Empleabilidad
                        Ética y Liderazgo (3h/2c)
                        <br>
                        Cultura Ambiental (3h/2c)
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fin_segundo_tabs -->
    <br>
    <br>
    <br>
    <?php include '../vistas/footer1.php'; ?>
</body>

</html>