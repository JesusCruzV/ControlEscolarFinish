<?php

require ('header.php');
require ('Usuario.php');
require ('conexion.php');
echo "<br><br><br>";
$usuario = new Usuario();
if (isset($_POST['submit'])){
    switch($_POST['submit']){
        case "Alta":
            echo"<div class=\"alert alert-danger\" role=alert>";
            echo"<br>Bot&oacute;n: " . $_POST['submit'];
            echo"</div>";
            $usuario->createUsuario("$_POST[nombre]","$_POST[apellidop]","$_POST[apellidom]",$_POST['nivel']);
            break;
    }
}/**
 * Created by PhpStorm.
 * User: PELON
 * Date: 20/10/14
 * Time: 02:14 PM
 */
echo "
<div class=table-responsive>
            <form name=alumno action=AltaUsuario.php method=Post>
                <table class=\"table table-bordered\">
                    <tr> <td>Nombre(s):</td><td><input type=text name=nombre> </input></td> </tr>
                    <tr> <td>Apellido Paterno:</td><td><input type=text name=apellidop> </input></td> </tr>
                    <tr> <td>Apellido Materno:</td><td><input type=text name=apellidom> </input></td> </tr>

                    <tr><td>Nivel:</td><td><select name=nivel>
                        <option value=1> Administrador</option>
                        <option value=2> Maestro</option>
                        <option value=3> Alumno</option>
                        </select></td></tr>
                    <tr><td colspan=2 align=center><input type=submit name=submit value=Alta> </input>
             </td></tr></table>
       </form>
</div>
";


require ("footer.php");
?>