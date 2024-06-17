<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instituto cajas</title>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/particules.css">
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/medios.css">
    <link rel="stylesheet" href="css/servicios3.css">
    <link rel="stylesheet" href="css/portada_inde.css">
    <link rel="stylesheet" href="css/elegir.css">
    <link rel="stylesheet" href="css/servicios.css">
    <link rel="stylesheet" href="css/mapa_carreras.css">
    <link rel="stylesheet" href="css/menu_superior.css">
    <link rel="stylesheet" href="css/footer_gloval.css">
    <link rel="icon" href="imagenes/logo_principal.png">
</head>

<body class="medida">
    <div class="top-menu">
        <div class="logo">
            <h2>"INSTITUTO DE EDUCACIÓN SUPERIOR TECNOLÓGICO PÚBLICO ANDRÉS AVELINO CÁCERES DORREGARAY"</h2>
        </div>
        <div class="social-links">
            <a href="https://www.facebook.com/IESTP.AACD.Cajas.Huancayo"><i class="fab fa-facebook"></i></a>
            <!--<a href="#"><i class="fab fa-instagram"></i></a> -->
            <a href="#"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.hopp.bio/iestp-andres-avelino-caceres-dorregarai"><i class="far fa-file-alt" style="color: white;"></i></a>
        </div>
    </div>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <!-- Colocamos el logo a la izquierda -->
                <a class="navbar-brand" href="index.php">
                    <img src="imagenes/logo_principal.png" alt="Logo" style="max-height: 60px; margin-left: 25px;"> <!-- Ajusta el tamaño del logo -->
                </a>
                <!-- Botón para colapsar el menú en dispositivos pequeños -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <!-- Cambiamos el icono del botón de colapso -->
                    <span class="navbar-toggler-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5zM2.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5v-1a.5.5 0 0 0 .5-.5zm-1-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1H2.5A.5.5 0 0 0 2 3zm1 10a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1H2.5a.5.5 0 0 0-.5.5z" />
                        </svg>
                    </span>
                </button>
                <!-- Colocamos las opciones de navegación a la derecha -->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Agregamos el menú desplegable -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Carreras
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="carreras/DPW.php">Diseño y Programacion Web</a></li>
                                <li><a class="dropdown-item" href="carreras/AA.php">Asistencia Administrativa</a></li>
                                <li><a class="dropdown-item" href="carreras/EI.php">Electricidad Industrial</a></li>
                                <li><a class="dropdown-item" href="carreras/MPI.php">Mecánica de Producción Industrial</a></li>
                                <li><a class="dropdown-item" href="carreras/MA.php">Mecatrónica Automotriz</a></li>
                                <li><a class="dropdown-item" href="carreras/MMP.php">Mantenimiento de Maquinaria Pesada</a></li>
                                <li><a class="dropdown-item" href="carreras/M.php">Metalurgia</a></li>
                                <li><a class="dropdown-item" href="carreras/ELI.php">Electrónica Industrial</a></li>
                                <li><a class="dropdown-item" href="carreras/TAQ.php">Tecnología de Análisis Químico</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Encuestas y Reclamos
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSftRDrvdQ2eLndBQZ8Dl-YhBdY74bEBOHMqsa6Ybel_vCvBuA/viewform?pli=1">Encuestas Egresados</a></li>
                                <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSeRW3BoI7f7znoPoRu4aaNb52E3y0-CmGxxZokVj5L5KvY41Q/viewform">Encuesta Empleadores</a></li>
                                <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSeRW3BoI7f7znoPoRu4aaNb52E3y0-CmGxxZokVj5L5KvY41Q/viewform">Formulario de Reclamos</a></li>
                                <li><a class="dropdown-item" href="https://docs.google.com/forms/d/e/1FAIpQLSd3yROrzZ3ZK2bTq6f7yMuQUi9LyeLHCBj8UnyrTLJfy4xoCg/viewform">Formulario de Denuncias</a></li>
                            </ul>
                        </li>
                        <!-- Agrega más opciones de menú aquí -->
                        <li class="nav-item">
                            <a class="nav-link" href="admision/admi.php">Adminsión 2024</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://institutocajas.editorialfutura.com/">Biblioteca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="convocatoria/convo.php">Convocatoria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="noticias/noticias.php">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="innovacion/innova.php">Innovación</a>
                        </li>
                        <!-- Agrega más opciones aquí -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <section class="portada">
    <div id="particles-js"></div>
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="slide-content">
                <div class="imagen animate__animated animate__fadeIn delay-2s">
                        <img src="imagenes/logo_principal.png" class="imagen">
                    </div>
                    <div class="texto">
                        <h2 class="animate__animated animate__fadeIn" style="font-size: 6rem;  font-family: 'Dancing Script', cursive;">Feliz Aniversario 44°</h2>
                        <p class="animate__animated animate__fadeIn delay-1s" style="font-size: 1.5rem; font-family: 'Montserrat', sans-serif;">
                            I.E.S.T.P "Andrés Avelino Cáceres Dorregaray"
                        </p>
                    </div>
                </div>
            </div>
            <!--
            <div class="carousel-item">
            <div class="slide-content">
                <div class="imagen animate__animated animate__fadeIn delay-2s">
                        <img src="imagenes/logo_principal.png" class="imagen">
                    </div>
                    <div class="texto">
                        <h2 class="animate__animated animate__fadeIn" style="font-size: 2rem;  font-family: 'Dancing Script', cursive;">Ingresa a mesa de partes virtual de la I.E.S.T.P "Ándres Avelino Cáceres Dorregaray"</h2>
                        <p class="animate__animated animate__fadeIn delay-1s" style="font-size: 1.5rem; font-family: 'Montserrat', sans-serif;">
                            I.E.S.T.P "Andrés Avelino Cáceres Dorregaray"
                        </p>
                </div>
            </div>
            Añadir el resto de los slides con las animaciones correspondientes -->
        </div>
         <!--<div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        -->
    </div>
