<?php
require_once('DBAbstract.php');
class Usuarios extends DBAbstract
{
	private $id_usuario;
	private $ci;
	private $nombre;
	private $ap_paterno;
	private $ap_materno;
	private $celular;
	private $fecha_nac;
	private $email;
	private $nacionalidad;
	private $id_rol;
	private $creativo;
	private $liderazgo;
	private $programacion;
	private $nombre_rol;

	
	public function __construct($ci='',$nombre='',$ap_paterno='',$ap_materno='',$celular='',$fecha_nac='',$email='',$nacionalidad='',$id_rol='',$creativo='',$liderazgo='',$programacion='', $nombre_rol='')
	{
		$this->ci=$ci;
		$this->nombre=$nombre;
		$this->ap_paterno=$ap_paterno;
		$this->ap_materno=$ap_materno;
		$this->celular=$celular;
		$this->fecha=$fecha_nac;
		$this->email=$email;
		$this->nacionalidad=$nacionalidad;
		$this->id_rol=$id_rol;
    $this->creativo=$creativo;
		$this->liderazgo=$liderazgo;
		$this->programacion=$programacion;
		$this->nombre_rol=$nombre_rol;
	}
	public function __destruct()
	{

	}

    public function get_by_id($id='') {
		if($id != ''):
		$this->query = "select id_isuario
								,ci
								,nombre
								,ap_paterno
								,ap_materno
								,celular
								,fecha_nac
								,email
								,nacionalidad
								,id_rol
						from Usuarios
						where id_usuario='$id'
	";
		$this->get_results_from_query();
		endif;
		if(count($this->rows) == 1):
		foreach ($this->rows[0] as $propiedad=>$valor):
		$this->$propiedad = $valor;
		endforeach;
		endif;
	}
	public function get_by_ci($ci='') {
		if($ci != ''):
		$this->query = "select id_usuario
								,ci
								,nombre
								,ap_paterno
								,ap_materno
								,celular
								,fecha_nac
								,email
								,nacionalidad
								,id_rol
								,creativo
								,liderazgo
								,programacion
						from Usuarios
						where ci='$ci'
	";
		$this->get_results_from_query();
		endif;
		if(count($this->rows) == 1):
		foreach ($this->rows[0] as $propiedad=>$valor):
		$this->$propiedad = $valor;
		endforeach;
		endif;
	}
    public function get_by_nombre_ci($nombre='',$ci='') {
		if($ci != ''&& $nombre!=''):
		$this->query = "select id_usuario
								,u.ci
								,u.nombre
								,u.ap_paterno
								,u.ap_materno
								,u.celular
								,u.fecha_nac
								,u.email
								,u.nacionalidad
								,u.id_rol
								,r.nombre_rol
						from Usuarios u
						INNER JOIN rol r ON (u.id_rol=r.id_rol)
						where ci='$ci' and nombre='$nombre'
	";
		$this->get_results_from_query();
		endif;
		if(count($this->rows) == 1):
		foreach ($this->rows[0] as $propiedad=>$valor):
		$this->$propiedad = $valor;
		endforeach;
		endif;
	}

	public function get_id_usuario()
	{
		return $this->id_usuario;
	}

	public function set_id_usuario($id_usuario)
	{
		$this->id_usuario=$id_usuario;
	}
    public function get_ci()
    {
    	return $this->ci;
    } 
	public function get_nombre()
	{
		return $this->nombre;
	}
	public function get_ap_paterno()
	{
		return $this->ap_paterno;
	}
	public function get_ap_materno()
	{
		return $this->ap_materno;
	}
	public function get_celular()
	{
		return $this->celular;
	}
	public function get_fecha_nac()
	{
		return $this->fecha_nac;
	}
	public function get_email()
	{
		return $this->email;
	}
	public function get_nacionalidad()
	{
		return $this->nacionalidad;
	}
	public function get_id_rol()
	{
		return $this->id_rol;
	}

	public function get_creativo()
	{
		return $this->creativo;
	}
	public function get_liderazgo()
	{
		return $this->liderazgo;
	}
	public function get_programacion()
	{
		return $this->programacion;
	}
  public function get_nombre_rol()
	{
		return $this->nombre_rol;
	}


