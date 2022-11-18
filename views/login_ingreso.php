<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <link href="estilos.css" type="text/css" rel="stylesheet">
    </head>
    <body background="/ProyectoWeb_PSCTG/imagenes/Fondo.jpg" id="login">
        <table id="header">
            <tr>
            <td style="width: 2%;text-align: center;"><a style="text-decoration: none;color: white; font-size: 18px" href="https://m.facebook.com/perfectskin_ctg-112652640494465/?_rdr" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/facebook.png"></a></td>
            <td style="width: 2%;text-align: center;"><a style="text-decoration: none;color: white; font-size: 18px" href="https://www.instagram.com/perfectskin_ctg/" target="_blank"><img src="/ProyectoWeb_PSCTG/imagenes/instagram.png"></a></td>
            <td style="width: 96%;text-align: right;"><a style="text-decoration: none;color: white; font-size: 18px;font-family: Arial;" href="/ProyectoWeb_PSCTG/usuario.php">Registrarse</a></td>
            <td style="width: 5%;color:white;height: 5px">|</td>
            <td style="width: 96%;text-align: right;"><a style="text-decoration: none;color: white; font-size: 18px;font-family: Arial;" href="login.html">Ingresar</a></td>
            </tr>
        </table>

        <table id="separador">
            <td><hr class="hr1"></td>
        </table>

        <form action="../controlador/login_ingreso_controlador.php" method="POST">
            <table id="inicio">
                <th><h1 style="font-family: Arial;">Iniciar Sesión</h1></th>
                <tr><td style="text-align: center; width: 200%"><input type="text" placeholder="&#128273; Usuario" name="usuario" required></td></tr>
                <tr><td style="text-align: center"><input type="password" placeholder="&#128274; Contraseña" name="pass" required> </td></tr>
                <tr><td  style="text-align: center"><input class="btn-login" type="submit" value="Ingresar" name="btningresar"><br><br></td></tr>
                <tr><td style="text-align: center"><a style="text-decoration: none;color: black;" href="login_registrar.php" style="float: center">Crear una cuenta</a></td></tr>
                <tr><td style="text-align: center"><a style="text-decoration: none;color: black;" href="index.html" style="float: center">Regresar</a></td></tr>
            </table>
        </form>
    </body>
</html>