</section>
    <section class="features-section">
    <div class="main-feature">
        <h2>¿Por qué elegir IESTP "AACD"?</h2>
        <p class="main-feature-parrafo">Somos una organización con más de 45 años de experiencia en educación</p>
        <p class="main-feature-parrafo">Ofrecemos programas educativos actualizados y alineados con las necesidades del mercado laboral.</p>
        <p class="main-feature-parrafo">Nuestro cuerpo docente está compuesto por profesionales altamente calificados y con experiencia en el campo.</p>
        <p class="main-feature-parrafo">Facilitamos oportunidades de prácticas profesionales y pasantías en empresas reconocidas.</p>
        <p class="main-feature-parrafo">Nuestros egresados se destacan por su alta empleabilidad y contribución al desarrollo económico del país.</p>
    </div>
</section>

<section>
    <div class="additional-features">
        <div class="feature-item">
            <div class="feature-item-icon">
                <img src="imagenes/iconos/experience.png" alt="Icono 1">
            </div>
            <h3 class="feature-item-h3">Experiencia</h3>
            <p>
                Contamos con una experiencia exitosa de 30 años; dedicados a la formación de profesionales del más alto nivel; que sortearán las complejidades del cambiante escenario socioeconómico y laboral.
            </p>
        </div>
        <div class="feature-item">
            <div class="feature-item-icon">
                <img src="imagenes/iconos/quality.png" alt="Icono 1">
            </div>
            <h3 class="feature-item-h3">Calidad Académica</h3>
            <p>
                Efectividad del proceso enseñanza aprendizaje reflejado en el modelo educativo y la virtualidad como herramienta formativa con una metodología activa e innovadora que relaciona el trinomio - estudiante, mediador y contenidos disciplinares - que apunta al equilibrio de las competencias cognitivas y socioemocionales.
            </p>
        </div>
        <div class="feature-item">
            <div class="feature-item-icon">
                <img src="imagenes/iconos/certificate.png" alt="Icono 1">
            </div>
            <br>
            <h3 class="feature-item-h3">Certificaciones</h3>
            <p>
                Validación de los conocimientos adquiridos por los estudiantes al término del módulo formativo que refrenda el logro de la unidad de competencia y capacidades adquiridas.
            </p>
        </div>
        <div class="feature-item">
            <div class="feature-item-icon">
                <img src="imagenes/iconos/portfolio.png" alt="Icono 1">
            </div>
            <h3 class="feature-item-h3">Bolsa de Trabajo</h3>
            <p>
                Garantizamos oportunidades de trabajo a estudiantes por módulo formativo, egresados y profesionales porque contamos con convenios con organizaciones públicas y particulares a nivel regional.
            </p>
        </div>
    </div>
