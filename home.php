
<?php
// echo "Hola, ", $usuario; // Tiene que coincidir con el nombre del input

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if($usuario == "MARKOLOLO" && $contrasena == "Porras"){
        echo "Pacoooo porro";
} else{
        echo "ASU EL LOCO";
}
?>