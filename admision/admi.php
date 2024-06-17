<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/particules.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="../css/portada_admision.css">
    <link rel="stylesheet" href="../css/modal_index.css">
    <link rel="icon" href="../imagenes/logo_principal.png">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            particlesJS.load('particles-js', '../js/particles.json', function() {
                console.log('particles.js loaded - callback');
            });
        });
    </script>
    <title>Admisión</title>
</head>

<body class="medida">
    <?php include '../vistas/menu-admi.php'; ?>
    <section class="portada">
        <div id="particles-js"></div>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="slide-content">
                        <div class="texto">
                            <h2 class="animate__animated animate__fadeInLeft">Examen de Admision</h2>
                            <p class="animate__animated animate__fadeInRight delay-1s" style="color: white;">
                                <b>Sabado 06 de Abril</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <h1 class="titulo-carreras">Listado de Carreras</h1>
    <br>
    <br>
    <div class="tables-container">
        <table>
            <tr class="carrera">
                <td colspan="2">DISEÑO Y PROGRAMACIÓN WEB</td>
            </tr>
            <tr>
                <td>Diurno</td>
                <td><a data-bs-toggle="modal" data-bs-target="#dpw_diurno"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="dpw_diurno" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/DPW-DIURNO.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <td>Vespertino</td>
                <td><a data-bs-toggle="modal" data-bs-target="#dpw_vespertino"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="dpw_vespertino" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/DPW-VES.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        </table>

        <table>
            <tr class="carrera">
                <td colspan="2">ASISTENTE ADMINISTRATIVA</td>
            </tr>
            <tr>
                <td>Diurno</td>
                <td><a data-bs-toggle="modal" data-bs-target="#aa_diurno"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="aa_diurno" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/AA_DIURNO.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <td>Vespertino</td>
                <td><a data-bs-toggle="modal" data-bs-target="#aa_vespertino"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="aa_vespertino" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/AA-VES.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
        <table>
            <tr class="carrera">
                <td colspan="2">ELECTRICIDAD INDUSTRIAL</td>
            </tr>
            <tr>
                <td>Diurno</td>
                <td><a data-bs-toggle="modal" data-bs-target="#ei_diurno"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="ei_diurno" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/ELA-DIURNO.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <td>Vespertino</td>
                <td><a data-bs-toggle="modal" data-bs-target="#ei_vespertino"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="ei_vespertino" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/ELA-VES.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
        <table>
            <tr class="carrera">
                <td colspan="2">MECÁNICA DE PRODUCCIÓN INDUSTRIAL</td>
            </tr>
            <tr>
                <td>Diurno</td>
                <td><a data-bs-toggle="modal" data-bs-target="#mpi_diurno"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="mpi_diurno" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/MPI-DIURNO.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <td>Vespertino</td>
                <td><a data-bs-toggle="modal" data-bs-target="#mpi_vespertino"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="mpi_vespertino" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/MPI-VES.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
        <table>
            <tr class="carrera">
                <td colspan="2">MECATRÓNICA AUTOMOTRIZ</td>
            </tr>
            <tr>
                <td>Diurno</td>
                <td><a data-bs-toggle="modal" data-bs-target="#ma_diurno"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="ma_diurno" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/MA-DIURNO.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <td>Vespertino</td>
                <td><a data-bs-toggle="modal" data-bs-target="#ma_vespertino"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="ma_vespertino" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/MA-VES.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
        <table>
            <tr class="carrera">
                <td colspan="2">MANTENIMIENTO DE MAQUINARIA PESADA</td>
            </tr>
            <tr>
                <td>Diurno</td>
                <td><a data-bs-toggle="modal" data-bs-target="#mmp_diurno"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="mmp_diurno" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/MMP-DIURNO.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <td>Vespertino</td>
                <td><a data-bs-toggle="modal" data-bs-target="#mmp_vespertino"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="mmp_vespertino" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/MMP-VES.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
        <table>
            <tr class="carrera">
                <td colspan="2">METALURGIA</td>
            </tr>
            <tr>
                <td>Diurno</td>
                <td><a data-bs-toggle="modal" data-bs-target="#m_diurno"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="m_diurno" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/MET-DIURNO.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <td>Vespertino</td>
                <td><a data-bs-toggle="modal" data-bs-target="#m_vespertino"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="m_vespertino" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/MET-VES.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
        <table>
            <tr class="carrera">
                <td colspan="2">ELECTRÓNICA INDUSTRIAL</td>
            </tr>
            <tr>
                <td>Diurno</td>
                <td><a data-bs-toggle="modal" data-bs-target="#eli_diurno"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="eli_diurno" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/ELO-DIURNO.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <td>Vespertino</td>
                <td><a data-bs-toggle="modal" data-bs-target="#eli_vespertino"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="eli_vespertino" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/ELO-VES.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
        <table>
            <tr class="carrera">
                <td colspan="2">TECNOLOGÍA DE ANÁLISIS QUÍMICO</td>
            </tr>
            <tr>
                <td>Diurno</td>
                <td><a data-bs-toggle="modal" data-bs-target="#taq_diurno"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="taq_diurno" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/TAQ-DIURNO.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
            <tr>
                <td>Vespertino</td>
                <td><a data-bs-toggle="modal" data-bs-target="#taq_vespertino"><i class="fas fa-file-pdf" style="color: red;"></i></a></td>
                <div class="modal fade" id="taq_vespertino" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
                    <div class="modal-dialog animate__animated animate__flipInX">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Aquí incluye un iframe para mostrar el PDF -->
                                <iframe src="https://institutocajas.edu.pe/admision2024/RESULTADOS/TAQ-VES.pdf" style="width: 100%; height: 1000px;"></iframe>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </tr>
        </table>
    </div>
    <br><br><br>
    <h1 class="titulo-carreras2">CRONOGRAMA DE MATRICULA DE INGRESANTES 2024</h1>
    <br><br>
    <p>TRAER REQUISITOS ORIGINALES PARA LA MATRICULA: Certificado de Estudios, Pago de S/. 220.00</p>
    <br>
    <div class="tables-container2">
        <table class="tables-entero">
            <tr class="carrera">
                <td colspan="2">NOTA: Los postulantes que obtubieron nota aprobatoria y no lograron vacante pueden solicitar COBERTURA DE VACANTE los dias 08 y 09 de abril.</td>
            </tr>
            <tr class="carrera">
                <td colspan="2">CRONOGRAMA DE MATRICULA</td>
            </tr>
            <tr>
                <td class="carrera_nombre1" style="background-color: #141936;"><b>PROGRAMA DE ESTUDIOS</b></td>
                <td class="carrera_fecha1" style="background-color: #141936;"><b>FECHA</b></td>
            </tr>
            <tr>
                <td class="carrera_nombre">ASISTENCIA ADMINISTRATIVA</td>
                <td class="carrera_fecha">08 DE ABRIL</td>
            </tr>
            <tr>
                <td class="carrera_nombre">DISEÑO Y PROGRAMACIÓN WEB</td>
                <td class="carrera_fecha">09 DE ABRIL</td>
            </tr>
            <tr>
                <td class="carrera_nombre">ELECTRICIDAD INDUSTRIAL</td>
                <td class="carrera_fecha">10 DE ABRIL</td>
            </tr>
            <tr>
                <td class="carrera_nombre">ELECTRÓNICA INDUSTRIAL</td>
                <td class="carrera_fecha">11 DE ABRIL</td>
            </tr>
            <tr>
                <td class="carrera_nombre">MANTENIMIENTO DE MAQUINARIA PESADA</td>
                <td class="carrera_fecha">12 DE ABRIL</td>
            </tr>
            <tr>
                <td class="carrera_nombre">MECÁNICA DE PRODUCCÓN INDUSTRIAL</td>
                <td class="carrera_fecha">15 DE ABRIL</td>
            </tr>
            <tr>
                <td class="carrera_nombre">MECATRÓNICA AUTOMOTRIZ</td>
                <td class="carrera_fecha">16 DE ABRIL</td>
            </tr>
            <tr>
                <td class="carrera_nombre">METALURGIA</td>
                <td class="carrera_fecha">17 DE ABRIL</td>
            </tr>
            <tr>
                <td class="carrera_nombre">TECNOLOGÍA DE ANÁLISIS QUÍMICO</td>
                <td class="carrera_fecha">18 DE ABRIL</td>
            </tr>
            <tr class="carrera">
                <td colspan="2">INICIO DE CLASES 08 DE ABRIL</td>
            </tr>
        </table>
    </div>
    <br><br>
    <h1 class="titulo-carreras">Informes e Inscripciones</h1>
    <?php include '../vistas/servicios.php'; ?>
    <br>
    <br>
    <?php include '../vistas/footer1.php'; ?>
</body>

</html>