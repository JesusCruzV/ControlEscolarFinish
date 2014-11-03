<?php
/**
 * Created by PhpStorm.
 * User: PELON
 * Date: 12/10/14
 * Time: 09:08 PM
 */
require('Alumno.php');
require('ClsGrupo.php');
require ('conexion.php');
require ('header.php');
$object = new Alumno();
$objectGroup=new ClsGrupo();
if (isset($_POST['submit'])){
    switch($_POST['submit']){
        case "Alta":
            $arrayAlumno=$_POST['checkboxx'];
            $countDeseases2=count($arrayAlumno);
            echo"<div class=\"alert alert-danger\" role=alert>";
            echo"<br>Bot&oacute;n: " . $_POST['submit'];
            echo"</div>";
            for($h=0;$h<$countDeseases2;$h++){
            $objectGroup->insertAlumnoGroup($_POST['groupo'],$arrayAlumno[$h]);

            }
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
if(isset($_REQUEST['grupo'])){
    $id_grupo=$_REQUEST['grupo'];
}else{
    $id_grupo=0;
}

switch($accion){

    case 2;
    $objectGroup->deleteAlumnoGroup($id_alumno,$id_grupo);
    break;
}


echo "<div class=table-responsive>
<table class=\"table table-bordered\" aling='center'>";
echo "<form action='TestGrupo.php' method='post' NAME='GRUPO'>";

$object->readAlumnos();
echo "</table>";
$objectGroup->comboGroup();
echo "<input type=submit name=submit value=Alta> </input>";
echo "</form>";


echo "</div>";


require ("footer.php");
?>