<?php
require ('Usuario.php');
require ('conexion.php');
class Alumno extends Usuario {

    private $Grupo;
    private $Id;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;

    public function readAlumnos() {
        // echo "<br>readUsuarioG";
       echo "<br>";
       $sql = "SELECT * FROM usuarios u WHERE NOT EXISTS(SELECT * FROM grupo_alumno g WHERE  u.id=g.idalumno) AND u.estatus = 1 AND u.nivel= 3 ";
       $result = mysql_query($sql) or die ("Error $sql".mysql_error());
        echo "<strong>Asignar Grupos </strong><br>";
       $count=mysql_num_rows($result);
        if($count>0){
        while($field=mysql_fetch_array($result)) {
            $this->Id = $field ['id'];
            $this->Nombre =($field ['nombre']);
            $this->ApellidoPaterno = ($field ['apellidopaterno']);
            $this->ApellidoMaterno = ($field ['apellidomaterno']);
            echo "<tr><td><input name='checkboxx[]' type='checkbox' value=".$this->Id = $field ['id'].">".$this->Nombre =($field ['nombre'])."</td></tr>";
          }
        }else{
            echo "<strong>No Hay alumnos en la base de datos";
             }

        echo"<div class=table-responsive>";

        echo"<table class=\"table table-striped\">";
        echo "<tr><td colspan=2>Materias</td></tr>";
        $sql01 = "SELECT * FROM usuarios u, grupo_alumno  g,groups gp WHERE  u.id=g.idalumno and g.idgroup=gp.idgroup order BY u.apellidopaterno ASC";
        $result01 = mysql_query($sql01) or die ("Error $sql01 <br>".mysql_error());
        $existen=mysql_num_rows($result01);
        for($y=0;$y<$existen;$y++){
            $id_alumno=mysql_result($result01,$y,'u.id');
            $name_alumno=mysql_result($result01,$y,'u.nombre');
            $id_grupo=mysql_result($result01,$y,'g.idgroup');
            $name_grupo=mysql_result($result01,$y,'gp.namegroup');
            echo " <tr><td>".$name_alumno."  Asignado al grupo (".$name_grupo.")</td><td><a href='TestGrupo.php?accion=2&alumno=$id_alumno&grupo=$id_grupo'>Eliminar</a></td></tr>";
        }
        echo "</table>";
        echo  "</div>";
        }
}
?>