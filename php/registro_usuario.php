<?php

include 'conexion.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];


    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contraseña) VALUES('$nombre_completo', '$correo', '$usuario',  '$contraseña')";
    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
        <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../sesion.php";
        </script>
        ';
    }else{
        echo '
        <script>
        alert("Intentalo de nuevo, usuario no almacenado");
        window.location = "../sesion.php";
        </script>
        ';
    }

    mysqli_close($conexion);

?>