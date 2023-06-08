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

            <legend>Area <?php echo "$_SESSION[nombre]" ?> / Buscar Presupuesto</legend>

            <form name="datos" action="p_buscar_2.php" enctype="multipart/form-data" method="POST">

                <table>
                    <tr>
                        <td>Id Presupuesto:</td>
                        <td><input type="number" name="id_presupuesto" id="id_presupuesto" placeholder='Id Presupuesto'></td>
                       

                    </tr>
                    <tr>
                        <td>Id Usuario:</td>
                        <td><input type="number" name="id_usuario" id="id_usuario" placeholder='Id Usuario'></td>
                        

                    </tr>
                    <tr>
                        <td>Tipo Entrega:</td>
                        <td>
                            <select name="entrega" id="entrega">
                                <option value="blanco">-----</option>
                                <option >Envio</option>
                                <option >Recogida</option>
                            </select>
                        </td>
                        
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
                        
                    </tr>
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
                        
                    </tr>
                </table>

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