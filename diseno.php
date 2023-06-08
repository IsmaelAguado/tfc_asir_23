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
    <title>Inicio</title>

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
        <video class='vid_2' src="./video/laptop_-_1657 (Original).mp4" autoplay="true" muted="true" loop="true">
        </video>

        <div class='main-3'>
            <div class="ini-0">Diseño de Impresión y Desarrollo Web</div>

        </div>

        <div class='main-4'>


            <div class='main-5'>
                <div class="ini-text">Diseño e Impresión</div>
                <img class='ini-vid' src="./img/code-1076536_1920.jpg" alt="">
                <div class="ini-text">Offset y Digital</div>
            </div>
            <div class='main-6'>

                <div class="ini-text-2">
                    <h3></h3>MÁXIMA CALIDAD GARANTIZADA</h3><br><br>
                    <p> Resultados de la máxima calidad gracias a la última y más variada tecnología digital para impresiones en hoja, etiquetas en bobina, gran formato, troquelado y aplicación de acabados en alta definición.</p>
                   
                    <br><br>
                    <h3>ENTREGAS EN TIEMPO RÉCORD</h3><br><br>
                    <p>¿Tienes una urgencia? ¡Te enviamos el pedido desde 24h a toda la península! Y si eres de Madrid o alrededores, ¡haz tu pedido en nuestra imprenta online y recógelo en nuestras instalaciones de Alcorcón, Madrid, en un plazo de 3h!</p>
                    
                </div>

            </div>


        </div>
        <div class='main-8'>
            <div class="ini-text-2">
               <h3> HERRAMIENTAS DE VALOR AÑADIDO</h3><br>
                <p>
                Si buscas un acabado para potenciar el diseño, una tinta especial para destacar, un soporte creativo o un papel con textura, ¡estás en la imprenta adecuada! Encuentra la herramienta que necesitas para elevar el diseño y revalorizar el producto.</p>
               
                

            </div>

        </div>
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

            <div class="red-1"><a href="insta.php"><img class="red-2" src="./img/instagram.svg" alt="Logo"></a></div>
            <div class="red-1"><a href="whatsapp.php"><img class="red-2" src="./img/whatsapp.svg" alt="Logo"></a></div>
            <div class="red-1"><a href="tele.php"><img class="red-2" src="./img/telegram.svg" alt="Logo"></a></div>

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