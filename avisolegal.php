<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_01.css">
    <link rel="icon" href="./img/logo-mas-favicon.png" type="image/png" />

    <script>

    </script>
    <title>Aviso Legal</title>

</head>

<body>

<header>
        <div class="cabecera">
            <div class="div-logo">
                <img class="logo" src="./img/logo-mas.svg" alt="Logo">
            </div>
        </div>

        <div class="container__menu">

            <div class="menu">
                <nav>
                    <ul>
                        <li class="opcion_inicio"><a href="index.php">Inicio</a></li>
                        <li class="opcion_inicio"><a href="index.php">Servicios</a>
                            <ul>
                                <li><a href="diseno.php">Diseño</a></li>
                                <li><a href="ssoo.php">Sistemas Operativos</a></li>
                                <li><a href="instalacion.php">Instalación</a></li>
                                <li><a href="security.php">Securizar</a></li>
                            </ul>
                        </li>
                        <li class="opcion_inicio"><a href="galeria.php">Galeria</a></li>


                        <?php
                        if (isset($_SESSION['nombre'])) {
                            if ($_SESSION['tipo_usuario'] == 'administrador') {
                        ?>
                                <li class="opcion_derecha"><a href="#"><?php echo "$_SESSION[nombre]" ?></a>
                                    <ul>
                                        <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>


                                    </ul>
                                </li>
                                <li class="opcion_derecha"><a href="admin.php">Clientes</a>
                                    <ul>
                                        <li><a href="c_buscar.php">Buscar</a></li>
                                        <li><a href="c_listar.php">Listar</a></li>
                                        <li><a href="c_add.php">Añadir</a></li>
                                        <li><a href="c_borrar.php">Borrar</a></li>
                                        <li><a href="c_modi.php">Modificar</a></li>
                                    </ul>
                                </li>
                                <li class="opcion_derecha"><a href="admin.php">Presupuesto</a>
                                    <ul>
                                        <li><a href="p_buscar.php">Buscar</a></li>
                                        <li><a href="p_listar.php">Listar</a></li>
                                        <li><a href="p_add.php">Añadir</a></li>
                                        <li><a href="p_borrar.php">Borrar</a></li>
                                        <li><a href="p_modi.php">Modificar</a></li>
                                    </ul>
                                </li>
                                <li class="opcion_derecha"><a href="admin.php">Contabilidad</a>
                                    <ul>
                                        <li><a href="f_crear.php">Crear</a></li>
                                        <li><a href="f_listar.php">Listar</a></li>
                                        <li><a href="f_buscar.php">Buscar</a></li>
                                        
                                    </ul>
                                </li>
                                <?php
                            } else {
                                if ($_SESSION['tipo_usuario'] == 'Cliente') {
                                ?>
                                    <li class="opcion_derecha"><a href="area_usuario.php"><?php echo "$_SESSION[nombre]" ?></a>
                                        <ul>
                                            <li><a href="cerrar_sesion.php">Cerrar Sesión</a></li>

                                        </ul>
                                    </li>
                                    <li class="opcion_derecha"><a href="index.php">Presupuestos</a>
                                        <ul>
                                            <li><a href="cp_listar.php">Listar</a></li>
                                            <li><a href="cp_add.php">Añadir</a></li>

                                        </ul>
                                    </li>
                            <?php
                                }
                            }
                        } else {
                            ?>
                            <li class="opcion_derecha"><a href="login.php">Login</a></li>
                            <li class="opcion_derecha"><a href="sing.php">Sing Up</a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </div>

    </header>


    <main>
        <div class="main-2">
            <p class="tit_priva">Condiciones de Uso</p>
            <p class="text_priva">En cumplimiento de la normativa vigente, informamos a los usuarios y a las autoridades competentes que el titular del presente sitio web es Mas Service, S.L., con domicilio en C/ rio Ebro 2, Planta 4ª Local 1 de Madrid, CP 28991, con CIF B83444242 e inscrita en el Registro Mercantil de Madrid Tomo 29.002, Folio 1080, Sección 8ª, Hoja M-53984609 (en adelante, MAS) e, igualmente, comunica que se han implementado las medidas técnicas y organizativas oportunas para garantizar un nivel de seguridad adecuado, así como para evitar la pérdida, mal uso, alteración, acceso no autorizado y robo de los datos facilitados. Del mismo modo, se garantiza que se cumple con el deber de secreto y confidencialidad respecto de los datos personales facilitados en el Sitio Web o en otros medios empleados por la organización para los datos recogidos</p>

            <p class="text_priva">Antes de utilizar o acceder a este sitio web debe leer y examinar detenidamente estas Condiciones de Uso. Al utilizar o acceder a este sitio web, usted reconoce que ha leído, entendido y aceptado el Contrato de Condiciones de Uso. Si no está de acuerdo con las Condiciones de Uso, no puede usar ni acceder a este sitio.</p>

            <p class="tit_priva">Uso del sitio web</p>
            <p class="text_priva">La información facilitada en este sitio tiene únicamente fines informativos. El acceso y uso de la información contenida en este sitio web están sujetos a este Contrato de Condiciones Generales de Uso. Al usar y acceder a este sitio web, acepta, sin limitaciones ni salvedades, el presente Contrato de Condiciones de Uso.</p>

            <p class="tit_priva">Contenido</p>
            <p class="text_priva">Mas Service S.L. no garantiza la disponibilidad y continuidad del Sitio Web ni garantiza ni efectúa manifestaciones de ningún tipo sobre la exactitud, actualidad o exhaustividad del contenido publicado. Así mismo, Mas Service S.L. no se hace responsable de las opiniones y declaraciones vertidas por los autores de los artículos publicados en nuestro sitio Web, recayendo en ellos toda responsabilidad que pudiera derivarse de dichas manifestaciones. Usted acepta que el acceso y uso de este sitio web y del contenido del mismo se efectúa a su propio riesgo. Mas Service S.L. excluye todas las garantías, expresas o implícitas. Ni Mas Service S.L. ni ninguna entidad implicada en la creación, producción o suministro de este sitio web responderá por daños, incluidos, a título meramente enunciativo y no limitativo, daños directos, accesorios, consecuenciales, indirectos o sancionadores, derivados del acceso, del uso o de la imposibilidad de usar este sitio web, o de errores u omisiones en su contenido. Esta limitación incluye los daños a su equipo informático o los derivados de virus que infecten su equipo informático.</p>

            <p class="tit_priva">Indemnización</p>
            <p class="text_priva">Usted se compromete a indemnizar y resarcir a Mas Service S.L., sus directivos, administradores, empleados, agentes, proveedores y socios terceros frente a cualesquiera pérdidas, gastos, daños y costes, incluidos los honorarios razonables de abogados, derivados de cualquier vulneración por parte de usted de estas Condiciones de Uso. Mas Service S.L., haciendo uso de todas las vías legales a su disposición, perseguirá especialmente cualquier intento de ataque informático que se detecte en cualquiera de sus sitios Web, servicios o direcciones IP asignadas a Mas Service.</p>

            <p class="tit_priva">Confidencialidad</p>
            <p class="text_priva">Mas Service S.L. respeta la confidencialidad de los usuarios del sitio web. Consulte la política de privacidad de Mas Service en la que se explican los derechos y responsabilidades de los usuarios en relación con la información facilitada a este sitio web.</p>

            <p class="tit_priva">Vínculos y sitios web de terceros</p>
            <p class="text_priva">Este sitio web puede contener vínculos, enlaces o referencias a otros sitios web de terceros sobre los cuales Mas Service S.L. no tiene ningún tipo de control. Del mismo modo, se puede acceder a este sitio web desde vínculos, enlaces o referencias de terceros sobre los que Mas Service S.L. no tiene ningún tipo de control. Mas Service S.L. no efectúa garantías ni manifestaciones de ningún tipo sobre la exactitud, actualidad o exhaustividad de la información contenida en dichos sitios web y no responderá por los daños o perjuicios de ningún tipo derivados de tales contenidos o información. La inclusión de un vínculo de un tercero no supone una ratificación o recomendación de Mas Service S.L..</p>

            <p class="tit_priva">Información no confidencial</p>
            <p class="text_priva">Cualquier comunicación o material que nos envíe a través de Internet o que coloque en el sitio web por correo electrónico o de otro modo, como preguntas, comentarios, sugerencias o similares, se considera y se considerará no confidencial y Mas Service S.L. no tendrá ninguna obligación de ningún tipo en relación con dicha información. Mas Service S.L. podrá utilizar libremente cualesquiera ideas, conceptos, know-how o técnicas que se contengan en dicha comunicación para cualquier fin, incluido, a título meramente enunciativo y no limitativo, el de desarrollar, producir y comercializar productos y servicios.</p>

            <p class="tit_priva">Marcas</p>
            <p class="text_priva">Todos los nombres de productos, figuren o no en mayúsculas o con el símbolo de marcas registradas, son marcas de Mas Service S.L., a menos que se indique otra cosa. La utilización o uso indebido de estas marcas o de otros materiales, salvo según lo permitido aquí, está expresamente prohibido y puede vulnerar las leyes de Propiedad Intelectual, de Marcas, la legislación sobre confidencialidad y publicidad, y las leyes y reglamentos de comunicaciones. Tenga en cuenta que Mas Service S.L. exige el cumplimiento, activa y enérgicamente, de todos sus derechos de propiedad intelectual e industrial.</p>

            <p class="tit_priva">Copyrights</p>
            <p class="text_priva">La totalidad del contenido de este sitio web está sujeta a protección de copyright. Copyright © 2014 Mas Service S.L. Todos los derechos reservados. Mas Service S.L. es titular de todos los Productos y Servicios así como contenidos generales y comerciales publicados en este Sitio Web, cuyo contenido no podrá ser reproducido con fines distintos de la consulta individual, reservándose todos los derechos o notificaciones exclusivas. Excepto según lo expresamente previsto antes, no podrá reproducir, exponer, descargar, distribuir, modificar, reproducir, publicar o retransmitir ninguna información, texto o documentos contenidos en este sitio web o en una parte del mismo en ningún medio electrónico ni en copia impresa, ni podrá crear obras derivadas basadas en dichas imágenes, texto o documentos, sin el consentimiento expreso y por escrito de Mas Service S.L. Así mismo queda prohibido suprimir, eludir o manipular el «copyright» y demás datos identificativos de los derechos de Mas Service.</p>

            <p class="tit_priva">Leyes aplicables</p>
            <p class="text_priva">El presente Contrato de Condiciones de Uso y su utilización del sitio web se regularán por las leyes españolas. Cualquier acción legal o procedimiento relativo a este sitio web se planteará exclusivamente ante un tribunal español con sede en Madrid Capital. Mas Service S.L. se reserva el derecho de modificar o suprimir materiales de este sitio web en cualquier momento con arreglo a su criterio discrecional</p>

        </div>
    </main>

    <footer class="footer">
        <div class="dire">
            <p class="dire-2"><span class="dire-3">m</span><span class="dire-4">a</span><span class="dire-5">s</span><span> </span><span> </span><span class="dire-6">service</span></p>
            <br>
            <p>C/ Rio Ebro, 4 - Torrejón de la Calzada - Madrid</p>
            <p>644 22 66 26 | mas@gmail.com</p>
        </div>
        <!-- <div class="div-logo-2">
            <img class="logo-2" src="./img/logo-mas.svg" alt="Logo">
        </div> -->
        
        <div class="red">

        <div class="red-1"><a  href="insta.php"><img class="red-2" src="./img/instagram.svg" alt="Logo"></a></div>
        <div class="red-1"><a  href="whatsapp.php"><img class="red-2" src="./img/whatsapp.svg" alt="Logo"></a></div>
        <div class="red-1"><a  href="tele.php"><img class="red-2" src="./img/telegram.svg" alt="Logo"></a></div>

        </div>
        
        
        <div class="priva">
            <a class="priva_2" href="./PPrivacidad.php">Política de Privacidad</a>
            <a class="priva_2" href='#'> | </a>
            <a class="priva_2" href='./avisolegal.php'>Aviso Legal</a>
            <a class="priva_2" href='#'> | </a>
            <a class="priva_2" href='./cookies.php'>Políticas de Cookies</a>
        </div>


    </footer>



</body>

</html>