	public function insert()
	{
		$this->query="insert into usuarios(
				ci,nombre,ap_paterno,ap_materno,celular,fecha_nac,email,nacionalidad,id_rol)
				values(
					'$this->ci','$this->nombre','$this->ap_paterno','$this->ap_materno','$this->celular','$this->fecha_nac','$this->email','$this->nacionalidad','$this->id_rol'
					)
        ";
        $this->execute_single_query();
	}
	public function update()
	{
		$this->query="update usuarios set
				ci='$this->ci',nombre='$this->nombre',ap_paterno='$this->ap_paterno',ap_materno='$this->ap_materno',celular='$this->celular',fecha_nac='$this->fecha_nac',email='$this->email',nacionalidad='$this->nacionalidad',id_rol='$this->id_rol' , creativo='$this->creativo', liderazgo='$this->liderazgo', programacion='$this->programacion'
				where id_usuario='$this->id_usuario'
					
         ";
        $this->execute_single_query();
	}
	public function delete()
	{
		$this->query="delete from usuarios
						where id_usuario='$this->id_usuario'";
     $this->execute_single_query();
	}
	public function get_tabla()
	{
		$html=" 
		
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
	<script>
		$(document).ready(function () {
		$('#entradafilter').keyup(function () {
		var rex = new RegExp($(this).val(), 'i');
		$('.contenidobusqueda tr').hide();
		$('.contenidobusqueda tr').filter(function () {
		return rex.test($(this).text());
		}).show();
		})
		});
	</script>
	<h1>Administrador de Usuarios</h1>
	<a href='crtUsuarios.php?pag=formulario_usuario' class='btn btn-primary'>
		<span class='glyphicon glyphicon-plus' aria-hidden='true'/> Crear Usuario</a>
	<br/>
	<br/>
	<table class='table  table-striped'>
		<tbody class='contenidobusqueda'>
			<tr>
				<th>CI</th>
				<th>NOMBRE</th>
				<th>AP PATERNO</th>
				<th>AP MATERNO</th>
				<th>ROL</th>
				<th>
					<span class='fa fa-pencil fa-fw' aria-hidden='true'/>
				</th>
				<th>
					<span class='fa fa-trash-o fa-fw' aria-hidden='true'/>
				</th>
			</tr>
			";
			$sql="SELECT u.id_usuario
			,u.ci
			,u.nombre
			,u.ap_paterno
			,u.ap_materno
			,r.nombre_rol
			FROM usuarios u
			INNER JOIN rol r ON (u.id_rol=r.id_rol)";
			$result=$this->get_results_from_query2($sql);
			while ($filas = $result->fetch_assoc())
			{
			$ci=$filas['ci'];
			$nombre=$filas['nombre'];
			$ap_paterno=$filas['ap_paterno'];
			$ap_materno=$filas['ap_materno'];
			$id_usuario=$filas['id_usuario'];
			$rol=$filas['nombre_rol'];
			$html=$html."<tr>
				<td>$ci</td>
				<td>$nombre</td>
				<td>$ap_paterno</td>
				<td>$ap_materno</td>
				<td>$rol</td>
				<td>
					<a href='crtUsuarios.php?pag=formulario_modificar_usuario&id=$ci'>
						<span class='fa fa-pencil fa-fw'/>
					</a>
				</td>
				<td>
					<a href='crtUsuarios.php?pag=formulario_eliminar_usuario&id=$ci'>
						<span class='fa fa-trash-o fa-fw'/>
					</a>
				</td>
			</tr>";
        }
        $html=$html."</tbody></table>";

        echo $html;
	}

	public function get_tabla2()
	{
		$html=" 
	
		        <div class='row'>";

		$sql="SELECT u.id_usuario
					,u.ci
					,u.nombre
					,u.ap_paterno
					,u.ap_materno
					,r.nombre_rol
					,u.creativo
					,u.liderazgo
					,u.programacion
				    FROM usuarios u
				    INNER JOIN rol r ON (u.id_rol=r.id_rol)";
		$result=$this->get_results_from_query2($sql);
        while ($filas = $result->fetch_assoc())
        {
        	$ci=$filas['ci'];
        	$nombre=$filas['nombre'];
        	$ap_paterno=$filas['ap_paterno'];
        	$ap_materno=$filas['ap_materno'];
        	$id_usuario=$filas['id_usuario'];
        	$rol=$filas['nombre_rol'];
        	$creativo=$filas['creativo'];
        	$liderazgo=$filas['liderazgo'];
        	$programacion=$filas['programacion'];


        	$html=$html."     
        	<script>
				function mostrarInput$id_usuario() {
				  elemento = document.getElementById('$ci');
				  check = document.getElementById('$id_usuario');
				  
				  if (check.checked) {
				    elemento.style.display='none';
				  }
				  else {
				    elemento.style.display='block';
				  }
				}
			</script>   

        	<div class='col-lg-6' >        	
               <div class='card mb-4 py-3 border-bottom-primary'>	                    
                 <b>$nombre  $ap_paterno</b>                 
                 <input type='checkbox' id='$id_usuario' name='$id_usuario' onchange='javascript:mostrarInput$id_usuario()' />
                  <div class='card-body' id='$ci' style='display: block;'>
                    Creatividad
					<div class='progress progress-red'>
					  <span style='width: $creativo%;'><b>$creativo%</b></span>
					</div>
					Liderazgo
					<div class='progress progress-blue'>
					  <span style='width: $liderazgo%;'><b>$liderazgo%</b></span>
					</div>
					Logica / Progrmacion
					<div class='progress progress-orange'>
					  <span style='width: $programacion%;'><b>$programacion%</b></span>
					</div>

                          <a href='crtUsuarios.php?pag=formulario_modificar_usuario&id=$ci' ><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>
	        	          <a href='crtUsuarios.php?pag=formulario_eliminar_usuario&id=$ci' ><span class='glyphicon glyphicon-remove' aria-hidden='true'></span></a>
                  </div>
                 </div>
            </div>";
        }
        $html=$html."
        </div> ";
        echo $html;
	}

  public function get_tabla3()
	{
		$sesion_ci = $_SESSION['ci'];
		$html=" 
	
		        <div class='row'>";

		$sql="SELECT u.id_usuario
					,u.ci
					,u.nombre
					,u.ap_paterno
					,u.ap_materno
					,r.nombre_rol
					,u.creativo
					,u.liderazgo
					,u.programacion
				    FROM usuarios u
				    INNER JOIN rol r ON (u.id_rol=r.id_rol)
				    WHERE U.CI = $sesion_ci";
		$result=$this->get_results_from_query2($sql);
        while ($filas = $result->fetch_assoc())
        {
        	$ci=$filas['ci'];
        	$nombre=$filas['nombre'];
        	$ap_paterno=$filas['ap_paterno'];
        	$ap_materno=$filas['ap_materno'];
        	$id_usuario=$filas['id_usuario'];
        	$rol=$filas['nombre_rol'];
        	$creativo=$filas['creativo'];
        	$liderazgo=$filas['liderazgo'];
        	$programacion=$filas['programacion'];


        	$html=$html."     
        	<script>
				function mostrarInput$id_usuario() {
				  elemento = document.getElementById('$ci');
				  check = document.getElementById('$id_usuario');
				  
				  if (check.checked) {
				    elemento.style.display='none';
				  }
				  else {
				    elemento.style.display='block';
				  }
				}
			</script>   

        	<div class='col-lg-6' >        	
               <div class='card mb-4 py-3 border-bottom-primary'>	                    
                 <b>$nombre  $ap_paterno</b>                 
                 <input type='checkbox' id='$id_usuario' name='$id_usuario' onchange='javascript:mostrarInput$id_usuario()' />
                  <div class='card-body' id='$ci' style='display: block;'>
                    Creatividad
					<div class='progress progress-red'>
					  <span style='width: $creativo%;'><b>$creativo%</b></span>
					</div>
					Liderazgo
					<div class='progress progress-blue'>
					  <span style='width: $liderazgo%;'><b>$liderazgo%</b></span>
					</div>
					Logica / Progrmacion
					<div class='progress progress-orange'>
					  <span style='width: $programacion%;'><b>$programacion%</b></span>
					</div>
                  </div>
                 </div>
            </div>";
        }
        $html=$html."
        </div> ";
        echo $html;
	}

	public function get_combo_rol()
	{
		$sql="SELECT id_rol
					,nombre_rol
			  FROM rol
             ;";

		return $this->get_combo_box($sql,'nombre_rol','id_rol','rol',$this->id_rol);
	} 
}
?>