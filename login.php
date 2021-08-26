<?php
session_start();
require_once('modelo/clsUsuarios.php');

$user_name=$_POST['user_name'];
$password=$_POST['password'];

$usuario=new Usuarios();
$usuario->get_by_nombre_ci($user_name,$password);
if($usuario->get_id_usuario()>0)
{

    session_regenerate_id();
    $_SESSION['id_usuario']=$usuario->get_id_usuario();
    $_SESSION['nombre']=$usuario->get_nombre();
    $_SESSION['ap_paterno']=$usuario->get_ap_paterno();
    $_SESSION['id_rol']=$usuario->get_id_rol();
    $_SESSION['ci']=$usuario->get_ci();
    $_SESSION['nombre_rol']=$usuario->get_nombre_rol();    
    
    session_write_close();	
    header("Location:crtUsuarios.php?pag=lista_usuarios");
    exit();
}
else
{
   header("Location:index.php");
   exit();
}
?>