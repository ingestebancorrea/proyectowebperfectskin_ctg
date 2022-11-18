<?php
require_once("../controlador/cita_controlador_listar.php");
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
                            <li><a href="cita.php">Cita</a></li>
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
        <br><a href="#tableagenda_consulta"><img src="/ProyectoWeb_PSCTG/imagenes/buscar.png"></a>
        <a href="../views/cita_m.php"><img src="/ProyectoWeb_PSCTG/imagenes/girar.png"></a>
        </div>

        <div class="div">
            
        </div>

        <div class="tableagenda_consulta" id="tableagenda_consulta">
            <h1 style="font-family: Arial">Lista Cita</h1>
            <br>
            <form action="#" method="POST">
                <input type="date" name="f1" class="inputagenda_m1">
                <input type="date" name="f2" class="inputagenda_m1">
                <button type="submit" name="btnFiltrar" class="btnfiltar">Filtrar</button>
            </form>
        </div>
        <table class="table_agendalista">
        <th class="agenda_th">Fecha</th><th class="agenda_th">Hora</th><th class="agenda_th">Lugar</th></th><th class="agenda_th">Estado</th>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(is_countable($datos) && count($datos) >0){
                    for($i = 0; $i < count($datos); $i++){
                        echo'<tr class="agenda_tr">';
                        echo'<td>'.$datos[$i]["fecha"].'</td>';
                        echo'<td>'.$datos[$i]["hora"].'</td>';
                        echo'<td>'.$datos[$i]["lugar"].'</td>';
                        echo'<td>'.$datos[$i]["estado"].'</td>';
                        echo'</tr>';
                    }
                }
            }
        ?>
        </table>    
        <div class="caja-fija">
            <a href="https://wa.me/message/RTRPR4CP4ISWF1" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/whatsapp.png" alt=""></a>
        </div>

    </body>
</html>