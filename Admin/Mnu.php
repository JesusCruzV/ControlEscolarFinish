<?php
/**
 * Created by PhpStorm.
 * User: PELON
 * Date: 27/10/14
 * Time: 07:55 PM
 */

class Mnu{
    private $Nivel;
    public  function CargaNivel($nivel){
        $this->Nivel=$nivel;
    }
    public function Menus(){
        if($this->Nivel==1){
            echo  '<div class="navbar-wrapper">
            <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
            <div class="container">

                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="#">Control Escolar Administrador</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li class="active"><a href="home.php">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="TestUsuario.php">CONSULTA</a></li>
                                        <li><a href="AltaUsuario.php">ALTA</a></li>

                                        <li class="divider"></li>
                                        <li class="nav-header">OPERACIONES</li>
                                        <li><a href="#">1k</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Maestros <b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">CONSULTA</a></li>
                                        <li><a href="TestMateria.php">Asignar Materia</a></li>

                                        <li class="divider"></li>
                                        <li class="nav-header">OPERACIONES</li>
                                        <li><a href="#">1k</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Materias <b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">CONSULTA</a></li>
                                        <li><a href="#">ALTA</a></li>

                                        <li class="divider"></li>
                                        <li class="nav-header">OPERACIONES</li>
                                        <li><a href="#">1k</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Grupos <b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="#">CONSULTA</a></li>
                                        <li><a href="TestGrupo.php">Asignar Alumnos a Grupos</a></li>
                                        <li><a href="TestMaestroGrupos.php">Asignar Maestros a Grupos</a></li>

                                        <li class="divider"></li>
                                        <li class="nav-header">OPERACIONES</li>
                                        <li><a href="#">1k</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="salir.php">Salir</a></li>


                                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!-- /.navbar-inner -->
                </div><!-- /.navbar -->

            </div> <!-- /.container -->
        </div><!-- /.navbar-wrapper -->

        <br><br>';
        }
        if($this->Nivel==2){
            echo '<div class="navbar-wrapper">
            <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
            <div class="container">

                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="#">Control Escolar Maestros</a>
                        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li class="active"><a href="home.php">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acciones <b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <!--li><a href="TestAdminMaestro.php">Consultar Alumnos</a></li-->
                                        <li><a href="TestAdminMaestro.php?accion=1">Consultar Grupos</a></li>
                                        <li><a href="TestAdminMaestro.php?accion=2">Consultar Materias</a></li>
                                        <li class="divider"></li>
                                        <li class="nav-header">OPERACIONES</li>
                                        <li><a href="#">1k</a></li>
                                    </ul>
                                </li>
                                        <li class="active"><a href="salir.php">Salir</a></li>

                                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!-- /.navbar-inner -->
                </div><!-- /.navbar -->

            </div> <!-- /.container -->
        </div><!-- /.navbar-wrapper -->

        <br><br>';
        }
        if($this->Nivel==3){
            echo  '<div class="navbar-wrapper">
            <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
            <div class="container">

                <div class="navbar navbar-inverse">
                    <div class="navbar-inner">
                        <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="brand" href="#">Control Escolar Alumnos</a>
                        <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                        <div class="nav-collapse collapse">
                            <ul class="nav">
                                <li class="active"><a href="home.php">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acciones <b class="caret"></b></a>

                                    <ul class="dropdown-menu">
                                        <li><a href="TestAdminAlumno.php?accion=1">Consulta Maestros</a></li>
                                        <!--li><a href="TestAdminAlumno.php?accion=2">Consulta Materias</a></li-->

                                        <li class="divider"></li>
                                        <li class="nav-header">OPERACIONES</li>
                                        <li><a href="#">Levantar Reporte</a></li>
                                    </ul>
                                </li>
                                 <li class="active"><a href="salir.php">Salir</a></li>
                                <!-- Read about Bootstrap dropdowns at http://twbs.github.com/bootstrap/javascript.html#dropdowns -->
                            </ul>
                        </div><!--/.nav-collapse -->
                    </div><!-- /.navbar-inner -->
                </div><!-- /.navbar -->

            </div> <!-- /.container -->
        </div><!-- /.navbar-wrapper -->';
        }

    }
}