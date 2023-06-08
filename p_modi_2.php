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
    <title>Area Administrador</title>
    <script>

    </script>


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



    <main class="main-add">
        <video class='vid_2' src="./video/cascada.mp4" autoplay="true" muted="true" loop="true">
        </video>


        <fieldset>

            <legend>Area <?php echo "$_SESSION[nombre]" ?> / Modificar Presupuesto</legend>

            <form name="datos" action="p_modi_3.php" enctype="multipart/form-data" method="POST">


                <div class="borrar">
                    <?php

                    $id_presupuesto = trim(strip_tags($_REQUEST["id_presupuesto"]));



                    /* Comprobar que recoge los datos */
                    //echo $nombre." ".$correo;

                    /* Conectar con la base de datos */

                    $conexion = mysqli_connect("localhost", "root", "rootroot", "mas") or die("No se puede conectar a la base de datos");

                    /* query */

                    $query = "select * from presupuesto where id_presupuesto='$id_presupuesto'";

                    /* Ejecutamos la query y control de error */

                    $listar = mysqli_query($conexion, $query);

                    /* Si el resultado es mayor a 0 entra */

                    if (mysqli_num_rows($listar) > 0) {
                        // Muestra los datos de la fila buscada
                        $row = mysqli_fetch_assoc($listar);

                        
                      
                        echo    "<table> 
                        <tr>
                            <td>Id Presupuesto:</td>
                            <td><input readonly type='number' name='id_presupuesto' value=" . $row['id_presupuesto'] . "></td>
                        </tr> 
                        <tr>
                        <td>Provincia:</td>
                            <td>
                            <select name='provincia' id='provincia'>
                            
                                <option selected hidden>" . $row["provincia"] . "</option>;
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
                        </tr>
                        
                        <tr>
                            <td>Localidad:</td>
                            <td><input type='text' name='localidad' value=" . $row['localidad'] . "></td>
                        </tr>
                        <tr>
                            <td>Calle:</td>
                            <td><input type='text' name='calle' value=" . $row['calle'] . "></td>
                        </tr>
                        <tr>
                            <td>Número:</td>
                            <td><input type='text' name='numero' value=" . $row['numero'] . "></td>
                        </tr>
                        <tr>
                            <td>Piso:</td>
                            <td><input type='text' name='piso' value=" . $row['piso'] . "></td>
                        </tr>
                        <tr>
                            <td>Puerta:</td>
                            <td><input type='text' name='puerta' value=" . $row['puerta'] . "></td>
                        </tr>
                        <tr>
                            <td>C.Postal:</td>
                            <td><input type='text' name='cp' value=" . $row['c_postal'] . "></td>
                        </tr>
                        <tr>
                        <td>Merchandising:</td>
                            <td>
                            <select name='mercha' id='mercha'>
                            
                                <option selected hidden>" . $row["merchandising"] . "</option>;
                                <option>Si</option>
                                <option>No</option>
                                            
                            </select>
                            </td>
                        </tr>
                            <td>Diseño:</td>
                            <td>
                                <select name='diseno' id='diseno'>
                                    <option selected hidden>" . $row["diseno"] . "</option>;
                                    <option>Si</option>
                                    <option>No</option>
                                                    
                                </select>
                            </td>
                        </tr>
                        </tr>
                        <td>Impresión:</td>
                        <td>
                            <select name='impresion' id='impresion'>
                            
                                <option selected hidden>" . $row["impresion"] . "</option>;
                                <option>Si</option>
                                <option>No</option>
                                            
                            </select>
                        </td>
                    </tr>
                            <td>Medida:</td>
                            <td>
                                <select name='medida' id='medida'>
                                
                                        <option selected hidden>" . $row["medida"] . "</option>;
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
                        </tr>
                       
                        </tr>
                            <td>Gramaje:</td>
                            <td>
                                <select name='gramo' id='gramo'>
                                
                                    <option selected hidden>" . $row["gramaje"] . "</option>;
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
                        </tr>
                        </tr>
                            <td>Acabado:</td>
                            <td>
                                <select name='acabado' id='acabado'>
                                
                                    <option selected hidden>" . $row["acabado"] . "</option>;
                                    <option>Ninguno</option>
                                    <option>Mate</option>
                                    <option>Brillo</option>
                                    <option>Plastificado</option>
                                    <option>UVI</option>
                                    <option>Barniz</option>
                                                
                                </select>
                            </td>
                        </tr>
                        </tr>
                        <td>Troquel:</td>
                        <td>
                            <select name='troquel' id='troquel'>
                            
                                <option selected hidden>" . $row["troquel"] . "</option>;
                                <option>Si</option>
                                <option>No</option>
                                            
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Cantidad:</td>
                        <td><input type='number' name='cantidad' value=" . $row['cantidad'] . "></td>
                    </tr>
                    <tr>
                        <td>Fecha de Entrega:</td>
                        <td><input type='date' name='date' value=" . $row['fecha'] . "></td>
                    </tr>
                    <tr>
                        <td>Precio:</td>
                        <td><input type='number' step='0.01' name='pvp' value=" . $row['precio'] . "></td>
                    </tr>
                    </tr>
                    <td>Imagen Nueva:</td>
                    <td><input type='file' name='imagen'></td>
                    </tr>
                    </tr>
                        <td>Tipo Entrega:</td>
                        <td>
                            <select name='entrega' id='entrega'>
                            
                                <option selected hidden>" . $row["tipo_entrega"] . "</option>;
                                <option>Envio</option>
                                <option>Recogida</option>
                                            
                            </select>
                        </td>
                    </tr>
                    </tr>
                        <td>Aceptado:</td>
                        <td>
                            <select name='aceptado' id='aceptado'>
                            
                                <option selected hidden>" . $row["aceptado"] . "</option>;
                                <option value='1'>Si</option>
                                <option value='0'>No</option>
                                            
                            </select>
                        </td>
                    </tr>


</table>";
                    } else {

                        echo "<br><br><br>";
                        echo "<div><span class='add'>Error, en la base de datos</span></div>";
                    }

                    /* Cerramos la conexion */

                    mysqli_close($conexion);
                    ?>
                </div>

                <input class='margin' type="submit" value="Enviar">
                <input class='margin' type="reset" value="Borrar">

        </fieldset>



        </form>



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