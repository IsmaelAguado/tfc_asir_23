<?php
session_start();
if ($_SESSION["tipo_usuario"] != "Cliente") {
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


            <?php

            $provincia = trim(strip_tags($_REQUEST["provincia"]));
            $localidad = trim(strip_tags($_REQUEST["localidad"]));
            $calle = trim(strip_tags($_REQUEST["calle"]));
            $numero = trim(strip_tags($_REQUEST["numero"]));
            $piso = trim(strip_tags($_REQUEST["piso"]));
            $puerta = trim(strip_tags($_REQUEST["puerta"]));
            $cp = trim(strip_tags($_REQUEST["cp"]));
            $mercha = trim(strip_tags($_REQUEST["mercha"]));
            $diseno = trim(strip_tags($_REQUEST["diseno"]));
            $impresion = trim(strip_tags($_REQUEST["impresion"]));
            $medida = trim(strip_tags($_REQUEST["medida"]));
            $gramo = trim(strip_tags($_REQUEST["gramo"]));
            $acabado = trim(strip_tags($_REQUEST["acabado"]));
            $troquel = trim(strip_tags($_REQUEST["troquel"]));
            $cantidad = trim(strip_tags($_REQUEST["cantidad"]));
            $date = trim(strip_tags($_REQUEST["date"]));
            $pvp = trim(strip_tags($_REQUEST["pvp"]));
            $imagen = $_FILES["imagen"];
            $entrega = trim(strip_tags($_REQUEST["entrega"]));
            $aceptado = trim(strip_tags($_REQUEST["aceptado"]));



            // Subir fichero con la foto de la vivienda

            $copiarFichero = false;

            // Copiar fichero en directorio de ficheros subidos

            // Se renombra para evitar que sobreescriba un fichero existente
            // Para garantizar la unicidad del nombre se añade una marca de tiempo

            if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
                $nombreDirectorio = "C:\AppServ/www/00_TFG/imagen_web/";
                
            
                $nombreFichero = $_FILES['imagen']['name'];
                $copiarFichero = true;

                // Si ya existe un fichero con el mismo nombre, renombrarlo

                $nombreCompleto = $nombreDirectorio . $nombreFichero;
                if (is_file($nombreCompleto)) {
                    $idUnico = time();
                    $nombreFichero = $idUnico . "-" . $nombreFichero;
                }
            }

            // El fichero introducido supera el límite de tamaño permitido


            //ESTO ERA LO QUE HACÍA QUE EL CODIGO NO FUNCIONARA
            // if ($_FILES['imagen']['error'] == UPLOAD_ERR_FORM_SIZE) {
            //     $maxsize = $_REQUEST['MAX_FILE_SIZE'];
            //     $error = $error . "   <li>El tamaño del fichero supera el límite permitido ($maxsize bytes)</li>\n";
            // }

            // No se ha introducido ningún fichero

            else if ($_FILES['imagen']['name'] == "") {
                $nombreFichero = '';
            }

            // El fichero introducido no se ha podido subir

            else {
                $error = $error . "   <li>No se ha podido subir el fichero</li>";
            }
            // Mostrar errores encontrados

            if ($error != "") {
                echo "<P>No se ha podido realizar la inserción debido a los siguientes errores:</P>\n";
                echo "<UL>\n";
                echo $error;
                echo "</UL>\n";
            }

            // Mover foto a su ubicación definitiva e introducir el archivo en la base de datos.

            if ($copiarFichero) {
                move_uploaded_file($_FILES['imagen']['tmp_name'], $nombreDirectorio . $nombreFichero);
            }




            /* Conectar con la base de datos */

            $conexion = mysqli_connect("localhost", "root", "rootroot", "mas") or die("No se puede conectar a la base de datos");


            /* query */

            $id_usuario=$_SESSION['id_usuario'];

            $query = "insert into presupuesto (id_usuario,provincia,localidad,calle,numero,piso,puerta,c_postal,merchandising,diseno,impresion,medida,gramaje,acabado,troquel,cantidad,fecha,imagen,tipo_entrega,aceptado) values ('$id_usuario','$provincia','$localidad','$calle','$numero','$piso','$puerta','$cp','$mercha','$diseno','$impresion','$medida','$gramo','$acabado','$troquel','$cantidad','$date','$nombreFichero','$entrega','$aceptado');";

            /* Ejecutamos la query y control de error */

           


            if (mysqli_query($conexion, $query)) {

              
    
                echo  "<div><span class='add'>Presupuesto añadido</span></div>";                
        
                


                          

            } else {

                echo "<div><span class='add'>Error, no se añade presupuesto a la base de datos</div>";

                
            }
            
            /* Ceramos la conexion */




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