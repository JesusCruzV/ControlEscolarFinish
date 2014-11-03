<?php
/**
 * Created by PhpStorm.
 * User: PELON
 * Date: 28/10/14
 * Time: 09:52 AM
 */

	$idu=$_COOKIE['idu'];
	$acceso=$_COOKIE['acceso'];
    $nivel=$_COOKIE['nivel'];
if($idu=="" or $acceso=="")
//if($idu=="")
{
        print "<meta http-equiv='refresh' content='0;url=index.php'>";
        exit;
    }
session_start();
	$idu2=$_SESSION['idu'];
	$acceso2=$_SESSION['acceso'];
    $nivel2=$_SESSION['nivel'];
	if($idu2=="" or $acceso2=="")
    //if($idu2=="")
    {
        print "<meta http-equiv='refresh' content='0;url=index.php'>";
    }
?>