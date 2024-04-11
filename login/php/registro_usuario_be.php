<?php
include"conexion_be.php";
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$clave=hash('md5',$clave);//cifrado de password
$query="INSERT INTO acceso (nombre,clave,usuario,correo)
        VALUES('$nombre','$clave','$usuario','$correo')";
     $verificar_correo=mysqli_query($conexion,//Verifica que no se repita el usuario en la base de datos
    "SELECT * FROM acceso WHERE correo ='$correo'");
    if(mysqli_num_rows($verificar_correo)>0){
      echo '
      <script>
      alert("Correo o usuario ya registrado");
      window.location="../index.php"; 
      </script>
      ';
      exit();
    }
       $verificar_usuario=mysqli_query($conexion, //verificar usuario en base de datos
    "SELECT * FROM acceso WHERE usuario ='$usuario'");
    if(mysqli_num_rows($verificar_usuario)>0){
      echo '
      <script>
      alert("Correo o usuario ya registrado");
      window.location="../index.php";
      </script>
      ';
      exit();
    }
    $ejecutar=mysqli_query($conexion,$query);
    if($ejecutar){
      echo'
      <script>
      alert("usuario registrado correctamente");
      window.location="../index.php";
      </script>
      ';
    }else{
      echo'
      <script>
      alert("intentelo de nuevo, usuario no registrado");
      window.location="../index.php";
      </script>
      ';
    }
    mysqli_close($conexion);
   ?> 
   
    