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
            <p class="tit_priva">Política de Privacidad</p>

            <p class="text_priva">La presente política de privacidad aplica a todos los datos de carácter personal que el usuario aporte a Mas Service, S.L. (en adelante Mas) a través de los formularios online situados en el sitio web Mas.com</p>

            <p class="tit_priva">Finalidad</p>

            <p class="text_priva"> Mas utilizará los datos suministrados con la finalidad de intercambiar información y de resolver las dudas y consultas planteadas por los usuarios en el formulario de contacto.</p>

            <p class="text_priva">En el caso del formulario habilitado para la recepción de CV, los datos personales proporcionados serán tratados por Mas con la finalidad de gestionar las candidaturas a actuales o futuras ofertas de empleo.</p>

            <p class="tit_priva">Legitimación</p>

            <p class="text_priva">Las bases legitimadoras de estos tratamientos son el interés legítimo en el formulario de contacto y el consentimiento en el de recepción de CV.</p>

            <p class="tit_priva">Conservación</p>

            <p class="text_priva"> Los datos personales proporcionados se conservarán según legislación vigente y mientras que no se solicite la supresión o la revocación del consentimiento por parte de éstos, en cuyo caso, los datos personales facilitados se mantendrán bloqueados durante el plazo necesario para el cumplimiento de una obligación legal o para la formulación, ejercicio y defensa de reclamaciones que pudieran derivarse del tratamiento de los mismos.</p>

            <p class="tit_priva">Ejercicio de derechos</p>

            <p class="text_priva">Mas informa al Usuario sobre la posibilidad que le asiste de ejercitar los derechos de acceso, rectificación, oposición, supresión, portabilidad y limitación del tratamiento, así como a rechazar el tratamiento automatizado de los datos personales recogidos.
            </p>
            <p class="text_priva">Dichos derechos podrán ser ejercitados gratuitamente por el Usuario del sitio, y en su caso quien lo represente, mediante solicitud escrita y firmada dirigida a la siguiente dirección: Calle Rio Ebro 4, Madrid, CP 28991. Dicha solicitud deberá contener en el asunto la referencia «Protección de datos» y deberá incluir los siguientes datos: nombre y apellidos del Usuario, domicilio a efectos de notificaciones, fotocopia del Documento Nacional de Identidad o Pasaporte, y petición en que se concreta la solicitud. En el caso de representación, deberá probarse la misma mediante documento fehaciente. Asimismo, el Usuario podrá ejercitar los mencionados derechos a través del correo electrónico gdpr@Mas.com</p>

            <p class="text_priva">Sin perjuicio de cualquier otro recurso administrativo o acción judicial, usted podrá en cualquier caso presentar una reclamación ante la Agencia Española de Protección de Datos, especialmente cuando no haya obtenido satisfacción en el ejercicio de sus derechos, a través de la web www.agpd.es.</p>
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