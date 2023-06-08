<?php
session_start();
if ($_SESSION["tipo_usuario"] != "administrador") {
    header("location:index.php");
}
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

        /* PROVINCIA */

        var provincia = document.getElementById('provincia').value;
        if (provincia == '') {
            document.getElementById('provincia_alert').innerHTML = ' * ';
            document.getElementById('provincia').focus();
            alert('El campo Provincia esta vacio.');
            return false;
        }

        /* LOCALIDAD */

        var localidad = document.getElementById('localidad').value;
        if (localidad == '') {
            document.getElementById('localidad_alert').innerHTML = ' * ';
            document.getElementById('localidad').focus();
            alert('El campo localidad esta vacio.');
            return false;
        }


        /* CALLE */

        var calle = document.getElementById('calle').value;
        if (calle == '') {
            document.getElementById('calle_alert').innerHTML = ' * ';
            document.getElementById('calle').focus();
            alert('El campo Calle esta sin cumplimentar.')
            return false;
        }

        /* NUMERO */

        var numero = document.getElementById('numero').value;
        if (numero == '') {
            document.getElementById('numero_alert').innerHTML = ' * ';
            document.getElementById('numero').focus();
            alert('El campo Número esta sin cumplimentar.')
            return false;
        }

        /* PISO */

        var piso = document.getElementById('piso').value;
        if (piso == '') {
            document.getElementById('piso_alert').innerHTML = ' * ';
            document.getElementById('piso').focus();
            alert('El campo Piso esta sin cumplimentar.')
            return false;
        }

        /* PUERTA */

        var puerta = document.getElementById('puerta').value;
        if (puerta == '') {
            document.getElementById('puerta_alert').innerHTML = ' * ';
            document.getElementById('puerta').focus();
            alert('El campo puerta esta sin cumplimentar.')
            return false;
        }



        /* CODIGO POSTAL */

        var cp = document.getElementById('cp').value;
        if (cp == '') {
            document.getElementById('cp_alert').innerHTML = ' * ';
            document.getElementById('cp').focus();
            alert('El campo Código Postal esta sin cumplimentar.')
            return false;
        }

        /* MERCHANDISIN */

        var mercha = document.getElementById('mercha').value;
        if (mercha == 'blanco') {
            document.getElementById('mercha_alert').innerHTML = ' * ';
            document.getElementById('mercha').focus();
            alert('Seleccione una opción')
            return false;
        }

        /* DISEÑO */

        var diseno = document.getElementById('diseno').value;
        if (diseno == 'blanco') {
            document.getElementById('diseno_alert').innerHTML = ' * ';
            document.getElementById('diseno').focus();
            alert('Seleccione una opción')
            return false;
        }

        /* IMPRESIÓN */

        var impresion = document.getElementById('impresion').value;
        if (impresion == 'blanco') {
            document.getElementById('impresion_alert').innerHTML = ' * ';
            document.getElementById('impresion').focus();
            alert('Seleccione una opción')
            return false;
        }

        /* MEDIDA */

        var medida = document.getElementById('medida').value;
        if (medida == 'blanco') {
            document.getElementById('medida_alert').innerHTML = ' * ';
            document.getElementById('medida').focus();
            alert('Seleccione una opción')
            return false;
        }

        /* GRAMAJE */

        var gramo = document.getElementById('gramo').value;
        if (gramo == 'blanco') {
            document.getElementById('gramo_alert').innerHTML = ' * ';
            document.getElementById('gramo').focus();
            alert('Seleccione una opción')
            return false;
        }

        /* ACABADO */

        var acabado = document.getElementById('acabado').value;
        if (acabado == 'blanco') {
            document.getElementById('acabado_alert').innerHTML = ' * ';
            document.getElementById('acabado').focus();
            alert('Seleccione una opción')
            return false;
        }

        /* TROQUEL */

        var troquel = document.getElementById('troquel').value;
        if (troquel == 'blanco') {
            document.getElementById('troquel_alert').innerHTML = ' * ';
            document.getElementById('troquel').focus();
            alert('Seleccione una opción')
            return false;
        }

        /* CANTIDAD */

        var cantidad = document.getElementById('cantidad').value;
        if (cantidad == '') {
            document.getElementById('cantidad_alert').innerHTML = ' * ';
            document.getElementById('cantidad').focus();
            alert('El campo Número esta sin cumplimentar.')
            return false;
        }

        /* FECHA */

        var date = document.getElementById('date').value;
        if (date == '') {
            document.getElementById('date_alert').innerHTML = ' * ';
            document.getElementById('date').focus();
            alert('El campo Número esta sin cumplimentar.')
            return false;
        }

        /* PRECIO */

        var pvp = document.getElementById('pvp').value;
        if (pvp == '') {
            document.getElementById('pvp_alert').innerHTML = ' * ';
            document.getElementById('pvp').focus();
            alert('El campo Número esta sin cumplimentar.')
            return false;
        }

        // /* FILE */

        // var img = document.getElementById('imagen').value;
        // if (img == '') {
        //     document.getElementById('imagen_alert').innerHTML = ' * ';
        //     document.getElementById('imagen').focus();
        //     alert('No hay archivo subido.')
        //     return false;
        // }



        /* TIPO ENTREGA */

        var entrega = document.getElementById('entrega').value;
        if (entrega == 'blanco') {
            document.getElementById('entrega_alert').innerHTML = ' * ';
            document.getElementById('entrega').focus();
            alert('Seleccione una opción')
            return false;
        }

        /* ACEPTADO */

        var aceptado = document.getElementById('aceptado').value;
        if (aceptado == 'blanco') {
            document.getElementById('aceptado_alert').innerHTML = ' * ';
            document.getElementById('aceptado').focus();
            alert('Seleccione una opción')
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

            <legend>Presupuestos</legend>


            <form name="datos" action="p_add_2.php" enctype="multipart/form-data" method="POST">

                <table>
                    <tr>
                        <td>Provincia:</td>
                        <td>
                            <select name="provincia" id="provincia">
                                <option value="blanco">-----</option>
                                <option>Álava</option>
                                <option>Albacete</option>
                                <option>Alicante</option>
                                <option>Almería</option>
                                <option>Asturias</option>
                                <option>Ávila</option>
                                <option>Badajoz</option>
                                <option>Barcelona</option>
                                <option>Burgos</option>
                                <option>Cáceres</option>
                                <option>Cádiz</option>
                                <option>Cantabria</option>
                                <option>Castellón de la Plana</option>
                                <option>Ceuta</option>
                                <option>Ciudad Real</option>
                                <option>Córdoba</option>
                                <option>Cuenca</option>
                                <option>Girona</option>
                                <option>Granada</option>
                                <option>Guadalajara</option>
                                <option>Gipuzkoa</option>
                                <option>Huelva</option>
                                <option>Huesca</option>
                                <option>Islas Baleares</option>
                                <option>Jaén</option>
                                <option>La Coruña</option>
                                <option>La Rioja</option>
                                <option>Las Palmas</option>
                                <option>León</option>
                                <option>Lleida</option>
                                <option>Lugo</option>
                                <option>Madrid</option>
                                <option>Málaga</option>
                                <option>Melilla</option>
                                <option>Murcia</option>
                                <option>Navarra</option>
                                <option>Ourense</option>
                                <option>Palencia</option>
                                <option>Pontevedra</option>
                                <option>Salamanca</option>
                                <option>Santa Cruz de Tenerife</option>
                                <option>Segovia</option>
                                <option>Sevilla</option>
                                <option>Soria</option>
                                <option>Tarragona</option>
                                <option>Teruel</option>
                                <option>Toledo</option>
                                <option>Valencia</option>
                                <option>Valladolid</option>
                                <option>Vizcaya</option>
                                <option>Zamora</option>
                                <option>Zaragoza</option>

                            </select>
                        </td>
                        <td class="td_error"><span id="provincia_alert"></span></td>
                    </tr>

                    <tr>
                        <td>Localidad:</td>
                        <td><input type="text" name="localidad" id="localidad" placeholder='Localidad'></td>
                        <td class="td_error"><span id="localidad_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Calle:</td>
                        <td><input type="text" name="calle" id="calle" placeholder='Calle'></td>
                        <td class="td_error"><span id="calle_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Número:</td>
                        <td><input type="number" name="numero" id="numero" placeholder='Número'></td>
                        <td class="td_error"><span id="numero_alert"></span><span id="numero_alert_2"></span></td>
                    </tr>
                    <tr>
                        <td>Piso:</td>
                        <td><input type="text" name="piso" id="piso" placeholder='Piso'></td>
                        <td class="td_error"><span id="piso_alert"></span><span id="piso_alert_2"></span></td>
                    </tr>
                    <tr>
                        <td>Puerta:</td>
                        <td><input type="text" name="puerta" id="puerta" placeholder='Puerta'></td>
                        <td class="td_error"><span id="puerta_alert"></span><span id="puerta_alert_2"></span></td>
                    </tr>
                    <tr>
                        <td>C.Postal:</td>
                        <td><input type="number" name="cp" id="cp" placeholder='Código Postal'></td>
                        <td class="td_error"><span id="cp_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Merchandising:</td>
                        <td>
                            <select name="mercha" id="mercha">
                                <option value="blanco">-----</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="mercha_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Diseño:</td>
                        <td>
                            <select name="diseno" id="diseno">
                                <option value="blanco">-----</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="diseno_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Impresión:</td>
                        <td>
                            <select name="impresion" id="impresion">
                                <option value="blanco">-----</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="impresion_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Medida:</td>
                        <td>
                            <select name="medida" id="medida">
                                <option value="blanco">-----</option>
                                <option>No</option>
                                <option>A0 (841 x 1189 mm)</option>
                                <option>A1 (594 x 841 mm)</option>
                                <option>A2 (420 x 594 mm)</option>
                                <option>A3 (297 x 420 mm)</option>
                                <option>A4 (210 x 297 mm)</option>
                                <option>A5 (148 x 210 mm)</option>
                                <option>A6 (105 x 148 mm)</option>
                                <option>A7 (74 x 105 mm)</option>
                                <option>A8 (52 x 74 mm)</option>
                                <option>A9 (37 x 52 mm)</option>
                                <option>A10 (26 x 37 mm)</option>
                                <option>Tarjeta Visita Horizontal(55 x 85 mm)</option>
                                <option>Tarjeta Visita Vertical(85 x 55 mm)</option>
                                <option>Folleto (150 x 210 mm)</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="medida_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Gramaje:</td>
                        <td>
                            <select name="gramo" id="gramo">
                                <option value="blanco">-----</option>
                                <option>0 gr/m2</option>
                                <option>80 gr/m2</option>
                                <option>110 gr/m2</option>
                                <option>150 gr/m2</option>
                                <option>175 gr/m2</option>
                                <option>220 gr/m2</option>
                                <option>250 gr/m2</option>
                                <option>300 gr/m2</option>
                                <option>350 gr/m2</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="gramo_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Acabado:</td>
                        <td>
                            <select name="acabado" id="acabado">
                                <option value="blanco">-----</option>
                                <option>Ninguno</option>
                                <option>Mate</option>
                                <option>Brillo</option>
                                <option>Plastificado</option>
                                <option>UVI</option>
                                <option>Barniz</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="acabado_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Troquel:</td>
                        <td>
                            <select name="troquel" id="troquel">
                                <option value="blanco">-----</option>
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="troquel_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Cantidad:</td>
                        <td><input type="number" name="cantidad" id="cantidad" placeholder='Cantidad'></td>
                        <td class="td_error"><span id="cantidad_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Fecha de Entrega:</td>
                        <td><input type="date" name="date" id="date"></td>
                        <td class="td_error"><span id="date_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Precio:</td>
                        <td><input type="number" step="0.01" name="pvp" id="pvp"></td>
                        <td class="td_error"><span id="pvp_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Imagen:</td>
                        <td><INPUT TYPE="file" NAME="imagen"></td>

                    </tr>
                    <tr>
                        <td>Tipo Entrega:</td>
                        <td>
                            <select name="entrega" id="entrega">
                                <option value="blanco">-----</option>
                                <option>Envio</option>
                                <option>Recogida</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="entrega_alert"></span></td>
                    </tr>
                    <tr>
                        <td>Aceptado:</td>
                        <td>
                            <select name="aceptado" id="aceptado">
                                <option value="blanco">-----</option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </td>
                        <td class="td_error"><span id="aceptado_alert"></span></td>
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