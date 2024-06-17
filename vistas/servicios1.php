<link rel="stylesheet" href="css/servicios1.css">
<link rel="stylesheet" href="css/modal_index.css"> 
<link href="../css/animate.min.css" rel="stylesheet">
<h2 class="titulo-carreras">SERVICIOS</h2>
<div class="buttons">
    <a href="admision/admi.php">
        <button class="neumorphic">
            <img src="imagenes/iconos/compu.png" alt="">
            <span>
                Admisión
                <br>
                2024
            </span>
        </button>
    </a>
    <a href="" data-bs-toggle="modal" data-bs-target="#ofertasModal">
        <button class="neumorphic">
            <img src="imagenes/iconos/gradu.png" alt="">
            <span>
                Ofertas
                <br>
                Laborales
            </span>
        </button>
    </a>
    <a href="convocatoria/convo.php">
        <button class="neumorphic">
            <img src="imagenes/iconos/documento.png" alt="">
            <span>Convocatoria 2024</span>
        </button>
    </a>
    <a href="#" data-bs-toggle="modal" data-bs-target="#pdfModal">
        <button class="neumorphic">
            <img src="imagenes/iconos/aviso.png" alt="">
            <span>Comunicados 2024</span>
        </button>
    </a>
    <a href="" data-bs-toggle="modal" data-bs-target="#tasasModal">
        <button class="neumorphic">
            <img src="imagenes/iconos/tasas.png" alt="">
            <span>Tasas Educativas 2024</span>
        </button>
    </a>
