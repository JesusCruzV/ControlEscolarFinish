<?php
require ('header.php');
require ('conexion.php');
require('Maestro.php');/**
 * Created by PhpStorm.
 * User: PELON
 * Date: 28/10/14
 * Time: 04:14 PM
 */
$object=new Maestro();
$idu=$_COOKIE['idu'];
if(isset($_REQUEST['accion'])){
    $accion=$_REQUEST['accion'];
}
else{
    $accion=0;
}

echo "<br><br><br>";
switch($accion){
    case 1:
        $object->seleccionarMaestroAlumnoGrupo($idu);
        break;
    case 2:
        break;
    case 3:
        break;

}
require('footer.php');