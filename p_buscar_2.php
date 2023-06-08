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



    <main class="main-add-1">
        <video class='vid_2' src="./video/cascada.mp4" autoplay="true" muted="true" loop="true">
        </video>


        <fieldset class="fiel">

            <legend>Area <?php echo "$_SESSION[nombre]" ?> / Buscar Presupuesto</legend>

            <?php


            $id_presupuesto = trim(strip_tags($_REQUEST["id_presupuesto"]));
            $id_usuario = trim(strip_tags($_REQUEST["id_usuario"]));
            $entrega = trim(strip_tags($_REQUEST["entrega"]));
            $aceptado = trim(strip_tags($_REQUEST["aceptado"]));
            $provincia = trim(strip_tags($_REQUEST["provincia"]));

            /* Comprobar que recoge los datos */
            //echo $nombre." ".$correo;

            /* Conectar con la base de datos */

            $conexion = mysqli_connect("localhost", "root", "rootroot", "mas") or die("No se puede conectar a la base de datos");

            /* query */

            // $query = "select * from presupuesto where aceptado=$aceptado or tipo_entrega='$entrega'";
            

            if ($id_presupuesto != ''){
                $query = "select * from presupuesto where id_presupuesto='$id_presupuesto'";
            }
            elseif ($id_usuario != ''){
                $query = "select * from presupuesto where id_usuario='$id_usuario'";
            }
            elseif ($entrega != 'blanco'){
                $query = "select * from presupuesto where tipo_entrega='$entrega'";
            }
            elseif ($aceptado != 'blanco'){
                $query = "select * from presupuesto where aceptado='$aceptado'";
            }
            elseif ($provincia != 'blanco'){
                $query = "select * from presupuesto where provincia='$provincia'";
            }
            
           
            

            

            /* Ejecutamos la query y control de error */

            $listar = mysqli_query($conexion, $query);

            /* Mostrar la tabla en pantalla de los usuarios. */
            $nfilas = mysqli_num_rows($listar);
            if ($nfilas >= 1) {

                echo "<table class='tab_listar'>";
                echo "<tr class='borde'>
               <td class='borde'>Id Pres</td>     
               <td class='borde'>Id User</td>                
               <td class='borde'>Provincia</td>
               <td class='borde'>Localidad</td>
               <td class='borde'>Calle</td>
               <td class='borde'>Nº</td>
               <td class='borde'>Piso</td>
               <td class='borde'>Puerta</td>
               <td class='borde'>C.P.</td>
               <td class='borde'>Merchan</td>
               <td class='borde'>Diseño</td>
               <td class='borde'>Impresión</td>
               <td class='borde'>Medida</td>
               <td class='borde'>Gr</td>
               <td class='borde'>Acabado</td>
               <td class='borde'>Troquel</td>
               <td class='borde'>Uds</td>
               <td class='borde'>Fecha</td>
               <td class='borde'>PVP</td>
               <td class='borde'>Imagen</td>
               <td class='borde'>E / R</td>
               <td class='borde'>Aceptado</td>
               
               
           </tr>";

                for ($i = 0; $i < $nfilas; $i++) {
                    $row = mysqli_fetch_assoc($listar);
                    echo
                    "<tr>
                       <td class='borde-1'>" . $row['id_presupuesto'] . "</td> 
                       <td class='borde-1'>" . $row['id_usuario'] . "</td>      
                       <td class='borde-1'>" . $row['provincia'] . "</td>
                       <td class='borde-1'>" . $row['localidad'] . "</td>
                       <td class='borde-1'>" . $row['calle'] . "</td>
                       <td class='borde-1'>" . $row['numero'] . "</td>
                       <td class='borde-1'>" . $row['piso'] . "</td>
                       <td class='borde-1'>" . $row['puerta'] . "</td>
                       <td class='borde-1'>" . $row['c_postal'] . "</td>
                       <td class='borde-1'>" . $row['merchandising'] . "</td>
                       <td class='borde-1'>" . $row['diseno'] . "</td>
                       <td class='borde-1'>" . $row['impresion'] . "</td>
                       <td class='borde-1'>" . $row['medida'] . "</td>
                       <td class='borde-1'>" . $row['gramaje'] . "</td>
                       <td class='borde-1'>" . $row['acabado'] . "</td>
                       <td class='borde-1'>" . $row['troquel'] . "</td>
                       <td class='borde-1'>" . $row['cantidad'] . "</td>
                       <td class='borde-1'>" . $row['fecha'] . "</td>
                       <td class='borde-1'>" . $row['precio'] . "</td>
                       <td class='borde-1'>" . $row['imagen'] . "</td>
                       <td class='borde-1'>" . $row['tipo_entrega'] . "</td>
                       <td class='borde-1'>" . $row['aceptado'] . "</td>
               </tr>";
                }
                echo "</table>";
            } else {
                echo "<span class='add'>La Base de datos esta vacia</span>";
            }

            /* Cerramos la conexion */

            mysqli_close($conexion);


            ?>

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