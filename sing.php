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
    <title>Registro</title>

</head>

<script>
    function verificar() {

        /* NOMBRE */

        var nombre = document.getElementById('nombre').value;
        if (nombre == '') {
            document.getElementById('nombre_alert').innerHTML = ' * El Nombre esta vacio.';
            document.getElementById('nombre').focus();
            alert('El campo Nombre esta vacio.');
            return false;
        }

        /* APELLIDO_1 */

        var apellido_1 = document.getElementById('nombre').value;
        if (apellido_1 == '') {
            document.getElementById('apellido_1_alert').innerHTML = ' * El Primer Apellido esta vacio.';
            document.getElementById('apellido_1').focus();
            alert('El campo Primer Apellido esta vacio.');
            return false;
        }

        /* APELLIDO_2 */

        var apellido_2 = document.getElementById('apellido_2').value;
        if (apellido_2 == '') {
            document.getElementById('apellido_2_alert').innerHTML = ' * El Segundo Apellido esta vacio.';
            document.getElementById('apellido_2').focus();
            alert('El campo Segundo Apellido esta vacio.');
            return false;
        }

        /* TELEFONO */

        var telf = document.getElementById('telf').value;
        if (telf == '') {
            document.getElementById('telf_alert').innerHTML = ' * El Teléfono esta vacio.';
            document.getElementById('telf').focus();
            alert('El campo Teléfono esta vacio.');
            return false;
        }


        /* MAIL */

        var mail = document.getElementById('mail').value;
        if (mail == '') {
            document.getElementById('mail_alert').innerHTML = ' * El Mail esta vacio.';
            document.getElementById('mail').focus();
            alert('El campo Mail esta sin cumplimentar.')
            return false;
        }

        var mail = true;
        var expresion = /^[a-z][\w.-]+@\w[\w.-]+\.[\w.-]*[a-z][a-z]$/i;
        var mail = document.datos.mail.value;

        if (!expresion.test(mail)) {
            mail = false;
            document.getElementById('mail_alert_2').innerHTML = ' * El Mail es incorrecto.';
            document.getElementById('mail').focus();
            alert('El mail no es correcto');
            return false;
        }

        /* CLAVE */

        var clave = document.getElementById('clave').value;
        var clave2 = document.getElementById('clave2').value;
        if (clave == '') {
            alert('El campo  Clave, esta vacio. Introduce una Clave valida.');
            document.getElementById('clave_alert').innerHTML = ' * ';
            document.getElementById('clave').focus();
            return false;}
        else if (clave.length <= 7) {
            alert('La clave debe ser de mínimo 8 caracteres alfanumericos.');
            document.getElementById('clave').focus();
            return false;
        }
        else if (clave != clave2) {
            alert('La contraseña no coincide');
            document.getElementById('clave_alert').innerHTML = ' * ';
            document.getElementById('clave').focus();
            return false;
        } 
        
        

        /* SELECCIONAR TIPO USUARIO */

        var tipo = document.getElementById('tipo').value;
        if (tipo == 'blanco') {
            document.getElementById('tipo_alert').innerHTML = ' * Selecciona el tipo de Usuario.';
            document.getElementById('tipo').focus();
            alert('Seleccione el Tipo de Usuario que eres.')
            return false;
        }


    }
</script>


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



    <main class="main-add-1">
        <video class='vid_2' src="./video/cielo.mp4" autoplay="true" muted="true" loop="true">
        </video>


        <fieldset>

            <legend>Registro cliente</legend>


            <form name="datos" action="sing_2.php" method="POST">

                <table>
                    <tr>
                        <td>Nombre:</td>
                        <td><input type="text" name="nombre" id="nombre" placeholder='Nombre'></td>
                        <td class="td_error"><span id="nombre_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Primer Apellido:</td>
                        <td><input type="text" name="apellido_1" id="apellido_1" placeholder='Primer Apellido'></td>
                        <td class="td_error"><span id="apellido_1_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Segundo Apellido:</td>
                        <td><input type="text" name="apellido_2" id="apellido_2" placeholder='Segundo Apellido'></td>
                        <td class="td_error"><span id="apellido_2_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Teléfono:</td>
                        <td><input type="text" name="telf" id="telf" placeholder='Teléfono'></td>
                        <td class="td_error"><span id="telf_alert"></span><span id="telf_alert_2"></span></td>
                    </tr>
                    <tr>
                        <td>Mail:</td>
                        <td><input type="mail" name="mail" id="mail" placeholder='Email'></td>
                        <td class="td_error"><span id="mail_alert"></span><span id="mail_alert_2"></span></td>
                    </tr>
                    <tr>
                        <td>Clave:</td>
                        <td><input type="password" name="clave" id="clave" placeholder='Clave'></td>
                        <td class="td_error"><span id="clave_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Confirmación Clave:</td>
                        <td><input type="password" name="clave2" id="clave2" placeholder='Confirmación Clave'></td>
                        <td class="td_error2"><span id="clave2_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Tipo Usuario:</td>
                        <td>
                            <select name="tipo" id="tipo">
                                <option value="blanco">-----</option>
                                <option>Cliente</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="tipo_alert"></span></td>
                    </tr>

                </table>

                <input class='margin' onclick='return(verificar())' type="submit" value="Enviar">
                <input class='margin' type="reset" value="Borrar">

            </form>

        </fieldset>
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