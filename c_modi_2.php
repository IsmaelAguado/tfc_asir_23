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


        <fieldset>

            <legend>Area <?php echo "$_SESSION[nombre]" ?> / Modificar Datos Cliente</legend>
            <form name="datos" action="c_modi_3.php" method="POST">

                <br>
                <div class="add-2">

                    <?php

                    $id_usuario = trim(strip_tags($_REQUEST["id_usuario"]));



                    /* Comprobar que recoge los datos */
                    //echo $nombre." ".$correo;

                    /* Conectar con la base de datos */

                    $conexion = mysqli_connect("localhost", "root", "rootroot", "mas") or die("No se puede conectar a la base de datos");

                    /* query */

                    $query = "select * from cliente where id_usuario='$id_usuario'";

                    /* Ejecutamos la query y control de error */

                    $listar = mysqli_query($conexion, $query);

                    /* Si el resultado es mayor a 0 entra */

                    if (mysqli_num_rows($listar) > 0) {
                        // Muestra los datos de la fila buscada
                        $row = mysqli_fetch_assoc($listar);

                        echo "<form action='c_modi_3.php' method='get'>";
                        echo    "<table>  
    <tr>
        <td>Id Usuario:</td>
        <td><input type='number'  name='id_usuario' value=" . $row['id_usuario'] . "></td>
    </tr>
    <tr>
        <td>Nombre:</td>
        <td><input type='text' name='nombre' value=" . $row['nombre'] . "></td>
    </tr>
    <tr>
        <td>Apellido 1:</td>
        <td><input type='text' name='apellido_1' value=" . $row['apellido_1'] . "></td>
    </tr>
    <tr>
        <td>Apellido 2:</td>
        <td><input type='text' name='apellido_2' value=" . $row['apellido_2'] . "></td>
    </tr>  
    <tr>
        <td>Teléfono:</td>
        <td><input type='text' name='telefono' value=" . $row['telefono'] . "></td>
    </tr> 
    <tr>
        <td>Mail:</td>
        <td><input type='mail' name='mail' value=" . $row['mail'] . "></td>
    </tr> 
    <tr>
        <td>Clave:</td>
        <td><input type='password' name='clave' value=" . $row['clave'] . "></td>
    </tr> 
    <tr>
        <td>Tipo Usuario:</td>
        <td>
        <select name='tipo' id='tipo' value='" . $row['tipo_usuario'] . ">
        <option value='blanco'>-----</option>
        <option>Cliente</option>
        <option>administrador</option>
        </select>
    </td>
    </tr>        
   

</table>";
                       
                        
                    } else {

                        echo "<br><br><br>";
                        echo "<div><span class='add'>Error, revise los datos</span></div>";
                    }

                    /* Cerramos la conexion */

                    mysqli_close($conexion);
                    ?>

                </div>
                <input class='margin' type="submit" value="Enviar">
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