<?php
session_start();
if(isset($_SESSION['usuario'])){
  header("location:index.php");
}?>
<!doctype html>
<html lang="en">
  <head>
    <title>Login Patitas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/sytles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <main>
        <div class="contenedor_todo"><!--formulario registro, inicio de sesion-->
            <div class="caja_trasera">
                <div class="caja_trasera_login">
                    <h3>ya tienes cuenta?</h3>
                    <p>inicia sesion para entrar a la pagina</p>
                    <button id="btn_inicia-sesion">inicio de sesion</button>
                </div>
                <div class="caja_trasera_registro">
                  <h3>aun no tienes cuenta?</h3>
                  <p>registrate para iniciar sesion</p>
                  <button id="btn_registro">registrarse</button>
                </div>
            </div>
            <div class="contenedor_login_registro"><!--formulario de inicio de sesion-->
              <form action="php/login_usuario_be.php" class="formulario_login"method="POST">
                <h2>iniciar sesion</h2>
                <input type="text"placeholder="correo electronico"name="correo">
                <input type="password"placeholder="contraseña"name="clave">
                <button>entrar</button>
              </form>   <!--formulario de registro-->
              <form action="php/registro_usuario_be.php"method="POST"class="formulario_registro">
                <h2>registrarse</h2>
                <input type="text"placeholder="nombre" name="nombre">
                <input type="text"placeholder="correo electronico"name="correo">
                <input type="text"placeholder="usuario"name="usuario">
                <input type="password"placeholder="contraseña"name="clave">
                <button>registrarse</button>
              </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>