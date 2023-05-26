<?php
if(!empty($_POST["btnIngresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["password"])) {
        echo '<div>Los campos estan vacios</div>';
    } else {
        $usuario=$_POST["usuario"];
        $clave=$_POST["password"];
        $sql=$conexion->query("select * from usuario where usuario='$usuario' and password='$clave'");
        if ($datos=$sql->fetch_object()) {
            header("location:index.php");
        } else {
            echo '<div>Acceso denegado</div>';
        }
    }

}

?>