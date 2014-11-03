<?php
require ('conexion.php');
class Usuario {

    private $Id;
    private $Nombre;
    private $ApellidoPaterno;
    private $ApellidoMaterno;
    private $Telefono;
    private $Calle;
    private $NumeroExterior;
    private $NumeroInterior;
    private $Colonia;
    private $Municipio;
    private $Estado;
    private $CP;
    private $Correo;
    private $Usuario;
    private $Contraseña;
    private $Nivel;
    private $Estatus;

    public function createUsuario($nombre,$apellidop, $apellidom, $nivel){
   //echo "<br>createUsuario";

    $insert01="INSERT INTO usuarios (nombre,apellidopaterno,apellidoMaterno,nivel,estatus)
    VALUES ('$nombre','$apellidop','$apellidom','$nivel',1)";
        $execute01=mysql_query($insert01)or die ("Error $insert01");

}

    public function readUsuarioG() {
       // echo "<br>readUsuarioG";
echo "<br>";
     $sql = "SELECT * FROM usuarios WHERE estatus = 1 ORDER BY apellidopaterno ASC";
        $result = mysql_query($sql) or die ("Error $sql");
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped\">";
        echo "<tr><td colspan=6 align=center><strong>Lista de Usuario </strong></td></tr>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th><th>Operaciones</th></tr>";
        while ($field= mysql_fetch_array($result)){
            $this->Id = $field ['id'];
            $this->Nombre =($field ['nombre']);
            $this->ApellidoPaterno = ($field ['apellidopaterno']);
            $this->ApellidoMaterno = ($field ['apellidomaterno']);
            $this->Nivel = $field ['nivel'];
switch ($this->Nivel){
    case 1:
        $type="Administrador";
        break;
    case 2:
        $type="Maestro";
        break;
    case 3:
        $type="Alumno";
        break;
}
            echo "<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td>
           <td>$type</td><td><a href='TestUsuario.php?accion=2&alumno=$this->Id'> Eliminar</a>||<a href='updateUser.php?accion=3&usuario=$this->Id''>Modificar</a></td><</tr>";
        }
            echo "</table></div>";

    }


    public function readUsuarioS($Id) {
        if($Id<>""){
    //echo "<br>readUsuarioS";
        echo"<br>";
        $sql = "SELECT * FROM usuarios WHERE estatus = 1 AND id like '%$Id%' or nombre like '%$Id%' OR apellidopaterno LIKE '%$Id%' ORDER BY apellidopaterno ASC";
        $result = mysql_query($sql) or die ("Error $sql");
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped\">";
        echo "<tr><td colspan='5' align='center'><strong>Consulta de Usuarios". "</tr>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Nivel</th></tr>";
        while ($field= mysql_fetch_array($result)){
            $this->Id = $field ['id'];
            $this->Nombre =($field ['nombre']);
            $this->ApellidoPaterno = ($field ['apellidopaterno']);
            $this->ApellidoMaterno = ($field ['apellidomaterno']);
            $this->Nivel = ($field ['nivel']);
            switch ($this->Nivel){
                case 1:
                    $type="Administrador";
                    break;
                case 2:
                    $type="Maestro";
                    break;
                case 3:
                    $type="Alumno";
                    break;
            }
            echo "<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td>



           <td>$type</td>




           </tr>";


            echo "</table></div>";

        }
    }
       else{
              $this->readUsuarioG();
            }

    }

    public function updateUsuario($idm, $nombre,$apellidop, $apellidom, $nivel){
        //echo "<br>updateUsuario";

        $update01="UPDATE usuarios SET nombre='$nombre', apellidopaterno='$apellidop', apellidomaterno='$apellidom', nivel='$nivel' WHERE id=$idm";
        $execute02=mysql_query($update01)or die ("Error $update01");


    }

    public function deleteUsuario($id){
        //echo "<br>deleteUsuario";

        $delete01="DELETE FROM usuarios WHERE id=$id";
        $execute02=mysql_query($delete01)or die ("Error $delete01");
    }

   public  function camposActualizar ($id){
       $sql = "SELECT * FROM usuarios WHERE estatus = 1 AND id =$id";
       $result = mysql_query($sql) or die ("Error $sql");
       echo "<div class=table-responsive>    <form name=alumno action=updateUser.php method=Post>";

       echo "<table class=\"table table-striped\">
       ";
       echo "<tr><td colspan='5' align='center'><strong>Modificar". "</tr>";

       while ($field= mysql_fetch_array($result)){
           $this->Id = $field ['id'];
           $this->Nombre =($field ['nombre']);
           $this->ApellidoPaterno = ($field ['apellidopaterno']);
           $this->ApellidoMaterno = ($field ['apellidomaterno']);
           $this->Nivel = ($field ['nivel']);
           switch ($this->Nivel){
               case 1:
                   $type="Administrador";
                   break;
               case 2:
                   $type="Maestro";
                   break;
               case 3:
                   $type="Alumno";
                   break;
           }
           echo "<tr><td>Nombre: </td><td><input type='text' name='nombre' value='$this->Nombre' </td></tr>
                 <tr><td>APp</td><td><input type='text' name='app' value='$this->ApellidoPaterno'> </td></tr>
                 <tr><td>APm</td><td><input type='text' name='apm' value=' $this->ApellidoMaterno'> </td></tr>
                 <tr><td>Nivel actual($type)</td><td>

         <select name=nivel>

                        <option value=1> Administrador</option>
                        <option value=2> Maestro</option>
                        <option value=3> Alumno</option>
                        </select>

             </td></tr>";
           echo "  <tr><td><input type=hidden name=id value='$this->Id'><input type=submit name=submit value=Modificar> </input>
                        </td>
                    </tr>
</table></form></div>";


}
   }
}

?>