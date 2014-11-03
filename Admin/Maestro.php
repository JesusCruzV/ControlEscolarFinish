<?php
require ('Usuario.php');
require ('conexion.php');

class Maestro extends Usuario {
    private $Materia;
    private $idma;
    private $maestro;
    private $avtar;
    private $orden;
    private $estatus;
    private $ApellidoPaterno;
    private $ApellidoMaterno;


    public function createMateria (){

    }

    public function readMateriaG (){

    }

    public function readMateriaS (){

    }
public function readMaestrosGrupo(){
    echo "<br>";
    //$sql = "SELECT * FROM usuarios u WHERE NOT EXISTS(SELECT * FROM grupo_alumno g WHERE  u.id=g.idalumno) AND u.estatus = 1 AND u.nivel= 3 ";
    $sql = "SELECT mat.id as IdMat ,us.id as IDU,us.nombre As NameUs, mat.nombre as Materias, us.apellidopaterno as app
            FROM usuarios as us, maestro_materia mm, materia mat
            where us.id=mm.id_maestro and mat.id=mm.id_materia";

    $result = mysql_query($sql) or die ("Error $sql".mysql_error());
    echo "<strong>Asignar Maestros a Grupo ('selecciona ambas casillas') </strong><br>";
    $count=mysql_num_rows($result);
    if($count>0){
        while($field=mysql_fetch_array($result)) {
            $this->idma = $field ['IDU'];
            $this->maestro =($field ['NameUs']);
            $this->ApellidoPaterno = ($field ['app']);
       //     $this->ApellidoMaterno = ($field ['apellidomaterno']);
            $this->Materia=($field['Materias']);
            $idMat=($field['IdMat']);
            echo "<tr><td><input type='checkbox' name='Arrays[]' value='$idMat'> <input name='checkboxx[]' type='checkbox' value=".$this->idma = $field ['IDU']."> |   ".$this->maestro =($field ['NameUs'])." ". $this->ApellidoPaterno = ($field ['app'])."</td><td>".$this->Materia."</td></tr>";
        }
    }else{
        echo "<strong>No Hay alumnos en la base de datos";
    }

    echo"<div class=table-responsive>";

    echo"<table class=\"table table-striped\">";
    echo "<tr><td colspan=2>Maestros en Grupos</td></tr>";
    $sql01 = "SELECT * FROM usuarios u, maestro_grupo g,groups gp,materia mat WHERE  u.id=g.id_maestro and g.id_grupo=gp.idgroup and mat.id=g.id_materia order BY u.apellidopaterno ASC";
    $result01 = mysql_query($sql01) or die ("Error $sql01 <br>".mysql_error());
    $existen=mysql_num_rows($result01);
    for($y=0;$y<$existen;$y++){
        $id_alumno=mysql_result($result01,$y,'u.id');
        $name_alumno=mysql_result($result01,$y,'u.nombre');
        $id_grupo=mysql_result($result01,$y,'g.id_grupo');
        $name_grupo=mysql_result($result01,$y,'gp.namegroup');
        $name_Mat=mysql_result($result01,$y,'mat.nombre');
        echo " <tr><td><b>".$name_alumno."</b>  Asignado al grupo <B>(".$name_grupo.")</b> con la materia de <B> ".$name_Mat."</b></td><td><a href='#TestGrupo.php?accion=2&alumno=$id_alumno&grupo=$id_grupo'>Eliminar</a></td></tr>";
    }
    echo "</table>";
    echo  "</div>";
}


    public function seleccionarMaestroAlumnoGrupo ($idu){
        $sql02="SELECT l.idgroup ,l.namegroup, u.nombre FROM grupo_alumno ga, groups l,usuarios u WHERE ga.idalumno=$idu AND l.idgroup=ga.idgroup AND ga.idalumno=u.id";
        $result02=mysql_query($sql02)or die("Error 1 consulta $sql02".mysql_error());
        $igroup=mysql_result($result02,0,'l.idgroup');
        $sql03="SELECT  CONCAT(us.nombre,' ',us.apellidopaterno,' ',us.apellidomaterno) AS Maestro, mat.nombre AS Materias
                FROM maestro_grupo AS gp , groups AS gps, usuarios AS us, materia AS mat
                WHERE gp.id_grupo=gps.idgroup AND gp.id_materia=mat.id AND us.id=gp.id_maestro AND gp.id_grupo=$igroup";
        $result03=mysql_query($sql03)or die("Error 2 consulta".mysl_error());
        $count=mysql_num_rows($result03);
        if($count>0){
            echo"<div class=table-responsive>";
            echo"<table class=\"table table-striped\">";
            echo "<tr><td colspan=2>Tus Maestros </td></tr>";
            while($field=mysql_fetch_array($result03)) {
                $this->maestro =($field ['Maestro']);
                $this->Materia=($field['Materias']);
            echo  "<tr><td>".$this->maestro."</td><td>".$this->Materia."</td></tr>";
            }

            echo "</table></div>";
        }else{
            echo "Sin Maestros";
        }


    }

}
?>