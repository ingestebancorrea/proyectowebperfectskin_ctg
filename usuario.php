<?php 
require_once("controlador/usuario_controlador.php");/*Incluir archivo php en otro require_once*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laura Nuñez PerfectSkin</title>
    <link href="/ProyectoWeb_PSCTG/views/estilos.css" type="text/css" rel="stylesheet">
</head>
<body>
    <table id="header">
        <tr>
        <td style="width: 2%;text-align: center;"><a style="text-decoration: none;color: white; font-size: 18px" href="https://m.facebook.com/perfectskin_ctg-112652640494465/?_rdr" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/facebook.png"></a></td>
        <td style="width: 2%;text-align: center;"><a style="text-decoration: none;color: white; font-size: 18px" href="https://www.instagram.com/perfectskin_ctg/" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/instagram.png"></a></td>
        <td style="width: 96%;text-align: right;"><a style="text-decoration: none;color: white; font-size: 18px;font-family: Arial;" href="usuario.php">Registrarse</a></td>
        <td style="width: 5%;color:white">|</td>
        <td style="width: 96%;text-align: right;"><a style="text-decoration: none;color: white; font-size: 18px;font-family: Arial;" href="/ProyectoWeb_PSCTG/views/login_ingreso.php">Ingresar</a></td>
        </tr>
    </table>

    <!--Puede contener algunos elementos de encabezado, así como también un logo-->
    <div id="opciones">
            <!--Encabezado principal-->
            <ul class="nav">
                <!--<li><img src="imagenes/Imagen PYME.png" width="100%"></li>-->
                <li><a href="/ProyectoWeb_PSCTG/views/index.html">Home</a></td>
                <li><a href="/ProyectoWeb_PSCTG/views/nosotros.html">Nosotros</a></li>
                <li><a href="/ProyectoWeb_PSCTG/views/servicios.php">Servicios</a>
                    <ul>
                        <!--Encabezado Secundario-->
                        <li><a href="/ProyectoWeb_PSCTG/views/cita.php">Citas</a></li>
                    </ul>
                 </li>
                 <li><a href="/ProyectoWeb_PSCTG/views/acerca.html">Acerca de</a>
                 <!--Encabezado secundario-->
                    <ul>
                        <li><a href="/ProyectoWeb_PSCTG/views/experienciaclientes.html">Experiencias de clientes</a></li>
                        <li><a href="/ProyectoWeb_PSCTG/views/consejos.html">Consejos</a></li>
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
        <br><a href="#tablecliente"><img src="/ProyectoWeb_PSCTG/imagenes/mas.png"></a>
        <a href="#tablecliente_modificar"><img src="/ProyectoWeb_PSCTG/imagenes/girar.png"></a>
    </div>

    <div class="tablecliente" id="tablecliente">
        <h1 style="font-family: Arial">Registro Usuario</h1>
        <form action="#" method="POST">
            <br><label class="labelcliente" for="username">Username</label>
            <br><input class="inputcliente" type="text" name="username"><br>
            <br><label class="labelcliente" for="password">Password</label>
            <br><input class="inputcliente" type="password" name="password"><br>
            <br><label class="labelcliente" for="nombre">Nombre</label>
            <br><input class="inputcliente" type="text" name="nombre"><br>
            <br><label class="labelcliente" for="apellidos">Apellidos</label>
            <br><input class="inputcliente"  type="text" name="apellidos"><br>
            <br><label class="labelcliente" for="t_identificacion">Tipo de identificación</label>
            <br><select class="inputcliente"  name="t_identificacion">
                <option>Seleccione...</option>
                <option>Cedula Ciudadania</option>
                <option>Tarjeta Identidad</option>
                <option>Pasaporte</option>
            </select><br>
            <br><label class="labelcliente" for="nro_identificacion">Nro Identificación</label>
            <br><input class="inputcliente"  type="number" name="nro_identificacion"><br>
            <br><label class="labelcliente" for="email">Email</label>
            <br><input class="inputcliente" type="text" name="email"><br>
            <br><label class="labelcliente" for="direccion">Dirección</label>
            <br><input  class="inputcliente"  type="text" name="direccion"><br>
            <br><label class="labelcliente" for="t_usuario">Tipo de usuario</label>
            <br><select class="inputcliente"  name="t_usuario">
                <option>Seleccione...</option>
                <option>Cliente</option>
                <option>Esteticista</option>
            </select><br>
            <br><button class="botones" type="submit" name="registrar">Registrar</button>
        </form>
    </div>

    <div class="tablecliente_modificar" id="tablecliente_modificar">
        <h1 style="font-family: Arial">Actualización Usuario</h1>
        <form action="#" method="POST">
            <br><label class="labelcliente" for="nro_identificacion_m">Nro Identificación</label>
            <br><input class="inputcliente"  type="number" name="nro_identificacion_m"><br>
            <br><label class="labelcliente" for="nombre_m">Nombre</label>
            <br><input class="inputcliente" type="text" name="nombre_m"><br>
            <br><label class="labelcliente" for="apellidos_m">Apellidos</label>
            <br><input class="inputcliente"  type="text" name="apellidos_m"><br>
            <br><label class="labelcliente" for="direccion_m">Dirección</label>
            <br><input  class="inputcliente"  type="text" name="direccion_m"><br>
            <br><label class="labelcliente" for="email_m">Email</label>
            <br><input class="inputcliente" type="text" name="email_m"><br>
            <br><button class="botones" type="submit" name="modificar">Modificar</button>
        </form>
    </div>

    <div class="caja-fija">
            <a href="https://wa.me/message/RTRPR4CP4ISWF1" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/whatsapp.png" alt=""></a>
    </div>
</body>
</html>