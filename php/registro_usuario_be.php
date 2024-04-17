<?php

include 'conexion.php';

$nombre_completo = $_POST['nombre_completo'];
$correo =$_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Verificar si los campos obligatorios están vacíos
if(empty($nombre_completo) || empty($correo) || empty($usuario) || empty($contrasena)) {
    echo '
        <script>
            alert("Todos los campos son obligatorios");
            window.location = "../index.php";
        </script>
    ';
    exit(); // Detener la ejecución del script si algún campo está vacío
}

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
    VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

// Verificar si el usuario ya existe
$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario'");

if(mysqli_num_rows ($verificar_usuario) > 0) {
    echo '
        <script>
            alert("Este usuario ya está vinculado, prueba con otro usuario");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

// Verificar si el correo ya está registrado
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

if(mysqli_num_rows ($verificar_correo) > 0) {
    echo '
        <script>
            alert("Este correo ya está vinculado, prueba con otro correo");
            window.location = "../index.php";
        </script>
    ';
    exit();
}

$ejecutar = mysqli_query($conexion, $query);    

if($ejecutar) {
    echo '
        <script>
            alert("Usuario Creado");
            window.location = "../index.php";
        </script>
    ';
} else {
    echo '
        <script>
            alert("Ha ocurrido un error, vuelva a intentar");
            window.location = "../index.php";
        </script>
    ';
}

mysqli_close ($conexion);

?>