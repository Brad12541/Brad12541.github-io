<link rel="stylesheet" href="../css/estilos.css">
<link rel="stylesheet" href="../css/menu_superior.css">
<link rel="stylesheet" href="../css/medios.css">
<script src="../js/bootstrap.bundle.js"></script>


<div class="top-menu">
    <div class="logo">
        <h2>"INSTITUTO DE EDUCACIÓN SUPERIOR TECNOLÓGICO PÚBLICO ANDRÉS AVELINO CÁCERES DORREGARAY"</h2>
    </div>
    <div class="social-links">
        <a href="https://www.facebook.com/IESTP.AACD.Cajas.Huancayo"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.hopp.bio/iestp-andres-avelino-caceres-dorregarai"><i class="far fa-file-alt" style="color: white;"></i></a>
    </div>
</div>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Colocamos el logo a la izquierda -->
            <a class="navbar-brand" href="../index.php">
                <img src="../imagenes/logo_principal.png" alt="Logo" style="max-height: 60px; margin-left: 25px;"> <!-- Ajusta el tamaño del logo -->
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
                            <li><a class="dropdown-item" href="DPW.php">Diseño y Programacion Web</a></li>
                            <li><a class="dropdown-item" href="AA.php">Asistencia Administrativa</a></li>
                            <li><a class="dropdown-item" href="EI.php">Electricidad Industrial</a></li>
                            <li><a class="dropdown-item" href="MPI.php">Mecánica de Producción Industrial</a></li>
                            <li><a class="dropdown-item" href="MA.php">Mecatrónica Automotriz</a></li>
                            <li><a class="dropdown-item" href="MMP.php">Mantenimiento de Maquinaria Pesada</a></li>
                            <li><a class="dropdown-item" href="M.php">Metalurgia</a></li>
                            <li><a class="dropdown-item" href="ELI.php">Electrónica Industrial</a></li>
                            <li><a class="dropdown-item" href="TAQ.php">Tecnología de Análisis Químico</a></li>
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
                            <a class="nav-link" href="../admision/admi.php">Adminsión 2024</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://institutocajas.editorialfutura.com/">Biblioteca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../convocatoria/convo.php">Convocatoria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../noticias/noticias.php">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../innovacion/innova.php">Innovación</a>
                    </li>
                    <!-- Agrega más opciones aquí -->
                </ul>
            </div>
        </div>
    </nav>
</header>