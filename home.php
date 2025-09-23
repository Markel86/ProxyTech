
<?php
// echo "Hola, ", $usuario; // Tiene que coincidir con el nombre del input

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if($usuario == "Paco" && $contrasena == "Porras"){
        echo "Pacoooo porro";
} else{
        echo "ASU EL LOCO";
}
?>