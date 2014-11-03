<?php
require ('header.php');
require ('conexion.php');
require ('ClsGrupo.php');
require ('Materia.php');
/**
 * Created by PhpStorm.
 * User: PELON
 * Date: 28/10/14
 * Time: 04:14 PM
 */
$objectMateria=new Materia();
$object=new ClsGrupo();
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
        $object->ConsultaGrupos($idu);
        break;
    case 2:
        $objectMateria->ConsultaMaterias($idu);
        break;
    case 3:
        break;

}
require('footer.php');