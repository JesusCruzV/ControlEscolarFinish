<?php
/**
 * Created by PhpStorm.
 * User: PELON
 * Date: 12/10/14
 * Time: 09:34 PM
 */
class  ClsGrupo{
    private $idGroup;
    private $nameGroup;

    public function comboGroup(){
        $sql01="SELECT * FROM groups order by namegroup asc";
        $result01=mysql_query($sql01)or die("Error Combo Grupo: ".mysql_error());
        echo"<br>Grupos: <select name=groupo>";
            while($field = mysql_fetch_array($result01)){
            $id_group = $field['idgroup'];
            $opcion= ($field['idgroup'].") ".$field['namegroup']);
            echo "<option value=$id_group>$opcion</option>";
        }
echo"</select>";
    }

    public function insertAlumnoGroup($idAlumno,$idGroup){
        $sql02="insert into grupo_alumno (idgroup,idalumno) values ($idAlumno,$idGroup)";
        $result=mysql_query($sql02)or die("Error al insertar".mysql_error());
    }
    public function insertMaestroGroup($idMaestro,$idGroup,$idMat){
        $sql02="insert into maestro_grupo (id_maestro,id_grupo,id_materia) values ($idMaestro,$idGroup,$idMat)";
        $result=mysql_query($sql02)or die("Error al insertar".mysql_error());
    }

    public function deleteAlumnoGroup ($id_Alumno,$id_grupo){
        $sqldelete="delete from grupo_alumno where idgroup=$id_grupo and idalumno=$id_Alumno ";
        $result=mysql_query($sqldelete)or die ("Error al eliminar   ".mysql_error());
    }
    public function ConsultaGrupos($idu){
        $sql03="SELECT  g.namegroup  as nom,g.idgroup as ds FROM maestro_grupo mg,groups g WHERE MG.id_grupo=g.idgroup AND mg.id_maestro=$idu";
        $result03=mysql_query($sql03)or die("error $sql03 ".mysql_error());
        echo"<div class=table-responsive>";
        echo"<table class=\"table table-striped\">";
        echo "<tr><td colspan=2>Tus Grupos </td></tr>
              <tr><td>Grupos</td><td>Horas</td><td>alumnos</td></tr>";
        while($field = mysql_fetch_array($result03)){
            $this->idGroup = $field['ds'];
            $this->nameGroup=$field['nom'];
           echo"<tr><td>".$this->nameGroup."</td><td>pendiente</td><td><a href='#'>ver alumnos</a></td></tr>";
        }
        echo "</table></div>";
    }
}