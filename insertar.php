<?php
$connect = mysqli_connect("localhost", "root", "", "infochat");
if(!empty($_POST))
{
 $output = '';
    $CI = mysqli_real_escape_string($connect, $_POST["CI"]);  
    $NOMBRE = mysqli_real_escape_string($connect, $_POST["NOMBRE"]);  
    $PATERNO = mysqli_real_escape_string($connect, $_POST["PATERNO"]);  
    $MATERNO = mysqli_real_escape_string($connect, $_POST["MATERNO"]);  
    $CELULAR = mysqli_real_escape_string($connect, $_POST["CELULAR"]);
    $NACIMIENTO = mysqli_real_escape_string($connect, $_POST["NACIMIENTO"]);  
    $EMAIL = mysqli_real_escape_string($connect, $_POST["EMAIL"]);  
    $CIUDAD = mysqli_real_escape_string($connect, $_POST["CIUDAD"]);  

    $query = " INSERT INTO usuarios (ci, nombre, ap_paterno, ap_materno, celular,fecha_nac,email,nacionalidad,id_rol)  
     VALUES('$CI', '$NOMBRE', '$PATERNO', '$MATERNO', '$CELULAR', '$NACIMIENTO', '$EMAIL', '$CIUDAD','3')";
    if(mysqli_query($connect, $query))
    {
     $output.= '<label class="text-success">Registro Correctamente</label>';
    }
    else
      {
     $output.= '<label class="text-success">ERROR  </label>';
    }
    echo $output;
}
?>