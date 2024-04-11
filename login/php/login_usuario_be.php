<?php
session_start();
  include"conexion_be.php";
    $correo=$_POST['correo'];
    $clave=$_POST['clave'];
    $clave=hash('md5',$clave);
    $validar_login=mysqli_query
    ($conexion,"SELECT * FROM 
    acceso WHERE correo='$correo'and
     clave='$clave'");
    if(mysqli_num_rows($validar_login)>0 ){
        $_SESSION['usuario']=$correo;
        header("location:bienvenido.php");
    }else{
        echo'
        <script>
        alert("verifique los datos introducidos");
        window.location = "/index.php";
        </script>';
    }
?>