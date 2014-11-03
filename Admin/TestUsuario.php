
<?php
require ('Usuario.php');
require ('conexion.php');
require ('header.php');
echo "<br>";
$usuario = new Usuario();

if (isset($_POST['submit'])){
    switch($_POST['submit']){
        /*case "Alta":
            echo"<div class=\"alert alert-danger\" role=alert>";
            echo"<br>Bot&oacute;n: " . $_POST['submit'];
            echo"</div>";
            $usuario->createUsuario("$_POST[nombre]","$_POST[apellidop]","$_POST[apellidom]",$_POST['nivel']);
            break;
       */ /*case "Borrar":
            echo "<div class=\"alert alert-info\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $usuario->deleteUsuario($_POST['idb']);
            break;
        case "Modificar":
            echo "<div class=\"alert alert-success\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $usuario->updateUsuario($_POST['idm'],"$_POST[nombre]","$_POST[apellidop]","$_POST[apellidom]",$_POST['nivel']);
            break;*/
        case "Buscar":
            echo "<div class=\"alert alert-warning\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $usuario->readUsuarioS($_POST['idbuscar']);
            break;
    }
}


if(isset($_REQUEST['accion'])){
    $accion=$_REQUEST['accion'];
}
else{
    $accion=0;
}
if(isset($_REQUEST['alumno'])){
    $id_alumno=$_REQUEST['alumno'];
}else{
    $id_alumno=0;
}
echo "<br><br><br>";
switch($accion){

    case 2;
        $usuario->deleteUsuario($id_alumno);
        $usuario->readUsuarioG();
        break;
}
echo "

        <div class=table-responsive>
            <form name=alumno action=TestUsuario.php method=Post>
                <table class=\"table table-bordered\">";
echo "<tr><td>Ingresa el nombre a Buscar o deja el campo vacio para mostrar todos resultados: <input type=text name=idbuscar> </td><TD></TD><TD></TD><td><input type=submit name=submit value=Buscar> </input></td></tr>";
echo"</table>";
/*
                    <tr> <td>Nombre(s):</td><td><input type=text name=nombre> </input></td> </tr>
                    <tr> <td>Apellido Paterno:</td><td><input type=text name=apellidop> </input></td> </tr>
                    <tr> <td>Apellido Materno:</td><td><input type=text name=apellidom> </input></td> </tr>

                    <tr><td>Nivel:</td><td><select name=nivel>
                        <option value=1> Administrador</option>
                        <option value=2> Maestro</option>
                        <option value=3> Alumno</option>
                        </select></td></tr>
                    <tr><td colspan=2 align=center><input type=submit name=submit value=Alta> </input>
                       </td>

                    </tr>";*//*
echo "  <tr><td colspan=2 aling=center>ID: <input type=text name=idm><input type=submit name=submit value=Modificar> </input>
                        </td>
                    </tr>
                    </table>";*/
//$usuario->readUsuarioG();
/*
echo"<table class=\"table table-bordered\">

                    <tr><td>ID: <input type=text name=idb></td><td><input type=submit name=submit value=Borrar> </input></td></tr>
                    <tr><td>Buscar: <input type=text name=idbuscar></td><td><input type=submit name=submit value=Buscar> </input></td></tr>
*/
echo"
            </form>
        </div>
    ";


require ("footer.php");

?>