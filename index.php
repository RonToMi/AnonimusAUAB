<!DOCTYPE html>  
<html>  
 <head>  
  <title>Anonimusx</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
    <style>
                * {
                box-sizing: border-box;
                }
                *:focus {
                outline: none;
                }
                body {
                font-family: Arial;
                background-color: #3498DB;
                padding: 50px;
                }
                .login {
                margin: 20px auto;
                width: 300px;
                }
                .login-screen {
                background-color: #FFF;
                padding: 20px;
                border-radius: 5px
                }
                .app-title {
                text-align: center;
                color: #777;
                }
                .login-form {
                text-align: center;
                }
                .control-group {
                margin-bottom: 10px;
                }
                input {
                text-align: center;
                background-color: #ECF0F1;
                border: 2px solid transparent;
                border-radius: 3px;
                font-size: 16px;
                font-weight: 200;
                padding: 10px 0;
                width: 250px;
                transition: border .5s;
                }
                input:focus {
                border: 2px solid #3498DB;
                box-shadow: none;
                }
                .btn {
                border: 2px solid transparent;
                background: #3498DB;
                color: #ffffff;
                font-size: 16px;
                line-height: 25px;
                padding: 10px 0;
                text-decoration: none;
                text-shadow: none;
                border-radius: 3px;
                box-shadow: none;
                transition: 0.25s;
                display: block;
                width: 250px;
                margin: 0 auto;
                }
                .btn:hover {
                background-color: #2980B9;
                }
                .login-link {
                font-size: 12px;
                color: #444;
                display: block;
                margin-top: 12px;
                }
              </style>
 </head>  
 <body>  
<form id='formulario_usuario' class='form-signin2' name='formulario_usuario' action='login.php' method='post'>
                <div class="login">
                  <div class="login-screen">
                    <div class="app-title">
                      <h1>Login</h1>
                    </div>
                    <div class="login-form">
                      <div class="control-group">
                        <input type="text" class="login-field" value="" placeholder="username" id="user_name" name='user_name'>
                          <label class="login-field-icon fui-user" for="login-name"/>
                      </div>
                        <div class="control-group">
                          <input type="password" class="login-field" value="" placeholder="password" id="password" name='password'>
                            <label class="login-field-icon fui-lock" for="login-pass"/>
                        </div>
                          <button type='submit' name='bt_ingresar' class="btn btn-primary btn-large btn-block">login</button>
                          <button type="button" name="age" id="age" data-toggle="modal" data-target="#modalusuario" class="btn btn-primary">Crear Usuario</button>
                    </div>
                  </div>
                </div>
              </form> 


<div id="modalusuario" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Registrar Nuevo</h4>

    <div id="employee_table">
    </div>

   </div>
   <div class="modal-body">
    <form method="post" id="insert_form">
     <label>CI</label>
     <input type="text" name="CI" id=" CI" class="form-control" />
     <br />
     <label>Nombre</label>
     <input type="text" name="NOMBRE" id="NOMBRE" class="form-control" />
     <br />
     <label>Ap. Paterno</label>
     <input type="text" name="PATERNO" id="PATERNO" class="form-control" />
     <br />
     <label>Ap. Materno</label>
     <input type="text" name="MATERNO" id="MATERNO" class="form-control" />
     <br />
     <label>Celular</label>
     <input type="text" name="CELULAR" id="CELULAR" class="form-control" />
     <br />
     <label>Fecha de nacimiento</label>
     <input type="text" name="NACIMIENTO" id="NACIMIENTO" class="form-control" />
     <br />
     <label>Email</label>
     <input type="text" name="EMAIL" id="EMAIL" class="form-control" />
     <br />
     <label>Ciudad</label>
     <input type="text" name="CIUDAD" id="CIUDAD" class="form-control" />
     <br />
    
      <br />
     <input type="submit" name="insert" id="insert" value="Ingresar personal" class="btn btn-success" />

    </form>
  </div>
 </div>
</div>

<div id="dataModal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Personal Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
   </div>
  </div>
 </div>
</div>

<script>  
$(document).ready(function(){
 $('#insert_form').on("submit", function(event){  
  event.preventDefault();  
  if($('#CI').val() == "")  
  {  
   alert("CI is required");  
  }  
  else if($('#NOMBRE').val() == '')  
  {  
   alert("Nombre is required");  
  }  
  else if($('#EMAIL').val() == '')
  {  
   alert("Email is required");  
  }
   
  else  
  {  
   $.ajax({  
    url:"insertar.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#insert').val("Inserting");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#add_data_Modal').modal('hide');  
     $('#employee_table').html(data);  
    }  
   });  
  }  
 });
});  
 </script>

 </body>  
</html>  