<?php
class Materia{

    private $Id;
    private $Nombre;
    private $Avatar;
    private $Orden;
    private $Estatus;

    public function createMateria(){
        echo"<br>Create Materia";
    }

    public function readMateriaG(){
        echo"<br>Create Materia";
    }

    public function seleccionarMaestro(){
        echo"<div class=table-responsive>";
        echo"<form action=ajax.php method=Post name=maestro id=maestro target='_self'>";
         echo"<table class=\"table table-striped\">";
        echo"<tr><td>Maestro: </td><td><select name=idmae>";
        $sql02 = "SELECT * FROM usuarios WHERE estatus = 1 AND nivel = 2 ORDER BY apellidopaterno";
        $result02 = mysql_query($sql02)or die("Error $sql02");
        while($field = mysql_fetch_array($result02)){
            $id_maestro = $field['id'];
            $opcion= ($field['id'].") ".$field['apellidopaterno']." ".$field['apellidomaterno']." ".$field['nombre']);
            echo "<option value=$id_maestro>$opcion</option>";
        }
        echo "</select></td></tr>";
        echo "<tr><td colspan=2 align=center><input type=submit id=submit value=Seleccionar></td></tr>";
        echo "</table>";
        echo "</form>";
        echo "</div>";

    }

    public function datosMaestro($id_maestro){
        $sql4 = "SELECT * FROM usuarios WHERE  id = $id_maestro" ;
        $result4 = mysql_query($sql4) or die ("No se ejecuta la consulta $sql4");
        $existe = mysql_num_rows($result4);
        if ($existe > 0){
            $nombre = $id_maestro.") ";
            $nombre .= mysql_result($result4, 0, 'apellidopaterno');
            $nombre .= " ". mysql_result($result4, 0, 'apellidomaterno');
            $nombre .= " ". mysql_result($result4, 0, 'nombre');
            $nombre=$nombre;
            echo "<br>Maestro Seleccionado: <strong>".$nombre."</strong>";
        }
    }

    public function  materiasAsignadas ($id_maestro){
        echo"<div class=table-responsive>";
        echo"<form action=ajax.php method=Post name=maestro id=maestro target='_self'>";
        echo"<table class=\"table table-striped\">";
        echo "<tr><td colspan=2>Materias</td></tr>";
        $slq05="select * from maestro_materia as a, materia as b where a.id_maestro=$id_maestro and a.id_materia=b.id";
        $result05= mysql_query($slq05)or die("no sirve la consulta $slq05");
        $existen=mysql_num_rows($result05);
        for($y=0;$y<$existen;$y++){
           $id_mat=mysql_result($result05,$y,'a.id_materia');
            $name_mat=mysql_result($result05,$y,'b.nombre');
            echo " <tr><td>".$name_mat."</td><td><a href='TestMateria.php?accion=2&maestro=$id_maestro&materia=$id_mat'>Eliminar</a></td></tr>";
        }
echo "</table></form></div>";



    }
public  function asignarMateriaMaestro($id_maestro){
    echo"<div class=table-responsive>";
    echo"<table class=\"table table-striped\">";
    echo"<form action=TestMateria.php method=POST id=materia>";
    echo"<tr><td colspan='2' aling=center><strong>Asignar Nuevas Materias</strong></td></tr>

    <tr><td>Materia: </td><td><select id=materia name=materia>";
    $sql03="select * from materia where estatus = 1 order by nombre asc";
    $result03=mysql_query($sql03)or die("Error $sql03");
    while($field=mysql_fetch_array($result03)){
        $id_materia=$field['id'];
        $opcion=utf8_decode($field['nombre']);
        $sql04="select * from maestro_materia where id_maestro=$id_maestro and id_materia=$id_materia";
        $result04=mysql_query($sql04) or die ("no se ejecuta la consulta $sql04");
        $existe=mysql_num_rows($result04);
        if ($existe > 0){
            echo "<option value=0> No disponible</option>";
        }else{
            echo"<option value=$id_materia>$opcion</option>";
        }
      }
    echo "</select></td></tr>";
    echo "<input type=hidden id=accion name=accion value=1>";
    echo "<input type=hidden id=maestro name=maestro  value=$id_maestro>";
    echo"<tr><td cospan=2 aling=center><input type=submit value=Agregar></td></tr>";
    echo"</form></table></div>";
}
public function createMateriaMaestro($id_materia,$id_maestro){
    $sql09="insert into maestro_materia (id_maestro,id_materia) values ($id_maestro,$id_materia)";
    $result09=mysql_query($sql09)or die("Error Query: $sql09".mysql_error());
}
    public function deleteMaestroMateria($id_maestro,$id_materia){
        $sql10="delete from maestro_materia where id_materia=$id_materia and id_maestro=$id_maestro";
        $result=mysql_query($sql10)or die("Error Query: $sql10".mysql_error());
    }
public function ConsultaMaterias($idu){
    $sql03="SELECT mat.nombre as Materia FROM maestro_materia mm,materia mat where mat.id=mm.id_materia and mm.id_maestro=$idu";
    $result03=mysql_query($sql03)or die("error $sql03 ".mysql_error());
    echo"<div class=table-responsive>";
    echo"<table class=\"table table-striped\">";
    echo "<tr><td colspan=2>Tus Materias </td></tr>
              <tr><td>materia</td></tr>";
    while($field = mysql_fetch_array($result03)){

        $this->Nombre=$field['Materia'];
        echo"<tr><td>".$this->Nombre."</td></tr>";
    }
    echo "</table></div>";
}
}
?>