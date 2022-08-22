<?php
require_once("../controlador/agenda_controlador.php");/*Incluir archivo php en otro require_once*/
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
            <td style="width: 96%;text-align: right;"><a style="text-decoration: none;color: white; font-size: 18px;font-family: Arial;" href="/ProyectoWeb_PSCTG/cliente.php">Registrarse</a></td>
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
                            <li><a href="agenda.php">Agenda</a></li>
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
            <td><hr width="100%" size="2" color="#F7F9F9"></td>
        </table>

        <div class="datatable">
        <h1>Data Table</h1>
        <br><a href="../views/agenda.php"><img src="/ProyectoWeb_PSCTG/imagenes/buscar.png"></a>
        <a href="#tableagenda_modificar"><img src="/ProyectoWeb_PSCTG/imagenes/girar.png"></a>
        </div>

        <div class="tableagenda_modificar" id="tableagenda_modificar">
        <h1 style="font-family: Arial">Actualización Cita</h1>
        <form action="#" method="POST">
                <br><label class="labelagenda_m" for="codigo">Código cita: </label>
                <br><input class="inputagenda_m" name="codigo" type="text" placeholder="codigo"><br>
                <div class="contenedor-inputs_m1">
                    <br><label class="labelagenda_m1" for="fecha_m">Fecha: </label><br>
                    <input class="inputagenda_m1" name="fecha_m" type="date"><br>
                    <br><label class="labelagenda_m1" for="hora_m">Hora:</label>
                    <br><select  name="hora_m" class="inputagenda_m1">
                        <option>Seleccione...</option>
                        <option>8:00 - 9:00 AM</option>
                        <option>9:00 - 10:00 AM</option>
                        <option>10:00 - 11:00 AM</option>
                        <option>11:00 - 12:00 AM</option>
                        <option>2:00 - 3:00 PM</option>
                        <option>3:00 - 4:00 PM</option>
                        <option>4:00 - 5:00 PM</option>
                    </select><br>
                    <br><label class="labelagenda_m1" for="lugar_m">Lugar:</label><br>
                    <select  name="lugar_m" class="inputagenda_m1">
                        <option>Seleccione...</option>
                        <option>Domicilio</option>
                        <option>Establecimiento</option>
                    </select>
                </div>
                <div class="contenedor-inputs_m2">
                    <label class="labelagenda_m2" for="cliente_m">Cliente: </label><br>
                    <input  class="inputagenda_m2" name="cliente_m" type="text"><br>
                    <br><label class="labelagenda2" for="empleado_m">Empleado: </label><br>
                    <input  class="inputagenda_m2" name="empleado_m" type="text"><br>
                    <br><label class="labelagenda_m2" for="t_servicio_m" >Servicio: </label><br>
                    <select  class="inputagenda_m2" name="t_servicio_m">
                        <option>Seleccione...</option>
                        <option>Limpieza Facial</option>
                        <option>Luminous Face</option>
                        <option>Masaje Relajante</option>
                    </select><br>
                </div>
                <br><br><input class="botones" type="submit" class="btn-submit" value="Modificar">
            </form>
        </div>

        <div class="caja-fija">
            <a href="https://wa.me/message/RTRPR4CP4ISWF1" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/whatsapp.png" alt=""></a>
        </div>

    </body>
</html>