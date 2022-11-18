<?php
require_once("../controlador/cita_controlador.php");/*Incluir archivo php en otro require_once*/
require_once("../controlador/reserva_controlador.php");/*Incluir archivo php en otro require_once*/
?>
<html>
<head>
    <title>Laura Nuñez PerfectSkin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="estilos.css" type="text/css" rel="stylesheet">
</head>

<body>
    <table id="header">
        <tr>
            <td style="width: 2%;text-align: center;"><a style="text-decoration: none;color: white; font-size: 18px" href="https://m.facebook.com/perfectskin_ctg-112652640494465/?_rdr" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/facebook.png"></a></td>      
            <td style="width: 2%;text-align: center;"><a style="text-decoration: none;color: white; font-size: 18px" href="https://www.instagram.com/perfectskin_ctg/" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/instagram.png"></a></td>      
            <td style="width: 96%;text-align: right;"><a style="text-decoration: none;color: white; font-size: 18px;font-family: Arial;" href="/ProyectoWeb_PSCTG/usuario.php">Registrarse</a></td>
            <td style="width: 5%;color:white;height: 5px">|</td>
            <td style="width: 96%;text-align: right;"><a style="text-decoration: none;color: white; font-size: 18px;font-family: Arial;" href="/ProyectoWeb_PSCTG/views/login_ingreso.php">Ingresar</a></td>         
        </tr>
    </table>

    <!--Puede contener algunos elementos de encabezado, así como también un logo-->
    <div id="opciones">
        <!--Encabezado principal-->
        <ul class="nav">
            <!--<li><img src="imagenes/Imagen PYME.png" width="100%"></li>-->
            <li><a href="index.html">Home</a></td>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="servicios.php">Servicios</a>
                <ul>
                    <!--Encabezado Secundario-->
                    <li><a href="cita.php">Citas</a></li>
                </ul>
            </li>
            <li><a href="acerca.html">Acerca de</a>
                <!--Encabezado secundario-->
                <ul>
                    <li><a href="experienciaclientes.html">Experiencias de clientes</a></li>
                    <li><a href="consejos.html">Consejos</a></li>
                </ul>
            </li>
            <li><a href="/ProyectoWeb_PSCTG/contacto.php">Contacto</a></li>
        </ul>
    </div>

    <table style="float: left;width: 100%;">
        <td>
            <hr width="100%" size="2" color="#F7F9F9">
        </td>
    </table>

    <section id="servicios">
        <div class="tabla1">
            <img src="/ProyectoWeb_PSCTG/imagenes/estrella.png">
            <h1>Limpieza Facial</h1>
            <hr width="100%" size="1" color="white"><br>
            <div class="precio">
                <span class="peso_1">$</span>
                <span class="numero">70.000</span>
            </div>
            <div class="caracteristicas">
                <br>
                <p>Servicios para usted:</p><br>
                <ol>
                    <li>Exfoliacion.</li>
                    <li>Tonificacion.</li>
                    <li>Vapor de ozono.</li>
                    <li>Mascarrilla</li>
                    <li>Alta frecuencia.</li>
                </ol>
            </div>
            <br><a href="#"><button class="btn-abrir-popup" id="btn-abrir-popup" type="button"
                    style="border-style: solid;border-radius: 5px;font-size: 18;">Agendar</button></a>
        </div>
        <div class="tabla" id="tablados">
            <div class="cuadradosuperior"></div>
            <img src="/ProyectoWeb_PSCTG/imagenes/estrella.png"><img src="/ProyectoWeb_PSCTG/imagenes/estrella.png"><img src="/ProyectoWeb_PSCTG/imagenes/estrella.png">
            <h1>Luminous Face</h1>
            <hr width="100%" size="1" color="white"><br>
            <div class="precio">
                <span class="peso_2">$</span>
                <span class="numero">140.000</span>
            </div>
            <div class="caracteristicas">
                <br>
                <p>Es un innovador tratamiento</p>
                <p>médico-estético de micropunción.</p>
                <p>Estimula la producción de colágeno.</p>
                <p>Refuerza y mejora la piel</p>
                <p>de manera efectiva y rápida.</p>
                <p>Reduce arrugas, bolsas, ojeras,</p>
                <p>cicatrices, manchas</p>
                <p>y cualquier imperfección.</p>
                <br><p>Es nuestro tramiento estrella!</p>
            </div>
            <br><br><a href="#"><button class="btn-abrir-popup_1" id="btn-abrir-popup_1" type="button"
                style="border-style: solid;border-radius: 5px;font-size: 18;">Agendar</button></a>
            <div class="cuadradoinferior"></div>
        </div>
        <div class="tabla3">
            <img src="/ProyectoWeb_PSCTG/imagenes/estrella.png">
            <h1>Masaje Relajante</h1>
            <hr width="100%" size="1" color="white"><br>
            <div class="precio">
                <span class="peso_3">$</span>
                <span class="numero">100.000</span>
            </div>
            <div class="caracteristicas">
                <br>
                <p>Al usted recibir contacto repetitivo</p>
                <p>mediante maniobras</p>
                <p>perdera cualquier sensación</p>
                <p>de dolor y sus músculos</p>
                <p>se relajaran.</p>
                <p>Tiene una duracion de una hora.</p>
            </div>
            <br><br><br><a href="#"><button class="btn-abrir-popup_2" id="btn-abrir-popup_2" type="button"
                    style="border-style: solid;border-radius: 5px;font-size: 18;">Agendar</button></a>
        </div>
    </section>

    <div class="caja-fija">
        <a href="https://wa.me/message/RTRPR4CP4ISWF1" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/whatsapp.png" alt=""></a>
    </div>

    <div class="overlay" id="overlay">
        <div class="popup" id="popup">
            <a href="#" class="btn-cerrar-popup" id="btn-cerrar-popup">X</a>
            <h3>DATOS DEL FORMULARIO</h3>
            <form action="#" method="POST">
                <div class="contenedor-inputs_s">
                    <br><label class="label_s" for="fecha">Fecha: </label><br>
                    <input class="input_s" name="fecha" type="date"><br>
                    <br><label class="label_s" for="lugar">Lugar:</label><br>
                    <select class="input_s" name="lugarservicio" class="inputagenda">
                        <option>Seleccione...</option>
                        <option>Domicilio</option>
                        <option>Establecimiento</option>
                    </select>
                </div>
                <div class="contenedor-inputs_s1">
                    <br><label class="label_s" for="hora">Hora:</label><br>
                    <select class="input_s" name="hora" class="inputagenda">
                        <option>Seleccione...</option>
                        <option>8:00 - 9:00 AM</option>
                        <option>9:00 - 10:00 AM</option>
                        <option>10:00 - 11:00 AM</option>
                        <option>11:00 - 12:00 AM</option>
                        <option>2:00 - 3:00 PM</option>
                        <option>3:00 - 4:00 PM</option>
                        <option>4:00 - 5:00 PM</option>
                    </select><br>
                    <br><label class="label_s1" for="cliente">Cliente: </label><br>
                    <input class="input_s1" name="cliente" type="text"><br>
                </div>
                <br><br><input type="submit" class="btn-submit" value="Enviar">
                <input type="reset" class="btn-submit" value="Limpiar">
            </form>
        </div>
    </div>
    <script src="popup.js"></script>

    <footer class="mapa">
            <div>
                <p>Laura Nuñez Perfectskin</p>
                <p>«Copyright © 2020 | Laura Nuñez»<br>Tel: 3005615455<br><br>Correos: Laumarru14@gmail.com<br>lnperfectskin584@gmail.com
                </p>
                <p></p>
                <p></p>
            </div>
    </footer>

</body>

</html>