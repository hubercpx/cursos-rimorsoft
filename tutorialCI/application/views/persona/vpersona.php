<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>persona</title>
    </head>
    <body>
        <h1>Cargo Persona</h1>
        <form action="<?php echo base_url(); ?>cpersona/guardar" method="POST">
            <table>
                <tr>
                    <td><label>DNI</label></td>
                    <td><input type="text" name="txtDNI" maxlength="8"></input></td>
                </tr>
                <tr>
                    <td><label>Nombre</label></td>
                    <td><input type="text" name="txtNombre"></input></td>
                </tr>
                <tr>
                    <td><label>Ap Paterno</label></td>
                    <td><input type="text" name="txtApPaterno"></input></td>
                </tr>
                <tr>
                    <td><label>Ap Materno</label></td>
                    <td><input type="text" name="txtApMaterno"></input></td>
                </tr>
                <tr>
                    <td><label>E-mail</label></td>
                    <td><input type="email" name="txtEmail"></input></td>
                </tr>
                <tr>
                    <td><label>Fecha de nac</label></td>
                    <td><input type="date" name="DatFecNac"></input></td>
                </tr>
                <tr>
                    <td colspan="2"><label>Usuario</label></td>
                </tr>
                <tr>
                    <td><label>Usuario</label></td>
                    <td><input type="text" name="txtUsuario"></input></td>
                </tr>
                <tr>
                    <td><label>Clave</label></td>
                    <td><input type="password" name="txtClave"></input></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Guardar"></input></td>
                </tr>
            </table>
        </form>
        <a href="<?php echo base_url(); ?>clogin">Loguearse</a>
    </body>
</html>
