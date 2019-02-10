<?php 
include_once('funciones.php');
session_start();
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
if(!isset($_SESSION["userid"]))
{
    if(isset($_POST['login']))
    {
        if(validar_login($_POST['usuario'],$_POST['pass'],$result) == 1)
        {
            $_SESSION["userid"] = 1;
            header("location:../mantenimiento.php");
        }
        else
        {
            echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
}
 ?>