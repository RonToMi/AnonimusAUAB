<?php
class vstUsuarios
{

	public function __construct()
	{

	}
	public function __destruct()
	{

	}
	public function vista_nuevo_usuario($usuario)
	{
		$rol=$usuario->get_combo_rol();
		$html="	
				
				<div >		
		<form name='reg_usuario' class='form-horizontal' action='crtUsuarios.php?pag=registrar_usuario' method='POST'>
		<fieldset>
			<legend>Registrar Usuario </legend>
			<div class='form-group'>
				<label for='C.I.' class='col-sm-2 control-label'>CI</label>
				<div  class='col-sm-4'>
				<input type='text' class='form-control' id='ci' name='ci'  required  placeholder='Ingrese C.I.' /> 
			    </div>
			    <div class='col-sm-6'>
			    </div>
			</div>
			<div  class='form-group'>
				<label for='Nombre' class='col-sm-2 control-label'>Nombre</label>
			    <div  class='col-sm-10'>
					<input type='text' class='form-control'  id='nombre' name='nombre'  required   placeholder='Ingrese Nombre' /> 
			    </div>
			</div>

			<div  class='form-group'>
			<label for='ap_paterno' class='col-sm-2 control-label'>Ap. Paterno</label>
				<div  class='col-sm-10'>
					<input type='text' class='form-control' id='ap_paterno' name='ap_paterno'  required   placeholder='Ingrese Apellido Paterno' /> 
				</div>
			</div>

			<div  class='form-group'>
			<label for='ap_materno' class='col-sm-2 control-label'>Ap. Materno</label>
				<div  class='col-sm-10'>
					<input type='text' class='form-control' id='ap_materno' name='ap_materno'  required   placeholder='Ingrese Apellido Materno' /> 
				</div>
			</div>
			<div  class='form-group' >
			<label for='celular' class='col-sm-2 control-label'>Celular</label>
				<div  class='col-sm-10'>
					<input type='text' class='form-control' id='celular' name='celular'  required   placeholder='Ingrese Celular' /> 
				</div>
			</div>
			<div  class='form-group'>
			<label for='fecha_nac' class='col-sm-2 control-label'>Fecha de nacimiento</label>
				<div  class='col-sm-10'>
					<input type='text' class='form-control' id='fecha_nac' name='fecha_nac'  required   placeholder='Ingrese fecha nacimiento' /> 
				</div>
			</div>
			<div  class='form-group'>
			<label for='Email' class='col-sm-2 control-label'>Email</label>
				<div  class='col-sm-10'>
					<input type='text' class='form-control' id='email' name='email'  required   placeholder='Ingrese Email' /> 
				</div>
			</div>
			<div  class='form-group'>
			<label for='nacionalidad' class='col-sm-2 control-label'>Nacionalidad</label>
				<div  class='col-sm-10'>
					<input type='text' class='form-control' id='nacionalidad' name='nacionalidad'  required   placeholder='Ingrese nacionalidad' /> 
				</div>
			</div>
			<div  class='form-group'>
			<label for='rol' class='col-sm-2 control-label'>Rol</label>
				<div  class='col-sm-10'>
				$rol	
				</div>
			</div>
			<div>
			<br >
			<div class='col-sm-2'>
			</div>
				<div  class='col-sm-10'>
				<button type='submit' class='btn btn-primary btn-lg' aria-label='Left Align'>
                    <span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
                	Registrar Usuario
                </button>
				</div>
			</div>
		</fieldset>	
		</form>
  		</div>		
		";
		echo $html;
	}
    public function vista_modificar_usuario($usuario)
	{
		$id_usuario=$usuario->get_id_usuario();
		$ci=$usuario->get_ci();
		$nombre=$usuario->get_nombre();
        $ap_paterno=$usuario->get_ap_paterno();
        $ap_materno=$usuario->get_ap_materno();
        $celular=$usuario->get_celular();
        $fecha=$usuario->get_fecha_nac();
        $email=$usuario->get_email();
        $nacionalidad=$usuario->get_nacionalidad();
        $rol=$usuario->get_combo_rol();
        $creativo=$usuario->get_creativo();
        $liderazgo=$usuario->get_liderazgo();
        $programacion=$usuario->get_programacion();
		$html="
		<div>
		<form name='mod_usuario' action='crtUsuarios.php?pag=modificar_usuario' method='POST'>
		<fieldset>
			<legend>Modificar Usuario </legend>
			<div>
				<label for='C.I.'>CI</label>
				<input type='text' id='ci' name='ci' value='$ci'  required  placeholder='Ingrese C.I.' /> 
			</div>
			<div>
			<label for='Nombre'>Nombre</label>
			<input type='text' id='nombre' name='nombre' value='$nombre' required   placeholder='Ingrese Nombre' /> 
			</div>
			<div>
			<label for='ap_paterno'>Ap. Paterno</label>
			<input type='text' id='ap_paterno' name='ap_paterno' value='$ap_paterno'  required   placeholder='Ingrese Apellido Paterno' /> 
			</div>
			<div>
			<label for='ap_materno'>Ap. Materno</label>
			<input type='text' id='ap_materno' name='ap_materno' value='$ap_materno'  required   placeholder='Ingrese Apellido Materno' /> 
			</div>
			<div>
			<label for='celular'>Celular</label>
			<input type='text' id='celular' name='celular' value='$celular' required   placeholder='Ingrese Celular' /> 
			</div>
			<div>
			<label for='fecha_nac'>Fecha de nacimiento</label>
			<input type='text' id='fecha_nac' name='fecha_nac' value='$fecha'  required   placeholder='Ingrese fecha nacimiento' /> 
			</div>
			<div>
			<label for='Email'>Email</label>
			<input type='text' id='email' name='email' value='$email' required   placeholder='Ingrese Email' /> 
			</div>
			<div>
			<label for='nacionalidad'>Nacionalidad</label>
			<input type='text' id='nacionalidad' name='nacionalidad' value='$nacionalidad' required   placeholder='Ingrese nacionalidad' /> 
			</div>
			<div>
			<label for='rol'>Rol</label>
			$rol 
			</div>
			<div>
			<br >
			<input type='hidden' name='id_usuario' id='id_usuario' value='$id_usuario' />
			<input type='submit' name='Registrar_usuario' value='Modificar Usuario' />
			<input type='hidden' name='creativo' id='creativo' value='$creativo' />
		  <input type='hidden' name='liderazgo' id='liderazgo' value='$liderazgo' />
		  <input type='hidden' name='programacion' id='programacion' value='$programacion' />
			</div>
		</fieldset>	
		</form>
		</div>		
		";
		echo $html;
	}
	public function vista_eliminar_usuario($usuario)
	{
		$id_usuario=$usuario->get_id_usuario();
		$ci=$usuario->get_ci();
		$nombre=$usuario->get_nombre();
        $ap_paterno=$usuario->get_ap_paterno();
        $ap_materno=$usuario->get_ap_materno();
        $celular=$usuario->get_celular();
        $fecha=$usuario->get_fecha_nac();
        $email=$usuario->get_email();
        $nacionalidad=$usuario->get_nacionalidad();
		$html="
		<div>
		<form name='del_usuario' action='crtUsuarios.php?pag=eliminar_usuario' method='POST'>
		<fieldset>
			<legend>Eliminar Usuario </legend>
			<div>
				<label for='C.I.'>CI</label>
				<input type='text' id='ci' name='ci' disabled value='$ci'  required  placeholder='Ingrese C.I.' /> 
			</div>
			<div>
			<label for='Nombre'>Nombre</label>
			<input type='text' id='nombre' name='nombre' disabled value='$nombre' required   placeholder='Ingrese Nombre' /> 
			</div>
			<div>
			<label for='ap_paterno'>Ap. Paterno</label>
			<input type='text' id='ap_paterno' name='ap_paterno' disabled value='$ap_paterno'  required   placeholder='Ingrese Apellido Paterno' /> 
			</div>
			<div>
			<label for='ap_materno'>Ap. Materno</label>
			<input type='text' id='ap_materno' name='ap_materno' disabled value='$ap_materno'  required   placeholder='Ingrese Apellido Materno' /> 
			</div>
			<div>
			<label for='celular'>Celular</label>
			<input type='text' id='celular' name='celular' disabled value='$celular' required   placeholder='Ingrese Celular' /> 
			</div>
			<div>
			<label for='fecha_nac'>Fecha de nacimiento</label>
			<input type='text' id='fecha_nac' name='fecha_nac' disabled value='$fecha'  required   placeholder='Ingrese fecha nacimiento' /> 
			</div>
			<div>
			<label for='Email'>Email</label>
			<input type='text' id='email' name='email' disabled value='$email' required   placeholder='Ingrese Email' /> 
			</div>
			<div>
			<label for='nacionalidad'>Nacionalidad</label>
			<input type='text' id='nacionalidad' disabled name='nacionalidad' value='$nacionalidad' required   placeholder='Ingrese nacionalidad' /> 
			</div>
			<div>
			<br >
			<input type='hidden' name='id_usuario' id='id_usuario' value='$id_usuario' />
			<input type='submit' name='eliminar_usuario' value='Eliminar Usuario' />
			</div>
		</fieldset>	
		</form>
		</div>		
		";
		echo $html;
	}
//Funcion que llama al controlador para que el estudiante pueda llenar el cuestionario de creatividad
	public function vista_cuestionario_creatividad($usuario)
	{
		$id_usuario=$usuario->get_id_usuario();
		$ci=$usuario->get_ci();
		$nombre=$usuario->get_nombre();
        $ap_paterno=$usuario->get_ap_paterno();
        $ap_materno=$usuario->get_ap_materno();
        $celular=$usuario->get_celular();
        $fecha_nac=$usuario->get_fecha_nac();
        $email=$usuario->get_email();
        $nacionalidad=$usuario->get_nacionalidad();
        $rol=$usuario->get_id_rol();
        $creativo=$usuario->get_creativo();
        $liderazgo=$usuario->get_liderazgo();
        $programacion=$usuario->get_programacion();
		$html="	
	<script>
var valor1 = 0;
var valor2 = 0;
var valor3 = 0;
function sumar(radio) {
var valor = parseInt(radio.value);
if (radio.name == 'CREA1')
 valor1 = valor;
 
if (radio.name == 'CREA2')
 valor2 = valor;
document.getElementById('resultado').value = valor1 + valor2 ;

if (radio.name == 'CREA3') 
 valor3 = valor;
document.getElementById('resultado').value = valor1 + valor2 + valor3;

if (radio.name == 'CREA4') 
 valor4 = valor;
document.getElementById('resultado').value = valor1 + valor2 + valor3+valor4;

if (radio.name == 'CREA5') 
 valor5 = valor;
document.getElementById('resultado').value = valor1 + valor2 + valor3+valor4+valor5;
}

</script>
		<form name='save_punt' action='crtUsuarios.php?pag=cuestionario_creatividad' method='POST'>
		<fieldset> 
			<table class='table table-skyblue'>
  <thead>
    <tr>
      <th scope='col'>preguntas</th>
      <th scope='col'>malo</th>
      <th scope='col'>regular</th>
      <th scope='col'>bueno</th>
      <th scope='col'>muy bueno</th>
      <th scope='col'>excelente</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope='row'>Como estudiante de áreas de la informática, sea en sus trabajos prácticos, proyectos o en alguna fuente laboral, </BR>hiso alguna propuesta nueva que haya tenido aceptación de los superiores como para ser implementada? 
      <td><input type='radio' name='CREA1' value='3' onclick='sumar(this);' id='CREA1' /></td>
      <td><input type='radio' name='CREA1' value='5' onclick='sumar(this);' id='CREA1' /></td>
      <td><input type='radio' name='CREA1' value='8' onclick='sumar(this);' id='CREA1' /></td>
      <td><input type='radio' name='CREA1' value='15' onclick='sumar(this);' id='CREA1' /></td>
      <td><input type='radio' name='CREA1' value='20' onclick='sumar(this);' id='CREA1' /></td>
    </tr>
    <tr>
      <td scope='row'>Si un amigo te propone un emprendimiento nuevo en un área que no conoces, como calificas tus decisiones que tomarías?</td>
      <td><input type='radio' name='CREA2' value='3' onclick='sumar(this);' id='CREA2' /></td>
      <td><input type='radio' name='CREA2' value='5' onclick='sumar(this);' id='CREA2' /></td>
      <td><input type='radio' name='CREA2' value='8' onclick='sumar(this);' id='CREA2' /></td>
      <td><input type='radio' name='CREA2' value='15' onclick='sumar(this);' id='CREA2' /></td>
      <td><input type='radio' name='CREA2' value='20' onclick='sumar(this);' id='CREA2' /></td>
    </tr>
    <tr>
      <td scope='row'>Como te calificas a la hora de llevar a cabo varios proyectos a la vez?</td>
      <td><input type='radio' name='CREA3' value='3' onclick='sumar(this);' id='CREA3' /></td>
      <td><input type='radio' name='CREA3' value='5' onclick='sumar(this);' id='CREA3' /></td>
      <td><input type='radio' name='CREA3' value='8' onclick='sumar(this);' id='CREA3' /></td>
      <td><input type='radio' name='CREA3' value='15' onclick='sumar(this);' id='CREA3' /></td>
      <td><input type='radio' name='CREA3' value='20' onclick='sumar(this);' id='CREA3' /></td>
    </tr>
    <tr>
      <td scope='row'>Como eres a la hora de crear tu propio estilo, tu moda, tus decisiones y forma de vivir?</td>
      <td><input type='radio' name='CREA4' value='3' onclick='sumar(this);' id='CREA4' /></td>
      <td><input type='radio' name='CREA4' value='5' onclick='sumar(this);' id='CREA4' /></td>
      <td><input type='radio' name='CREA4' value='8' onclick='sumar(this);' id='CREA4' /></td>
      <td><input type='radio' name='CREA4' value='15' onclick='sumar(this);' id='CREA4' /></td>
      <td><input type='radio' name='CREA4' value='20' onclick='sumar(this);' id='CREA4' /></td>
    </tr>
    <tr>
      <td scope='row'>Que tan imaginativo eres para resolver un problema?</td>
      <td><input type='radio' name='CREA5' value='3' onclick='sumar(this);' id='CREA5' /></td>
      <td><input type='radio' name='CREA5' value='5' onclick='sumar(this);' id='CREA5' /></td>
      <td><input type='radio' name='CREA5' value='8' onclick='sumar(this);' id='CREA5' /></td>
      <td><input type='radio' name='CREA5' value='15' onclick='sumar(this);' id='CREA5' /></td>
      <td><input type='radio' name='CREA5' value='20' onclick='sumar(this);' id='CREA5' /></td>
    </tr>
  </tbody>
</table>
 		<input type='hidden' name='resultado' id='resultado' value='' />
		<input type='hidden' name='id_usuario' id='id_usuario' value='$id_usuario' />
		<input type='hidden' name='ci' id='ci' value='$ci' />
		<input type='hidden' name='nombre' id='nombre' value='$nombre' />
		<input type='hidden' name='ap_paterno' id='ap_paterno' value='$ap_paterno' />
		<input type='hidden' name='ap_materno' id='ap_materno' value='$ap_materno' />
		<input type='hidden' name='celular' id='celular' value='$celular' />
		<input type='hidden' name='fecha_nac' id='fecha_nac' value='$fecha_nac' />
		<input type='hidden' name='email' id='email' value='$email' />
		<input type='hidden' name='nacionalidad' id='nacionalidad' value='$nacionalidad' />
		<input type='hidden' name='rol' id='rol' value='$rol' />
		<input type='hidden' name='creativo' id='creativo' value='$creativo' />
		<input type='hidden' name='liderazgo' id='liderazgo' value='$liderazgo' />
		<input type='hidden' name='programacion' id='programacion' value='$programacion' />
		<input type='submit' name='Guardar_puntaje' value='Guardar puntaje' />
		</fieldset>

		</form>
		";
		echo $html;
	}
//Funcion que llama al controlador para que el estudiante pueda llenar el cuestionario de liderazgo
	public function vista_cuestionario_liderazgo($usuario)
	{
		$id_usuario=$usuario->get_id_usuario();
		$ci=$usuario->get_ci();
		$nombre=$usuario->get_nombre();
    $ap_paterno=$usuario->get_ap_paterno();
    $ap_materno=$usuario->get_ap_materno();
    $celular=$usuario->get_celular();
    $fecha_nac=$usuario->get_fecha_nac();
    $email=$usuario->get_email();
    $nacionalidad=$usuario->get_nacionalidad();
    $rol=$usuario->get_id_rol();
    $creativo=$usuario->get_creativo();
    $liderazgo=$usuario->get_liderazgo();
    $programacion=$usuario->get_programacion();
		$html="	
<script>
var valor1 = 0;
var valor2 = 0;
var valor3 = 0;
function sumar(radio) {
var valor = parseInt(radio.value);
if (radio.name == 'LIDE1')
 valor1 = valor;
 
if (radio.name == 'LIDE2')
 valor2 = valor;
document.getElementById('resultado').value = valor1 + valor2 ;

if (radio.name == 'LIDE3') 
 valor3 = valor;
document.getElementById('resultado').value = valor1 + valor2 + valor3;

if (radio.name == 'LIDE4') 
 valor4 = valor;
document.getElementById('resultado').value = valor1 + valor2 + valor3+valor4;

if (radio.name == 'LIDE5') 
 valor5 = valor;
document.getElementById('resultado').value = valor1 + valor2 + valor3+valor4+valor5;
}
</script>
		
		<form name='save_punt' action='crtUsuarios.php?pag=cuestionario_liderazgo' method='POST'>
		<fieldset> 
			<table class='table table-skyblue'>
 <thead>
    <tr>
      <th scope='col'>pregunta</th>
      <th scope='col'>malo</th>
      <th scope='col'>regular</th>
      <th scope='col'>bueno</th>
      <th scope='col'>muy bueno</th>
      <th scope='col'>excelente</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope='row'>Normalmente en la escuela, el colegio y los estudios superiores, cuando el profesor organizaba grupos, </BR> que tan seguido solías ser organizador o líder de dicho grupo?</td>
      <td><input type='radio' name='LIDE1' value='3' onclick='sumar(this);' id='LIDE1' /></td>
      <td><input type='radio' name='LIDE1' value='5' onclick='sumar(this);' id='LIDE1' /></td>
      <td><input type='radio' name='LIDE1' value='8' onclick='sumar(this);' id='LIDE1' /></td>
      <td><input type='radio' name='LIDE1' value='15' onclick='sumar(this);' id='LIDE1' /></td>
      <td><input type='radio' name='LIDE1' value='20' onclick='sumar(this);' id='LIDE1' /></td>
    </tr>
    <tr>
      <td scope='row'>Imagina que están en un viaje de aventura con amigos y se pierden, depende de tu reacción y </BR>aporte de ideas para que se salven todos, crees que tus reacciones son?</td>
      <td><input type='radio' name='LIDE2' value='3' onclick='sumar(this);' id='LIDE2' /></td>
      <td><input type='radio' name='LIDE2' value='5' onclick='sumar(this);' id='LIDE2' /></td>
      <td><input type='radio' name='LIDE2' value='8' onclick='sumar(this);' id='LIDE2' /></td>
      <td><input type='radio' name='LIDE2' value='15' onclick='sumar(this);' id='LIDE2' /></td>
      <td><input type='radio' name='LIDE2' value='20' onclick='sumar(this);' id='LIDE2' /></td>
    </tr>
    <tr>
      <td scope='row'>Al momento de ofrecer ayuda a un compañero que pasa por un momento de dificultad personal, te calificas como:</td>
      <td><input type='radio' name='LIDE3' value='3' onclick='sumar(this);' id='LIDE3' /></td>
      <td><input type='radio' name='LIDE3' value='5' onclick='sumar(this);' id='LIDE3' /></td>
      <td><input type='radio' name='LIDE3' value='8' onclick='sumar(this);' id='LIDE3' /></td>
      <td><input type='radio' name='LIDE3' value='15' onclick='sumar(this);' id='LIDE3' /></td>
      <td><input type='radio' name='LIDE3' value='20' onclick='sumar(this);' id='LIDE3' /></td>
    </tr>
    <tr>
      <td scope='row'>Como te calificas delegando actividades y tareas pero no la autoridad para modificar las decisiones ya tomadas?</td>
      <td><input type='radio' name='LIDE4' value='3' onclick='sumar(this);' id='LIDE4' /></td>
      <td><input type='radio' name='LIDE4' value='5' onclick='sumar(this);' id='LIDE4' /></td>
      <td><input type='radio' name='LIDE4' value='8' onclick='sumar(this);' id='LIDE4' /></td>
      <td><input type='radio' name='LIDE4' value='15' onclick='sumar(this);' id='LIDE4' /></td>
      <td><input type='radio' name='LIDE4' value='20' onclick='sumar(this);' id='LIDE4' /></td>
    </tr>
    <tr>
      <td scope='row'>Como eres motivando superar las metas que consigue mi equipo con el fin de seguir mejorando?</td>
      <td><input type='radio' name='LIDE5' value='3' onclick='sumar(this);' id='LIDE5' /></td>
      <td><input type='radio' name='LIDE5' value='5' onclick='sumar(this);' id='LIDE5' /></td>
      <td><input type='radio' name='LIDE5' value='8' onclick='sumar(this);' id='LIDE5' /></td>
      <td><input type='radio' name='LIDE5' value='15' onclick='sumar(this);' id='LIDE5' /></td>
      <td><input type='radio' name='LIDE5' value='20' onclick='sumar(this);' id='LIDE5' /></td>
    </tr>
  </tbody>
</table>
 		<input type='hidden' name='resultado' id='resultado' value='' />
		<input type='hidden' name='id_usuario' id='id_usuario' value='$id_usuario' />
		<input type='hidden' name='ci' id='ci' value='$ci' />
		<input type='hidden' name='nombre' id='nombre' value='$nombre' />
		<input type='hidden' name='ap_paterno' id='ap_paterno' value='$ap_paterno' />
		<input type='hidden' name='ap_materno' id='ap_materno' value='$ap_materno' />
		<input type='hidden' name='celular' id='celular' value='$celular' />
		<input type='hidden' name='fecha_nac' id='fecha_nac' value='$fecha_nac' />
		<input type='hidden' name='email' id='email' value='$email' />
		<input type='hidden' name='nacionalidad' id='nacionalidad' value='$nacionalidad' />
		<input type='hidden' name='rol' id='rol' value='$rol' />
		<input type='hidden' name='creativo' id='creativo' value='$creativo' />
		<input type='hidden' name='liderazgo' id='liderazgo' value='$liderazgo' />
		<input type='hidden' name='programacion' id='programacion' value='$programacion' />
		<input type='submit' name='Guardar_puntaje' value='Guardar puntaje' />
		</fieldset>

		</form>
		";
		echo $html;
	}
//Funcion que llama al controlador para que el estudiante pueda llenar el cuestionario de programacion
	public function vista_cuestionario_programacion($usuario)
	{
		$id_usuario=$usuario->get_id_usuario();
		$ci=$usuario->get_ci();
		$nombre=$usuario->get_nombre();
    $ap_paterno=$usuario->get_ap_paterno();
    $ap_materno=$usuario->get_ap_materno();
    $celular=$usuario->get_celular();
    $fecha_nac=$usuario->get_fecha_nac();
    $email=$usuario->get_email();
    $nacionalidad=$usuario->get_nacionalidad();
    $rol=$usuario->get_id_rol();
    $creativo=$usuario->get_creativo();
    $liderazgo=$usuario->get_liderazgo();
    $programacion=$usuario->get_programacion();
		$html="	
<script>
var valor1 = 0;
var valor2 = 0;
var valor3 = 0;
function sumar(radio) {
var valor = parseInt(radio.value);
if (radio.name == 'PROG1')
 valor1 = valor;
 
if (radio.name == 'PROG2')
 valor2 = valor;
document.getElementById('resultado').value = valor1 + valor2 ;

if (radio.name == 'PROG3') 
 valor3 = valor;
document.getElementById('resultado').value = valor1 + valor2 + valor3;

if (radio.name == 'PROG4') 
 valor4 = valor;
document.getElementById('resultado').value = valor1 + valor2 + valor3+valor4;

if (radio.name == 'PROG5') 
 valor5 = valor;
document.getElementById('resultado').value = valor1 + valor2 + valor3+valor4+valor5;
}
</script>
		
		<form name='save_punt' action='crtUsuarios.php?pag=cuestionario_programacion' method='POST'>
		<fieldset> 
			<table class='table table-skyblue'>
 <thead>
    <tr>
      <th scope='col'>pregunta</th>
      <th scope='col'>malo</th>
      <th scope='col'>regular</th>
      <th scope='col'>bueno</th>
      <th scope='col'>muy bueno</th>
      <th scope='col'>excelente</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope='row'>A la hora de resolver un acertijo que tan bueno eres?</td>
      <td><input type='radio' name='PROG1' value='3' onclick='sumar(this);' id='PROG1' /></td>
      <td><input type='radio' name='PROG1' value='5' onclick='sumar(this);' id='PROG1' /></td>
      <td><input type='radio' name='PROG1' value='8' onclick='sumar(this);' id='PROG1' /></td>
      <td><input type='radio' name='PROG1' value='15' onclick='sumar(this);' id='PROG1' /></td>
      <td><input type='radio' name='PROG1' value='20' onclick='sumar(this);' id='PROG1' /></td>
    </tr>
    <tr>
      <td scope='row'>Que tan bueno eres jugando los juegos de razonamiento lógico?</td>
      <td><input type='radio' name='PROG2' value='3' onclick='sumar(this);' id='PROG2' /></td>
      <td><input type='radio' name='PROG2' value='5' onclick='sumar(this);' id='PROG2' /></td>
      <td><input type='radio' name='PROG2' value='8' onclick='sumar(this);' id='PROG2' /></td>
      <td><input type='radio' name='PROG2' value='15' onclick='sumar(this);' id='PROG2' /></td>
      <td><input type='radio' name='PROG2' value='20' onclick='sumar(this);' id='PROG2' /></td>
    </tr>
    <tr>
      <td scope='row'>Que tan bueno eres aprendiendo nuevos lenguajes de programación?</td>
      <td><input type='radio' name='PROG3' value='3' onclick='sumar(this);' id='PROG3' /></td>
      <td><input type='radio' name='PROG3' value='5' onclick='sumar(this);' id='PROG3' /></td>
      <td><input type='radio' name='PROG3' value='8' onclick='sumar(this);' id='PROG3' /></td>
      <td><input type='radio' name='PROG3' value='15' onclick='sumar(this);' id='PROG3' /></td>
      <td><input type='radio' name='PROG3' value='20' onclick='sumar(this);' id='PROG3' /></td>
    </tr>
    <tr>
      <td scope='row'>Que tan bueno eres al reconocer y desarrollar soluciones de programación dinámica, </br>
      buen conocimiento de algoritmos de grafos, buen conocimiento de algoritmos de computación numérica?</td>
      <td><input type='radio' name='PROG4' value='3' onclick='sumar(this);' id='PROG4' /></td>
      <td><input type='radio' name='PROG4' value='5' onclick='sumar(this);' id='PROG4' /></td>
      <td><input type='radio' name='PROG4' value='8' onclick='sumar(this);' id='PROG4' /></td>
      <td><input type='radio' name='PROG4' value='15' onclick='sumar(this);' id='PROG4' /></td>
      <td><input type='radio' name='PROG4' value='20' onclick='sumar(this);' id='PROG4' /></td>
    </tr>
    <tr>
      <td scope='row'>Como  calificas tus conocimientos de conceptos básicos de bases de datos, normalización, </br>
      ACID, transacciones y puede escribir consultas simples?</td>
      <td><input type='radio' name='PROG5' value='3' onclick='sumar(this);' id='PROG5' /></td>
      <td><input type='radio' name='PROG5' value='5' onclick='sumar(this);' id='PROG5' /></td>
      <td><input type='radio' name='PROG5' value='8' onclick='sumar(this);' id='PROG5' /></td>
      <td><input type='radio' name='PROG5' value='15' onclick='sumar(this);' id='PROG5' /></td>
      <td><input type='radio' name='PROG5' value='20' onclick='sumar(this);' id='PROG5' /></td>
    </tr>
  </tbody>

</table>
 		<input type='hidden' name='resultado' id='resultado' value='' />
		<input type='hidden' name='id_usuario' id='id_usuario' value='$id_usuario' />
		<input type='hidden' name='ci' id='ci' value='$ci' />
		<input type='hidden' name='nombre' id='nombre' value='$nombre' />
		<input type='hidden' name='ap_paterno' id='ap_paterno' value='$ap_paterno' />
		<input type='hidden' name='ap_materno' id='ap_materno' value='$ap_materno' />
		<input type='hidden' name='celular' id='celular' value='$celular' />
		<input type='hidden' name='fecha_nac' id='fecha_nac' value='$fecha_nac' />
		<input type='hidden' name='email' id='email' value='$email' />
		<input type='hidden' name='nacionalidad' id='nacionalidad' value='$nacionalidad' />
		<input type='hidden' name='rol' id='rol' value='$rol' />
		<input type='hidden' name='creativo' id='creativo' value='$creativo' />
		<input type='hidden' name='liderazgo' id='liderazgo' value='$liderazgo' />
		<input type='hidden' name='programacion' id='programacion' value='$programacion' />
		<input type='submit' name='Guardar_puntaje' value='Guardar puntaje' />
		</fieldset>

		</form>
		";
		echo $html;
	}
}

?>