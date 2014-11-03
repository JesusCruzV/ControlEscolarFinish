<?php
require ('Materia.php');
require ('conexion.php');
require ('header.php');
$materia = new Materia();

if(isset($_REQUEST['accion'])){
    $accion=$_REQUEST['accion'];
    }
else{
    $accion=0;
}
if(isset($_REQUEST['maestro'])){
    $id_maestro=$_REQUEST['maestro'];
}else{
    $id_maestro=0;
}
if(isset($_REQUEST['materia'])){
    $id_materia=$_REQUEST['materia'];
}else{
    $id_materia=0;
}
echo "<br><br><br><br><br>";
switch($accion){
    case 0:
        $materia->seleccionarMaestro();
    break;
    case 1:
        $materia->createMateriaMaestro($id_materia,$id_maestro);
        $materia->seleccionarMaestro();
        break;
    case 2;
        $materia->deleteMaestroMateria($id_maestro,$id_materia);
        $materia->seleccionarMaestro();
    break;
}



//$materia->seleccionarMaestro();

require ("footer.php");

?>