</div>
<div class="modal fade" id="ofertasModal" tabindex="-1" aria-labelledby="ofertasModalLabel" aria-hidden="true">
        <div class="modal-dialog animate__animated animate__slideInUp">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ofertasModalLabel">Ofertas Laborales</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="imagenes/ofertas_laborales.webp" alt="Ofertas Laborales" class="modal-imagen">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog animate__animated animate__slideInUp"> <!-- Ajusta el tamaño del modal según tus necesidades -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">Comunicados 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Aquí incluye un iframe para mostrar el PDF -->
                <iframe src="https://institutocajas.edu.pe/comunicados/pdfs/R.D._N°_%200017-2024-IESTP-AACD.pdf" style="width: 100%; height: 1000px;"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="tasasModal" tabindex="-1" aria-labelledby="tasasModalLabel" aria-hidden="true">
    <div class="modal-dialog animate__animated animate__slideInUp">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tasasModalLabel">Tasas Educativas 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">N°</th>
                            <th scope="col">CONCEPTO</th>
                            <th scope="col">MONTO S/.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1.1</td>
                            <td>CARNÉ DE MEDIO PASAJE</td>
                            <td>18.00</td>
                        </tr>
                        <tr>
                            <td>1.2</td>
                            <td>DUPLICADO DE CARNÉ</td>
                            <td>18.00</td>
                        </tr>
                        <tr>
                            <td>3.1</td>
                            <td>INSCRIPCIÓN DEL POSTULANTE MODALIDAD ORDINARIO</td>
                            <td>205.00</td>
                        </tr>
                        <tr>
                            <td>3.2</td>
                            <td>INSCRIPCIÓN DEL POSTULANTE MODALIDAD EXONERADOS</td>
                            <td>205.00</td>
                        </tr>
                        <tr>
                            <td>3.1</td>
                            <td>INSCRIPCIÓN DEL POSTULANTE MODALIDAD ORDINARIO</td>
                            <td>205.00</td>
                        </tr>
                        <tr>
                            <td>4.1</td>
                            <td>TRAMITE DE TRASLADO INTERNO</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>4.2</td>
                            <td>TRAMITE DE TRASLADO DE TURNO</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>5.1</td>
                            <td>RATIFICACIÓN DE MATRICULA</td>
                            <td>172.00</td>
                        </tr>
                        <tr>
                            <td>5.2</td>
                            <td>MATRICULA INGRESANTES</td>
                            <td>220.00</td>
                        </tr>
                        <tr>
                            <td>5.3</td>
                            <td>MATRICULA DE INGRESANTES POR EXONERACIÓN</td>
                            <td>220.00</td>
                        </tr>
                        <tr>
                            <td>5.4</td>
                            <td>MATRICULA TRASLADO DE TURNO</td>
                            <td>288.00</td>
                        </tr>
                        <tr>
                            <td>5.5</td>
                            <td>MATRICULA TRASLADO INTERNO</td>
                            <td>288.00</td>
                        </tr>
                        <tr>
                            <td>5.6</td>
                            <td>MATRICULA TRASLADO INTERNO</td>
                            <td>515.00</td>
                        </tr>
                        <tr>
                            <td>6.1</td>
                            <td>TRAMITE DE MATRICULA EXTEMPORANEA</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>6.2</td>
                            <td>MATRICULA EXTEMPORANEA</td>
                            <td>233.00</td>
                        </tr>
                        <tr>
                            <td>6.3</td>
                            <td>RESERVA DE MATRICULA POR PROCESOS</td>
                            <td>110.00</td>
                        </tr>
                        <tr>
                            <td>7.1</td>
                            <td>CONVALIDACIÓN INTERNA POR SEMESTRE</td>
                            <td>61.00</td>
                        </tr>
                        <tr>
                            <td>7.2</td>
                            <td>CONVALIDACIÓN EXTERNA POR SEMESTRE</td>
                            <td>61.00</td>
                        </tr>
                        <tr>
                            <td>8.1</td>
                            <td>TRAMITE DE REINGRESO</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>8.2</td>
                            <td>MATRICULA DE REPITENCIA DE SEMESTRE</td>
                            <td>343.00</td>
                        </tr>
                        <tr>
                            <td>9.1</td>
                            <td>TRAMITE DE REINGRESO</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>9.2</td>
                            <td>MATRICULA DE REINGRESO</td>
                            <td>282.00</td>
                        </tr>
                        <tr>
                            <td>10.1</td>
                            <td>REPITENCIA DE UNIDAD DIDACTICA</td>
                            <td>30.00</td>
                        </tr>
                        <tr>
                            <td>11.1</td>
                            <td>CONSTANCIAS DIVERSAS</td>
                            <td>18.00</td>
                        </tr>
                        <tr>
                            <td>11.2</td>
                            <td>CONSTANCIA DE EGRESADO</td>
                            <td>24.00</td>
                        </tr>
                        <tr>
                            <td>11.3</td>
                            <td>EVALUACIÓN DE IDIOMA EXTRANJERA, LENGUA NATIVA U ORDINARIA</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>11.5</td>
                            <td>CONSTANCIA DE NO ADEUDAR</td>
                            <td>18.00</td>
                        </tr>
                        <tr>
                            <td>11.2</td>
                            <td>CONSTANCIA DE EGRESADO</td>
                            <td>24.00</td>
                        </tr>
                        <tr>
                            <td>12.1</td>
                            <td>CERTIFICADO DE ESTUDIOS (X SEMESTRE)+FORMATO</td>
                            <td>165.00</td>
                        </tr>
                        <tr>
                            <td>12.2</td>
                            <td>EXPEDICION DE CERTIFICADO DE EGRESADO</td>
                            <td>24.00</td>
                        </tr>
                        <tr>
                            <td>13.1</td>
                            <td>CARPETA DE PRACTICAS PRE-PROFESIONALES</td>
                            <td>18.00</td>
                        </tr>
                        <tr>
                            <td>14.1</td>
                            <td>INSCRIPCIÓN DE TRABAJO DE APLICACIÓN PROFESIONAL</td>
                            <td>34.00</td>
                        </tr>
                        <tr>
                            <td>15.1</td>
                            <td>SUSTENTACIÓN DEL TRABAJO DE APLICACIÓN PROFESIONAL</td>
                            <td>224.00</td>
                        </tr>
                        <tr>
                            <td>15.2</td>
                            <td>EXAMEN DE SUFICIENCIA PROFESIONAL</td>
                            <td>360.00</td>
                        </tr>
                        <tr>
                            <td>16.1</td>
                            <td>TRABAJO DE APLICACIÓN PROFESIONAL (EXP. DE TITULO PROF.)</td>
                            <td>223.00</td>
                        </tr>
                        <tr>
                            <td>16.2</td>
                            <td>SISTEMA POR ASIGNATURAS (EXP. DE TITULO PROFESIONAL)</td>
                            <td>223.00</td>
                        </tr>
                        <tr>
                            <td>16.3</td>
                            <td>SUF. PROFESIONAL SISTEMA MODULAR (EXP. DE TITULO PROF.)</td>
                            <td>223.00</td>
                        </tr>
                        <tr>
                            <td>17.1</td>
                            <td>DUPLICADO DE TITULO PROFESIONAL</td>
                            <td>241.00</td>
                        </tr>
                        <tr>
                            <td>18.1</td>
                            <td>CERTIFICADO DE EGRESADO</td>
                            <td>24.00</td>
                        </tr>
                        <tr>
                            <td>19.1</td>
                            <td>DUPLICADO DE RECIBO DE CAJA</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>20.1</td>
                            <td>FEDATEADO DE DOCUMENTOS</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>20.2</td>
                            <td>RECTIFICACIÓN DE NOMBRE Y APELLIDO</td>
                            <td>8.00</td>
                        </tr>
                        <tr>
                            <td>21.1</td>
                            <td>VENTA DE BASES PARA LICITACIÓN PUBLICA, CONCURSO PUBLICO</td>
                            <td>30.00</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>SEV. DE CAPACITACIÓN, TALLER DE CAPACITACIÓN/REFORZAMIENTO</td>
                            <td>----</td>
                        </tr>
                        <tr>
                            <td>23</td>
                            <td>TRAMITE DE CERTIFICADO MODULAR</td>
                            <td>42.00</td>
                        </tr>
                        <tr>
                            <td>24.1</td>
                            <td>TRAMITE DE VALIDACIÓN DE LA 720 h. DE PRÁCTICAS</td>
                            <td>159.00</td>
                        </tr>
                        <tr>
                            <td>24.2</td>
                            <td>CONVALIDACIÓN DE PRACTICAS PRE-PROFESIONALES X MODULO (INCORPORADO)</td>
                            <td>159.00</td>
                        </tr>
                        <tr>
                            <td>24.3</td>
                            <td>CONVALIDACIÓN DE (EFSRT) POR MODULO (INCORPORADO)</td>
                            <td>159.00</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td>TRAMITE PARA EL EXAMEN DE TEORICO PRÁCTICO</td>
                            <td>92.00</td>
                        </tr>
                        <tr>
                            <td>26</td>
                            <td>TRAMITE DE DUPLICADO DE ACTAS</td>
                            <td>30.00</td>
                        </tr>
                        <tr>
                            <td>27</td>
                            <td>EVALUACIÓN EXTRAORDINARIA (INCORPORADO)</td>
                            <td>18.00</td>
                        </tr>
                        <tr>
                            <td>28.1</td>
                            <td>CENTRO DE NIVELACIÓN ACADEMICA - ORDINARIOS</td>
                            <td>312.00</td>
                        </tr>
                        <tr>
                            <td>28.2</td>
                            <td>CENTRO DE NIVELACIÓN ACADEMICA - EN PARTES</td>
                            <td>332.00</td>
                        </tr>
                        <tr>
                            <td>28.3</td>
                            <td>CENTRO DE NIVELACIÓN ACADEMICA - HERMANOS</td>
                            <td>260.00</td>
                        </tr>
                        <tr>
                            <td>28.4</td>
                            <td>CENTRO DE NIVELACIÓN ACADEMICA - CONVENIOS</td>
                            <td>156.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>