<?php
session_start();
session_destroy();
//cierre de sesion del usuario
header("Location:index.php");
    exit();

?>