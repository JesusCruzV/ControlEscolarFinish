<?php
/**
 * Created by PhpStorm.
 * User: PELON
 * Date: 21/10/14
 * Time: 03:01 PM
 */
require ('Usuario.php');
require ('conexion.php');
require ('header.php');
echo "<br><br><br>";
$user = new Usuario();

if (isset($_POST['submit'])){
    switch($_POST['submit']){
        case "Modificar":
            echo "<div class=\"alert alert-success\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $user->updateUsuario($_POST['id'],$_POST['nombre'],$_POST['app'],$_POST['apm'],$_POST['nivel']);
            $user->readUsuarioG();
            break;

    }
}
if(isset($_REQUEST['usuario'])){
    $id_usuario=$_REQUEST['usuario'];
    $user->camposActualizar($id_usuario);
}else{
    $id_usuario=0;
}
echo "<br><br><br>";












require ("footer.php");

?>
