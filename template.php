<?php
class template
{
	public function __construct()
	{
	}
	public function __destruct()
	{
	}
  
	public function cabecera_admin()
	{ $nombre=$_SESSION['nombre'];
      $sesion_ci = $_SESSION['ci'];
      $nombre_rol=$_SESSION['nombre_rol'];
		$html="
          <!DOCTYPE html>
<html lang='en'>

<head>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Anonimus</title>

    <!-- Custom fonts for this template-->
    <link href='fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
   
<link rel='stylesheet' href='css/modal.css'>
    <!-- Custom styles for this template-->
    <link href='css/sb-admin-2.min.css' rel='stylesheet'>
  <style>
.progress {
    border: 1px solid #ccc;
    position: relative;
    display: block;
    height: 22px;
    padding: 0;
    min-width: 200px;
    margin:4px 0;
    background: #DEDEDE;
    background: -webkit-gradient(linear, left top, left bottom, from(#ccc), to(#e9e9e9));
    background: -moz-linear-gradient(top, #ccc, #e9e9e9);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#e9e9e9');

    -moz-box-shadow:0 1px 0 #fff;
    -webkit-box-shadow:0 1px 0 #fff;
    box-shadow:0 1px 0 #fff;

    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}
.progress span {
    display: block;
    height: 20px;
    margin: 0;
    padding: 0;
    text-align:center;
    width:0;
    
    -moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
    -webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
    box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);

    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
}
.progress span b{
    color:#fff;
    line-height:20px;
    padding-left:2px;
    text-shadow:0 1px 1px rgba(0, 0, 0, 0.5);
}

.progress-blue span {
    border: 1px solid #0078a5; 
    background-color: #5C9ADE;
    background: -moz-linear-gradient(top, #00adee 10%, #0078a5 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #00adee), color-stop(0.9, #0078a5));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
}

.progress-green span {
    border: 1px solid #5c9425; 
    background-color: #77AF3F;
    background: -moz-linear-gradient(top, #8fc857 10%, #5c9425 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #8fc857), color-stop(0.9, #5c9425));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#8fc857', endColorstr='#5c9425');
}
.progress-orange span {
    border: 1px solid #f47a20; 
    background-color: #faa51a;
    background: -moz-linear-gradient(top, #faa51a 10%, #f47a20 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #faa51a), color-stop(0.9, #f47a20));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
}
.progress-red span {
    border: 1px solid #A92C2C; 
    background-color: #C44747;
    background: -moz-linear-gradient(top, #DD5F5F 10%, #A92C2C 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #DD5F5F), color-stop(0.9, #A92C2C));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#DD5F5F', endColorstr='#A92C2C');
}

</style>

</head>

<body id='page-top'>

    <!-- Page Wrapper -->
    <div id='wrapper'>

        <!-- Sidebar -->
        <ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

            <!-- Sidebar - Brand -->
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.html'>
                <div class='sidebar-brand-icon rotate-n-15'>
                    <i class='fas fa-laugh-wink'></i>
                </div>
                <div class='sidebar-brand-text mx-3'>$nombre_rol</sup></div>
            </a>

            <!-- Divider -->
            <hr class='sidebar-divider my-0'>

            <hr class='sidebar-divider'>

            <!-- Heading -->
            <div class='sidebar-heading'>
                Reporte
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class='nav-item'>
                <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapsePages'
                    aria-expanded='true' aria-controls='collapsePages'>
                    <i class='fas fa-fw fa-folder'></i>
                    <span>Pages</span>
                </a>                
            </li>

            <!-- Nav Item - Charts -->
            <li class='nav-item'>
                <a class='nav-link' href='charts.html'>
                    <i class='fas fa-fw fa-chart-area'></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class='nav-item'>
                <a class='nav-link' href='crtUsuarios.php?pag=lista_usuarios'>
                    <i class='fas fa-fw fa-table'></i>
                    <span>Tabla </span></a>
            </li>

            <!-- Divider -->
            <hr class='sidebar-divider d-none d-md-block'>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id='content-wrapper' class='d-flex flex-column'>

            <!-- Main Content AQUI ES LA BARRA DERECHA-->
 
<nav class='navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow'>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id='sidebarToggleTop' class='btn btn-link d-md-none rounded-circle mr-3'>
                        <i class='fa fa-bars'></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class='d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search'>
                        <div class='input-group'>
                            <input id='entradafilter' type='text' class='form-control bg-light border-0 small' placeholder='Search for...'
                                aria-label='Search' aria-describedby='basic-addon2'>
                            <div class='input-group-append'>
                                <button class='btn btn-primary' type='button'>
                                    <i class='fas fa-search fa-sm'></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class='navbar-nav ml-auto'>
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class='nav-item dropdown no-arrow d-sm-none'>
                            <a class='nav-link dropdown-toggle' href='#' id='searchDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fas fa-search fa-fw'></i>
                            </a>
                            <!-- Dropdown - Messages -->                            
                        </li>
                        <!-- Nav Item - Alerts -->
                        <li class='nav-item dropdown no-arrow mx-1'>
                            <a class='nav-link dropdown-toggle' href='#' id='alertsDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fas fa-bell fa-fw'></i>
                                <!-- Counter - Alerts -->
                                <span class='badge badge-danger badge-counter'>3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->                            
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class='nav-item dropdown no-arrow mx-1'>
                            <a class='nav-link dropdown-toggle' href='#' id='messagesDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fas fa-envelope fa-fw'></i>
                                <!-- Counter - Messages -->
                                <span class='badge badge-danger badge-counter'>7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class='dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in'
                                aria-labelledby='messagesDropdown'>
                                
                            </div>
                        </li>

                        <div class='topbar-divider d-none d-sm-block'></div>

                        <!-- Nav Item - User Information -->
                        <li class='nav-item dropdown no-arrow'>
                            <a class='nav-link dropdown-toggle' href='logout.php' id='userDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>$nombre</span>                                
                            </a>                            
                        </li>

                    </ul>

                </nav>
		";
		echo $html;
	}
  public function cabecera_docente()
  {
    $nombre=$_SESSION['nombre'];
      $sesion_ci = $_SESSION['ci'];
      $nombre_rol=$_SESSION['nombre_rol'];
        $html="
          <!DOCTYPE html>
<html lang='en'>

<head>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Anonymus</title>

    <!-- Custom fonts for this template-->
    <link href='fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
   
<link rel='stylesheet' href='css/modal.css'>
    <!-- Custom styles for this template-->
    <link href='css/sb-admin-2.min.css' rel='stylesheet'>
  <style>
.progress {
    border: 1px solid #ccc;
    position: relative;
    display: block;
    height: 22px;
    padding: 0;
    min-width: 200px;
    margin:4px 0;
    background: #DEDEDE;
    background: -webkit-gradient(linear, left top, left bottom, from(#ccc), to(#e9e9e9));
    background: -moz-linear-gradient(top, #ccc, #e9e9e9);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#e9e9e9');

    -moz-box-shadow:0 1px 0 #fff;
    -webkit-box-shadow:0 1px 0 #fff;
    box-shadow:0 1px 0 #fff;

    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}
.progress span {
    display: block;
    height: 20px;
    margin: 0;
    padding: 0;
    text-align:center;
    width:0;
    
    -moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
    -webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
    box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);

    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
}
.progress span b{
    color:#fff;
    line-height:20px;
    padding-left:2px;
    text-shadow:0 1px 1px rgba(0, 0, 0, 0.5);
}

.progress-blue span {
    border: 1px solid #0078a5; 
    background-color: #5C9ADE;
    background: -moz-linear-gradient(top, #00adee 10%, #0078a5 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #00adee), color-stop(0.9, #0078a5));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
}

.progress-green span {
    border: 1px solid #5c9425; 
    background-color: #77AF3F;
    background: -moz-linear-gradient(top, #8fc857 10%, #5c9425 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #8fc857), color-stop(0.9, #5c9425));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#8fc857', endColorstr='#5c9425');
}
.progress-orange span {
    border: 1px solid #f47a20; 
    background-color: #faa51a;
    background: -moz-linear-gradient(top, #faa51a 10%, #f47a20 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #faa51a), color-stop(0.9, #f47a20));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
}
.progress-red span {
    border: 1px solid #A92C2C; 
    background-color: #C44747;
    background: -moz-linear-gradient(top, #DD5F5F 10%, #A92C2C 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #DD5F5F), color-stop(0.9, #A92C2C));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#DD5F5F', endColorstr='#A92C2C');
}

</style>

</head>

<body id='page-top'>

    <!-- Page Wrapper -->
    <div id='wrapper'>

        <!-- Sidebar -->
        <ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

            <!-- Sidebar - Brand -->
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.html'>
                <div class='sidebar-brand-icon rotate-n-15'>
                    <i class='fas fa-laugh-wink'></i>
                </div>
                <div class='sidebar-brand-text mx-3'>$nombre_rol</sup></div>
            </a>

            <!-- Divider -->
            <hr class='sidebar-divider my-0'>

            <hr class='sidebar-divider'>

            <!-- Se llama al controlador que mostrara las estidisticas de habilidad de cada estudiante -->
            <li class='nav-item'>
                <a class='nav-link' href='crtUsuarios.php?pag=lista_usuarios'>
                    <i class='fas fa-fw fa-table'></i>
                    <span>Estadisticas Estudiantes</span></a>
            </li>

            <!-- Divider -->
            <hr class='sidebar-divider d-none d-md-block'>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id='content-wrapper' class='d-flex flex-column'>

            <!-- Main Content AQUI ES LA BARRA DERECHA-->
 

        ";
        echo $html;
  }

  public function cabecera_estudiante()
    {
    $nombre=$_SESSION['nombre'];
      $sesion_ci = $_SESSION['ci'];
      $nombre_rol=$_SESSION['nombre_rol'];
        $html="
          <!DOCTYPE html>
<html lang='en'>

<head>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <title>Anonimus</title>

    <!-- Custom fonts for this template-->
    <link href='fontawesome-free/css/all.min.css' rel='stylesheet' type='text/css'>
   
<link rel='stylesheet' href='css/modal.css'>
    <!-- Custom styles for this template-->
    <link href='css/sb-admin-2.min.css' rel='stylesheet'>
  <style>
.progress {
    border: 1px solid #ccc;
    position: relative;
    display: block;
    height: 22px;
    padding: 0;
    min-width: 200px;
    margin:4px 0;
    background: #DEDEDE;
    background: -webkit-gradient(linear, left top, left bottom, from(#ccc), to(#e9e9e9));
    background: -moz-linear-gradient(top, #ccc, #e9e9e9);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#cccccc', endColorstr='#e9e9e9');

    -moz-box-shadow:0 1px 0 #fff;
    -webkit-box-shadow:0 1px 0 #fff;
    box-shadow:0 1px 0 #fff;

    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
}
.progress span {
    display: block;
    height: 20px;
    margin: 0;
    padding: 0;
    text-align:center;
    width:0;
    
    -moz-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
    -webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);
    box-shadow:inset 0 1px 0 rgba(255,255,255,0.5);

    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
}
.progress span b{
    color:#fff;
    line-height:20px;
    padding-left:2px;
    text-shadow:0 1px 1px rgba(0, 0, 0, 0.5);
}

.progress-blue span {
    border: 1px solid #0078a5; 
    background-color: #5C9ADE;
    background: -moz-linear-gradient(top, #00adee 10%, #0078a5 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #00adee), color-stop(0.9, #0078a5));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
}

.progress-green span {
    border: 1px solid #5c9425; 
    background-color: #77AF3F;
    background: -moz-linear-gradient(top, #8fc857 10%, #5c9425 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #8fc857), color-stop(0.9, #5c9425));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#8fc857', endColorstr='#5c9425');
}
.progress-orange span {
    border: 1px solid #f47a20; 
    background-color: #faa51a;
    background: -moz-linear-gradient(top, #faa51a 10%, #f47a20 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #faa51a), color-stop(0.9, #f47a20));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
}
.progress-red span {
    border: 1px solid #A92C2C; 
    background-color: #C44747;
    background: -moz-linear-gradient(top, #DD5F5F 10%, #A92C2C 90%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0.1, #DD5F5F), color-stop(0.9, #A92C2C));
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#DD5F5F', endColorstr='#A92C2C');
}

</style>

</head>

<body id='page-top'>

    <!-- Page Wrapper -->
    <div id='wrapper'>

        <!-- Sidebar -->
        <ul class='navbar-nav bg-gradient-primary sidebar sidebar-dark accordion' id='accordionSidebar'>

            <!-- Sidebar - Brand -->
            <a class='sidebar-brand d-flex align-items-center justify-content-center' href='index.html'>
                <div class='sidebar-brand-icon rotate-n-15'>
                    <i class='fas fa-laugh-wink'></i>
                </div>
                <div class='sidebar-brand-text mx-3'>$nombre_rol</sup></div>
            </a>

            <!-- Divider -->
            <hr class='sidebar-divider my-0'>

            <hr class='sidebar-divider'>

            <!-- Heading -->
            <div class='sidebar-heading'>
                Cuestionarios
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class='nav-item'>
                <a class='nav-link collapsed' href='crtUsuarios.php?pag=form_cuestionario_creat_usuario&id=$sesion_ci' data-toggle='collapse' data-target='#collapseTwo'
                    aria-expanded='true' aria-controls='collapseTwo'>
                    <i class='fas fa-fw fa-cog'></i>
                    <span>Cuestionario Creatividad</span>
                </a>
                
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class='nav-item'>
                <a class='nav-link collapsed' href='crtUsuarios.php?pag=form_cuestionario_lide_usuario&id=$sesion_ci' data-toggle='collapse' data-target='#collapseTwo'
                    aria-expanded='true' aria-controls='collapseTwo'>
                    <i class='fas fa-fw fa-cog'></i>
                    <span>Cuestionario Liderazgo</span>
                </a>
                
            </li>

            <li class='nav-item'>
                <a class='nav-link collapsed' href='crtUsuarios.php?pag=form_cuestionario_progra_usuario&id=$sesion_ci' data-toggle='collapse' data-target='#collapseTwo'
                    aria-expanded='true' aria-controls='collapseTwo'>
                    <i class='fas fa-fw fa-cog'></i>
                    <span>Cuestionario Programacion</span>
                </a>
                
            </li>

            <!-- Divider -->
            <hr class='sidebar-divider d-none d-md-block'>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id='content-wrapper' class='d-flex flex-column'>

            <!-- Main Content AQUI ES LA BARRA DERECHA-->
 
<nav class='navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow'>

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id='sidebarToggleTop' class='btn btn-link d-md-none rounded-circle mr-3'>
                        <i class='fa fa-bars'></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class='d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search'>
                        <div class='input-group'>
                            <input id='entradafilter' type='text' class='form-control bg-light border-0 small' placeholder='Search for...'
                                aria-label='Search' aria-describedby='basic-addon2'>
                            <div class='input-group-append'>
                                <button class='btn btn-primary' type='button'>
                                    <i class='fas fa-search fa-sm'></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class='navbar-nav ml-auto'>
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class='nav-item dropdown no-arrow d-sm-none'>
                            <a class='nav-link dropdown-toggle' href='#' id='searchDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fas fa-search fa-fw'></i>
                            </a>
                            <!-- Dropdown - Messages -->                            
                        </li>
                        <!-- Nav Item - Alerts -->
                        <li class='nav-item dropdown no-arrow mx-1'>
                            <a class='nav-link dropdown-toggle' href='#' id='alertsDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fas fa-bell fa-fw'></i>
                                <!-- Counter - Alerts -->
                                <span class='badge badge-danger badge-counter'>3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->                            
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class='nav-item dropdown no-arrow mx-1'>
                            <a class='nav-link dropdown-toggle' href='#' id='messagesDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <i class='fas fa-envelope fa-fw'></i>
                                <!-- Counter - Messages -->
                                <span class='badge badge-danger badge-counter'>7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class='dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in'
                                aria-labelledby='messagesDropdown'>
                                
                            </div>
                        </li>

                        <div class='topbar-divider d-none d-sm-block'></div>

                        <!-- Nav Item - User Information -->
                        <li class='nav-item dropdown no-arrow'>
                            <a class='nav-link dropdown-toggle' href='logout.php' id='userDropdown' role='button'
                                data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                                <span class='mr-2 d-none d-lg-inline text-gray-600 small'>$nombre</span>                                
                            </a>                            
                        </li>

                    </ul>

                </nav>
        ";
        echo $html;
  }
  

	public function pie()
	{
		$html="<footer class='sticky-footer bg-white'>
                <div class='container my-auto'>
                    <div class='copyright text-center my-auto'>
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

</html>";
		echo $html;
	}

}
?>