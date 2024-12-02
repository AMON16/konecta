<?php
if (!empty($_POST["btningresar"])) {
    session_start();
    if (!empty($_POST["user"]) and !empty($_POST["password"])) {
        $usuario= $_POST["user"]; # se vincula con propiedad name
        $password= $_POST["password"];
        $sql=$conexionBd->query("Select * from usuarios where Email='$usuario' and Contraseña='$password'");
        if ($datos=$sql->fetch_object()) {
            header("location: inicio.php");
        } else {
            echo"<div>Credenciales incorrectas</div>";
        }
    } else {
        echo "campos vacios";
    }
    
}
?>