</section>

    <h2 class="titulo-carreras">PROGRAMAS DE ESTUDIO</h2>
    <section class="creative-cards style-one">
        <div class="container">
            <div class="row">
            <div class="card-column">
                    <div class="card-details">
                        <div class="card-icons">
                            <img class="light-icon" src="imagenes/iconos/mmp.png" alt="icon" />
                        </div>
                        <h3><a href="carreras/mmp.php">MANTENIMIENTO DE MAQUINARIA PESADA</a></h3>
                        <p>Cuidado y reparación de equipos industriales grandes.</p>
                        <a class="read-more-btn" href="carreras/mmp.php"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="card-column">
                    <div class="card-details">
                        <div class="card-icons">
                            <img class="light-icon" src="imagenes/iconos/dpw.png" />
                        </div>
                        <h3><a href="carreras/dpw.php">DISEÑO Y PROGRAMACIÓN WEB</a></h3>
                        <p>Creación digital visual y desarrollo online.</p>
                        <a class="read-more-btn" href="carreras/dpw.php"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="card-column">
                    <div class="card-details">
                        <div class="card-icons">
                            <img class="light-icon" src="imagenes/iconos/taq.png" alt="icon" />
                        </div>
                        <h3><a href="carreras/TAQ.php">TECNOLOGÍA DE ANÁLISIS QUÍMICO</a></h3>
                        <p> Métodos avanzados para estudiar composiciones químicas.</p>
                        <a class="read-more-btn" href="carreras/taq.php"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="card-column">
                    <div class="card-details">
                        <div class="card-icons">
                            <img class="light-icon" src="imagenes/iconos/aa.png" alt="icon" />
                        </div>
                        <h3><a href="carreras/aa.php">ASISTENTE ADMINISTRATIVA</a></h3>
                        <p>Apoyo en gestión y organización empresarial.</p>
                        <a class="read-more-btn" href="carreras/aa.php"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="card-column">
                    <div class="card-details">
                        <div class="card-icons">
                            <img class="light-icon" src="imagenes/iconos/ei.png" alt="icon" />
                        </div>
                        <h3><a href="carreras/ei.php">ELECTRICIDAD INDUSTRIAL</a></h3>
                        <p>Instalación y mantenimiento de sistemas eléctricos industriales.</p>
                        <a class="read-more-btn" href="carreras/ei.php"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="card-column">
                    <div class="card-details">
                        <div class="card-icons">
                            <img class="light-icon" src="imagenes/iconos/mpi.png" alt="icon" />
                        </div>
                        <h3><a href="carreras/MPI.php">MECÁNICA DE PRODUCCIÓN INDUSTRIAL</a></h3>
                        <p>Optimización de procesos en entornos manufactureros.</p>
                        <a class="read-more-btn" href="carreras/mpi.php"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="card-column">
                    <div class="card-details">
                        <div class="card-icons">
                            <img class="light-icon" src="imagenes/iconos/ma.png" alt="icon" />
                        </div>
                        <h3><a href="carreras/ma.php">MECATRÓNICA AUTOMOTRIZ</a></h3>
                        <p>Reparación y mantenimiento de vehículos de motor.</p>
                        <a class="read-more-btn" href="carreras/ma.php"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="card-column">
                    <div class="card-details">
                        <div class="card-icons">
                            <img class="light-icon" src="imagenes/iconos/m.png" alt="icon" />
                        </div>
                        <h3><a href="carreras/m.php">METALURGIA</a></h3>
                        <p>Proceso físico-químico para fabricar productos metálicos con fundición, forja y tratamiento térmico.</p>
                        <a class="read-more-btn" href="carreras/m.php"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
                <div class="card-column">
                    <div class="card-details">
                        <div class="card-icons">
                            <img class="light-icon" src="imagenes/iconos/eli.png" alt="icon" />
                        </div>
                        <h3><a href="carreras/ELI.php">ELECTRÓNICA INDUSTRIAL</a></h3>
                        <p> Instalación y mantenimiento de sistemas eléctricos industriales.</p>
                        <a class="read-more-btn" href="carreras/eli.php"><i class="fa-solid fa-angles-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'vistas/servicios1.php'; ?>
    <!-- mapa de google-->
    <section class="ubicacion-section">
        <div class="ubicacion-heading">
            <h2 class="titulo-carreras">UBICACION</h2>
        </div>
        <div class="ubicacion-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.6588517555024!2d-75.25473879004478!3d-11.998091140945949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910ebe7dfc4c9b2d%3A0xc94b5580e6d753d2!2sInstituto%20de%20Educaci%C3%B3n%20Superior%20Tecnol%C3%B3gico%20P%C3%BAblico%20Andr%C3%A9s%20Avelino%20C%C3%A1ceres%20Dorregaray!5e0!3m2!1ses-419!2spe!4v1715488807296!5m2!1ses-419!2spe" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <br>
    <br>
    <?php include 'vistas/footer.php'; ?>

    <script src="js/bootstrap.bundle.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            particlesJS.load('particles-js', 'js/particles.json', function() {
                console.log('particles.js loaded - callback');
            });
        });
    </script>
</body>

</html>