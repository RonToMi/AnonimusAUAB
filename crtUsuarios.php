<?php
session_start();
require_once('modelo\clsUsuarios.php');
require_once('vista\vstUsuarios.php');
require_once('template.php');

function helper()
{
	$pag=helper_get_pagina();
	$template=new template();
//templates para cada rol de usuarios del sistema	
	switch($_SESSION['id_rol'])
	{
		case 1:
			$template->cabecera_admin();
		break;
		case 2:
			$template->cabecera_docente();
		break;
		case 3:
			$template->cabecera_estudiante();
		break;
		
	}


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
			echo($nombre);
			$usuario=new Usuarios($ci,$nombre,$ap_paterno,$ap_materno,$celular,$fecha_nac,$email,$nacionalidad,$id_rol);
			$usuario->insert();
		    $usuario->get_tabla();
		break;
		case 'formulario_modificar_usuario':
		    $usuario=new Usuarios();
		    $id=$_GET['id'];
		    $usuario->get_by_ci($id);
			$vista_usuario=new vstUsuarios();
			$vista_usuario->vista_modificar_usuario($usuario);
		break;
		case 'modificar_usuario':
			$id_usuario=$_POST['id_usuario'];
		    $ci=$_POST['ci'];
			$nombre=$_POST['nombre'];
			$ap_paterno=$_POST['ap_paterno'];
			$ap_materno=$_POST['ap_materno'];
			$celular=$_POST['celular'];
			$fecha_nac=$_POST['fecha_nac'];
			$email=$_POST['email'];
			$nacionalidad=$_POST['nacionalidad'];
			$rol=$_POST['rol'];
			$creativo=$_POST['creativo'];
			$liderazgo=$_POST['liderazgo'];
			$programacion=$_POST['programacion'];
		    $usuario=new Usuarios($ci,$nombre,$ap_paterno,$ap_materno,$celular,$fecha_nac,$email,$nacionalidad,$rol, $creativo, $liderazgo,$programacion);
		    $usuario->set_id_usuario($id_usuario);
		    $usuario->update();
		    $usuario->get_tabla();
		break;
		case 'formulario_eliminar_usuario':
		    $usuario=new Usuarios();
		    $id=$_GET['id'];
		    $usuario->get_by_ci($id);
			$vista_usuario=new vstUsuarios();
			$vista_usuario->vista_eliminar_usuario($usuario);
		break;
		case 'eliminar_usuario':
		    $usuario=new Usuarios();
		    $id_usuario=$_POST['id_usuario'];
		    $usuario->set_id_usuario($id_usuario);
		    $usuario->delete();
		    $usuario->get_tabla();
		break;
		case 'buscar_usuario':
		    $usuario=new Usuarios();
		    $usuario->get_by_ci(321);
		    echo $usuario->get_nombre();

		break;
		case 'lista_usuarios':
		   $usuario=new Usuarios();
		   switch($_SESSION['id_rol'])
			{
				case 1:
					$usuario->get_tabla();
				break;
				case 2:
					$usuario->get_tabla2();
				break;
				case 3:
					$usuario->get_tabla3();
				break;
			} 
		break;
//Controlador que recibe parametros de entrada del usuario estudiante que se logueo al sistema, para llenar el cuestionario de creactividad
		case 'form_cuestionario_creat_usuario':
		    $usuario=new Usuarios();
		    $id=$_GET['id'];
		    $usuario->get_by_ci($id);
			$vista_usuario=new vstUsuarios();
			$vista_usuario->vista_cuestionario_creatividad($usuario);
		break;
		case 'cuestionario_creatividad':
			$id_usuario=$_POST['id_usuario'];
			$ci=$_POST['ci'];
			$nombre=$_POST['nombre'];
			$ap_paterno=$_POST['ap_paterno'];
			$ap_materno=$_POST['ap_materno'];
			$celular=$_POST['celular'];
			$fecha_nac=$_POST['fecha_nac'];
			$email=$_POST['email'];
			$nacionalidad=$_POST['nacionalidad'];
			$rol=$_POST['rol'];
			$creativo=$_POST['resultado'];
			$liderazgo=$_POST['liderazgo'];
			$programacion=$_POST['programacion'];
		    $usuario=new Usuarios($ci,$nombre,$ap_paterno,$ap_materno,$celular,$fecha_nac,$email,$nacionalidad,$rol, $creativo, $liderazgo,$programacion);
		    $usuario->set_id_usuario($id_usuario);
		    $usuario->update();
		    $usuario->get_tabla3();
		//echo ($creativo );
		//echo ($liderazgo);
		//echo ($programacion);
		break;
//Controlador que recibe parametros de entrada del usuario estudiante que se logueo al sistema, para llenar el cuestionario de liderazgo
		case 'form_cuestionario_lide_usuario':
		    $usuario=new Usuarios();
		    $id=$_GET['id'];
		    $usuario->get_by_ci($id);
			$vista_usuario=new vstUsuarios();
			$vista_usuario->vista_cuestionario_liderazgo($usuario);
		break;
		case 'cuestionario_liderazgo':
			$id_usuario=$_POST['id_usuario'];
			$ci=$_POST['ci'];
			$nombre=$_POST['nombre'];
			$ap_paterno=$_POST['ap_paterno'];
			$ap_materno=$_POST['ap_materno'];
			$celular=$_POST['celular'];
			$fecha_nac=$_POST['fecha_nac'];
			$email=$_POST['email'];
			$nacionalidad=$_POST['nacionalidad'];
			$rol=$_POST['rol'];
			$creativo=$_POST['creativo'];
			$liderazgo=$_POST['resultado'];
			$programacion=$_POST['programacion'];
		    $usuario=new Usuarios($ci,$nombre,$ap_paterno,$ap_materno,$celular,$fecha_nac,$email,$nacionalidad,$rol, $creativo, $liderazgo,$programacion);
		    $usuario->set_id_usuario($id_usuario);
		    $usuario->update();
		    $usuario->get_tabla3();
		break;
//Controlador que recibe parametros de entrada del usuario estudiante que se logueo al sistema, para llenar el cuestionario de programacion
		case 'form_cuestionario_progra_usuario':
		    $usuario=new Usuarios();
		    $id=$_GET['id'];
		    $usuario->get_by_ci($id);
			$vista_usuario=new vstUsuarios();
			$vista_usuario->vista_cuestionario_programacion($usuario);
		break;
		case 'cuestionario_programacion':
			$id_usuario=$_POST['id_usuario'];
			$ci=$_POST['ci'];
			$nombre=$_POST['nombre'];
			$ap_paterno=$_POST['ap_paterno'];
			$ap_materno=$_POST['ap_materno'];
			$celular=$_POST['celular'];
			$fecha_nac=$_POST['fecha_nac'];
			$email=$_POST['email'];
			$nacionalidad=$_POST['nacionalidad'];
			$rol=$_POST['rol'];
			$creativo=$_POST['creativo'];
			$liderazgo=$_POST['liderazgo'];
			$programacion=$_POST['resultado'];
		    $usuario=new Usuarios($ci,$nombre,$ap_paterno,$ap_materno,$celular,$fecha_nac,$email,$nacionalidad,$rol, $creativo, $liderazgo,$programacion);
		    $usuario->set_id_usuario($id_usuario);
		    $usuario->update();
		    $usuario->get_tabla3();
		break;

	}
	$template->pie();

}
function helper_get_pagina()
{
	$pag=$_GET['pag'];
	return $pag;
}

if(isset($_SESSION['id_usuario'])){
	helper();
}
else
{
	header("Location:index.php");
    exit();
}

?>