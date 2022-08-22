<!--Insercción de datos-->
<?php
require_once("controlador/contacto_controlador.php");/*Incluir archivo php en otro require_once*/
?>
<html>
    <head>
        <title>Laura Nuñez PerfectSkin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link href="/ProyectoWeb_PSCTG/views/estilos.css" type="text/css" rel="stylesheet">
    </head>
    <body id="contacto">
        <table id="header">
            <tr>
            <td style="width: 2%;text-align: center;"><a style="text-decoration: none;color: white; font-size: 18px" href="https://m.facebook.com/perfectskin_ctg-112652640494465/?_rdr" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/facebook.png"></a></td>
            <td style="width: 2%;text-align: center;"><a style="text-decoration: none;color: white; font-size: 18px" href="https://www.instagram.com/perfectskin_ctg/" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/instagram.png"></a></td>
            <td style="width: 96%;text-align: right;"><a style="text-decoration: none;color: white; font-size: 18px;font-family: Arial;" href="/ProyectoWeb_PSCTG/cliente.php">Registrarse</a></td>
            <td style="width: 5%;color:white;height: 5px">|</td>
            <td style="width: 96%;text-align: right;"><a style="text-decoration: none;color: white; font-size: 18px;font-family: Arial;" href="/ProyectoWeb_PSCTG/views/login_ingreso.php">Ingresar</a></td>
            </tr>
        </table>

        <div class="pformulario">
        <form action="#" method="POST">
            <table id="formulario">
                <tr>
                    <td style="width: 30%;"><br><h1 style="font-family: Arial;text-align: center;color: #F5B7B1;;">Formulario de contacto</h1></td>
                </tr>
                <tr>
                    <td style="width: 40%;"><br><h3 style="font-family: Arial;">Escribenos y en un tiempo breve tendremos contacto con usted.</h3></td>
                </tr>
                <tr>
                    <td>
                        <br><p><label>Nombre<span>*</span></label></p><!--Etiqueta <span> es un contenedor en linea-->
                        <p><input type="text" name="introducir_nombre" id="nombre" required="obligatorio" placeholder="Escribe tu nombre" style="border-style: solid;border-color: #F5B7B1;width: 408px; 
                            height: 40px;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><p><label>Email<span>*</span></label></p>
                        <p><input type="email" name="introducir_email" id="email" required="obligatorio" placeholder="Escribe tu Email" style="border-style: solid;border-color: #F5B7B1;;width: 408px; 
                            height: 40px;"></p> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><p><label>Teléfono<span>*</span></label></p><!--Etiqueta <span> es un contenedor en linea-->
                        <p><input type="number" name="introducir_telefono" id="telefono" required="obligatorio" placeholder="Escribe tu teléfono" style="border-style: solid;border-color: #F5B7B1;;width: 408px; 
                            height: 40px;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><p><label>Asunto<span>*</span></label></p><!--Etiqueta <span> es un contenedor en linea-->
                        <p><input type="text" name="introducir_asunto" id="asunto" required="obligatorio" placeholder="Escribe un asunto" style="border-style: solid;border-color: #F5B7B1;width: 408px; 
                            height: 40px;"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><p><label>Mensaje<span>*</span></label></p><!--Etiqueta <span> es un contenedor en linea-->
                            <p><input type="text" name="introducir_mensaje" id="mensaje" required="obligatorio" placeholder="Deja aquí tu mensaje..." style="border-style: solid;border-color: #F5B7B1;width: 408px; 
                                height: 150px;"></p> 
                    </td>
                </tr>
                <tr>
                    <td><br><button class="botones_contacto" image.png type="submit" name="enviar_formulario" id="enviar"><p>Enviar</p></button></td>
                </tr>
                <tr>
                    <td><br><a href="/ProyectoWeb_PSCTG/views/index.html" style="text-decoration: none;color: black;">Regresar</p></a></td>
                </tr>
                <tr>
                    <td><br><p>*<span>los campos son obligatorios.</span></p></td>
                </tr>
            </table>
        </form>
    </div>
    
        <div class="caja-fija">
            <a href="https://wa.me/message/RTRPR4CP4ISWF1" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/whatsapp.png" alt=""></a>
        </div>

        <hr size="1" width="100%" color="black">
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