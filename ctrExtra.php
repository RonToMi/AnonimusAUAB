<?php
require_once('modelo\clsUsuarios.php');
require_once('vista\vstUsuarios.php');

function helper1()
{
	$pag=helper_get_pagina1();
	

	switch($pag)
	{
		case 'formulario_usuario':
		    $usuario=new Usuarios();
			$vista_usuario=new vstUsuarios();
			$vista_usuario->vista_nuevo_usuario($usuario);
		break;

		case 'registrar_usuario':
			$ci=$_POST['ci'];
			$nombre=$_POST['nombre'];
			$ap_paterno=$_POST['ap_paterno'];
			$ap_materno=$_POST['ap_materno'];
			$celular=$_POST['celular'];
			$fecha_nac=$_POST['fecha_nac'];
			$email=$_POST['email'];
			$nacionalidad=$_POST['nacionalidad'];
			$id_rol=$_POST['rol'];
			$usuario=new Usuarios($ci,$nombre,$ap_paterno,$ap_materno,$celular,$fecha_nac,$email,$nacionalidad,$id_rol);
			$usuario->insert();		  
		break;		

	}

}
helper1();
function helper_get_pagina1()
{
	$pag=$_GET['pag'];
	return $pag;
}


?>