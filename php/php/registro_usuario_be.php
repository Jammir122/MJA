<?php

    include 'conexion_be.php';

    $Nombre = $_POST['Nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];


    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(Nombre, correo, contrasena) 
              VALUES ('$Nombre', '$correo', '$contrasena')";




    // verificar que el correo no se repita en la base de datos

    $Verificar_correo =mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

    if(mysqli_num_rows($Verificar_correo) > 0){
        echo'
            <script>
                alert("Este correo ya está registrado, intenta con otro diferente");
                window.location = "../index.php";
            </script>
        ';
        exit();
         
    }


    $ejecutar = mysqli_query($conexion, $query);

    
    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado exitosamente");
                window.location = "../index.php";
            </script>
        ';
    } 
    else{
        echo'
        <script>
            alert("Intentalo de nuevo, usuario no almacenado");
            window.location = "../index.php";
        </script>
        ';
    }

    mysqli_close($conexion);

?>