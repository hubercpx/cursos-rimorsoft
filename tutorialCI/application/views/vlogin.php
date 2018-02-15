<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="<?php echo base_url(); ?>clogin/ingresar" method="POST">
            <table>
                <tr>
                    <td><label>Usuario:</label></td>
                    <td><input type="text" name="txtUsuario"></input</td>
                </tr>
                <tr>
                    <td><label>Contraseña:</label></td>
                    <td><input type="password" name="txtClave"></input</td>
                </tr>
                <tr>
                    <td><input type="submit" value="Iniciar sesion"></input</td>
                </tr>
            </table>
        </form>
    </body>
</html>
