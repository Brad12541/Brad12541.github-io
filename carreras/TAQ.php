<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/particules.css">
    <link rel="stylesheet" href="../css/animate.min.css">
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
    <title>Tecnología de Análisis Químico</title>
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
                            <h2 class="animate__animated animate__fadeIn">TECNOLOGÍA DE ANÁLISIS QUÍMICO</h2>
                            <p class="animate__animated animate__fadeIn delay-1s">
                                Brindar una formación integral a la Juventud Estudiosa para formarse como
                                TECNICOS PROFESIONALES en el campo del Control de Calidad, capaces de crear
                                su propia fuente de trabajo, integrándose a la búsqueda del desarrollo
                                personal, de su comunidad y de nuestro país.
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
            La carrera técnica en Tecnología de Análisis Químico se define como un programa educativo especializado que prepara a los estudiantes para desempeñarse como técnicos capacitados en la realización de análisis químicos utilizando técnicas avanzadas y equipos especializados. Los estudiantes adquieren conocimientos profundos en química analítica, instrumentación analítica y métodos de análisis cualitativo y cuantitativo. Este programa capacita a los graduados para aplicar sus habilidades en diversos sectores industriales, científicos y de investigación, contribuyendo al control de calidad, la investigación científica y el desarrollo de productos en industrias como la alimentaria, farmacéutica, ambiental y otras relacionadas con la química y los materiales.
        </p>
    </div>
    <div class="section-image">
        <img src="../imagenes/taq/laboratorio_instrumental.jpg" alt="Imagen representativa">
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
                <p>M2971-3-002</p>
                <p><b>Carrera profesional:</b></p>
                <p>Tecnología De Análisis Químico</p>
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
                    <h4><b>TECNICAS BASICAS EN LABORATORIO QUIMICO</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Comprender y ejecutar las técnicas básicas en un laboratorio químico, en forma eficiente aplicando las normas de seguridad e higiene</p>
                </div>
                <div class="tab-pane fade" id="first-profile" role="tabpanel" aria-labelledby="first-profile-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>ANALISIS QUIMICOS CUANTITATIVOS E INSTRUMENTALES</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Organizar, ejecutar y aplicar los conocimientos teóricos y prácticos para la ejecución de los análisis físico-químicos, cuantitativos e instrumentales bajo estrictas normas de buenas prácticas de laboratorio.</p>
                </div>
                <div class="tab-pane fade" id="first-contact" role="tabpanel" aria-labelledby="first-contact-tab">
                    <div class="image-container">
                        <img src="" alt="">
                    </div>
                    <h4><b>TECNOLOGIA EN ANALISIS QUIMICO INDUSTRIAL</b></h4>
                    <h5 style="color: red;">UNIDAD DE COMPETENCIA</h5>
                    <p>Ejecutar, procesar y reportar los resultados obtenidos en el análisis químico de control de calidad de los diferentes productos industriales. Asimismo, crear y gestionar pequeñas empresas orientada al sector productivo aplicando normas de calidad y preservación del medio ambiente.</p>
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
        <div id="seccion2" class="contenido-seccion" style="background-image: url('../imagenes/taq/5999.jpg');">
            <div class="container">
                <div class="col-md-6">
                    <div class="texto-acerca-de">
                        <h3>Perfil Profesional</h3>
                        <p class="lead">
                        El profesional técnico en Tecnología de Análisis Químico, realiza con eficiencia, responsabilidad y ética los análisis químicos, físicos e instrumentales en diversos tipos de muestras dando resultados confiables, bajo normas técnicas nacionales e internacionales y medioambientales vigentes, administra laboratorios y crea pequeñas empresas conservando el medio ambiente.
                        </p>
                        <h3>Oportunidades Laborales</h3>
                        <p>
                        Laboratorios analíticos: minerales, suelo, agua, ambientales, control de calidad en productos industriales.
                        <br>
                        En la industria de: Alimentos, plásticos, cementos, fertilizantes sintéticos, abonos orgánicos.
                        <br>
                        Administración en laboratorio, mantener el sistema de gestión de calidad y certificaciones de laboratorio.
                        <br>
                        Planta de tratamiento de agua potable, aguas residuales.
                        <br>
                        Universidades e Instituciones Educativas que cuenten con un Laboratorio Químico.
                        <br>
                        Empresas Estatales y Privadas que cuenten con un Laboratorio Químico.
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
                <p>Tecnología De Análisis Químico</p>
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
                    <h5><b>TECNICAS BASICAS EN LABORATORIO QUIMICO</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Química Aplicada (7h/5c)
                    <br>
                    Tecnología de Laboratorio Químico (5h/4c)
                    <br>
                    Tecnología Básica (3h/2c)
                    <br>
                    Física Aplicada (4h/3c)
                    <br>
                    Seguridad e Higiene en Laboratorio Químico (3h/2c)
                    <br>
                    Química Analítica Cualitativa (8h/6c)
                    <br>
                    Química Inorgánica Aplicada (5h/4c)
                    <br>
                    Cálculos Químicos (4h/3c)
                    <br>
                    Matemática Aplicada (3h/2c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-profile" role="tabpanel" aria-labelledby="second-profile-tab">
                    <h5><b>ANALISIS QUIMICOS CUANTITATIVOS E INSTRUMENTALES</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Química Analítica Cualitativa (8h/6c)
                    <br>
                    Química Inorgánica Aplicada (5h/4c)
                    <br>
                    Cálculos Químicos (4h/3c)
                    <br>
                    Matemática Aplicada (3h/2c)
                    <br>
                    Fundamentos de Investigación (2h/1.5c)
                    <br>
                    Química Analítica Cuantitativa II (6h/4.5c)
                    <br>
                    Análisis Químico Instrumental (6h/4.5c)
                    <br>
                    Análisis Químico Ambiental (5h/4c)
                    <br>
                    Recursos Naturales (3h/2c)
                    <br>
                    Procesos Químicos Industriales (4h/3c)
                    </p>
                </div>
                <div class="tab-pane fade" id="second-contact" role="tabpanel" aria-labelledby="second-contact-tab">
                    <h5><b>TECNOLOGIA EN ANALISIS QUIMICO INDUSTRIAL</b></h5>
                    <p style="color: red;">Unidades Didácticas Específicas</p>
                    <p>
                    Tecnología de Productos Agroindustriales (6h/4.5c)
                    <br>
                    Tecnología Productos Químicos Industriales (6h/3c)
                    <br>
                    Tecnología de Minerales I (5h/4c)
                    <br>
                    Fundamentos de Control de Calidad (4h/3c)
                    <br>
                    Administración de Laboratorio (3h/2c)
                    <br>
                    Análisis Bromatológico (6h/4.5c)
                    <br>
                    Tecnología de Minerales II (8h/6c)
                    <br>
                    Control de Calidad de Productos Industriales (5h/4c)
                    <br>
                    Proyectos Industriales (4h/3c)
                    <br>
                    Análisis Bromatológico (6h/4.5c)
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