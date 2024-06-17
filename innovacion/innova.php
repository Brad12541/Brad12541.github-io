<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/portada_convocatoria1.css">
    <link rel="stylesheet" href="../css/revista.css">
    <link rel="stylesheet" href="../css/particules.css">
    <link rel="stylesheet" href="../css/inicio_innovacion.css">
    <link rel="stylesheet" href="../css/nav_flotante_innovacion.css">
    <link rel="icon" href="../imagenes/logo_principal.png">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            particlesJS.load('particles-js', '../js/particles.json', function() {
                console.log('particles.js loaded - callback');
            });
        });
    </script>
    <title>Innovación</title>
</head>

<body class="medida">
    <?php include '../vistas/menu-admi.php'; ?>
    <!-- portada aparte-->
    <section class="portada">
        <div id="particles-js"></div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide-content">
                    <div class="imagen_left  animate__animated animate__fadeIn delay-2s">
                        <img src="../imagenes/logo_principal.png" class="imagen">
                    </div>
                        <div class="texto">
                            <h2 class="animate__animated animate__fadeInRight delay-1s" style="color: white;">Investigación  e Innovación Tecnológica</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-container">
        <div class="info">
            <h2>PRESENTACIÓN</h2>
            <p>
                En la actualidad la investigación es una necesidad, que constituye un proceso personal, profesional y
                sobre todo académico que se encuentra en un nivel para afrontar los desafíos del mundo globalizado;
                por lo que la educación superior encuentra un aliado poderoso en este ámbito. La investigación, es
                una actividad relevante que cumple una función en la generación de nuevo conocimiento, innovaciones
                de productos, servicios y/o procesos que aportan la solución de problemas concretos de interés público
                o privado en áreas relevantes socialmente. La investigación aplicada e innovación, se centra en el
                análisis y solución de problemas que surgen de contextos diversos y reales, con especial énfasis
                en el aspecto económico, social, cultural, ambiental y tecnológico.
                El objetivo estratégico institucional 4 es: fomentar una cultura de
                innovación basada en la investigación científica y tecnológica, que permita el desarrollo y la solución
                de problemas regionales, nacionales e internacionales.
                En nuestra institución, se realiza investigación aplicada, innovación
                tecnológica -pedagógica, por lo que uno de los objetivos primordiales de la unidad, es
                fomentar la investigación e implementar las áreas y líneas de investigación en los programas
                de estudio, que nos puedan conducir al licenciamiento institucional en el indicador 9 de
                la política de investigación e innovación del MINEDU; además los tipos de investigación,
                permiten el uso de diversas metodologías y marcos de trabajo alineados a los nuevos cambios y
                tendencias de herramientas tecnológicas.
                Por estas razones, les damos la bienvenida a nuestro repositorio de trabajos de investigación
                aplicada e innovación tecnológica - pedagógica, desarrollados por los docentes en el Instituto
                de Educación Superior Tecnológico Público "Andrés A. Cáceres Dorregaray"
                de San Agustín de Cajas - Huancayo - Perú. Aquí, se irán publicando los diversos trabajos de
                investigación e innovación, que irán elaborando a lo largo de los años de servicios docente.
            </p>
        </div>
        <div class="photo">
            <img src="../imagenes/innovacion/encargado.jpg" alt="Foto">
            <figcaption class="nombres_fin">
                <i class="nombre">Ms. Adm. Gonzalo Inga Damián</i><br>
                <i class="nombre">Jefe de Unidad de Investigación.</i>
            </figcaption>
        </div>
    </section>
    <section class="revista">
    <div class="contenido">
        <div class="imagen_revista">
            <img src="../imagenes/innovacion/revista.png" alt="Portada de la revista">
        </div>
        <div class="texto">
            <a href="https://drive.google.com/file/d/147dBbT5q_FbhCARspY_2_Xy7cKZIDnOC/view">Revista Tecnológica CAJAS INNOVA N° 03</a>
            <p>San Agustín de Cajas.</p>
        </div>
    </div>
</section>



    <nav class="nav-flotante">
        <ul>
            <li>
                <a href="innova.php">
                    Inicio
                </a>
            </li>
            <li>
                <a href="informes.php">
                    Informes
                </a>
            </li>
            <li>
                <a href="resoluciones.php">
                    Resoluciones
                </a>
            </li>
        </ul>
    </nav>
    <?php include '../vistas/footer1.php'; ?>
</body>

</html>