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

            <p class="tit_priva">Política de Cookies</p>
            <p class="text_priva">Este sitio web, del mismo modo que la mayoría de sitios en Internet, mejora la experiencia de navegación mediante el uso de cookies. Las cookies ofrecen servicios de modo personalizado, permitiendo al usuario el acceso a información de su interés. A través de este documento, el usuario podrá conocer el funcionamiento de las cookies, el tipo de cookies que utiliza este sitio web, como deshabilitar su instalación y las consecuencias de deshabilitarlas.</p>

            <p class="tit_priva">Definición de Cookies</p>
            <p class="text_priva">Las cookies son archivos de pequeño tamaño que las páginas web pueden instalar en un ordenador o en un dispositivo con acceso a internet. Las funciones principales de las cookies son el almacenamiento de las preferencias de navegación, la recopilación de información estadística, almacenar información sobre los hábitos de navegación de los usuarios y equipos y otras funcionalidades técnicas. Las cookies son asociadas a un usuario o equipo pero no proporcionan referencias que permitan el acceso a los datos personales del usuario. Así mismo, el usuario tiene la posibilidad de configurar su navegador para recibir notificaciones o incluso rechazar la instalación de las cookies enviadas por el sitio web.</p>

            <p class="tit_priva">Cookies de Terceros</p>
            <p class="text_priva">Algunas páginas pueden instalar cookies de terceros, como por ejemplo el registro de bloggers, las redes sociales o las estadísticas de Google. Estas compañías usan sus propias cookies para mejorar los servicios del sitio web que están relacionados con ellos. La información extraída por las cookies de terceros es almacenada en sus servidores y este sitio web no puede tener acceso a ella.</p>

            <p class="tit_priva">Configuración de preferencias</p>
            <p class="text_priva">El usuario puede permitir, bloquear o eliminar las cookies instaladas en su ordenador mediante labores de configuración que podrá realizar a través del menú de su navegador web. A continuación hay un listado con soporte, en este sentido, para los principales navegadores del mercado.</p>

            <p>
                <lu>
                    <li class="text_priva">Firefox: Enlace</li>
                    <li class="text_priva">Firefox: Enlace</li>
                    <li class="text_priva">Chrome: Enlace</li>
                    <li class="text_priva">Explorer: Enlace</li>
                    <li class="text_priva">Safari: Enlace </li>
                    <li class="text_priva">Opera: Enlace</li>
                </lu>
            </p>

            <p class="text_priva">En caso de deshabilitar o bloquear la instalación de cookies, existe la posibilidad de que ciertos servicios no estén disponibles o causen comportamientos anómalos que impidan el aprovechamiento completo de las aplicaciones web o que disminuyan la calidad de funcionamiento.</p>

            <p class="tit_priva">Aceptación de Cookies</p>
            <p class="text_priva">Al acceder a este sitio web se aprecia un mensaje con la advertencia del uso de cookies. Si usted sigue navegando o accede a algún link, entendemos que consiente el uso de las cookies tanto de este sitio web como de terceros relacionados con el servicio.</p>

            <p class="tit_priva">Actualizaciones en las políticas de cookies</p>
            <p class="text_priva">Este sitio web, con el fin de adaptar su política a las exigencias reglamentarias o legislativas dictadas por la Agencia Española de Protección de Datos, podrá modificar su política de cookies y el contenido de este documento. Se aconseja a los usuarios, por tanto, que visiten este documento periódicamente.</p>

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